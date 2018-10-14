<?php

$objView->assign('script',$script);
$objView->assign('username',$_username);
$objView->assign('first',$_fname);
$objView->assign('last',$_lname);
$objView->assign('age',$_age);

if(isset($_SESSION[AUTHORIZE])) $acc = $_SESSION[AUTHORIZE];          // access privilege for current user
$objView->assign('admin',$acc);

if ($_access == 'A') $_admin_access = 'yes';
else $_emp_access = 'yes';

if ($_gender == 'M') $_male_checked = 'yes';
if ($_gender == 'F') $_female_checked = 'yes';
$objView->assign('male_checked',$_male_checked);
$objView->assign('female_checked',$_female_checked);

$objView->assign('admin_access',$_admin_access);
$objView->assign('emp_access',$_emp_access);

include 'std_links.inc.php';

?>
