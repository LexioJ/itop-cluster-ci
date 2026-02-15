# Plan: iTop 3.2 Cluster Extension – Vollständiger Neubau

## Zusammenfassung

Vollständiger Neubau der Extension `cluster-ci` als generisches, iTop 3.2-kompatibles
Cluster-Datenmodell. Das bestehende web-zentrische Modell (DBCluster/WebCluster) wird
ersetzt durch eine flexible Architektur, die Windows Server Failover Cluster (WSFC),
SQL Server Always On, File Services, Docker Swarm, Kubernetes und beliebige weitere
Cluster-Typen sauber abbilden kann.

**Entschiedene Rahmenbedingungen:**
- Icons: Platzhalter (bestehende PNGs wiederverwendet)
- Sprachen: Deutsch + Englisch + Französisch
- LoadBalancer: Bleibt, angepasst ans neue Modell
- Impact-Analyse: Vollständige Relations
- Menüs: Eigene Menüeinträge unter Configuration Management
- Netzwerk: Integration mit iTop-VLAN-Klassen (optional, via `_delta="if_exists"`)
- Cluster-Typen: WSFC, Docker Swarm, Kubernetes, Exchange DAG, Multi-Site
- Kontakte: Standard-Kontaktzuordnung von FunctionalCI reicht

---

## 1. Datenmodell-Architektur

### 1.1 Neue Klassen (Übersicht)

```
FunctionalCI
├── Cluster                          # Zentrales Cluster-CI (WSFC, Swarm, K8s, etc.)
├── ClusterResource                  # Geclusterte Rolle/Dienst (Basis)
│   ├── AvailabilityGroup            # SQL Server Always On AG
│   ├── DockerService                # Docker Swarm Service
│   └── KubernetesWorkload           # Kubernetes Deployment/StatefulSet/DaemonSet
├── LoadBalancer                     # Load Balancer (angepasst)
│   └── LBAddress                    # Load-Balancer-Adresse (VIP + Port)
└── (bestehend: Server, VirtualMachine, DatabaseSchema, LogicalVolume, VLAN, ...)

Link-Klassen:
├── lnkClusterToFunctionalCI         # Cluster ↔ Nodes (Server/VM)
├── lnkClusterToVolume               # Cluster ↔ LogicalVolume (CSV, Quorum-Disk)
├── lnkClusterToVLAN                 # Cluster ↔ VLAN (optional, Heartbeat/Client/Storage)
├── lnkAvailabilityGroupToServer     # AG ↔ Server (Replikate)
├── lnkAvailabilityGroupToDatabase   # AG ↔ DatabaseSchema
└── lnkLoadBalancerToFunctionalCI    # LoadBalancer ↔ Backend-Nodes
```

### 1.2 Klasse: Cluster (erbt von FunctionalCI)

Das zentrale CI für jeden Cluster – egal ob WSFC, Docker Swarm, Kubernetes oder generisch.

| Attribut | Typ | Beschreibung |
|---|---|---|
| name | String (pflicht) | Cluster-Name (z.B. "WSFC-SQLCL01") |
| org_id | FK → Organization | Organisation |
| description | Text | Freitext-Beschreibung |
| status | Enum | production, implementation, inactive, obsolete |
| business_criticity | Enum | low, medium, high |
| cluster_type | Enum | failover, nlb, storage_spaces_direct, docker_swarm, kubernetes, generic |
| quorum_type | Enum | node_majority, node_and_disk, node_and_fileshare, cloud_witness, no_quorum |
| quorum_resource | String | Pfad/Ressource des Witnesses (z.B. \\\\fileserver\\witness) |
| cluster_ip | String | Virtuelle Cluster-IP |
| cluster_hostname | String | Virtueller Cluster-Hostname (CNO bei WSFC) |
| location_id | FK → Location (optional) | Primärer Standort (Multi-Site-Support) |
| redundancy_location_id | FK → Location (optional) | Sekundärer Standort (Stretch-Cluster) |
| move2production | Date | Datum der Produktivnahme |
| nodes_list | LinkedSet (n:m) | → lnkClusterToFunctionalCI |
| resources_list | LinkedSet (1:n) | → ClusterResource |
| volumes_list | LinkedSet (n:m) | → lnkClusterToVolume |
| vlans_list | LinkedSet (n:m) | → lnkClusterToVLAN (optional) |

