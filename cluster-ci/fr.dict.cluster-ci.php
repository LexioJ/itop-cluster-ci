<?php
/**
 * Localized data - French
 *
 * @copyright   Copyright (C) 2024
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// ================================
	// Cluster
	// ================================
	'Class:Cluster' => 'Cluster',
	'Class:Cluster+' => 'Cluster de serveurs (WSFC, Docker Swarm, Kubernetes, etc.)',
	'Class:Cluster/Attribute:name' => 'Nom',
	'Class:Cluster/Attribute:name+' => 'Nom du cluster',
	'Class:Cluster/Attribute:org_id' => 'Organisation',
	'Class:Cluster/Attribute:org_id+' => 'Organisation propriétaire du cluster',
	'Class:Cluster/Attribute:description' => 'Description',
	'Class:Cluster/Attribute:description+' => 'Description du cluster',
	'Class:Cluster/Attribute:business_criticity' => 'Criticité',
	'Class:Cluster/Attribute:business_criticity+' => 'Impact métier en cas de défaillance',
	'Class:Cluster/Attribute:business_criticity/Value:low' => 'Faible',
	'Class:Cluster/Attribute:business_criticity/Value:medium' => 'Moyen',
	'Class:Cluster/Attribute:business_criticity/Value:high' => 'Élevé',
	'Class:Cluster/Attribute:cluster_type' => 'Type de cluster',
	'Class:Cluster/Attribute:cluster_type+' => 'Technologie de clustering',
	'Class:Cluster/Attribute:cluster_type/Value:failover' => 'Cluster de basculement (WSFC)',
	'Class:Cluster/Attribute:cluster_type/Value:nlb' => 'Équilibrage de charge réseau (NLB)',
	'Class:Cluster/Attribute:cluster_type/Value:storage_spaces_direct' => 'Storage Spaces Direct',
	'Class:Cluster/Attribute:cluster_type/Value:docker_swarm' => 'Docker Swarm',
	'Class:Cluster/Attribute:cluster_type/Value:kubernetes' => 'Kubernetes',
	'Class:Cluster/Attribute:cluster_type/Value:generic' => 'Générique',
	'Class:Cluster/Attribute:quorum_type' => 'Type de quorum',
	'Class:Cluster/Attribute:quorum_type+' => 'Mécanisme de quorum pour la disponibilité',
	'Class:Cluster/Attribute:quorum_type/Value:node_majority' => 'Majorité des nœuds',
	'Class:Cluster/Attribute:quorum_type/Value:node_and_disk' => 'Nœud et disque',
	'Class:Cluster/Attribute:quorum_type/Value:node_and_fileshare' => 'Nœud et partage de fichiers',
	'Class:Cluster/Attribute:quorum_type/Value:cloud_witness' => 'Témoin cloud',
	'Class:Cluster/Attribute:quorum_type/Value:no_quorum' => 'Sans quorum',
	'Class:Cluster/Attribute:quorum_resource' => 'Ressource de quorum',
	'Class:Cluster/Attribute:quorum_resource+' => 'Chemin ou ressource du témoin (ex: \\\\serveur\\temoin)',
	'Class:Cluster/Attribute:cluster_ip' => 'IP virtuelle du cluster',
	'Class:Cluster/Attribute:cluster_ip+' => 'Adresse IP virtuelle du cluster',
	'Class:Cluster/Attribute:cluster_hostname' => 'Nom d\'hôte virtuel',
	'Class:Cluster/Attribute:cluster_hostname+' => 'Nom d\'hôte virtuel du cluster (CNO pour WSFC)',
	'Class:Cluster/Attribute:location_id' => 'Emplacement principal',
	'Class:Cluster/Attribute:location_id+' => 'Site principal du cluster',
	'Class:Cluster/Attribute:redundancy_location_id' => 'Emplacement de redondance',
	'Class:Cluster/Attribute:redundancy_location_id+' => 'Site secondaire pour cluster étendu (stretch cluster)',
	'Class:Cluster/Attribute:move2production' => 'Mise en production',
	'Class:Cluster/Attribute:move2production+' => 'Date de mise en production',
	'Class:Cluster/Attribute:nodes_list' => 'Nœuds',
	'Class:Cluster/Attribute:nodes_list+' => 'Serveurs et machines virtuelles membres du cluster',
	'Class:Cluster/Attribute:resources_list' => 'Ressources',
	'Class:Cluster/Attribute:resources_list+' => 'Ressources et services hébergés sur le cluster',
	'Class:Cluster/Attribute:volumes_list' => 'Volumes',
	'Class:Cluster/Attribute:volumes_list+' => 'Volumes partagés (CSV, disque de quorum, etc.)',
	'Class:Cluster/Attribute:vlans_list' => 'VLANs',
	'Class:Cluster/Attribute:vlans_list+' => 'Réseaux VLAN du cluster',

	// ================================
	// lnkClusterToFunctionalCI
	// ================================
	'Class:lnkClusterToFunctionalCI' => 'Lien Cluster / CI Fonctionnel',
	'Class:lnkClusterToFunctionalCI+' => 'Association entre un cluster et ses nœuds',
	'Class:lnkClusterToFunctionalCI/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToFunctionalCI/Attribute:cluster_id+' => 'Cluster associé',
	'Class:lnkClusterToFunctionalCI/Attribute:functionalci_id' => 'CI fonctionnel',
	'Class:lnkClusterToFunctionalCI/Attribute:functionalci_id+' => 'Nœud du cluster (serveur, machine virtuelle)',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role' => 'Rôle du nœud',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role+' => 'Fonction du nœud dans le cluster',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:active' => 'Actif',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:passive' => 'Passif',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:witness' => 'Témoin',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:arbiter' => 'Arbitre',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:manager' => 'Gestionnaire (Manager)',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:worker' => 'Worker',
	'Class:lnkClusterToFunctionalCI/Attribute:node_role/Value:control_plane' => 'Plan de contrôle',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status' => 'Statut du nœud',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status+' => 'État actuel du nœud',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:up' => 'Opérationnel',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:down' => 'Hors service',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:paused' => 'En pause',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:joining' => 'En cours d\'intégration',
	'Class:lnkClusterToFunctionalCI/Attribute:node_status/Value:draining' => 'En cours de drainage',

	// ================================
	// lnkClusterToVolume
	// ================================
	'Class:lnkClusterToVolume' => 'Lien Cluster / Volume',
	'Class:lnkClusterToVolume+' => 'Association entre un cluster et ses volumes partagés',
	'Class:lnkClusterToVolume/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToVolume/Attribute:cluster_id+' => 'Cluster utilisant le volume',
	'Class:lnkClusterToVolume/Attribute:volume_id' => 'Volume',
	'Class:lnkClusterToVolume/Attribute:volume_id+' => 'Volume logique partagé',
	'Class:lnkClusterToVolume/Attribute:volume_usage' => 'Usage du volume',
	'Class:lnkClusterToVolume/Attribute:volume_usage+' => 'Type d\'utilisation du volume dans le cluster',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:csv' => 'Volume partagé (CSV)',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:quorum_disk' => 'Disque de quorum',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:data' => 'Données',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:shared_folder' => 'Dossier partagé',
	'Class:lnkClusterToVolume/Attribute:volume_usage/Value:witness' => 'Témoin',

	// ================================
	// lnkClusterToVLAN
	// ================================
	'Class:lnkClusterToVLAN' => 'Lien Cluster / VLAN',
	'Class:lnkClusterToVLAN+' => 'Association entre un cluster et ses réseaux VLAN',
	'Class:lnkClusterToVLAN/Attribute:cluster_id' => 'Cluster',
	'Class:lnkClusterToVLAN/Attribute:cluster_id+' => 'Cluster utilisant le VLAN',
	'Class:lnkClusterToVLAN/Attribute:vlan_id' => 'VLAN',
	'Class:lnkClusterToVLAN/Attribute:vlan_id+' => 'Réseau VLAN',
	'Class:lnkClusterToVLAN/Attribute:network_usage' => 'Usage réseau',
	'Class:lnkClusterToVLAN/Attribute:network_usage+' => 'Type de trafic réseau',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:heartbeat' => 'Heartbeat',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:client' => 'Client',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:storage' => 'Stockage',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:management' => 'Gestion',
	'Class:lnkClusterToVLAN/Attribute:network_usage/Value:replication' => 'Réplication',

	// ================================
	// ClusterResource
	// ================================
	'Class:ClusterResource' => 'Ressource de cluster',
	'Class:ClusterResource+' => 'Service ou rôle clusterisé hébergé sur un cluster',
	'Class:ClusterResource/Attribute:name' => 'Nom',
	'Class:ClusterResource/Attribute:name+' => 'Nom de la ressource',
	'Class:ClusterResource/Attribute:org_id' => 'Organisation',
	'Class:ClusterResource/Attribute:org_id+' => 'Organisation propriétaire',
	'Class:ClusterResource/Attribute:description' => 'Description',
	'Class:ClusterResource/Attribute:description+' => 'Description de la ressource',
	'Class:ClusterResource/Attribute:cluster_id' => 'Cluster',
	'Class:ClusterResource/Attribute:cluster_id+' => 'Cluster hébergeant cette ressource',
	'Class:ClusterResource/Attribute:resource_type' => 'Type de ressource',
	'Class:ClusterResource/Attribute:resource_type+' => 'Type de service clusterisé',
	'Class:ClusterResource/Attribute:resource_type/Value:sql_ag' => 'Groupe de disponibilité SQL',
	'Class:ClusterResource/Attribute:resource_type/Value:file_server' => 'Serveur de fichiers',
	'Class:ClusterResource/Attribute:resource_type/Value:dhcp' => 'Serveur DHCP',
	'Class:ClusterResource/Attribute:resource_type/Value:print_server' => 'Serveur d\'impression',
	'Class:ClusterResource/Attribute:resource_type/Value:generic_service' => 'Service générique',
	'Class:ClusterResource/Attribute:resource_type/Value:docker_service' => 'Service Docker',
	'Class:ClusterResource/Attribute:resource_type/Value:kubernetes_workload' => 'Charge de travail Kubernetes',
	'Class:ClusterResource/Attribute:resource_type/Value:hyper_v' => 'Hyper-V',
	'Class:ClusterResource/Attribute:resource_type/Value:dns' => 'Serveur DNS',
	'Class:ClusterResource/Attribute:resource_type/Value:exchange_dag' => 'Groupe de disponibilité Exchange (DAG)',
	'Class:ClusterResource/Attribute:status' => 'Statut',
	'Class:ClusterResource/Attribute:status+' => 'État de la ressource',
	'Class:ClusterResource/Attribute:status/Value:online' => 'En ligne',
	'Class:ClusterResource/Attribute:status/Value:offline' => 'Hors ligne',
	'Class:ClusterResource/Attribute:status/Value:partially_online' => 'Partiellement en ligne',
	'Class:ClusterResource/Attribute:status/Value:failed' => 'Défaillant',
	'Class:ClusterResource/Attribute:status/Value:pending' => 'En attente',
	'Class:ClusterResource/Attribute:business_criticity' => 'Criticité',
	'Class:ClusterResource/Attribute:business_criticity+' => 'Impact métier en cas de défaillance',
	'Class:ClusterResource/Attribute:business_criticity/Value:low' => 'Faible',
	'Class:ClusterResource/Attribute:business_criticity/Value:medium' => 'Moyen',
	'Class:ClusterResource/Attribute:business_criticity/Value:high' => 'Élevé',
	'Class:ClusterResource/Attribute:virtual_ip' => 'IP virtuelle',
	'Class:ClusterResource/Attribute:virtual_ip+' => 'Adresse IP virtuelle de la ressource',
	'Class:ClusterResource/Attribute:virtual_hostname' => 'Nom d\'hôte virtuel',
	'Class:ClusterResource/Attribute:virtual_hostname+' => 'Nom d\'hôte virtuel de la ressource',
	'Class:ClusterResource/Attribute:owner_node_id' => 'Nœud propriétaire',
	'Class:ClusterResource/Attribute:owner_node_id+' => 'Nœud actif actuellement',
	'Class:ClusterResource/Attribute:move2production' => 'Mise en production',
	'Class:ClusterResource/Attribute:move2production+' => 'Date de mise en production',

	// ================================
	// AvailabilityGroup
	// ================================
	'Class:AvailabilityGroup' => 'Groupe de disponibilité',
	'Class:AvailabilityGroup+' => 'Groupe de disponibilité SQL Server Always On',
	'Class:AvailabilityGroup/Attribute:listener_name' => 'Nom du listener',
	'Class:AvailabilityGroup/Attribute:listener_name+' => 'Nom du listener de disponibilité (ex: SQLAG01)',
	'Class:AvailabilityGroup/Attribute:listener_ip' => 'IP du listener',
	'Class:AvailabilityGroup/Attribute:listener_ip+' => 'Adresse IP du listener',
	'Class:AvailabilityGroup/Attribute:listener_port' => 'Port du listener',
	'Class:AvailabilityGroup/Attribute:listener_port+' => 'Port TCP du listener (défaut: 1433)',
	'Class:AvailabilityGroup/Attribute:availability_mode' => 'Mode de disponibilité',
	'Class:AvailabilityGroup/Attribute:availability_mode+' => 'Mode de réplication des données',
	'Class:AvailabilityGroup/Attribute:availability_mode/Value:synchronous_commit' => 'Commit synchrone',
	'Class:AvailabilityGroup/Attribute:availability_mode/Value:asynchronous_commit' => 'Commit asynchrone',
	'Class:AvailabilityGroup/Attribute:failover_mode' => 'Mode de basculement',
	'Class:AvailabilityGroup/Attribute:failover_mode+' => 'Type de basculement automatique',
	'Class:AvailabilityGroup/Attribute:failover_mode/Value:automatic' => 'Automatique',
	'Class:AvailabilityGroup/Attribute:failover_mode/Value:manual' => 'Manuel',
	'Class:AvailabilityGroup/Attribute:replicas_list' => 'Répliques',
	'Class:AvailabilityGroup/Attribute:replicas_list+' => 'Serveurs réplicas du groupe',
	'Class:AvailabilityGroup/Attribute:databases_list' => 'Bases de données',
	'Class:AvailabilityGroup/Attribute:databases_list+' => 'Bases de données du groupe',

	// ================================
	// lnkAvailabilityGroupToServer
	// ================================
	'Class:lnkAvailabilityGroupToServer' => 'Lien Groupe de disponibilité / Serveur',
	'Class:lnkAvailabilityGroupToServer+' => 'Association entre un groupe et ses réplicas',
	'Class:lnkAvailabilityGroupToServer/Attribute:ag_id' => 'Groupe de disponibilité',
	'Class:lnkAvailabilityGroupToServer/Attribute:ag_id+' => 'Groupe de disponibilité',
	'Class:lnkAvailabilityGroupToServer/Attribute:server_id' => 'Serveur',
	'Class:lnkAvailabilityGroupToServer/Attribute:server_id+' => 'Serveur réplica',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role' => 'Rôle de réplique',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role+' => 'Rôle de ce serveur dans le groupe',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role/Value:primary' => 'Primaire',
	'Class:lnkAvailabilityGroupToServer/Attribute:replica_role/Value:secondary' => 'Secondaire',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state' => 'État de synchronisation',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state+' => 'État de synchronisation des données',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:synchronized' => 'Synchronisé',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:synchronizing' => 'En synchronisation',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:not_synchronizing' => 'Non synchronisé',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:reverting' => 'En retour',
	'Class:lnkAvailabilityGroupToServer/Attribute:sync_state/Value:initializing' => 'Initialisation',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode' => 'Mode de disponibilité',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode+' => 'Mode de réplication pour cette réplique',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode/Value:synchronous_commit' => 'Commit synchrone',
	'Class:lnkAvailabilityGroupToServer/Attribute:availability_mode/Value:asynchronous_commit' => 'Commit asynchrone',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode' => 'Mode de basculement',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode+' => 'Type de basculement pour cette réplique',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode/Value:automatic' => 'Automatique',
	'Class:lnkAvailabilityGroupToServer/Attribute:failover_mode/Value:manual' => 'Manuel',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary' => 'Secondaire lisible',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary+' => 'Autorise la lecture sur cette réplique',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary/Value:yes' => 'Oui',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary/Value:no' => 'Non',
	'Class:lnkAvailabilityGroupToServer/Attribute:readable_secondary/Value:read_intent_only' => 'Intention de lecture seule',

	// ================================
	// lnkAvailabilityGroupToDatabase
	// ================================
	'Class:lnkAvailabilityGroupToDatabase' => 'Lien Groupe de disponibilité / Base de données',
	'Class:lnkAvailabilityGroupToDatabase+' => 'Association entre un groupe et ses bases de données',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:ag_id' => 'Groupe de disponibilité',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:ag_id+' => 'Groupe contenant la base',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:databaseschema_id' => 'Base de données',
	'Class:lnkAvailabilityGroupToDatabase/Attribute:databaseschema_id+' => 'Schéma de base de données',

	// ================================
	// DockerService
	// ================================
	'Class:DockerService' => 'Service Docker',
	'Class:DockerService+' => 'Service Docker Swarm déployé sur un cluster',
	'Class:DockerService/Attribute:image' => 'Image Docker',
	'Class:DockerService/Attribute:image+' => 'Image Docker utilisée (ex: nginx:1.25)',
	'Class:DockerService/Attribute:replicas_desired' => 'Répliques souhaitées',
	'Class:DockerService/Attribute:replicas_desired+' => 'Nombre de réplicas souhaité',
	'Class:DockerService/Attribute:replicas_running' => 'Répliques actives',
	'Class:DockerService/Attribute:replicas_running+' => 'Nombre de réplicas actives',
	'Class:DockerService/Attribute:published_ports' => 'Ports publiés',
	'Class:DockerService/Attribute:published_ports+' => 'Ports publiés (ex: 80:8080, 443:8443)',
	'Class:DockerService/Attribute:stack_name' => 'Nom du stack',
	'Class:DockerService/Attribute:stack_name+' => 'Nom du stack Docker Swarm',

	// ================================
	// KubernetesWorkload
	// ================================
	'Class:KubernetesWorkload' => 'Charge de travail Kubernetes',
	'Class:KubernetesWorkload+' => 'Workload Kubernetes déployé sur un cluster',
	'Class:KubernetesWorkload/Attribute:namespace' => 'Namespace',
	'Class:KubernetesWorkload/Attribute:namespace+' => 'Namespace Kubernetes (ex: production)',
	'Class:KubernetesWorkload/Attribute:workload_type' => 'Type de workload',
	'Class:KubernetesWorkload/Attribute:workload_type+' => 'Type de ressource Kubernetes',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:deployment' => 'Deployment',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:statefulset' => 'StatefulSet',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:daemonset' => 'DaemonSet',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:job' => 'Job',
	'Class:KubernetesWorkload/Attribute:workload_type/Value:cronjob' => 'CronJob',
	'Class:KubernetesWorkload/Attribute:image' => 'Image conteneur',
	'Class:KubernetesWorkload/Attribute:image+' => 'Image du conteneur (ex: myapp:2.1)',
	'Class:KubernetesWorkload/Attribute:replicas_desired' => 'Répliques souhaitées',
	'Class:KubernetesWorkload/Attribute:replicas_desired+' => 'Nombre de réplicas souhaité',
	'Class:KubernetesWorkload/Attribute:replicas_running' => 'Répliques actives',
	'Class:KubernetesWorkload/Attribute:replicas_running+' => 'Nombre de réplicas actives',
	'Class:KubernetesWorkload/Attribute:container_ports' => 'Ports conteneur',
	'Class:KubernetesWorkload/Attribute:container_ports+' => 'Ports des conteneurs (ex: 8080, 8443)',
	'Class:KubernetesWorkload/Attribute:service_type' => 'Type de service',
	'Class:KubernetesWorkload/Attribute:service_type+' => 'Type de service Kubernetes',
	'Class:KubernetesWorkload/Attribute:service_type/Value:clusterip' => 'ClusterIP',
	'Class:KubernetesWorkload/Attribute:service_type/Value:nodeport' => 'NodePort',
	'Class:KubernetesWorkload/Attribute:service_type/Value:loadbalancer' => 'LoadBalancer',
	'Class:KubernetesWorkload/Attribute:service_type/Value:none' => 'Aucun',

	// ================================
	// LoadBalancer
	// ================================
	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer+' => 'Équilibreur de charge (matériel, logiciel ou cloud)',
	'Class:LoadBalancer/Attribute:name' => 'Nom',
	'Class:LoadBalancer/Attribute:name+' => 'Nom du Load Balancer',
	'Class:LoadBalancer/Attribute:org_id' => 'Organisation',
	'Class:LoadBalancer/Attribute:org_id+' => 'Organisation propriétaire',
	'Class:LoadBalancer/Attribute:description' => 'Description',
	'Class:LoadBalancer/Attribute:description+' => 'Description du Load Balancer',
	'Class:LoadBalancer/Attribute:business_criticity' => 'Criticité',
	'Class:LoadBalancer/Attribute:business_criticity+' => 'Impact métier en cas de défaillance',
	'Class:LoadBalancer/Attribute:business_criticity/Value:low' => 'Faible',
	'Class:LoadBalancer/Attribute:business_criticity/Value:medium' => 'Moyen',
	'Class:LoadBalancer/Attribute:business_criticity/Value:high' => 'Élevé',
	'Class:LoadBalancer/Attribute:lb_type' => 'Type de Load Balancer',
	'Class:LoadBalancer/Attribute:lb_type+' => 'Type d\'équilibreur de charge',
	'Class:LoadBalancer/Attribute:lb_type/Value:hardware' => 'Matériel',
	'Class:LoadBalancer/Attribute:lb_type/Value:software' => 'Logiciel',
	'Class:LoadBalancer/Attribute:lb_type/Value:cloud' => 'Cloud',
	'Class:LoadBalancer/Attribute:lb_type/Value:nlb' => 'NLB (Network Load Balancer)',
	'Class:LoadBalancer/Attribute:move2production' => 'Mise en production',
	'Class:LoadBalancer/Attribute:move2production+' => 'Date de mise en production',
	'Class:LoadBalancer/Attribute:backend_nodes_list' => 'Nœuds backend',
	'Class:LoadBalancer/Attribute:backend_nodes_list+' => 'Serveurs et CIs backend',
	'Class:LoadBalancer/Attribute:addresses_list' => 'Adresses',
	'Class:LoadBalancer/Attribute:addresses_list+' => 'Adresses virtuelles (VIP + Port)',

	// ================================
	// LBAddress
	// ================================
	'Class:LBAddress' => 'Adresse Load Balancer',
	'Class:LBAddress+' => 'Adresse virtuelle (VIP + Port) d\'un Load Balancer',
	'Class:LBAddress/Attribute:name' => 'Nom',
	'Class:LBAddress/Attribute:name+' => 'Nom de l\'adresse',
	'Class:LBAddress/Attribute:org_id' => 'Organisation',
	'Class:LBAddress/Attribute:org_id+' => 'Organisation propriétaire',
	'Class:LBAddress/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:LBAddress/Attribute:loadbalancer_id+' => 'Load Balancer associé',
	'Class:LBAddress/Attribute:address' => 'Adresse',
	'Class:LBAddress/Attribute:address+' => 'Adresse IP ou FQDN',
	'Class:LBAddress/Attribute:port' => 'Port',
	'Class:LBAddress/Attribute:port+' => 'Numéro de port',
	'Class:LBAddress/Attribute:business_criticity' => 'Criticité',
	'Class:LBAddress/Attribute:business_criticity+' => 'Impact métier en cas de défaillance',
	'Class:LBAddress/Attribute:business_criticity/Value:low' => 'Faible',
	'Class:LBAddress/Attribute:business_criticity/Value:medium' => 'Moyen',
	'Class:LBAddress/Attribute:business_criticity/Value:high' => 'Élevé',

	// ================================
	// lnkLoadBalancerToFunctionalCI
	// ================================
	'Class:lnkLoadBalancerToFunctionalCI' => 'Lien Load Balancer / CI Fonctionnel',
	'Class:lnkLoadBalancerToFunctionalCI+' => 'Association entre un Load Balancer et ses nœuds backend',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:loadbalancer_id+' => 'Load Balancer',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:functionalci_id' => 'CI fonctionnel',
	'Class:lnkLoadBalancerToFunctionalCI/Attribute:functionalci_id+' => 'Nœud backend',

	// ================================
	// Extended Class: Server
	// ================================
	'Class:Server/Attribute:cluster_list' => 'Clusters',
	'Class:Server/Attribute:cluster_list+' => 'Clusters auxquels ce serveur appartient',

	// ================================
	// Extended Class: DatabaseSchema
	// ================================
	'Class:DatabaseSchema/Attribute:availabilitygroup_list' => 'Groupes de disponibilité',
	'Class:DatabaseSchema/Attribute:availabilitygroup_list+' => 'Groupes de disponibilité SQL contenant cette base',

	// ================================
	// Menus
	// ================================
	'Menu:Cluster' => 'Clusters',
	'Menu:Cluster+' => 'Gestion des clusters',
	'Menu:ClusterResource' => 'Ressources de cluster',
	'Menu:ClusterResource+' => 'Ressources et services clusterisés',
	'Menu:LoadBalancer' => 'Load Balancers',
	'Menu:LoadBalancer+' => 'Équilibreurs de charge',
));
