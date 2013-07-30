<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package LyckaCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('LYCKA_INSTALL_PATH', dirname(__FILE__));
define('LYCKA_SITE_PATH', LYCKA_INSTALL_PATH . '/site');

require(LYCKA_INSTALL_PATH.'/src/bootstrap.php');

$ly = CLycka::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();
