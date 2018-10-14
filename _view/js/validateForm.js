//  These JavaScript functions are used to check the validity of data entered
//  on an HTML form. 
//  Example of form field:

//  <input name="fname" type="text"  SIZE=15 maxlength=15 
//     id="alpha" onBlur="trimEntry(this);checkitem(this)">
//    <font color="red" size="-1">*<span id="fname_"></span></font>

//  The field "id" specifies the type of pattern expected. Values are checked
//  as they are entered.
//  The SPAN id MUST be the same as the INPUT name preceded by an '_'.

//  The form should be checked again when the "submit" button is clicked - 

//  <INPUT TYPE="submit" NAME="submit" VALUE="Submit Data" onClick="checkform(this.form)">

//  The regular expressions (regex) below are to be used in validating data
//  entered on HTML forms. A regex used in this manner must test the entire
//  entry and so will have the form /^...$/ to test the first through the last
//  character.

//  To create an expression consider what constraints are on the first character
//  in the entry, then the following characters, and, finally, the last character.

//  For more info: http://www.virtualpromote.com/tools/javascript-regex/

<!-- Begin Hiding

    // Validation Object
        var pattern = new Object();

    // REGEX Elements

        // matches zero or more digits
        pattern.digit = /^\d*$/;

        // matches one or more digits
        pattern.integer = /^\d+$/;

        // matches zero or more digits, dot, zero or more digits
        pattern.decimal = /^\d*(\.\d*)?$/;

        // matches one or more alpha characters
        pattern.alpha = /^[a-z]+$/i;

        // matches one or more alphanumeric characters
        pattern.alphanum = /^\w+$/;

        // matches one or more alphanumeric characters plus
        pattern.chars = /^\w([\w\s.*_"]+)$/;

        // matches a name (1 to 40 characters)
        pattern.name = /^[a-zA-Z''-'\s]{1,40}$/;

        // matches zip codes
        pattern.zipCode = /^\d{5}(-\d{4})?$/;

        // matches $17.23 or $14,281,545.45 or ...
        pattern.currency = /^\$\d{1,3}(,\d{3})*\.\d{2}$/;

        // matches 5:04 or 12:34 but not 75:83
        pattern.time = /^([1-9]|1[0-2]):[0-5]\d$/;

        // matches email
        pattern.emailAddress = /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/;

        
        // matches password (3 to 15 characters)
        pattern.password = /^\w{3,15}$/ ;

        // matches U.S. phone ###-###-####
        pattern.USphoneNumber = /^\(?\d{3}\)?\s*|-|\.\d{3}\s*|-|\.\d{4}$/;

        // matches International Phone Number
        pattern.phoneNumber = /^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,3})|(\(?\d{2,3}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$/;

        // URL
        pattern.url = /^(ht|f)tp(s?)\:\/\/[0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*(:(0-9)*)*(\/?)([a-zA-Z0-9\-\.\?\,\'\/\\\+&amp;%\$#_]*)?$/;

        // IP Address
        pattern.ipAddress = /^((25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.){3}(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])$/;

        // Date xx/xx/20xx or xx-xx-20xx or xx.xx.20xx
        pattern.date = /^([1-9]|0[1-9]|1[012])[-/.]([1-9]|0[1-9]|[12][0-9]|3[01])[-/.]20\d\d$/;

        // State Abbreviation
        pattern.state = /^(AK|AL|AR|AZ|CA|CO|CT|DC|DE|FL|GA|HI|IA|ID|IL|IN|KS|KY|LA|MA|MD|ME|MI|MN|MO|MS|MT|NB|NC|ND|NH|NJ|NM|NV|NY|OH|OK|OR|PA|RI|SC|SD|TN|TX|UT|VA|VT|WA|WI|WV|WY)$/i;

        // Social Security Number
        pattern.ssn = /^\d{3}\-\d{2}\-\d{4}$/;



function checkPattern(v,value) {           // check a specified item
       if(!v) return true;                 // no pattern id, do not check
       var thePattern = pattern[v];        // get pattern for specified id
       return thePattern.exec(value);      // exec returns null if no match
}


function checkitem(item) {                   // check each item as entered

    msg = "";
    if ( !checkPattern(item.id, item.value)) msg = "Invalid";
    s = document.getElementById(item.name + "_");     // display message on form
    s.innerHTML = msg;
}


function checkform(theForm) {              // recheck all items before submitting

        var elArr = theForm.elements;             // put form's elements in array
        for(var i = 0; i < elArr.length; i++) {   // check each element
           with(elArr[i]) {                       // set reference for convenience
              if (!checkPattern(id,value)) {      // null if value not match pattern
              alert ("The form contains invalid data. Please complete the form and resubmit."); 
                 elArr[i].select();                                    // and set focus to
                 elArr[i].focus();                                     // element in error
                 return false;                                         // do not submit form to server
              }
           }
        }
        return true;                              // all elements OK, submit form to server
}



function ltrim(s) {
  return s.replace(/^\s+/,'');
}


function rtrim(s) {
  return s.replace(/\s+$/,'');
}


function trim(s) {
  return ltrim(rtrim(s));
}


function trimEntry(item) {
  item.value = trim(item.value);
}


function setFocus(){document.main.elements[0].focus();}

//  End Hiding  -->
