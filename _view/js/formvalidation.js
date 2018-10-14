// JavaScript Document

	function validateForm(form)
	{
		var errors = '';
		var anyErrors = false;
		
//Validating First and Last Names
		if(form.First_Name.value == '')
		{
			errors += 'Please enter First Name\n';
			form.First_Name.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.First_Name.style.border = '1px solid #000';
		}
		if(form.Last_Name.value=='')
		{
			errors += 'Please enter Last Name\n';
			form.Last_Name.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Last_Name.style.border = '1px solid black';
		}

//Validating DOB
		if(form.Day_Born.value=='')
		{
			errors += 'Please enter Date of Birth - Day\n';
			form.Day_Born.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Day_Born.style.border = '1px solid black';
		}
		if(form.Year_Born.value=='')
		{
			errors += 'Please enter Date of Birth - Year\n';
			form.Year_Born.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Year_Born.style.border = '1px solid black';
		}

//Validating Current address information such as street, city, zip, phone etc.
		if(form.Current_Address_Street.value=='')
		{
			errors += 'Please enter Current Address - Street\n';
			form.Current_Address_Street.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Current_Address_Street.style.border = '1px solid black';
		}
		if(form.Current_Address_City.value=='')
		{
			errors += 'Please enter Current Address - City\n';
			form.Current_Address_City.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Current_Address_City.style.border = '1px solid black';
		}
		if(form.Current_Address_Zip.value=='')
		{
			errors += 'Please enter Current Address - Zip\n';
			form.Current_Address_Zip.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Current_Address_Zip.style.border = '1px solid black';
		}
		if(form.Current_Phone.value=='')
		{
			errors += 'Please enter Current Address - Phone\n';
			form.Current_Phone.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Current_Phone.style.border = '1px solid black';
		}
		
//Validating Permanent Address information
		if(form.Permanent_Address_Street.value=='')
		{
			errors += 'Please enter Permanent Address - Street\n';
			form.Permanent_Address_Street.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Permanent_Address_Street.style.border = '1px solid black';
		}
		if(form.Permanent_Address_Zip.value=='')
		{
			errors += 'Please enter Permanent Address - City\n';
			form.Permanent_Address_Zip.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Permanent_Address_Zip.style.border = '1px solid black';
		}
		if(form.Permanent_Phone.value=='')
		{
			errors += 'Please enter Permanent Address - Phone\n';
			form.Permanent_Phone.style.border = '2px solid red';
			anyErrors = true;
		}
		else {
			form.Permanent_Phone.style.border = '1px solid black';
		}
		if(!form.Friend.checked&&!form.Family.checked&&!form.Daily_Vidette.checked&&!form.UHS_Website.checked
		&&!form.Previous_Resident.checked&&!form.Campus_Visit.checked&&!form.Faculty.checked
		&&!form.Mailing.checked&&!form.Office_International_Studies.checked&&!form.Other.checked)
		{
			errors += 'Please enter how did you learn about the Unviersity Apartments';
			anyErrors = true;
		}
						
		if(anyErrors) {
			alert(errors);
			return false;
		}
		else {
			return true;
		}
		return true;
	}