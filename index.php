<?php

//  IMPORTANT NOTE:
//
//  Front Controller
//
// The Front Controller is responsible for processing application requests from browsers.
// It has four functions:
//    Initialize application classes, functions, constants, and variables
//    Administer the session (the "security" function)
//    Process the request to determine what is requested (the "Web handler" function)
//    Dispatch the request to the proper Page Controller (the "Dispatcher" function)
//
// Communication of data from model to view is via an XML file.
//
// This application uses a directory structure as follows:
//    _view/css/         contains css files
//    _view/images/      contains images
//    _view/js/          contains Javascript files
//    _common/           contains common scripts
//    _smarty/           contains smarty files
//    _view/templates    contains app`s Smarty screen templates
//    other directories  contain M-V-C scripts for app`s various web pages
//
// The request URL may have any of the following forms;
//    http://app_url/
//    http://app_url/?page_name&p1=v1&p2=v2...
//    http://app_url/index.php
//    http://app_url/index.php?page_name&p1=v1&p2=v2...
//
// The Dispatcher resolves the page controller address as:
//    page_name/controller.inc.php
//
// This Front Controller MUST reside in the application`s root directory.
//
// A session is started/maintained for each request.
//
// The default config_app.inc.php sets the following:
//   $dbHost 
//   $dbName 
//   $dbUser 
//   $dbPassword 
//   $newUser_from 
//   $newApp_from 
//   $intentToStay_from
//   MAX_INACTIVITY = 30 
//
//   ISU_URL == 'http://www.ilstu.edu'
//
// Modify config_app.inc.php for your installation.
//
// The security of the system would be enhanced by placing all the other app scripts
// outside of the web directory path


//  INITIALIZE - set system level variables
require_once 'config_app.inc.php' ;                      // this app`s system configuration
require_once 'classes_and_functions.inc.php' ;           // classes & functions used by this and other apps
require_once 'ADOdb_extensions.inc.php';                 // abstract interface for DB
require_once 'Smarty_initialize.inc.php' ;               // initialize presentation interface
require_once 'session_initialize.inc.php' ;              // start session and initialize 'post back' array


// WEB HANDLER
$page_name = key($_GET);                                 // page name is retrieved as the first key


// SECURITY
require_once 'session_restore.inc.php' ;                  // check timeout; restore variables


// DISPATCHER
if ($page_name == '')                                     // was a page specified on URI?
    $page_name = $_current_menu ;                         //    no, go to appropriate menu

if (!file_exists(APP_PATH.'/'.$page_name.'/controller.inc.php'))    // does page exist?
     $page_name = ERROR_PAGE ;                                      //    no, use 404 error page
    
define  (PAGE_PATH, APP_PATH.'/'.$page_name);              // make path to page a constant
require_once (PAGE_PATH.'/controller.inc.php') ;           // get page controller script

?>
