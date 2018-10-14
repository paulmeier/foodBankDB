<?php

// This script is executed by the Front Controller.

// There are three types of users; the public, employees, and administrators.
// Public users do not log in.
// $_SESSION[AUTHORIZE] is set to E for employees and A for administrators.


if (security('P')) {                                    // user authorization is at least 'E'?
    $_username = $_SESSION['username'] ;                        //    user is logged in
    if ((time() - $_SESSION['LA']) > MAX_INACTIVITY)    //    check for session timed out?
       $page_name = TIMEOUT ;                           //       yes - logout & display login screen
}else {                                                 // user not logged in
    $_username = '';
    $_SESSION['panel']= '_default' ;                 //    ensure menu is set to public panel
}

$_SESSION['LA']= time();                                // reset time of Last Access
$_current_menu = $_SESSION['panel'] ;                   // set current menu for Front Controller

   
?>
