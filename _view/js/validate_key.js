
  function Initialize()   {
       if(navigator.appName == "Microsoft Internet Explorer")  
          req = new ActiveXObject("Msxml2.XMLHTTP");
       else
          req=new XMLHttpRequest();
  }


  function validate(val)   {
      Initialize();
      var url = "?_validate_key&tbl=users&key=username&val="+val;
      req.onreadystatechange = Process;
      req.open("GET", url, true);
      req.send(null);
  }


  function Process()   {
     if (req.readyState == 4)  {      // only if "OK"
       if (req.status == 200) {
               if(req.responseText=="found") {
                  ShowDiv("autocomplete");
                  document.register.submit.disabled=true;
                  document.getElementById("autocomplete").innerHTML = "Username already selected";
               }else {
                  if (req.responseText=="not found")  {
                       HideDiv("autocomplete");
                       document.register.submit.disabled=false;
                    }else alert ("ERROR: "+req.responseText);
               }
       }else 
            document.getElementById("autocomplete").innerHTML="There was a problem retrieving data:"
                + req.statusText;
     }
  }


  function ShowDiv(divid)   {
     document.getElementById(divid).style.display="block";
  }


  function HideDiv(divid)  {
     document.getElementById(divid).style.display="none";
  }


  function BodyLoad()   {
     HideDiv("autocomplete");
  }

