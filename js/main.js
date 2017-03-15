function validate() {

	var nameError = validateName();
	var emailError = validateEmail();
	var addressError = validateAddress();
	// var ageError = validateAge();
	// var dateofbirthError = validateDateOfBirth();
	var genderError = validateGender();
	var movieError = validateMovie();

	
	console.log('Name: ' + nameError);
	console.log('Email: ' + emailError);
	console.log('Address: ' + addressError);
	// console.log('Age: ' + ageError);
	// console.log('DateOfBirth' + dateofbirthError);
	console.log('Gender: ' + genderError);
	console.log('Movie: ' + movieError);

	if (!nameError && !emailError && !addressError && !genderError && !movieError)
	{
		return false;
	}
		return true;
}





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


function validateGender() {
	var radios = document.getElementsByName("gender");
	var formValid = false;
	document.getElementById('genderError').innerHTML = '';

	var i = 0;
	while (!formValid && i < radios.length) {
		if (radios[i].checked) formValid = true;
		i++;        
	}

	if (!formValid) document.getElementById("genderError").innerHTML = '[JS] Please select a gender.';
	return formValid;
}


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