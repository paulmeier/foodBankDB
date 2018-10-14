<?php
//   model - Administrator menu

//   This model uses an associative array in a Smarty object to pass data to the view


$data = array(	 	  
		array('legend'=>'Applications', 'tr'=>'row',
		   'links'=>array(
		           array('text'=>'Create Organization', 'url'=>'?organizationPanel'),
				   array('text'=>'Create Person', 'url'=>'?personPanel'),
				   array('text'=>'Search/Edit Organizations', 'url'=>'?searchOrganizations'),
				   array('text'=>'Search/Edit People', 'url'=>'?searchPeople'),
		           array('text'=>'Email Organizations/People', 'url'=>'?massEmail'),
				   array('text'=>'Edit Org/Person Passwords', 'url'=>'?modifyPass'))
			)
		);
$objView->assign('adminLinks',$data);

include 'std_links.inc.php';     

?>
