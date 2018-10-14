<?php
//   Page controller 

if(security('A') || security('P')){
if (isset($_POST['submit']))  {        // was this script invoked by a submitted form?
   include "m/model_submit.inc.php";
   include "v/view_submit.inc.php";
}else {
   include "m/model.inc.php";
   include "v/view.inc.php";
}
}
?>
