<?php
//   Page controller

if (security('A')) {                          //  user MUST be an administrator
if (isset($_POST['submit']))          // was this script invoked by a submitted form?
   include "m/model_submit.inc.php";
else
   include "m/model.inc.php";

include "v/view.inc.php";
}else
  header( 'Location: ?' );                 //   header to return to front controller
?>