**Impact-Relations:**
- Cluster → impactiert seine ClusterResources (resources_list)
- Cluster-Nodes → impactieren den Cluster (query_up via lnkClusterToFunctionalCI)

### 1.3 Klasse: lnkClusterToFunctionalCI (Link-Klasse)

Verknüpft einen Cluster mit seinen Knoten (Server, VMs, etc.).

| Attribut | Typ | Beschreibung |
|---|---|---|
| cluster_id | FK → Cluster | Cluster |
| functionalci_id | FK → FunctionalCI | Knoten (Server, VirtualMachine) |
| node_role | Enum | active, passive, witness, arbiter, manager, worker, control_plane |
| node_status | Enum | up, down, paused, joining, draining |

`node_role` deckt WSFC-Rollen (active/passive/witness), Docker-Swarm-Rollen
(manager/worker) und Kubernetes-Rollen (control_plane/worker) ab.

### 1.4 Klasse: lnkClusterToVolume (Link-Klasse)

Verknüpft einen Cluster mit gemeinsam genutzten Volumes.

| Attribut | Typ | Beschreibung |
|---|---|---|
| cluster_id | FK → Cluster | Cluster |
| volume_id | FK → LogicalVolume | Volume |
| volume_usage | Enum | csv, quorum_disk, data, shared_folder, witness |

### 1.5 Klasse: lnkClusterToVLAN (Link-Klasse, optional)

Verknüpft einen Cluster mit seinen Netzwerken. Wird nur geladen, wenn die
VLAN-Klasse verfügbar ist (`_delta="if_exists"`).

| Attribut | Typ | Beschreibung |
|---|---|---|
| cluster_id | FK → Cluster | Cluster |
| vlan_id | FK → VLAN | VLAN |
| network_usage | Enum | heartbeat, client, storage, management, replication |

### 1.6 Klasse: ClusterResource (erbt von FunctionalCI)

Basisklasse für alle geclusterten Dienste/Rollen, die auf einem Cluster laufen.

| Attribut | Typ | Beschreibung |
|---|---|---|
| name | String (pflicht) | Ressource-Name (z.B. "FileServer-Abteilung") |
| org_id | FK → Organization | Organisation |
| description | Text | Beschreibung |
| cluster_id | FK → Cluster (pflicht) | Übergeordneter Cluster |
| resource_type | Enum | sql_ag, file_server, dhcp, print_server, generic_service, docker_service, kubernetes_workload, hyper_v, dns, exchange_dag |
| status | Enum | online, offline, partially_online, failed, pending |
| business_criticity | Enum | low, medium, high |
| virtual_ip | String | Virtuelle IP der Ressource |
| virtual_hostname | String | Virtueller Hostname |
| owner_node_id | FK → FunctionalCI (optional) | Aktuell aktiver/besitzender Knoten |
| move2production | Date | Datum der Produktivnahme |

**Impact-Relations:**
- ClusterResource → wird impactiert durch den übergeordneten Cluster (cluster_id)

### 1.7 Klasse: AvailabilityGroup (erbt von ClusterResource)

Spezialisierung für SQL Server Always On Availability Groups.

| Attribut | Typ | Beschreibung |
|---|---|---|
| listener_name | String | AG-Listener-Name (z.B. "SQLAG01") |
| listener_ip | String | Listener-IP-Adresse |
| listener_port | Integer (default: 1433) | Listener-Port |
| availability_mode | Enum | synchronous_commit, asynchronous_commit |
| failover_mode | Enum | automatic, manual |
| replicas_list | LinkedSet (n:m) | → lnkAvailabilityGroupToServer |
| databases_list | LinkedSet (n:m) | → lnkAvailabilityGroupToDatabase |

