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

	class qa_html_theme_layer extends qa_html_theme_base 
	{
		
		function head_script()
		{
			qa_html_theme_base::head_script();
			if(qa_opt('q2apro_quicklogin_enabled')) {
				$this->output('<script type="text/javascript" src="'.QA_HTML_THEME_LAYER_URLTOROOT.'script.js"></script>');  
			}
		}
		
		function nav_user_search() {
			qa_html_theme_base::nav_user_search();
			
			// loginbox layer with redirect to recent page ?to=
			if(!qa_is_logged_in() && qa_opt('q2apro_quicklogin_enabled')) {
				$topath=qa_get('to');
				$userlinks=qa_get_login_links(qa_path_to_root(), isset($topath) ? $topath : qa_path($this->request, $_GET, ''));
				// CSS fix for Snow Theme
				if(qa_opt('site_theme')=='Snow') {
					$this->output('<style type="text/css">
						#loginBox {
							right:265px !important;
						}
					</style>');
				}
				$this->output('<div id="loginBox" style="display:none;"> 
						<form method="post" action="'.qa_html(@$userlinks['login']).'" id="loginForm">
							<fieldset id="loginbody">
								<p id="form-login-username">
									<label>'.qa_lang('users/email_handle_label').'</label>
									<input name="emailhandle" VALUE="" TYPE="text" size="18" class="inputbox" required>
								</p>
								<p id="form-login-password">
									<label>'.qa_lang('users/password_label').'</label>
									<input name="password" TYPE="password" VALUE="" size="18" class="inputbox" required>
								</p>
								<input type="submit" value="'.qa_lang('users/login_button').'" class="qa-form-basic-button" style="margin-right:12px;float:left;">
								<p id="form-login-remember">
									<input name="remember" TYPE="checkbox" VALUE="1" checked="checked" id="checkRemember" class="inputbox" >
									<label for="checkRemember" class="remember-label">'.qa_lang('users/remember').'</label>
								</p>
							</fieldset>
							<input type="hidden" name="dologin" value="1">
							<input type="hidden" name="code" value="'.qa_get_form_security_code('login').'">
						</form>
				</div>');
			}
		}


	} // end qa_html_theme_layer
	

/*
	Omit PHP closing tag to help avoid accidental output
*/