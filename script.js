$(document).ready(function(){
	$('.qa-nav-user-login a, #qa-login').click( function(ev){
		ev.preventDefault();
		$('#loginBox').slideToggle('fast');
	});
	// CSS
	var q2aproQuickLoginCSS = '#loginBox{display:none;position:absolute;right:6px;top:34px;z-index:529;font-size:12px}#loginForm{width:248px;background:#d2e0ea;border:1px solid #899caa;-webkit-border-radius:7px;-moz-border-radius:7px;border-radius:7px;margin-top:-1px;padding:6px !important;display:block !important}#loginForm fieldset{margin:0 0 12px 0;display:block;border:0;padding:0}#loginForm #checkRemember{width:auto !important;margin:1px 9px 0 0;float:left;padding:0;border:0}#loginbody label{color:#3a454d;margin:9px 0 0 0;display:block}#loginbody label.remember-label{width:100%;line-height:17px !important;margin:0 !important}#loginbody p#form-login-remember{width:120px;margin:10px 0 0 0;float:left}#loginForm .inputbox{margin:0;width:91% !important;padding:8px;border:1px solid #899caa;background:#f1f1f1;color:#3a454d;font-size:12px;font-weight:bold;-moz-box-shadow:0 1px 1px #ccc inset;-webkit-box-shadow:0 1px 1px #ccc inset;box-shadow:0 1px 1px #ccc inset;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}#loginForm .inputbox:focus{background-color:#fff} /* snow theme fix: */ #qa-login-group { position:relative; }';
	$('head').append('<style type="text/css">' + q2aproQuickLoginCSS + '</style>');
});
