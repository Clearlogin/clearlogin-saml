<?php

	//Load moodle
	require_once('../../config.php');

	//Load Clearlogin SAML libs
	require_once '_toolkit_loader.php';

	require_once('functions.php');

	$settings = get_saml_settings();

	$auth = new Clearlogin_Saml2_Auth($settings);
	$settings = $auth->getSettings();
	$metadata = $settings->getSPMetadata();

	header('Content-Type: text/xml');
	echo $metadata;
