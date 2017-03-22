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

	if (nameError && emailError && addressError && ageError && dateofbirthError && genderError && movieError)
	{
		return true;
	}
		return false;
}


//NAME VALIDATION//
function validateName(){

	fullName = document.getElementById('name').value; 
	pos1 = fullName.indexOf(" "); 
	if (pos1 >= 0 && fullName.length > 3 && fullName.length < 40) {
		
		document.getElementById('nameError').innerHTML = "";
		document.getElementById('nameError').style.padding = "";
		return true;
	}
	else 
		document.getElementById('nameError').innerHTML = "Please enter a valid full name.";
		document.getElementById('nameError').style.padding = "5px";
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
			document.getElementById('emailError').style.padding = "";
		return true;
	}
	else 
	{
		document.getElementById('emailError').innerHTML = "Please enter a valid e-mail address.";
		document.getElementById('emailError').style.padding = "5px";
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
		document.getElementById('addressError').style.padding = "";
		return true;
	}
	else 
	{
		document.getElementById('addressError').innerHTML = address + "Please enter your physical address.";
		document.getElementById('addressError').style.padding = "5px";
		return false;
	}
}
//END OF ADDRESS VALIDATION//



//AGE VALIDATION//
function validateAge(){
   age= document.getElementById("age").value;
   if(age === ""){
     document.getElementById("ageError").innerHTML="Please enter your age";
     document.getElementById('ageError').style.padding = "5px";
   return false;
   }
  else{
   document.getElementById("ageError").innerHTML= "";
    document.getElementById('ageError').style.padding = "";
    return true;
  }
}
//END OF AGE VALIDATION//



//DOB VALIDATION//
function validateDateOfBirth(){
	var dateofbirth = document.getElementById('dateofbirth');
	var calculatedAge = getAge(dateofbirth.value);
	var age = document.getElementById('age').value;
	
	if (calculatedAge != age || parseInt(age) >= 150 || parseInt(age) < 0) {
		document.getElementById("dateofbirthError").innerHTML = "Please enter a date of birth";
		document.getElementById('dateofbirthError').style.padding = "5px";
		return false;
	}
	else 
	{
		document.getElementById("dateofbirthError").innerHTML = "";
		document.getElementById('dateofbirthError').style.padding = "";
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

// var today = new Date();

// today.setFullYear( today.getFullYear() - 150 );
// $('.datepicker').pickadate({
// 	format: 'mm/dd/yyyy',
//     selectMonths: true, 
//     selectYears: 150,
//     min: today,
//     max: new Date()
//   });



//GENDER VALIDATION//
function validateGender() {
	gender = document.getElementById('gender').selectedIndex ;
	if (gender == 0){
		document.getElementById('genderError').innerHTML = "Please select a gender.";
		document.getElementById('genderError').style.padding = "5px";
		return false
	}
	else 
	{
		document.getElementById('genderError').innerHTML = "";
		document.getElementById('genderError').style.padding = "";
		return true
	}
}
//END OF GENDER VALIDATION//




//MOVIE VALIDATION//
function validateMovie(){
	movie = document.getElementById('movie').selectedIndex ;
	if (movie == 0){
		document.getElementById('movieError').innerHTML = "Please select a movie.";
		document.getElementById('movieError').style.padding = "5px";
		return false
	}
	else 
	{
		document.getElementById('movieError').innerHTML = "";
		document.getElementById('movieError').style.padding = "";
		return true
	}
}
//END OF MOVIE VALIDATION//

//Reset Form
function clearForm(){
	document.getElementById("form").reset();

	clearName()
	clearEmail()
	clearAddress()
	clearDateOfBirth()
	clearAge()
	clearGender()
	clearMovie()

function clearName(){
document.getElementById("nameError").innerHTML = "";
document.getElementById('nameError').style.padding = "";
}

function clearEmail(){
document.getElementById("emailError").innerHTML = "";
document.getElementById('emailError').style.padding = "";
}

function clearAddress(){
document.getElementById("addressError").innerHTML = "";
document.getElementById('addressError').style.padding = "";
}

function clearDateOfBirth(){
document.getElementById("dateofbirthError").innerHTML = "";
document.getElementById('dateofbirthError').style.padding = "";
}

function clearAge(){
document.getElementById("ageError").innerHTML = "";
document.getElementById('ageError').style.padding = "";
}

function clearGender(){
document.getElementById("genderError").innerHTML = "";
document.getElementById('genderError').style.padding = "";
}

function clearMovie(){
document.getElementById("movieError").innerHTML = "";
document.getElementById('movieError').style.padding = "";
}

}


// $(document).ready(function() {
//     $('select').material_select();
//   });