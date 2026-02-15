<?php
/**
 * Localisation dictionary for Cluster CI extension (English)
 *
 * @copyright   Copyright (C) 2025-2026
 * @license     http://opensource.org/licenses/MIT
 */

Dict::Add('EN US', 'English', 'English', array(
	// Classes
	'Class:Cluster' => 'Cluster',
	'Class:Cluster+' => 'A cluster of servers providing high availability and load balancing (WSFC, Docker Swarm, Kubernetes, etc.)',
	'Class:Cluster/Attribute:name' => 'Cluster Name',
	'Class:Cluster/Attribute:org_id' => 'Organization',
	'Class:Cluster/Attribute:description' => 'Description',
	'Class:Cluster/Attribute:business_criticity' => 'Business Criticity',
	'Class:Cluster/Attribute:cluster_type' => 'Cluster Type',
	'Class:Cluster/Attribute:quorum_type' => 'Quorum Type',
	'Class:Cluster/Attribute:quorum_resource' => 'Quorum Resource',
	'Class:Cluster/Attribute:cluster_ip' => 'Cluster IP',
	'Class:Cluster/Attribute:cluster_hostname' => 'Cluster Hostname',
	'Class:Cluster/Attribute:location_id' => 'Primary Location',
	'Class:Cluster/Attribute:redundancy_location_id' => 'Redundancy Location',
	'Class:Cluster/Attribute:move2production' => 'Production Date',
	'Class:Cluster/Attribute:nodes_list' => 'Nodes',
	'Class:Cluster/Attribute:resources_list' => 'Resources',
	'Class:Cluster/Attribute:volumes_list' => 'Volumes',
	'Class:Cluster/Attribute:vlans_list' => 'VLANs',

	'Class:ClusterResource' => 'Cluster Resource',
	'Class:ClusterResource+' => 'A clustered role or service running on a cluster (File Server, DHCP, Print Server, etc.)',
	'Class:ClusterResource/Attribute:name' => 'Resource Name',
	'Class:ClusterResource/Attribute:org_id' => 'Organization',
	'Class:ClusterResource/Attribute:description' => 'Description',
	'Class:ClusterResource/Attribute:cluster_id' => 'Cluster',
	'Class:ClusterResource/Attribute:resource_type' => 'Resource Type',
	'Class:ClusterResource/Attribute:status' => 'Status',
	'Class:ClusterResource/Attribute:business_criticity' => 'Business Criticity',
	'Class:ClusterResource/Attribute:virtual_ip' => 'Virtual IP',
	'Class:ClusterResource/Attribute:virtual_hostname' => 'Virtual Hostname',
	'Class:ClusterResource/Attribute:owner_node_id' => 'Owner Node',
	'Class:ClusterResource/Attribute:move2production' => 'Production Date',

	'Class:AvailabilityGroup' => 'Availability Group',
	'Class:AvailabilityGroup+' => 'SQL Server Always On Availability Group for high availability and disaster recovery',
	'Class:AvailabilityGroup/Attribute:name' => 'Availability Group Name',
	'Class:AvailabilityGroup/Attribute:org_id' => 'Organization',
	'Class:AvailabilityGroup/Attribute:description' => 'Description',
	'Class:AvailabilityGroup/Attribute:cluster_id' => 'Cluster',
	'Class:AvailabilityGroup/Attribute:resource_type' => 'Resource Type',
	'Class:AvailabilityGroup/Attribute:status' => 'Status',
	'Class:AvailabilityGroup/Attribute:business_criticity' => 'Business Criticity',
	'Class:AvailabilityGroup/Attribute:virtual_ip' => 'Virtual IP',
	'Class:AvailabilityGroup/Attribute:virtual_hostname' => 'Virtual Hostname',
	'Class:AvailabilityGroup/Attribute:owner_node_id' => 'Owner Node',
	'Class:AvailabilityGroup/Attribute:move2production' => 'Production Date',
	'Class:AvailabilityGroup/Attribute:listener_name' => 'Listener Name',
	'Class:AvailabilityGroup/Attribute:listener_ip' => 'Listener IP',
	'Class:AvailabilityGroup/Attribute:listener_port' => 'Listener Port',
	'Class:AvailabilityGroup/Attribute:availability_mode' => 'Availability Mode',
	'Class:AvailabilityGroup/Attribute:failover_mode' => 'Failover Mode',
	'Class:AvailabilityGroup/Attribute:replicas_list' => 'Replicas',
	'Class:AvailabilityGroup/Attribute:databases_list' => 'Databases',

	'Class:DockerService' => 'Docker Service',
	'Class:DockerService+' => 'A Docker Swarm service running in a cluster',
	'DockerService' => 'Docker Service',
	'Class:DockerService/Attribute:name' => 'Service Name',
	'Class:DockerService/Attribute:org_id' => 'Organization',
	'Class:DockerService/Attribute:description' => 'Description',
	'Class:DockerService/Attribute:cluster_id' => 'Cluster',
	'Class:DockerService/Attribute:resource_type' => 'Resource Type',
	'Class:DockerService/Attribute:status' => 'Status',
	'Class:DockerService/Attribute:business_criticity' => 'Business Criticity',
	'Class:DockerService/Attribute:virtual_ip' => 'Virtual IP',
	'Class:DockerService/Attribute:virtual_hostname' => 'Virtual Hostname',
	'Class:DockerService/Attribute:owner_node_id' => 'Owner Node',
	'Class:DockerService/Attribute:move2production' => 'Production Date',
	'Class:DockerService/Attribute:image' => 'Docker Image',
	'Class:DockerService/Attribute:replicas_desired' => 'Desired Replicas',
	'Class:DockerService/Attribute:replicas_running' => 'Running Replicas',
	'Class:DockerService/Attribute:published_ports' => 'Published Ports',
	'Class:DockerService/Attribute:stack_name' => 'Stack Name',

	'Class:KubernetesWorkload' => 'Kubernetes Workload',
	'Class:KubernetesWorkload+' => 'A Kubernetes workload (Deployment, StatefulSet, DaemonSet, etc.)',
	'KubernetesWorkload' => 'Kubernetes Workload',
	'Class:KubernetesWorkload/Attribute:name' => 'Workload Name',
	'Class:KubernetesWorkload/Attribute:org_id' => 'Organization',
	'Class:KubernetesWorkload/Attribute:description' => 'Description',
	'Class:KubernetesWorkload/Attribute:cluster_id' => 'Cluster',
	'Class:KubernetesWorkload/Attribute:resource_type' => 'Resource Type',
	'Class:KubernetesWorkload/Attribute:status' => 'Status',
	'Class:KubernetesWorkload/Attribute:business_criticity' => 'Business Criticity',
	'Class:KubernetesWorkload/Attribute:virtual_ip' => 'Virtual IP',
	'Class:KubernetesWorkload/Attribute:virtual_hostname' => 'Virtual Hostname',
	'Class:KubernetesWorkload/Attribute:owner_node_id' => 'Owner Node',
	'Class:KubernetesWorkload/Attribute:move2production' => 'Production Date',
	'Class:KubernetesWorkload/Attribute:namespace' => 'Namespace',
	'Class:KubernetesWorkload/Attribute:workload_type' => 'Workload Type',
	'Class:KubernetesWorkload/Attribute:image' => 'Container Image',
	'Class:KubernetesWorkload/Attribute:replicas_desired' => 'Desired Replicas',
	'Class:KubernetesWorkload/Attribute:replicas_running' => 'Running Replicas',
	'Class:KubernetesWorkload/Attribute:container_ports' => 'Container Ports',
	'Class:KubernetesWorkload/Attribute:service_type' => 'Service Type',

	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer+' => 'A load balancer distributing traffic across multiple backend servers',
	'Class:LoadBalancer/Attribute:name' => 'Load Balancer Name',
	'Class:LoadBalancer/Attribute:org_id' => 'Organization',
	'Class:LoadBalancer/Attribute:description' => 'Description',
	'Class:LoadBalancer/Attribute:business_criticity' => 'Business Criticity',
	'Class:LoadBalancer/Attribute:lb_type' => 'Load Balancer Type',
	'Class:LoadBalancer/Attribute:move2production' => 'Production Date',
	'Class:LoadBalancer/Attribute:backend_nodes_list' => 'Backend Nodes',
	'Class:LoadBalancer/Attribute:addresses_list' => 'Addresses',

	'Class:LBAddress' => 'Load Balancer Address',
	'Class:LBAddress+' => 'A virtual address (VIP + Port) on a load balancer',
	'Class:LBAddress/Attribute:name' => 'Address Name',
	'Class:LBAddress/Attribute:org_id' => 'Organization',
	'Class:LBAddress/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:LBAddress/Attribute:address' => 'IP Address / FQDN',
	'Class:LBAddress/Attribute:port' => 'Port',
	'Class:LBAddress/Attribute:business_criticity' => 'Business Criticity',

	'Class:lnkClusterToFunctionalCI' => 'Cluster Node Link',
	'Class:lnkClusterToFunctionalCI+' => 'Links a cluster to its member nodes (servers, virtual machines)',
	'Class:lnkClusterToFunctionalCI/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToFunctionalCI/Attribute:functionalci_id' => 'Node',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role' => 'Node Role',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status' => 'Node Status',

	'Class:lnkClusterToVolume' => 'Cluster Volume Link',
	'Class:lnkClusterToVolume+' => 'Links a cluster to shared volumes (CSV, quorum disks)',
	'Class:lnkClusterToVolume/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToVolume/Attribute:volume_id' => 'Volume',
	'Class:lnkClusterToVolume/Attribute:volume_usage' => 'Volume Usage',

	'Class:lnkClusterToVLAN' => 'Cluster VLAN Link',
	'Class:lnkClusterToVLAN+' => 'Links a cluster to its networks (heartbeat, client, storage)',
	'Class:lnkClusterToVLAN/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkClusterToVLAN/Attribute:network_usage' => 'Network Usage',

	'Class:lnkAvailabilityGroupToServer' => 'Availability Group Replica Link',
	'Class:lnkAvailabilityGroupToServer+' => 'Links an Availability Group to its replica servers',
	'Class:lnkAvailabilityGroupToServer/Attribute:ag_id' => 'Availability Group',
	'Class:lnkAvailabilityGroupToServer/Attribute:server_id' => 'Replica Server',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role' => 'Replica Role',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state' => 'Synchronization State',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode' => 'Availability Mode',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode' => 'Failover Mode',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary' => 'Readable Secondary',

	'Class:lnkAvailabilityGroupToDatabase' => 'Availability Group Database Link',
	'Class:lnkAvailabilityGroupToDatabase+' => 'Links an Availability Group to its member databases',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:ag_id' => 'Availability Group',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:databaseschema_id' => 'Database',

	'Class:lnkLoadBalancerToFunctionalCI' => 'Load Balancer Backend Link',
	'Class:lnkLoadBalancerToFunctionalCI+' => 'Links a load balancer to its backend nodes',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:functionalci_id' => 'Backend Node',

	// Enums - Cluster.status
	'Enum:Cluster:status' => 'Cluster status',
	'Enum:Cluster:status/production' => 'Production',
	'Enum:Cluster:status/implementation' => 'Implementation',
	'Enum:Cluster:status/inactive' => 'Inactive',
	'Enum:Cluster:status/obsolete' => 'Obsolete',

	// Enums - Cluster.business_criticity
	'Enum:Cluster:business_criticity' => 'Business criticity',
	'Enum:Cluster:business_criticity/low' => 'Low',
	'Enum:Cluster:business_criticity/medium' => 'Medium',
	'Enum:Cluster:business_criticity/high' => 'High',

	// Enums - Cluster.cluster_type
	'Enum:Cluster:cluster_type' => 'Cluster type',
	'Enum:Cluster:cluster_type/failover' => 'Failover Cluster (WSFC)',
	'Enum:Cluster:cluster_type/nlb' => 'Network Load Balancing',
	'Enum:Cluster:cluster_type/storage_spaces_direct' => 'Storage Spaces Direct',
	'Enum:Cluster:cluster_type/docker_swarm' => 'Docker Swarm',
	'Enum:Cluster:cluster_type/kubernetes' => 'Kubernetes',
	'Enum:Cluster:cluster_type/generic' => 'Generic Cluster',

	// Enums - Cluster.quorum_type
	'Enum:Cluster:quorum_type' => 'Quorum type',
	'Enum:Cluster:quorum_type/node_majority' => 'Node Majority',
	'Enum:Cluster:quorum_type/node_and_disk' => 'Node and Disk Witness',
	'Enum:Cluster:quorum_type/node_and_fileshare' => 'Node and File Share Witness',
	'Enum:Cluster:quorum_type/cloud_witness' => 'Cloud Witness',
	'Enum:Cluster:quorum_type/no_quorum' => 'No Quorum',

	// Enums - lnkClusterToFunctionalCI.node_role
	'Enum:lnkClusterToFunctionalCI:node_role' => 'Node role',
	'Enum:lnkClusterToFunctionalCI:node_role/active' => 'Active',
	'Enum:lnkClusterToFunctionalCI:node_role/passive' => 'Passive',
	'Enum:lnkClusterToFunctionalCI:node_role/witness' => 'Witness',
	'Enum:lnkClusterToFunctionalCI:node_role/arbiter' => 'Arbiter',
	'Enum:lnkClusterToFunctionalCI:node_role/manager' => 'Manager',
	'Enum:lnkClusterToFunctionalCI:node_role/worker' => 'Worker',
	'Enum:lnkClusterToFunctionalCI:node_role/control_plane' => 'Control Plane',

	// Enums - lnkClusterToFunctionalCI.node_status
	'Enum:lnkClusterToFunctionalCI:node_status' => 'Node status',
	'Enum:lnkClusterToFunctionalCI:node_status/up' => 'Up',
	'Enum:lnkClusterToFunctionalCI:node_status/down' => 'Down',
	'Enum:lnkClusterToFunctionalCI:node_status/paused' => 'Paused',
	'Enum:lnkClusterToFunctionalCI:node_status/joining' => 'Joining',
	'Enum:lnkClusterToFunctionalCI:node_status/draining' => 'Draining',

	// Enums - lnkClusterToVolume.volume_usage
	'Enum:lnkClusterToVolume:volume_usage' => 'Volume usage',
	'Enum:lnkClusterToVolume:volume_usage/csv' => 'Cluster Shared Volume (CSV)',
	'Enum:lnkClusterToVolume:volume_usage/quorum_disk' => 'Quorum Disk',
	'Enum:lnkClusterToVolume:volume_usage/data' => 'Data',
	'Enum:lnkClusterToVolume:volume_usage/shared_folder' => 'Shared Folder',
	'Enum:lnkClusterToVolume:volume_usage/witness' => 'Witness',

	// Enums - lnkClusterToVLAN.network_usage
	'Enum:lnkClusterToVLAN:network_usage' => 'Network usage',
	'Enum:lnkClusterToVLAN:network_usage/heartbeat' => 'Heartbeat',
	'Enum:lnkClusterToVLAN:network_usage/client' => 'Client',
	'Enum:lnkClusterToVLAN:network_usage/storage' => 'Storage',
	'Enum:lnkClusterToVLAN:network_usage/management' => 'Management',
	'Enum:lnkClusterToVLAN:network_usage/replication' => 'Replication',

	// Enums - ClusterResource.resource_type
	'Enum:ClusterResource:resource_type' => 'Resource type',
	'Enum:ClusterResource:resource_type/sql_ag' => 'SQL Availability Group',
	'Enum:ClusterResource:resource_type/file_server' => 'File Server',
	'Enum:ClusterResource:resource_type/dhcp' => 'DHCP Server',
	'Enum:ClusterResource:resource_type/print_server' => 'Print Server',
	'Enum:ClusterResource:resource_type/generic_service' => 'Generic Service',
	'Enum:ClusterResource:resource_type/docker_service' => 'Docker Service',
	'Enum:ClusterResource:resource_type/kubernetes_workload' => 'Kubernetes Workload',
	'Enum:ClusterResource:resource_type/hyper_v' => 'Hyper-V',
	'Enum:ClusterResource:resource_type/dns' => 'DNS Server',
	'Enum:ClusterResource:resource_type/exchange_dag' => 'Exchange DAG',

	// Enums - ClusterResource.status
	'Enum:ClusterResource:status' => 'Resource status',
	'Enum:ClusterResource:status/online' => 'Online',
	'Enum:ClusterResource:status/offline' => 'Offline',
	'Enum:ClusterResource:status/partially_online' => 'Partially Online',
	'Enum:ClusterResource:status/failed' => 'Failed',
	'Enum:ClusterResource:status/pending' => 'Pending',

	// Enums - ClusterResource.business_criticity
	'Enum:ClusterResource:business_criticity' => 'Business criticity',
	'Enum:ClusterResource:business_criticity/low' => 'Low',
	'Enum:ClusterResource:business_criticity/medium' => 'Medium',
	'Enum:ClusterResource:business_criticity/high' => 'High',

	// Enums - AvailabilityGroup.availability_mode
	'Enum:AvailabilityGroup:availability_mode' => 'Availability mode',
	'Enum:AvailabilityGroup:availability_mode/synchronous_commit' => 'Synchronous Commit',
	'Enum:AvailabilityGroup:availability_mode/asynchronous_commit' => 'Asynchronous Commit',

	// Enums - AvailabilityGroup.failover_mode
	'Enum:AvailabilityGroup:failover_mode' => 'Failover mode',
	'Enum:AvailabilityGroup:failover_mode/automatic' => 'Automatic',
	'Enum:AvailabilityGroup:failover_mode/manual' => 'Manual',

	// Enums - lnkAvailabilityGroupToServer.replica_role
	'Enum:lnkAvailabilityGroupToServer:replica_role' => 'Replica role',
	'Enum:lnkAvailabilityGroupToServer:replica_role/primary' => 'Primary',
	'Enum:lnkAvailabilityGroupToServer:replica_role/secondary' => 'Secondary',

	// Enums - lnkAvailabilityGroupToServer.sync_state
	'Enum:lnkAvailabilityGroupToServer:sync_state' => 'Synchronization state',
	'Enum:lnkAvailabilityGroupToServer:sync_state/synchronized' => 'Synchronized',
	'Enum:lnkAvailabilityGroupToServer:sync_state/synchronizing' => 'Synchronizing',
	'Enum:lnkAvailabilityGroupToServer:sync_state/not_synchronizing' => 'Not Synchronizing',
	'Enum:lnkAvailabilityGroupToServer:sync_state/reverting' => 'Reverting',
	'Enum:lnkAvailabilityGroupToServer:sync_state/initializing' => 'Initializing',

	// Enums - lnkAvailabilityGroupToServer.availability_mode
	'Enum:lnkAvailabilityGroupToServer:availability_mode' => 'Availability mode',
	'Enum:lnkAvailabilityGroupToServer:availability_mode/synchronous_commit' => 'Synchronous Commit',
	'Enum:lnkAvailabilityGroupToServer:availability_mode/asynchronous_commit' => 'Asynchronous Commit',

	// Enums - lnkAvailabilityGroupToServer.failover_mode
	'Enum:lnkAvailabilityGroupToServer:failover_mode' => 'Failover mode',
	'Enum:lnkAvailabilityGroupToServer:failover_mode/automatic' => 'Automatic',
	'Enum:lnkAvailabilityGroupToServer:failover_mode/manual' => 'Manual',

	// Enums - lnkAvailabilityGroupToServer.readable_secondary
	'Enum:lnkAvailabilityGroupToServer:readable_secondary' => 'Readable secondary',
	'Enum:lnkAvailabilityGroupToServer:readable_secondary/yes' => 'Yes',
	'Enum:lnkAvailabilityGroupToServer:readable_secondary/no' => 'No',
	'Enum:lnkAvailabilityGroupToServer:readable_secondary/read_intent_only' => 'Read Intent Only',

	// Enums - KubernetesWorkload.workload_type
	'Enum:KubernetesWorkload:workload_type' => 'Workload type',
	'Enum:KubernetesWorkload:workload_type/deployment' => 'Deployment',
	'Enum:KubernetesWorkload:workload_type/statefulset' => 'StatefulSet',
	'Enum:KubernetesWorkload:workload_type/daemonset' => 'DaemonSet',
	'Enum:KubernetesWorkload:workload_type/job' => 'Job',
	'Enum:KubernetesWorkload:workload_type/cronjob' => 'CronJob',

	// Enums - KubernetesWorkload.service_type
	'Enum:KubernetesWorkload:service_type' => 'Service type',
	'Enum:KubernetesWorkload:service_type/clusterip' => 'ClusterIP',
	'Enum:KubernetesWorkload:service_type/nodeport' => 'NodePort',
	'Enum:KubernetesWorkload:service_type/loadbalancer' => 'LoadBalancer',
	'Enum:KubernetesWorkload:service_type/none' => 'None',

	// Enums - LoadBalancer.status
	'Enum:LoadBalancer:status' => 'Load balancer status',
	'Enum:LoadBalancer:status/production' => 'Production',
	'Enum:LoadBalancer:status/implementation' => 'Implementation',
	'Enum:LoadBalancer:status/inactive' => 'Inactive',
	'Enum:LoadBalancer:status/obsolete' => 'Obsolete',

	// Enums - LoadBalancer.business_criticity
	'Enum:LoadBalancer:business_criticity' => 'Business criticity',
	'Enum:LoadBalancer:business_criticity/low' => 'Low',
	'Enum:LoadBalancer:business_criticity/medium' => 'Medium',
	'Enum:LoadBalancer:business_criticity/high' => 'High',

	// Enums - LoadBalancer.lb_type
	'Enum:LoadBalancer:lb_type' => 'Load balancer type',
	'Enum:LoadBalancer:lb_type/hardware' => 'Hardware',
	'Enum:LoadBalancer:lb_type/software' => 'Software',
	'Enum:LoadBalancer:lb_type/cloud' => 'Cloud',
	'Enum:LoadBalancer:lb_type/nlb' => 'Network Load Balancing',

	// Enums - LBAddress.business_criticity
	'Enum:LBAddress:business_criticity' => 'Business criticity',
	'Enum:LBAddress:business_criticity/low' => 'Low',
	'Enum:LBAddress:business_criticity/medium' => 'Medium',
	'Enum:LBAddress:business_criticity/high' => 'High',

	// Menu entries
	'Menu:Cluster' => 'Clusters',
	'Menu:ClusterResource' => 'Cluster Resources',
	'Menu:LoadBalancer' => 'Load Balancers',

	// Dashboard badges
	'Dashboard:Cluster:Badge' => 'Clusters',
	'Dashboard:ClusterResource:Badge' => 'Cluster Resources',
	'Dashboard:LoadBalancer:Badge' => 'Load Balancers',

	// Tabs and fieldsets
	'Cluster:Clusters' => 'Clusters',
	'Cluster:ClusterResources' => 'Resources',
	'Cluster:Volumes' => 'Volumes',
	'Cluster:VLANs' => 'VLANs',
	'Cluster:NodeDetails' => 'Node Details',
	'Cluster:Configuration' => 'Configuration',
	'Cluster:Locations' => 'Locations',

	'ClusterResource:ClusterInfo' => 'Cluster Information',
	'ClusterResource:NetworkInfo' => 'Network Information',
	'ClusterResource:OwnerInfo' => 'Owner Information',

	'AvailabilityGroup:ListenerInfo' => 'Listener Configuration',
	'AvailabilityGroup:Replicas' => 'Replicas',
	'AvailabilityGroup:Databases' => 'Databases',
	'AvailabilityGroup:HighAvailabilitySettings' => 'High Availability Settings',

	'DockerService:RuntimeInfo' => 'Runtime Information',
	'DockerService:NetworkInfo' => 'Network Information',
	'DockerService:StackInfo' => 'Stack Information',

	'KubernetesWorkload:WorkloadInfo' => 'Workload Information',
	'KubernetesWorkload:RuntimeInfo' => 'Runtime Information',
	'KubernetesWorkload:ServiceInfo' => 'Service Information',

	'LoadBalancer:Configuration' => 'Configuration',
	'LoadBalancer:BackendNodes' => 'Backend Nodes',
	'LoadBalancer:Addresses' => 'Addresses',

	'LBAddress:AddressInfo' => 'Address Information',
	'LBAddress:ConnectionInfo' => 'Connection Information',

	// Server extension
	'Server:ClusterList' => 'Clusters',

	// DatabaseSchema extension
	'DatabaseSchema:AvailabilityGroupList' => 'Availability Groups',

	// Reconciliation
	'Reconciliation:Cluster' => 'Cluster',
	'Reconciliation:Cluster:name' => 'Cluster Name',
	'Reconciliation:Cluster:org_id' => 'Organization',

	'Reconciliation:ClusterResource' => 'Cluster Resource',
	'Reconciliation:ClusterResource:name' => 'Resource Name',
	'Reconciliation:ClusterResource:cluster_id' => 'Cluster',

	'Reconciliation:AvailabilityGroup' => 'Availability Group',
	'Reconciliation:AvailabilityGroup:name' => 'Availability Group Name',
	'Reconciliation:AvailabilityGroup:cluster_id' => 'Cluster',

	'Reconciliation:DockerService' => 'Docker Service',
	'Reconciliation:DockerService:name' => 'Service Name',
	'Reconciliation:DockerService:cluster_id' => 'Cluster',

	'Reconciliation:KubernetesWorkload' => 'Kubernetes Workload',
	'Reconciliation:KubernetesWorkload:name' => 'Workload Name',
	'Reconciliation:KubernetesWorkload:namespace' => 'Namespace',
	'Reconciliation:KubernetesWorkload:cluster_id' => 'Cluster',

	'Reconciliation:LoadBalancer' => 'Load Balancer',
	'Reconciliation:LoadBalancer:name' => 'Load Balancer Name',
	'Reconciliation:LoadBalancer:org_id' => 'Organization',

	'Reconciliation:LBAddress' => 'Load Balancer Address',
	'Reconciliation:LBAddress:name' => 'Address Name',
	'Reconciliation:LBAddress:loadbalancer_id' => 'Load Balancer',
	'Reconciliation:LBAddress:address' => 'IP Address / FQDN',
	'Reconciliation:LBAddress:port' => 'Port',
));
