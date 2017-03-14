<?php
//ALL your functions will go inside here
function validateName($name) {
	if (empty($name)) {
		return "Please enter your full name.";
	}
	else if (!preg_match("/\s/", $name)) {
		return "Please enter a valid full name.";
	}
	else if(strlen($name) > 40){
		return "Full name cannot be longer than 40 characters.";
	}
	return false;
}


function validateEmail($email) {
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		return "Please enter a valid email.";
	}
	else if(strlen($email) > 100) {
		return "Email address cannot be longer than 100 characters.";
	}
	return false;
}

// function validateEmail($email) {
// 	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
// 		return "Please enter a valid email.";
// 	}
	
// 	else if(strlen($_POST["email"]) > 100) {
// 		return "Email address cannot be longer than 100 characters.";
// 	}
// 	return false;
// }




function validateAddress($address) {
	if (empty($address)) {
		return "An address is required";
	}
	else if(strlen($address) > 200){
		return "Address cannot exceed the 200 character limit";
	}
	return false;
}


function validateDateOfBirth($dateofbirth) {
	if(empty($dateofbirth)){
		return "Date of Birth is required";
	}
}


function validateAge($age) {
	if (empty($age)) {
		return "Age is required";
	}
	else if (preg_match("/^[0-151]+$/", $age)) {
		return true;  
	}
	return false;
}


function validateGender($gender) {
	if (empty($gender)) {
		return "Gender is required";
	}
}




function validateMovie($movie) {
	if($movie == 'movie1') {
		return "Please select a movie";
	}
}





function dd($data)
{
	die(var_dump($data));
}


//These do the same function
// function escape($value)
// {
// 	return e($value);
// }
//
function e($value)
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}