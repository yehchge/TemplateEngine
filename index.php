<?php
	//Setting up important stuff
	require_once('template.class.php');
	define('TEMPLATES_PATH', 'templates');
	define('PARTIALS_PATH', 'templates/partials');
	
	//Instanciate new object
	$template = new Template(TEMPLATES_PATH.'/test.tpl.html');

	//Assign values
	$template->assign('title', 'Userinfo');
	$template->assign('text', 'This is how dynamic data could look with out templating system.');
	
	//Use a partial
	$template->renderPartial('table_here', PARTIALS_PATH.'/table.part.html', array('username' => 'winfreak', 'age' => 18));
	
	
	//Showing content
	$template->show();