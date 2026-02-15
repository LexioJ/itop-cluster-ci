<?php
/**
 * Localized data - German
 *
 * @copyright   Copyright (C) 2024 Combodo
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('DE DE', 'German', 'Deutsch', array(
	// ============================================================================
	// Class: Cluster
	// ============================================================================
	'Class:Cluster' => 'Cluster',
	'Class:Cluster+' => 'Zentrales Cluster-CI fr Failover Cluster, Docker Swarm, Kubernetes und andere Cluster-Technologien',
	'Class:Cluster/Attribute:cluster_type' => 'Clustertyp',
	'Class:Cluster/Attribute:cluster_type+' => 'Art des Clusters (Failover, NLB, Docker Swarm, Kubernetes, etc.)',
	'Class:Cluster/Attribute:cluster_type/Value:failover' => 'Failover-Cluster',
	'Class:Cluster/Attribute:cluster_type/Value:nlb' => 'Network Load Balancing',
	'Class:Cluster/Attribute:cluster_type/Value:storage_spaces_direct' => 'Storage Spaces Direct',
	'Class:Cluster/Attribute:cluster_type/Value:docker_swarm' => 'Docker Swarm',
	'Class:Cluster/Attribute:cluster_type/Value:kubernetes' => 'Kubernetes',
	'Class:Cluster/Attribute:cluster_type/Value:generic' => 'Generisch',
	'Class:Cluster/Attribute:quorum_type' => 'Quorum-Typ',
	'Class:Cluster/Attribute:quorum_type+' => 'Art der Quorum-Konfiguration',
	'Class:Cluster/Attribute:quorum_type/Value:node_majority' => 'Knotenmehrheit',
	'Class:Cluster/Attribute:quorum_type/Value:node_and_disk' => 'Knoten und Datentrger',
	'Class:Cluster/Attribute:quorum_type/Value:node_and_fileshare' => 'Knoten und Dateifreigabe',
	'Class:Cluster/Attribute:quorum_type/Value:cloud_witness' => 'Cloud-Zeuge',
	'Class:Cluster/Attribute:quorum_type/Value:no_quorum' => 'Kein Quorum',
	'Class:Cluster/Attribute:quorum_resource' => 'Quorum-Ressource',
	'Class:Cluster/Attribute:quorum_resource+' => 'Pfad oder Ressource des Zeugen (z.B. Dateifreigabe oder Cloud-Witness)',
	'Class:Cluster/Attribute:cluster_ip' => 'Cluster-IP',
	'Class:Cluster/Attribute:cluster_ip+' => 'Virtuelle IP-Adresse des Clusters',
	'Class:Cluster/Attribute:cluster_hostname' => 'Cluster-Hostname',
	'Class:Cluster/Attribute:cluster_hostname+' => 'Virtueller Hostname des Clusters (CNO bei WSFC)',
	'Class:Cluster/Attribute:location_id' => 'Standort',
	'Class:Cluster/Attribute:location_id+' => 'Primrer Standort des Clusters',
	'Class:Cluster/Attribute:redundancy_location_id' => 'Redundanz-Standort',
	'Class:Cluster/Attribute:redundancy_location_id+' => 'Sekundrer Standort fr Stretch-Cluster',
	'Class:Cluster/Attribute:nodes_list' => 'Cluster-Knoten',
	'Class:Cluster/Attribute:nodes_list+' => 'Server und virtuelle Maschinen, die Teil dieses Clusters sind',
	'Class:Cluster/Attribute:resources_list' => 'Cluster-Ressourcen',
	'Class:Cluster/Attribute:resources_list+' => 'Ressourcen und Dienste, die auf diesem Cluster laufen',
	'Class:Cluster/Attribute:volumes_list' => 'Volumes',
	'Class:Cluster/Attribute:volumes_list+' => 'Gemeinsam genutzte logische Volumes (CSV, Quorum-Disk)',
	'Class:Cluster/Attribute:vlans_list' => 'VLANs',
	'Class:Cluster/Attribute:vlans_list+' => 'Netzwerk-VLANs fr Heartbeat, Client, Storage',

	// ============================================================================
	// Class: lnkClusterToFunctionalCI (Link: Cluster <-> Nodes)
	// ============================================================================
	'Class:lnkClusterToFunctionalCI' => 'Verbindung Cluster - Funktionales CI',
	'Class:lnkClusterToFunctionalCI+' => 'Verknpft einen Cluster mit seinen Knoten',
	'Class:lnkClusterToFunctionalCI/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToFunctionalCI/Attribute:cluster_id+' => 'Der Cluster',
	'Class:lnkClusterToFunctionalCI/Attribute:functionalci_id' => 'Knoten',
	'Class:lnkClusterToFunctionalCI/Attribute:functionalci_id+' => 'Der Server oder die virtuelle Maschine',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role' => 'Knotenrolle',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role+' => 'Rolle des Knotens im Cluster',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:active' => 'Aktiv',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:passive' => 'Passiv',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:witness' => 'Zeuge',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:arbiter' => 'Arbiter',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:manager' => 'Manager',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:worker' => 'Worker',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:control_plane' => 'Control Plane',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status' => 'Knotenstatus',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status+' => 'Aktueller Status des Knotens',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:up' => 'Betriebsbereit',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:down' => 'Nicht verfgbar',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:paused' => 'Pausiert',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:joining' => 'Wird beigetreten',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:draining' => 'Wird geleert',

	// ============================================================================
	// Class: lnkClusterToVolume (Link: Cluster <-> LogicalVolume)
	// ============================================================================
	'Class:lnkClusterToVolume' => 'Verbindung Cluster - Volume',
	'Class:lnkClusterToVolume+' => 'Verknpft einen Cluster mit seinen gemeinsam genutzten Volumes',
	'Class:lnkClusterToVolume/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToVolume/Attribute:cluster_id+' => 'Der Cluster',
	'Class:lnkClusterToVolume/Attribute:volume_id' => 'Volume',
	'Class:lnkClusterToVolume/Attribute:volume_id+' => 'Logisches Volume',
	'Class:lnkClusterToVolume/Attribute:volume_usage' => 'Verwendungszweck',
	'Class:lnkClusterToVolume/Attribute:volume_usage+' => 'Verwendung des Volumes im Cluster',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:csv' => 'Cluster Shared Volume',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:quorum_disk' => 'Quorum-Datentrger',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:data' => 'Daten',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:shared_folder' => 'Freigegebener Ordner',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:witness' => 'Zeuge',

	// ============================================================================
	// Class: lnkClusterToVLAN (Link: Cluster <-> VLAN)
	// ============================================================================
	'Class:lnkClusterToVLAN' => 'Verbindung Cluster - VLAN',
	'Class:lnkClusterToVLAN+' => 'Verknpft einen Cluster mit seinen Netzwerken',
	'Class:lnkClusterToVLAN/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToVLAN/Attribute:cluster_id+' => 'Der Cluster',
	'Class:lnkClusterToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkClusterToVLAN/Attribute:vlan_id+' => 'Netzwerk-VLAN',
	'Class:lnkClusterToVLAN/Attribute:network_usage' => 'Netzwerkverwendung',
	'Class:lnkClusterToVLAN/Attribute:network_usage+' => 'Verwendung des Netzwerks',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:heartbeat' => 'Heartbeat',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:client' => 'Client-Verkehr',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:storage' => 'Storage-Verkehr',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:management' => 'Management',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:replication' => 'Replikation',

	// ============================================================================
	// Class: ClusterResource
	// ============================================================================
	'Class:ClusterResource' => 'Cluster-Ressource',
	'Class:ClusterResource+' => 'Geclusterte Rolle oder Dienst (Basis fr Availability Groups, Docker Services, Kubernetes Workloads)',
	'Class:ClusterResource/Attribute:cluster_id' => 'Cluster',
	'Class:ClusterResource/Attribute:cluster_id+' => 'Der Cluster, auf dem diese Ressource luft',
	'Class:ClusterResource/Attribute:resource_type' => 'Ressourcentyp',
	'Class:ClusterResource/Attribute:resource_type+' => 'Art der geclusterten Ressource',
	'Class:ClusterResource/Attribute:resource_type/Value:sql_ag' => 'SQL Availability Group',
	'Class:ClusterResource/Attribute:resource_type/Value:file_server' => 'Dateiserver',
	'Class:ClusterResource/Attribute:resource_type/Value:dhcp' => 'DHCP',
	'Class:ClusterResource/Attribute:resource_type/Value:print_server' => 'Druckserver',
	'Class:ClusterResource/Attribute:resource_type/Value:generic_service' => 'Generischer Dienst',
	'Class:ClusterResource/Attribute:resource_type/Value:docker_service' => 'Docker-Service',
	'Class:ClusterResource/Attribute:resource_type/Value:kubernetes_workload' => 'Kubernetes-Workload',
	'Class:ClusterResource/Attribute:resource_type/Value:hyper_v' => 'Hyper-V',
	'Class:ClusterResource/Attribute:resource_type/Value:dns' => 'DNS',
	'Class:ClusterResource/Attribute:resource_type/Value:exchange_dag' => 'Exchange DAG',
	'Class:ClusterResource/Attribute:status' => 'Status',
	'Class:ClusterResource/Attribute:status+' => 'Aktueller Status der Ressource',
	'Class:ClusterResource/Attribute:status/Value:online' => 'Online',
	'Class:ClusterResource/Attribute:status/Value:offline' => 'Offline',
	'Class:ClusterResource/Attribute:status/Value:partially_online' => 'Teilweise online',
	'Class:ClusterResource/Attribute:status/Value:failed' => 'Fehlerhaft',
	'Class:ClusterResource/Attribute:status/Value:pending' => 'Ausstehend',
	'Class:ClusterResource/Attribute:virtual_ip' => 'Virtuelle IP',
	'Class:ClusterResource/Attribute:virtual_ip+' => 'Virtuelle IP-Adresse der Ressource',
	'Class:ClusterResource/Attribute:virtual_hostname' => 'Virtueller Hostname',
	'Class:ClusterResource/Attribute:virtual_hostname+' => 'Virtueller Hostname der Ressource',
	'Class:ClusterResource/Attribute:owner_node_id' => 'Aktueller Besitzer',
	'Class:ClusterResource/Attribute:owner_node_id+' => 'Knoten, der die Ressource aktuell aktiv hostet',

	// ============================================================================
	// Class: AvailabilityGroup
	// ============================================================================
	'Class:AvailabilityGroup' => 'Availability Group',
	'Class:AvailabilityGroup+' => 'SQL Server Always On Availability Group fr Hochverfgbarkeits-Datenbanken',
	'Class:AvailabilityGroup/Attribute:listener_name' => 'Listener-Name',
	'Class:AvailabilityGroup/Attribute:listener_name+' => 'Name des AG-Listeners (z.B. SQLAG01)',
	'Class:AvailabilityGroup/Attribute:listener_ip' => 'Listener-IP',
	'Class:AvailabilityGroup/Attribute:listener_ip+' => 'IP-Adresse des AG-Listeners',
	'Class:AvailabilityGroup/Attribute:listener_port' => 'Listener-Port',
	'Class:AvailabilityGroup/Attribute:listener_port+' => 'Port des AG-Listeners (Standard: 1433)',
	'Class:AvailabilityGroup/Attribute:availability_mode' => 'Verfgbarkeitsmodus',
	'Class:AvailabilityGroup/Attribute:availability_mode+' => 'Synchronisierungsmodus der Replikate',
	'Class:AvailabilityGroup/Attribute:availability_mode/Value:synchronous_commit' => 'Synchroner Commit',
	'Class:AvailabilityGroup/Attribute:availability_mode/Value:asynchronous_commit' => 'Asynchroner Commit',
	'Class:AvailabilityGroup/Attribute:failover_mode' => 'Failover-Modus',
	'Class:AvailabilityGroup/Attribute:failover_mode+' => 'Art des Failovers',
	'Class:AvailabilityGroup/Attribute:failover_mode/Value:automatic' => 'Automatisch',
	'Class:AvailabilityGroup/Attribute:failover_mode/Value:manual' => 'Manuell',
	'Class:AvailabilityGroup/Attribute:replicas_list' => 'Replikate',
	'Class:AvailabilityGroup/Attribute:replicas_list+' => 'SQL Server, die Teil dieser Availability Group sind',
	'Class:AvailabilityGroup/Attribute:databases_list' => 'Datenbanken',
	'Class:AvailabilityGroup/Attribute:databases_list+' => 'Datenbanken in dieser Availability Group',

	// ============================================================================
	// Class: lnkAvailabilityGroupToServer (Link: AG <-> Server)
	// ============================================================================
	'Class:lnkAvailabilityGroupToServer' => 'Verbindung Availability Group - Server',
	'Class:lnkAvailabilityGroupToServer+' => 'Verknpft eine Availability Group mit ihren Replikat-Servern',
	'Class:lnkAvailabilityGroupToServer/Attribute:ag_id' => 'Availability Group',
	'Class:lnkAvailabilityGroupToServer/Attribute:ag_id+' => 'Die Availability Group',
	'Class:lnkAvailabilityGroupToServer/Attribute:server_id' => 'Server',
	'Class:lnkAvailabilityGroupToServer/Attribute:server_id+' => 'Der SQL Server',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role' => 'Replikatrolle',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role+' => 'Rolle des Replikats',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role/Value:primary' => 'Primr',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role/Value:secondary' => 'Sekundr',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state' => 'Synchronisationsstatus',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state+' => 'Synchronisationsstatus des Replikats',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:synchronized' => 'Synchronisiert',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:synchronizing' => 'Synchronisiere',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:not_synchronizing' => 'Nicht synchronisiert',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:reverting' => 'Wird zurckgesetzt',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:initializing' => 'Wird initialisiert',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode' => 'Verfgbarkeitsmodus',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode+' => 'Commit-Modus fr dieses Replikat',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode/Value:synchronous_commit' => 'Synchroner Commit',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode/Value:asynchronous_commit' => 'Asynchroner Commit',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode' => 'Failover-Modus',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode+' => 'Failover-Modus fr dieses Replikat',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode/Value:automatic' => 'Automatisch',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode/Value:manual' => 'Manuell',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary' => 'Lesbares Sekundrreplikat',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary+' => 'Ob Leseverbindungen auf diesem Replikat zulssig sind',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary/Value:yes' => 'Ja',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary/Value:no' => 'Nein',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary/Value:read_intent_only' => 'Nur Leseabsicht',

	// ============================================================================
	// Class: lnkAvailabilityGroupToDatabase (Link: AG <-> DatabaseSchema)
	// ============================================================================
	'Class:lnkAvailabilityGroupToDatabase' => 'Verbindung Availability Group - Datenbank',
	'Class:lnkAvailabilityGroupToDatabase+' => 'Verknpft eine Availability Group mit ihren Datenbanken',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:ag_id' => 'Availability Group',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:ag_id+' => 'Die Availability Group',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:databaseschema_id' => 'Datenbank',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:databaseschema_id+' => 'Die Datenbank',

	// ============================================================================
	// Class: DockerService
	// ============================================================================
	'Class:DockerService' => 'Docker-Service',
	'Class:DockerService+' => 'Docker Swarm Service fr Container-Orchestrierung',
	'DockerService' => 'Docker-Service',
	'DockerService+' => 'Docker Swarm Service fr Container-Orchestrierung',
	'Class:DockerService/Attribute:image' => 'Image',
	'Class:DockerService/Attribute:image+' => 'Docker-Image (z.B. nginx:1.25)',
	'Class:DockerService/Attribute:replicas_desired' => 'Gewnschte Replikate',
	'Class:DockerService/Attribute:replicas_desired+' => 'Anzahl der gewnschten Replikate',
	'Class:DockerService/Attribute:replicas_running' => 'Laufende Replikate',
	'Class:DockerService/Attribute:replicas_running+' => 'Anzahl der tatschlich laufenden Replikate',
	'Class:DockerService/Attribute:published_ports' => 'Verffentlichte Ports',
	'Class:DockerService/Attribute:published_ports+' => 'Verffentlichte Ports (z.B. 80:8080, 443:8443)',
	'Class:DockerService/Attribute:stack_name' => 'Stack-Name',
	'Class:DockerService/Attribute:stack_name+' => 'Docker-Stack-Name',

	// ============================================================================
	// Class: KubernetesWorkload
	// ============================================================================
	'Class:KubernetesWorkload' => 'Kubernetes-Workload',
	'Class:KubernetesWorkload+' => 'Kubernetes Deployment, StatefulSet, DaemonSet oder anderer Workload',
	'Class:KubernetesWorkload/Attribute:namespace' => 'Namespace',
	'Class:KubernetesWorkload/Attribute:namespace+' => 'Kubernetes-Namespace (z.B. production)',
	'Class:KubernetesWorkload/Attribute:workload_type' => 'Workload-Typ',
	'Class:KubernetesWorkload/Attribute:workload_type+' => 'Art des Kubernetes-Workloads',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:deployment' => 'Deployment',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:statefulset' => 'StatefulSet',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:daemonset' => 'DaemonSet',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:job' => 'Job',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:cronjob' => 'CronJob',
	'Class:KubernetesWorkload/Attribute:image' => 'Image',
	'Class:KubernetesWorkload/Attribute:image+' => 'Container-Image (z.B. myapp:2.1)',
	'Class:KubernetesWorkload/Attribute:replicas_desired' => 'Gewnschte Replikate',
	'Class:KubernetesWorkload/Attribute:replicas_desired+' => 'Anzahl der gewnschten Replikate',
	'Class:KubernetesWorkload/Attribute:replicas_running' => 'Laufende Replikate',
	'Class:KubernetesWorkload/Attribute:replicas_running+' => 'Anzahl der tatschlich laufenden Replikate',
	'Class:KubernetesWorkload/Attribute:container_ports' => 'Container-Ports',
	'Class:KubernetesWorkload/Attribute:container_ports+' => 'Container-Ports (z.B. 8080, 8443)',
	'Class:KubernetesWorkload/Attribute:service_type' => 'Service-Typ',
	'Class:KubernetesWorkload/Attribute:service_type+' => 'Kubernetes Service-Typ',
	'Class:KubernetesWorkload/Attribute:service_type/Value:clusterip' => 'ClusterIP',
	'Class:KubernetesWorkload/Attribute:service_type/Value:nodeport' => 'NodePort',
	'Class:KubernetesWorkload/Attribute:service_type/Value:loadbalancer' => 'LoadBalancer',
	'Class:KubernetesWorkload/Attribute:service_type/Value:none' => 'Keiner',

	// ============================================================================
	// Class: LoadBalancer
	// ============================================================================
	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer+' => 'Load Balancer fr Verteilung von Netzwerkverkehr auf mehrere Backend-Server',
	'Class:LoadBalancer/Attribute:lb_type' => 'LB-Typ',
	'Class:LoadBalancer/Attribute:lb_type+' => 'Art des Load Balancers',
	'Class:LoadBalancer/Attribute:lb_type/Value:hardware' => 'Hardware',
	'Class:LoadBalancer/Attribute:lb_type/Value:software' => 'Software',
	'Class:LoadBalancer/Attribute:lb_type/Value:cloud' => 'Cloud',
	'Class:LoadBalancer/Attribute:lb_type/Value:nlb' => 'Network Load Balancing',
	'Class:LoadBalancer/Attribute:backend_nodes_list' => 'Backend-Knoten',
	'Class:LoadBalancer/Attribute:backend_nodes_list+' => 'Server, die Verkehr von diesem Load Balancer empfangen',
	'Class:LoadBalancer/Attribute:addresses_list' => 'Adressen',
	'Class:LoadBalancer/Attribute:addresses_list+' => 'Virtuelle IP-Adressen und Ports dieses Load Balancers',

	// ============================================================================
	// Class: LBAddress
	// ============================================================================
	'Class:LBAddress' => 'LB-Adresse',
	'Class:LBAddress+' => 'Virtuelle Adresse (VIP + Port) eines Load Balancers',
	'Class:LBAddress/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:LBAddress/Attribute:loadbalancer_id+' => 'Der bergeordnete Load Balancer',
	'Class:LBAddress/Attribute:address' => 'Adresse',
	'Class:LBAddress/Attribute:address+' => 'IP-Adresse oder FQDN',
	'Class:LBAddress/Attribute:port' => 'Port',
	'Class:LBAddress/Attribute:port+' => 'Port-Nummer',

	// ============================================================================
	// Class: lnkLoadBalancerToFunctionalCI (Link: LB <-> Backend Nodes)
	// ============================================================================
	'Class:lnkLoadBalancerToFunctionalCI' => 'Verbindung Load Balancer - Funktionales CI',
	'Class:lnkLoadBalancerToFunctionalCI+' => 'Verknpft einen Load Balancer mit seinen Backend-Knoten',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:loadbalancer_id+' => 'Der Load Balancer',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:functionalci_id' => 'Backend-Knoten',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:functionalci_id+' => 'Der Backend-Server',

	// ============================================================================
	// Extended existing classes
	// ============================================================================
	'Class:Server/Attribute:cluster_list' => 'Cluster',
	'Class:Server/Attribute:cluster_list+' => 'Cluster, denen dieser Server als Knoten zugeordnet ist',

	'Class:DatabaseSchema/Attribute:availabilitygroup_list' => 'Availability Groups',
	'Class:DatabaseSchema/Attribute:availabilitygroup_list+' => 'Availability Groups, die diese Datenbank enthalten',

	// ============================================================================
	// Menu entries
	// ============================================================================
	'Menu:Cluster' => 'Cluster',
	'Menu:ClusterResource' => 'Cluster-Ressourcen',
	'Menu:LoadBalancer' => 'Load Balancer',
));