**Impact-Relations:**
- AvailabilityGroup → impactiert ihre Datenbanken (databases_list)
- AvailabilityGroup → wird impactiert durch Replikat-Server (replicas_list)

### 1.8 Klasse: lnkAvailabilityGroupToServer (Link-Klasse)

Verknüpft eine AG mit ihren Replikat-Servern.

| Attribut | Typ | Beschreibung |
|---|---|---|
| ag_id | FK → AvailabilityGroup | Availability Group |
| server_id | FK → FunctionalCI | Replikat-Server |
| replica_role | Enum | primary, secondary |
| sync_state | Enum | synchronized, synchronizing, not_synchronizing, reverting, initializing |
| availability_mode | Enum | synchronous_commit, asynchronous_commit |
| failover_mode | Enum | automatic, manual |
| readable_secondary | Enum | yes, no, read_intent_only |

### 1.9 Klasse: lnkAvailabilityGroupToDatabase (Link-Klasse)

Verknüpft eine AG mit den enthaltenen Datenbanken.

| Attribut | Typ | Beschreibung |
|---|---|---|
| ag_id | FK → AvailabilityGroup | Availability Group |
| databaseschema_id | FK → DatabaseSchema | Datenbank |

### 1.10 Klasse: DockerService (erbt von ClusterResource)

Spezialisierung für Docker Swarm Services.

| Attribut | Typ | Beschreibung |
|---|---|---|
| image | String | Docker-Image (z.B. "nginx:1.25") |
| replicas_desired | Integer | Gewünschte Replikat-Anzahl |
| replicas_running | Integer | Tatsächlich laufende Replikate |
| published_ports | String | Veröffentlichte Ports (z.B. "80:8080, 443:8443") |
| stack_name | String | Docker-Stack-Name |

### 1.11 Klasse: KubernetesWorkload (erbt von ClusterResource)

Spezialisierung für Kubernetes-Workloads.

| Attribut | Typ | Beschreibung |
|---|---|---|
| namespace | String | Kubernetes-Namespace (z.B. "production") |
| workload_type | Enum | deployment, statefulset, daemonset, job, cronjob |
| image | String | Container-Image (z.B. "myapp:2.1") |
| replicas_desired | Integer | Gewünschte Replikat-Anzahl |
| replicas_running | Integer | Tatsächlich laufende Replikate |
| container_ports | String | Container-Ports (z.B. "8080, 8443") |
| service_type | Enum | clusterip, nodeport, loadbalancer, none |

### 1.12 Klasse: LoadBalancer (erbt von FunctionalCI)

Angepasster LoadBalancer – nicht mehr an SoftwareInstance gebunden, sondern eigenständig.

| Attribut | Typ | Beschreibung |
|---|---|---|
| name | String (pflicht) | Name des Load Balancers |
| org_id | FK → Organization | Organisation |
| description | Text | Beschreibung |
| status | Enum | production, implementation, inactive, obsolete |
| business_criticity | Enum | low, medium, high |
| lb_type | Enum | hardware, software, cloud, nlb |
| move2production | Date | Datum der Produktivnahme |
| backend_nodes_list | LinkedSet (n:m) | → lnkLoadBalancerToFunctionalCI |
| addresses_list | LinkedSet (1:n) | → LBAddress |

**Impact-Relations:**
- LoadBalancer → impactiert seine LBAddresses (addresses_list)
- LoadBalancer → wird impactiert durch Backend-Nodes (query_up)

### 1.13 Klasse: LBAddress (erbt von FunctionalCI)

Virtuelle Adresse (VIP + Port) eines Load Balancers.

