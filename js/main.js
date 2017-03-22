//      **Input Validation**
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
//      **END OF INPUT Validation**



//      **NAME Validation**
function validateName(){
	// Length of name must be between 3-40 characters
	fullName = document.getElementById('name').value; 
	pos1 = fullName.indexOf(" "); 
	if (pos1 >= 0 && fullName.length > 3 && fullName.length < 40) {
		
		document.getElementById('nameError').innerHTML = "";
		document.getElementById('nameError').style.padding = "";
		return true;
	}
	// Otherwise return error
	else {
		document.getElementById('nameError').innerHTML = "Please enter a valid full name.";
		document.getElementById('nameError').style.padding = "5px";
		return false;
	}
}
//      **END NAME Validation**



//      **EMAIL Validation**
function validateEmail(){
	//Email must include @ and . and not exceed 100 characters
	mailAddress = document.getElementById('email').value; 
	pos1 = mailAddress.indexOf("@");
	pos2 = mailAddress.indexOf("."); 
	if (pos1 >= 0 && pos2 >= 0 && mailAddress.length < 100) {

		document.getElementById('emailError').innerHTML = "";
		document.getElementById('emailError').style.padding = "";
		return true;
	}
	// Otherwise return error
	else {
		document.getElementById('emailError').innerHTML = "Please enter a valid e-mail address.";
		document.getElementById('emailError').style.padding = "5px";
		return false;
	}
}
//      **END NAME Validation**



//      **ADDRESS Validation**
function validateAddress(){
	// Length of address must include # + space and not exceed 200 characters
	address = document.getElementById('address').value; 
	pos1 = address.indexOf(" ");

	if (pos1 >= 0 && address.length < 200) {

		document.getElementById('addressError').innerHTML = "";
		document.getElementById('addressError').style.padding = "";
		return true;
	}
	// Otherwise return error
	else {
		document.getElementById('addressError').innerHTML = address + "Please enter your physical address.";
		document.getElementById('addressError').style.padding = "5px";
		return false;
	}
}
//      **END ADDRESS Validation**



//      **AGE Validation**
function validateAge(){
	 // Checks a value has been entered 
	age= document.getElementById("age").value;
	// Otherwise return error
	if(age === ""){
    	document.getElementById("ageError").innerHTML="Please enter your age";
    	document.getElementById('ageError').style.padding = "5px";
  		return false;
   	}
  	else {
   		document.getElementById("ageError").innerHTML= "";
    	document.getElementById('ageError').style.padding = "";
   		return true;
  	}
}
//      **END AGE Validation**



//      **DOB Validation**
function validateDateOfBirth(){
	var dateofbirth = document.getElementById('dateofbirth');
	var calculatedAge = getAge(dateofbirth.value);
	var age = document.getElementById('age').value;
	
	if (calculatedAge != age || parseInt(age) >= 150 || parseInt(age) < 0) {
		document.getElementById("dateofbirthError").innerHTML = "Please enter a date of birth";
		document.getElementById('dateofbirthError').style.padding = "5px";
		return false;
	}
	else {
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
//      **END DOB Validation**



//      **GENDER Validation**

function validateGender() {
	gender = document.getElementById('gender').selectedIndex ;
	if (gender == 0){
		document.getElementById('genderError').innerHTML = "Please select a gender.";
		document.getElementById('genderError').style.padding = "5px";
		return false
	}
	else {
		document.getElementById('genderError').innerHTML = "";
		document.getElementById('genderError').style.padding = "";
		return true
	}
}
//      **GENDER Validation**



//      **MOVIE Validation**
function validateMovie(){
	movie = document.getElementById('movie').selectedIndex ;
	if (movie == 0){
		document.getElementById('movieError').innerHTML = "Please select a movie.";
		document.getElementById('movieError').style.padding = "5px";
		return false
	}
	else {
		document.getElementById('movieError').innerHTML = "";
		document.getElementById('movieError').style.padding = "";
		return true
	}
}
//      **END MOVIE Validation**



// Clear Error messages when clear button is pressed 
function clearForm(){
	document.getElementById("form").reset();
	clearName()
	clearEmail()
	clearAddress()
	clearDateOfBirth()
	clearAge()
	clearGender()
	clearMovie()

	//      **clearName Error**
	function clearName(){
	document.getElementById("nameError").innerHTML = "";
	document.getElementById('nameError').style.padding = "";
	}

	//      **clearEmail Error**
	function clearEmail(){
	document.getElementById("emailError").innerHTML = "";
	document.getElementById('emailError').style.padding = "";
	}

	//      **clearAddress Error**
	function clearAddress(){
	document.getElementById("addressError").innerHTML = "";
	document.getElementById('addressError').style.padding = "";
	}

	//      **clearDOB Error**
	function clearDateOfBirth(){
	document.getElementById("dateofbirthError").innerHTML = "";
	document.getElementById('dateofbirthError').style.padding = "";
	}

	//      **clearAge Error**
	function clearAge(){
	document.getElementById("ageError").innerHTML = "";
	document.getElementById('ageError').style.padding = "";
	}

	//      **clearGender Error**
	function clearGender(){
	document.getElementById("genderError").innerHTML = "";
	document.getElementById('genderError').style.padding = "";
	}

	//      **clearMovie Error**
	function clearMovie(){
	document.getElementById("movieError").innerHTML = "";
	document.getElementById('movieError').style.padding = "";
	}
}