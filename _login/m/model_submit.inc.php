<?php
//  Login model executed when the login form is submitted


   if(isset($_POST['username'])) {$_username = $_POST['username'];}
   if(isset($_POST['pass'])) {$_pass = $_POST['pass'];}


   $redirect = MAX_INACTIVITY ;                // default is 30 minutes
   $panel = 'default';                         // default screen
   $_error  = '' ;

   if(($_username=="" || $_pass=="")) {                                    // one or both blank?
      $_error="Please Enter both Username and Password";                   //    yes
      $redirect =  '';
   } else {                                                            //    no, neither blank
         $db = ADOdb_connect($cfg);                                    // connect to database
	       $query = "SELECT * FROM users where username= '".$_username."';";     // select on username
	       $rs = ADOdb_query($db,$query);                                // Perform SQL query

	       if (!$rs)                                                     // did we find user?
	             $_error="USERNAME, ".$_username.", Not Found.";                 //   no
	       else {                                                        //   yes,
	           if ($_pass != $rs->fields['password'])                    //      check password
	               $_error="Check your Username and Password";               //      did not match
	           else {                                                    //      got a match, get authorization code
	              $query2 = "SELECT access FROM user_info where username= '".$_username."';";
	              $rs2 = ADOdb_query($db,$query2);                       //      perform SQL SELECT Statement
	              if (!$rs2)                                             //      query fail?
	                $_error = "Login error. Please try again.";          //         yes, user not in user_info table
	              else {                                                 //         no, have user 
	                $access= $rs2->fields['access'];                     //         get authorization code
	                $_error="";                                          //         user now Logged In
	            	$current_time = time();                                //         get current timestamp
            		$_SESSION['username']= $_username;                             //         set session variables
	            	$_SESSION[AUTHORIZE]= $access;
	            	$_SESSION['LA']= $current_time;                        //         time of Last Access
	            	if ($access == 'A') $panel = 'adminPanel';             //         it`s an administrator
	            	else if ($access =='O') $panel = 'organizationPanel';          //         nope, it`s employee login...
	                else if ($access =='P') $panel = 'personPanel';
					$_SESSION['panel']= $panel;
                  $redirect = '0;url='.APP_URL.'/?'.$panel ;          //         no delay - display '$panel'
	              }
	           }
	       }
	      ADOdb_close($db);                                              // disconnect
   }

// move Model values into Smarty View array
$objView->assign('errorMsg',$_error);
$objView->assign('username',$_username);
                           
$objView->assign('redirect',$redirect);   

include 'std_links.inc.php'; 

?>