| Attribut | Typ | Beschreibung |
|---|---|---|
| name | String (pflicht) | Name der Adresse |
| org_id | FK → Organization | Organisation |
| loadbalancer_id | FK → LoadBalancer (pflicht) | Zugehöriger Load Balancer |
| address | String (pflicht) | IP-Adresse oder FQDN |
| port | String (pflicht) | Port-Nummer |
| business_criticity | Enum | low, medium, high |

### 1.14 Klasse: lnkLoadBalancerToFunctionalCI (Link-Klasse)

Verknüpft einen Load Balancer mit seinen Backend-Knoten.

| Attribut | Typ | Beschreibung |
|---|---|---|
| loadbalancer_id | FK → LoadBalancer | Load Balancer |
| functionalci_id | FK → FunctionalCI | Backend-Knoten |

### 1.15 Bestehende Klassen erweitern

**Server** – neues Feld:
- `cluster_list` (LinkedSet Indirect → Cluster via lnkClusterToFunctionalCI)

**DatabaseSchema** – neues Feld:
- `availabilitygroup_list` (LinkedSet Indirect → AvailabilityGroup via lnkAvailabilityGroupToDatabase)

---

## 2. Impact-Analyse (Relations)

Vollständige Impact-Ketten für die Auswirkungsanalyse bei Ausfällen:

### Kette 1: Server-Ausfall → Cluster → Dienste → Datenbanken
```
Server (fällt aus)
  ↓ query_up: lnkClusterToFunctionalCI
Cluster (betroffen)
  ↓ attribute: resources_list
ClusterResource / AvailabilityGroup / DockerService (betroffen)
  ↓ attribute: databases_list (nur bei AG)
DatabaseSchema (betroffen)
```

### Kette 2: Load Balancer → Adressen
```
Backend-Node (fällt aus)
  ↓ query_up: lnkLoadBalancerToFunctionalCI
LoadBalancer (betroffen)
  ↓ attribute: addresses_list
LBAddress (betroffen)
```

### Implementierung je Klasse

| Klasse | Relation | Richtung | Mechanismus |
|---|---|---|---|
| Cluster | → ClusterResource | down | attribute: resources_list |
| Cluster | ← FunctionalCI (Nodes) | up | query_up via lnkClusterToFunctionalCI |
| ClusterResource | ← Cluster | up | attribute: cluster_id (implizit) |
| AvailabilityGroup | → DatabaseSchema | down | attribute: databases_list |
| AvailabilityGroup | ← FunctionalCI (Replicas) | up | query_up via lnkAvailabilityGroupToServer |
| LoadBalancer | → LBAddress | down | attribute: addresses_list |
| LoadBalancer | ← FunctionalCI (Backends) | up | query_up via lnkLoadBalancerToFunctionalCI |

---

## 3. Menü-Struktur

Eigene Menüeinträge unter "Configuration Management":

| Menü-ID | Typ | OQL | Rang |
|---|---|---|---|
| Cluster | OQLMenuNode | SELECT Cluster | nach Server-Menüs |
| ClusterResource | OQLMenuNode | SELECT ClusterResource | nach Cluster |
| LoadBalancer | OQLMenuNode | SELECT LoadBalancer | nach ClusterResource |

Plus Dashboard-Badges im ConfigManagementOverview:
- Cluster (Badge)
- ClusterResource (Badge)
- LoadBalancer (Badge)

---

## 4. Beispiel-Szenarien

### Windows Failover Cluster mit SQL Always On:
```
Cluster: "WSFC-SQLCL01" (type=failover, quorum=node_and_fileshare)
  ├─ Location: RZ-Frankfurt, Redundancy: RZ-München
  ├─ Nodes: SQL01 (active/up), SQL02 (passive/up)
  ├─ Volumes: SQL-Data-CSV (csv), Quorum-Disk (quorum_disk)
  ├─ VLANs: VLAN-100 (client), VLAN-200 (heartbeat), VLAN-300 (storage)
  └─ Resource: "AG-Finance" (AvailabilityGroup)
       ├─ Listener: SQLAG01:1433
       ├─ Replicas: SQL01 (primary/sync), SQL02 (secondary/sync)
       └─ Databases: FinanceDB, FinanceReportDB
```

