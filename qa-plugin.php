<?php

/*
	Plugin Name: Quick Login
	Plugin URI: http://www.q2apro.com/plugins/quick-login
	Plugin Description: Provides a quick login field for all your users.
	Plugin Version: 1.0
	Plugin Date: 2014-02-25
	Plugin Author: q2apro.com
	Plugin Author URI: http://www.q2apro.com
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: http://www.q2apro.com/pluginupdate?id=57
	
	Licence: Copyright © q2apro.com - All rights reserved

*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	// language file
	qa_register_plugin_phrases('q2apro-quicklogin-lang-*.php', 'q2apro_quicklogin_lang');

	// layer
	qa_register_plugin_layer('q2apro-quicklogin-layer.php', 'q2apro Quick Login Layer');

	// admin
	qa_register_plugin_module('module', 'q2apro-quicklogin-admin.php', 'q2apro_quicklogin_admin', 'q2apro Quick Login Admin');
        

/*
	Omit PHP closing tag to help avoid accidental output
*/