
function checkOK(){
   if(document.getElementById("agree").checked == false){ 
      alert("You need to check this box before you can submit the application");
      return false;
   }		
   return true;
}