### Windows Failover Cluster mit File Services:
```
Cluster: "WSFC-FILECL01" (type=failover, quorum=node_majority)
  ├─ Nodes: FS01 (active/up), FS02 (passive/up)
  └─ Resource: "FileServer-Abteilung" (type=file_server)
       ├─ virtual_ip: 10.0.1.50
       └─ virtual_hostname: FILESRV01
```

### Docker Swarm:
```
Cluster: "SWARM-PROD-01" (type=docker_swarm)
  ├─ Nodes: DOCK01 (manager/up), DOCK02 (manager/up), DOCK03 (manager/up),
  │         DOCK04 (worker/up), DOCK05 (worker/up)
  └─ Resources:
       ├─ "web-frontend" (DockerService, image=nginx:1.25, replicas=3, ports=80:8080)
       ├─ "api-backend" (DockerService, image=api:2.1, replicas=5, ports=8443:8443)
       └─ "redis-cache" (DockerService, image=redis:7, replicas=1)
```

### Kubernetes:
```
Cluster: "K8S-PROD-01" (type=kubernetes)
  ├─ Nodes: K8S-CP01 (control_plane/up), K8S-CP02 (control_plane/up),
  │         K8S-W01 (worker/up), K8S-W02 (worker/up), K8S-W03 (worker/up)
  └─ Resources:
       ├─ "frontend" (KubernetesWorkload, ns=production, type=deployment, image=frontend:3.0, replicas=3)
       ├─ "postgres" (KubernetesWorkload, ns=production, type=statefulset, image=postgres:15, replicas=3)
       └─ "monitoring" (KubernetesWorkload, ns=monitoring, type=daemonset, image=node-exporter:1.7)
```

### Exchange DAG:
```
Cluster: "WSFC-EXCHCL01" (type=failover)
  ├─ Nodes: EX01 (active/up), EX02 (active/up)
  └─ Resource: "DAG-Mail" (type=exchange_dag)
       ├─ virtual_ip: 10.0.2.100
       └─ virtual_hostname: EXDAG01
```

---

## 5. Technische Umsetzung

### 5.1 Dateistruktur

```
cluster-ci/
├── module.cluster-ci.php          # Modul-Definition (iTop 3.2)
├── model.cluster-ci.php           # PHP-Modell (Template)
├── datamodel.cluster-ci.xml       # XML-Datenmodell (Version 1.7)
├── de.dict.cluster-ci.php         # Deutsches Dictionary (NEU)
├── en.dict.cluster-ci.php         # Englisches Dictionary (neu geschrieben)
├── fr.dict.cluster-ci.php         # Französisches Dictionary (neu geschrieben)
└── images/                        # Icons (Platzhalter, wiederverwendet)
    ├── cluster.png                # Cluster-Icon
    ├── cluster-resource.png       # ClusterResource-Icon
    ├── availability-group.png     # AG-Icon
    ├── docker-service.png         # Docker-Service-Icon
    ├── kubernetes-workload.png    # Kubernetes-Workload-Icon
    └── loadbalancer.png           # LoadBalancer-Icon
```

### 5.2 XML-Spezifikation

- `<itop_design xmlns:xsi="..." version="1.7">` (iTop 3.x Format)
- Modul-Identifier: `cluster-ci/1.0.0`
- Dependencies: `itop-config-mgmt/3.0.0`, `itop-datacenter-mgmt/3.0.0`
- Neue Klassen mit `_delta="define"`
- Erweiterungen bestehender Klassen mit `_delta="must_exist"` / `_delta="if_exists"`
- VLAN-Integration mit `_delta="if_exists"` (optional, keine harte Dependency)
- Korrekte `<sql>`-Tags (kein Duplikat-Bug der alten Extension)
- Korrekte Reconciliation-Keys
- Impact-Relations (`<relations>`) für alle relevanten Klassen

