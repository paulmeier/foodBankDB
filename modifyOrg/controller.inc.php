<?php
//   Page controller - 

          
if (security('A')){          
		if (isset($_POST['submit'])) {
		   include "m/model_submit.inc.php";
		   include "v/view_submit.inc.php";
		}
		else if (isset($_POST['delete'])) {
		   include "m/model_delete.inc.php";
		   include "v/view_delete.inc.php";
		}
		else {
		   include "m/model.inc.php";
		   include "v/view.inc.php";
		}
} else 
    {header( 'Location: ?' );}
?>
