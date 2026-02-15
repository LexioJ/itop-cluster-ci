<?php
//
// iTop module definition file
// Module: cluster-ci/1.0.0
//
// Generic Cluster Integration for iTop 3.2+
// Provides: Cluster, ClusterResource, AvailabilityGroup, DockerService,
//           KubernetesWorkload, LoadBalancer, LBAddress
//
// Based on prior work by lndevnull (original cluster-ci) and
// rogermartensson (LoadBalancer extension).
//

SetupWebPage::AddModule(
	__FILE__,
	'cluster-ci/1.0.0',
	array(
		// Identification
		//
		'label' => 'Cluster Integration',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-config-mgmt/3.0.0',
			'itop-datacenter-mgmt/3.0.0',
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.cluster-ci.php',
		),
		'webservice' => array(),
		'data.struct' => array(),
		'data.sample' => array(),

		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => '',

		// Default settings
		//
		'settings' => array(),
	)
);