### 5.3 Presentation Layer

Jede Klasse bekommt:
- **Details-Ansicht**: Sinnvoll gruppierte Felder (col:col0/col1, fieldset)
- **Listen-Ansicht**: Relevante Spalten für Übersichtstabellen
- **Such-Ansicht**: Durchsuchbare Felder
- **Menüeinträge**: OQL-basierte Menüs unter Configuration Management
- **Dashboard-Integration**: Badges im ConfigManagement-Überblick

### 5.4 Icons

Bestehende PNGs als Platzhalter wiederverwendet (48×48 PNG).
Können später durch eigene Icons ersetzt werden.

---

## 6. Implementierungs-Schritte

### Schritt 1: Projekt-Setup ✅ ERLEDIGT
- ✅ Branch sicherstellen (`claude/plan-cluster-extension-P2gQ7`)
- ✅ Neue `module.cluster-ci.php` mit iTop 3.2-Metadaten (cluster-ci/1.0.0, deps 3.0.0)
- ✅ Platzhalter-Icons vorbereiten (cluster.png, cluster-resource.png, availability-group.png,
  docker-service.png, kubernetes-workload.png, loadbalancer.png)
- ⏳ Alte Dateien aufräumen (datamodel/dict) – wird bei Schritt 2 durch Neuschreiben ersetzt

### Schritt 2: XML-Datenmodell – Kernklassen
- `Cluster` Klasse mit allen Attributen (inkl. location_id, redundancy_location_id)
- `lnkClusterToFunctionalCI` Link-Klasse
- `lnkClusterToVolume` Link-Klasse
- `lnkClusterToVLAN` Link-Klasse (optional, `_delta="if_exists"`)
- Presentation-Layer für Kernklassen
- Impact-Relations für Cluster

### Schritt 3: XML-Datenmodell – ClusterResource
- `ClusterResource` Basisklasse (inkl. exchange_dag, kubernetes_workload in resource_type)
- Presentation-Layer
- Impact-Relations

### Schritt 4: XML-Datenmodell – AvailabilityGroup
- `AvailabilityGroup` Klasse
- `lnkAvailabilityGroupToServer` Link-Klasse
- `lnkAvailabilityGroupToDatabase` Link-Klasse
- Presentation-Layer
- Impact-Relations (AG → Databases, Replicas → AG)

### Schritt 5: XML-Datenmodell – DockerService
- `DockerService` Klasse
- Presentation-Layer

### Schritt 6: XML-Datenmodell – KubernetesWorkload
- `KubernetesWorkload` Klasse
- Presentation-Layer

### Schritt 7: XML-Datenmodell – LoadBalancer
- `LoadBalancer` Klasse (angepasst, erbt von FunctionalCI)
- `LBAddress` Klasse
- `lnkLoadBalancerToFunctionalCI` Link-Klasse
- Presentation-Layer
- Impact-Relations (LB → Addresses, Backends → LB)

### Schritt 8: Bestehende Klassen erweitern
- Server: `cluster_list` hinzufügen (Tab mit Cluster-Zugehörigkeiten)
- DatabaseSchema: `availabilitygroup_list` hinzufügen (Tab mit AG-Zugehörigkeiten)

### Schritt 9: Menüs & Dashboard
- OQL-Menüeinträge: Cluster, ClusterResource, LoadBalancer
- Dashboard-Badges im ConfigManagementOverview

### Schritt 10: Deutsches Dictionary
- Vollständiges deutsches Dictionary mit allen Klassen, Attributen, Enums
- Fachlich korrekte Übersetzungen (WSFC-Terminologie, Docker-Terminologie, K8s-Terminologie)

