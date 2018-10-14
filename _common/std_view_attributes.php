<?php

// Assign standard view values in Smarty object 
   
$objView->assign('banner_url',IMAGES_URL.'/banner.PNG');
$objView->assign('background',IMAGES_URL.'/topbg.jpg');
$objView->assign('onload','document.forms[0].elements[0].focus()');
$objView->assign('css_url_default',CSS_URL.'/uhs_1.css') ;
$objView->assign('js_url_default',JS_URL.'/validateForm.js') ;
$objView->assign('page_head','page_head.inc.tpl');
$objView->assign('page_foot','page_foot.inc.tpl');

?>
