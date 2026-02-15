# iTop Cluster CI Extension

Extensions for Combodo's ITIL Solution: iTop (<http://www.combodo.com/itop>)

## Acknowledgments

This extension is inspired by and builds upon the excellent original work by:
- **lndevnull** - Original cluster-ci extension (<https://github.com/lndevnull/itop-extensions>)
- **rogermartensson** - LoadBalancer extension

Their pioneering work laid the foundation for this generic, iTop 3.2-compatible cluster data model.

## Overview

This extension provides a **generic cluster data model** for iTop 3.2+, supporting multiple cluster technologies:

- **Windows Server Failover Clusters (WSFC)** - File services, Hyper-V, Exchange DAG
- **SQL Server Always On Availability Groups** - With listener and replica management
- **Docker Swarm** - Container orchestration with services
- **Kubernetes** - Modern container platform with workloads
- **Generic Clusters** - Any other cluster type

The new model replaces the previous DBCluster/WebCluster architecture with a more flexible, FunctionalCI-based approach that properly represents modern infrastructure.

## Requirements

- iTop 3.0 or higher
- itop-config-mgmt/3.0.0
- itop-datacenter-mgmt/3.0.0

## Installation

1. Copy the `cluster-ci` directory to your iTop `extensions/` folder
2. Run the iTop setup/upgrade wizard
3. The extension will be automatically detected and installed

## New and Extended Classes

### New Classes (13)

#### Core Cluster Classes

| Class | Description | Icon |
|-------|-------------|------|
| **Cluster** | Central cluster CI representing any cluster type | ![cluster](images/cluster.png) |
| **ClusterResource** | Base class for clustered services/roles | ![cluster-resource](images/cluster-resource.png) |
| **AvailabilityGroup** | SQL Server Always On Availability Group | ![availability-group](images/availability-group.png) |
| **DockerService** | Docker Swarm service | ![docker-service](images/docker-service.png) |
| **KubernetesWorkload** | Kubernetes deployment/statefulset/daemonset | ![kubernetes-workload](images/kubernetes-workload.png) |
| **LoadBalancer** | Load balancer (hardware/software/cloud) | ![loadbalancer](images/loadbalancer.png) |
| **LBAddress** | Virtual IP + Port exposed by load balancer | - |

#### Link Classes (6)

| Class | Purpose |
|-------|---------|
| **lnkClusterToFunctionalCI** | Cluster ↔ Nodes (with role/status) |
| **lnkClusterToVolume** | Cluster ↔ Shared volumes (CSV, quorum) |
| **lnkClusterToVLAN** | Cluster ↔ VLAN networks (optional) |
| **lnkAvailabilityGroupToServer** | AG ↔ Replica servers |
| **lnkAvailabilityGroupToDatabase** | AG ↔ Database schemas |
| **lnkLoadBalancerToFunctionalCI** | LoadBalancer ↔ Backend nodes |

### Extended Classes

| Class | New Attribute |
|-------|---------------|
| **Server** | `cluster_list` - Shows cluster memberships |
| **DatabaseSchema** | `availabilitygroup_list` - Shows AG memberships |

## Usage Examples

### Windows Failover Cluster with SQL Always On

```
Cluster: "WSFC-SQLCL01"
  ├─ Type: failover
  ├─ Quorum: node_and_fileshare
  ├─ Location: Frankfurt (Redundancy: Munich)
  ├─ Nodes:
  │  ├─ SQL01 (active/up)
  │  └─ SQL02 (passive/up)
  ├─ VLANs:
  │  ├─ VLAN-100 (client)
  │  ├─ VLAN-200 (heartbeat)
  │  └─ VLAN-300 (storage)
  └─ Resources:
     └─ AvailabilityGroup: "AG-Finance"
        ├─ Listener: SQLAG01:1433
        ├─ Replicas:
        │  ├─ SQL01 (primary/synchronous)
        │  └─ SQL02 (secondary/synchronous)
        └─ Databases:
           ├─ FinanceDB
           └─ FinanceReportDB
```

### Docker Swarm

```
Cluster: "SWARM-PROD-01"
  ├─ Type: docker_swarm
  ├─ Quorum: node_majority
  ├─ Nodes:
  │  ├─ DOCK01 (manager/up)
  │  ├─ DOCK02 (manager/up)
  │  ├─ DOCK03 (manager/up)
  │  ├─ DOCK04 (worker/up)
  │  └─ DOCK05 (worker/up)
  └─ Resources:
     ├─ DockerService: "web-frontend"
     │  ├─ Image: nginx:1.25
     │  ├─ Replicas: 3/3
     │  └─ Ports: 80:8080
     ├─ DockerService: "api-backend"
     │  ├─ Image: api:2.1
     │  ├─ Replicas: 5/5
     │  └─ Ports: 8443:8443
     └─ DockerService: "redis-cache"
        ├─ Image: redis:7
        └─ Replicas: 1/1
```

### Kubernetes

```
Cluster: "K8S-PROD-01"
  ├─ Type: kubernetes
  ├─ Nodes:
  │  ├─ K8S-CP01 (control_plane/up)
  │  ├─ K8S-CP02 (control_plane/up)
  │  ├─ K8S-W01 (worker/up)
  │  ├─ K8S-W02 (worker/up)
  │  └─ K8S-W03 (worker/up)
  └─ Resources:
     ├─ KubernetesWorkload: "frontend"
     │  ├─ Type: deployment
     │  ├─ Namespace: production
     │  ├─ Image: frontend:3.0
     │  └─ Replicas: 3/3
     ├─ KubernetesWorkload: "postgres"
     │  ├─ Type: statefulset
     │  ├─ Namespace: production
     │  ├─ Image: postgres:15
     │  └─ Replicas: 3/3
     └─ KubernetesWorkload: "monitoring"
        ├─ Type: daemonset
        ├─ Namespace: monitoring
        └─ Image: node-exporter:1.7
```

### Load Balancer

```
LoadBalancer: "LB-PROD-01"
  ├─ Type: hardware
  ├─ Backend Nodes:
  │  ├─ WEB01
  │  ├─ WEB02
  │  └─ WEB03
  └─ Addresses:
     ├─ LBAddress: "web-frontend"
     │  ├─ Address: 10.0.1.100
     │  └─ Port: 443
     └─ LBAddress: "api-backend"
        ├─ Address: 10.0.1.101
        └─ Port: 8443
```

## Impact Analysis

The extension provides complete impact chains for outage analysis:

### Server Failure Impact Chain

```
Server (fails)
  ↓
Cluster (affected)
  ↓
ClusterResources (affected)
  ↓
DatabaseSchemas (via AvailabilityGroup)
```

### Load Balancer Impact Chain

```
Backend Node (fails)
  ↓
LoadBalancer (affected)
  ↓
LBAddresses (affected)
```

## Migration from Previous Version

This version (2.0) introduces a **complete redesign** of the data model:

### Breaking Changes

- **DBCluster/WebCluster removed** - Replaced by generic `Cluster` class
- **LoadBalancer changed** - Now inherits from `FunctionalCI` (was `SoftwareInstance`)
- **DatabaseSchema.dbserver_id removed** - Use `softwareinstance_id` instead
- **WebApplication.webserver_id removed** - Use `softwareinstance_id` instead

### Data Migration

When upgrading from the previous version:
1. Export your existing DBCluster/WebCluster data
2. Install the new extension
3. Map old objects to new structure:
   - DBCluster → Cluster (type=failover)
   - WebCluster → Cluster (type=failover)
   - Existing LoadBalancers may need adjustment

## Languages

The extension includes translations for:
- English (EN)
- German (DE)
- French (FR)

## License

AGPL-3.0

## Contributing

Contributions are welcome! Please submit pull requests or issues via GitHub.

## Version History

- **2.0.0** - Complete redesign with generic cluster model, iTop 3.2 support
- **1.x** - Original DBCluster/WebCluster extension by lndevnull
