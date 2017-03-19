function validate() {

	var nameError = validateName();
	var emailError = validateEmail();
	var addressError = validateAddress();
	var ageError = validateAge();
	var dateofbirthError = validateDateOfBirth();
	var genderError = validateGender();
	var movieError = validateMovie();

	
	console.log('Name: ' + nameError);
	console.log('Email: ' + emailError);
	console.log('Address: ' + addressError);
	console.log('Age: ' + ageError);
	console.log('DateOfBirth:' + dateofbirthError);
	console.log('Gender: ' + genderError);
	console.log('Movie: ' + movieError);

	if (!nameError && !emailError && !addressError && !ageError && !dateofbirthError && !genderError && !movieError)
	{
		return false;
	}
		return true;
}

// var today = new Date();
// today.setFullYear( today.getFullYear() - 150 );
// $('.datepicker').pickadate({
//     selectMonths: true, 
//     selectYears: 150,
//     min: today,
//     max: new Date()
//   });


//NAME VALIDATION//
function validateName(){

	fullName = document.getElementById('name').value; 
	pos1 = fullName.indexOf(" "); 
	if (pos1 >= 0 && fullName.length > 3 && fullName.length < 40) {
		
		document.getElementById('nameError').innerHTML = "";
		return true;
	}
	else 
		document.getElementById('nameError').innerHTML = "[JS] Please enter a valid full name.";
	return false;
}
//END OF NAME VALIDATION//



//EMAIL VALIDATION//
function validateEmail(){

	mailAddress = document.getElementById('email').value; 
	pos1 = mailAddress.indexOf("@");
	pos2 = mailAddress.indexOf("."); 
	if (pos1 >= 0 && pos2 >= 0 && mailAddress.length < 100) {

		document.getElementById('emailError').innerHTML = "";
		return true;
	}
	else 
	{
		document.getElementById('emailError').innerHTML = "[JS] Please enter a valid e-mail address.";
		return false;
	}
}
//END OF EMAIL VALIDATION//



//ADDRESS VALIDATION//
function validateAddress(){

	address = document.getElementById('address').value; 
	pos1 = address.indexOf(" ");

	if (pos1 >= 0 && address.length < 200) {

		document.getElementById('addressError').innerHTML = "";
		return true;
	}
	else 
	{
		document.getElementById('addressError').innerHTML = address + "[JS] Please enter your physical address.";
		return false;
	}
}
//END OF ADDRESS VALIDATION//



//AGE VALIDATION//
function validateAge(){
   age= document.getElementById("age").value;
   if(age =""){
    document.getElementById("ageError").innerHTML= "";
    return true;
   }
  else{
   document.getElementById("ageError").innerHTML="[JS] Please enter your age";
   return false;
  }
}
//END OF AGE VALIDATION//



//DOB VALIDATION//
function validateDateOfBirth(){
	var dateofbirth = document.getElementById('dateofbirth');
	var calculatedAge = getAge(dateofbirth.value);
	var dateofbirth = document.getElementById('age').value;
	
	if (calculatedAge != dateofbirth.value || parseInt(dateofbirth.value) >= 150 || parseInt(dateofbirth.value) < 0) {
		document.getElementById("ageError").innerHTML = "[JS] Please enter a valid age";
		return false;
	}
	else 
	{
		document.getElementById("ageError").innerHTML = "";
		return true;
	}
}


function getAge(dateofbirth) {
	var today = new Date();
	var birthDate = new Date(dateofbirth);
	var age = today.getFullYear() - birthDate.getFullYear();
	var m = today.getMonth() - birthDate.getMonth();
	if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
		age-- 
	}
		return age;
}


function calculateAge() {
	var dateofbirth = document.getElementById('dateofbirth');
	var calculatedAge = getAge(dateofbirth.value);
	document.getElementById('age').value = calculatedAge;
}
//END OF DOB VALIDATION//



//GENDER VALIDATION//
function validateGender() {
	gender = document.getElementById('gender').selectedIndex ;
	if (gender == 0){
		document.getElementById('genderError').innerHTML = "[JS] Please select a gender.";
		return false
	}
	else 
	{
		document.getElementById('genderError').innerHTML = "";
		return true
	}
}
//END OF GENDER VALIDATION//



//MOVIE VALIDATION//
function validateMovie(){
	movie = document.getElementById('movie').selectedIndex ;
	if (movie == 0){
		document.getElementById('movieError').innerHTML = "[JS] Please select a movie.";
		return false
	}
	else 
	{
		document.getElementById('movieError').innerHTML = "";
		return true
	}
}
//END OF MOVIE VALIDATION//


// $(document).ready(function() {
//     $('select').material_select();
//   });