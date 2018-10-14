function checkOK(){
   var i=0;

   if(document.getElementById("c1").checked == false){ go(); return false;}
   if(document.getElementById("c2").checked == false){ go();return false; }
   if(document.getElementById("c3").checked == false){ go();return false; }
   if(document.getElementById("c4").checked == false){ go();return false; }
   if(document.getElementById("c5").checked == false){ go();return false; }
   if(document.getElementById("c6").checked == false){ go();return false; }
   if(document.getElementById("c7").checked == false){ go();return false; }
   if(document.getElementById("c8").checked == false){ go();return false; }
   if(document.getElementById("c9").checked == false){ go();return false; }
   if(document.getElementById("c10").checked == false){go();return false; }
		
   return true;
}


function go(){
   alert("Please check each 'Information Valid checkbox' before submitting an application for approval");
}