### Schritt 11: Englisches Dictionary
- Englisches Dictionary komplett neu schreiben (alle alten Einträge ersetzen)

### Schritt 12: Französisches Dictionary
- Französisches Dictionary komplett neu schreiben
- Basierend auf der bisherigen fr.dict, angepasst ans neue Modell

### Schritt 13: Integration & Feinschliff
- Reconciliation-Keys prüfen
- Obsolescence-Flags prüfen
- XML-Validierung (keine doppelten sql-Tags, korrekte Referenzen)
- Impact-Relations Vollständigkeit prüfen

### Schritt 14: Commit & Push

---

## 7. Was bewusst NICHT enthalten ist

- **DBCluster / WebCluster**: Die alten, web-zentrischen Klassen werden komplett
  ersetzt durch das neue generische Modell.
- **lnkDatabaseSchemaToWebApplication**: Web-spezifische Verknüpfung entfällt.
- **Modifikation von SoftwareInstance.system_id**: Die problematische Änderung
  (`is_null_allowed=true`) der alten Extension wird nicht übernommen.
- **Modifikation von DatabaseSchema.dbserver_id/WebApplication.webserver_id**:
  Die alten Feld-Umbenennungen entfallen. DatabaseSchema wird nur um
  `availabilitygroup_list` ergänzt, nicht umgebaut.
- **Automatische Failover-Logik**: Das ist ein Datenmodell, keine Automatisierung.
- **Lifecycle/State-Machine**: Keine eigenen Zustandsübergänge – wird von
  FunctionalCI geerbt. Kann in einer Folgeversion ergänzt werden.
- **Audit-Regeln**: (z.B. "Jeder Cluster braucht min. 2 Nodes") – Folgeversion.

---

## 8. Entschiedene Fragen

1. **Icons**: Platzhalter-Icons (bestehende PNGs wiederverwendet + kopiert).
2. **Sprachen**: Deutsch + Englisch + Französisch (alle drei Dictionaries).
3. **LoadBalancer**: Bleibt als angepasste Klasse (erbt von FunctionalCI).
4. **Impact-Analyse**: Vollständige Relations direkt im Datenmodell.
5. **Menüs**: Eigene OQL-Menüeinträge unter Configuration Management.
6. **Netzwerk**: VLAN-Integration via `_delta="if_exists"` (optional).
7. **Kubernetes**: Eigene Subklasse KubernetesWorkload + cluster_type-Enum.
8. **Exchange DAG**: Als resource_type-Enum in ClusterResource.
9. **Multi-Site**: Standort-Felder (location_id, redundancy_location_id) am Cluster.
10. **Kontakte**: Standard FunctionalCI-Kontaktzuordnung (kein explizites Feld).

---

## 9. Klassenübersicht (Zusammenfassung)

| # | Klasse | Typ | Erbt von |
|---|---|---|---|
| 1 | Cluster | CI | FunctionalCI |
| 2 | ClusterResource | CI | FunctionalCI |
| 3 | AvailabilityGroup | CI | ClusterResource |
| 4 | DockerService | CI | ClusterResource |
| 5 | KubernetesWorkload | CI | ClusterResource |
| 6 | LoadBalancer | CI | FunctionalCI |
| 7 | LBAddress | CI | FunctionalCI |
| 8 | lnkClusterToFunctionalCI | Link | cmdbAbstractObject |
| 9 | lnkClusterToVolume | Link | cmdbAbstractObject |
| 10 | lnkClusterToVLAN | Link | cmdbAbstractObject |
| 11 | lnkAvailabilityGroupToServer | Link | cmdbAbstractObject |
| 12 | lnkAvailabilityGroupToDatabase | Link | cmdbAbstractObject |
| 13 | lnkLoadBalancerToFunctionalCI | Link | cmdbAbstractObject |

**Erweiterte bestehende Klassen:** Server, DatabaseSchema

**Gesamt: 13 neue Klassen + 2 Erweiterungen**
