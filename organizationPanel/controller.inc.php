<?php
//   Page controller -

if(security('A') || security('O')){
if (isset($_POST['submit'])) {
   include "m/model_submit.inc.php";
   include "v/view_submit.inc.php";
}else {
   include "m/model.inc.php";
   include "v/view.inc.php";
}
}
?>
