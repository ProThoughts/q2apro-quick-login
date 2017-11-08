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

	class q2apro_quicklogin_admin {

		// option's value is requested but the option has not yet been set
		function option_default($option) {
			switch($option) {
				case 'q2apro_quicklogin_enabled':
					return 1; // true
				default:
					return null;				
			}
		}
			
		function allow_template($template) {
			return ($template!='admin');
		}       
			
		function admin_form(&$qa_content){                       

			// process the admin form if admin hit Save-Changes-button
			$ok = null;
			if (qa_clicked('q2apro_quicklogin_save')) {
				qa_opt('q2apro_quicklogin_enabled', (bool)qa_post_text('q2apro_quicklogin_enabled')); // empty or 1
				$ok = qa_lang('admin/options_saved');
			}
			
			// form fields to display frontend for admin
			$fields = array();
			
			$fields[] = array(
				'type' => 'checkbox',
				'label' => qa_lang('q2apro_quicklogin_lang/enable_plugin'),
				'tags' => 'NAME="q2apro_quicklogin_enabled"',
				'value' => qa_opt('q2apro_quicklogin_enabled'),
			);
			
			return array(           
				'ok' => ($ok && !isset($error)) ? $ok : null,
				'fields' => $fields,
				'buttons' => array(
					array(
						'label' => qa_lang_html('main/save_button'),
						'tags' => 'name="q2apro_quicklogin_save"',
					),
				),
			);
		}
	}


/*
	Omit PHP closing tag to help avoid accidental output
*/