<?php
//  Standard assignments for page header and footer

   $link_org = '' ;
   $link_admin = '' ;
   $link_person = '';
   if ($_SESSION[AUTHORIZE] == 'P')
      $link_person = '?personPanel' ;				//	  Is it just a person logging in?
   else if ($_SESSION[AUTHORIZE] == 'O')            //    Organization?
      $link_org = '?organizationPanel' ;            //    yes
   else if ($_SESSION[AUTHORIZE] == 'A')            //    no, administrator?
      $link_admin = '?adminPanel' ;                 //    yes

   $MFB_home   = MFB_URL ;
  
   $objView->assign('link_org',$link_org);
   $objView->assign('link_admin',$link_admin);
   $objView->assign('link_person',$link_person);
   $objView->assign('link_login','?'.LOGIN);
   $objView->assign('link_logout','?'.LOGOUT);
   $objView->assign('MFB_home',MFB_URL);    
   $objView->assign('cur_user',$_SESSION['username']);
   $objView->assign('link_orgModify','?modifyOrg');
                  
?>
