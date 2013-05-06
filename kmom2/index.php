<?php
//
// PHASE: BOOTSTRAP
//
define('LYCKA_INSTALL_PATH', dirname(__FILE__));
define('LYCKA_SITE_PATH', LYCKA_INSTALL_PATH . '/site');

require(LYCKA_INSTALL_PATH.'/src/CLycka/bootstrap.php');

$ly = CLycka::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();
