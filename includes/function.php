<?php
function validateName($name) {
	if (empty($name)) {
		return "[PHP] Please enter your full name.";
	}
	else if (!preg_match("/\s/", $name)) {
		return "[PHP] Please enter a valid full name.";
	}
	else if(strlen($name) > 40){
		return "[PHP] Full name cannot exceed 40 characters.";
	}
	return false;
}


function validateEmail($email) {
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		return "[PHP] Please enter a valid email address.";
	}
	else if(strlen($email) > 100) {
		return "[PHP] Email address cannot exceed 100 characters.";
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
		return "[PHP] Please enter your physical address.";
	}
	else if(strlen($address) > 200){
		return "[PHP] Physical address cannot exceed 200 characters.";
	}
	return false;
}


// function validateDateOfBirth($dateofbirth) {
// 	if(empty($dateofbirth)){
// 		return "[PHP] Please enter your date of birth.";
// 	}
// }

function validateDateOfBirth($dateofbirth) {
	if ($dateofbirth == '') {
	return "Date of Birth is required";
	}
	
	$time = new DateTime('now');

	$newtime = $time->modify('-150 Year')->format('Y-m-d');

	if ($dateofbirth == '') {
		return "Date of Birth is required";
	}
	else if ($dateofbirth <= $newtime){
	
		return "We really dont think you were born more than 150 years ago.";
	}
return false;

}


function validateAge($age) {
	if (empty($age)) {
		return "[PHP] Please enter your age.";
	}
	else if (preg_match("/^[0-151]+$/", $age)) {
		return true;  
	}
	return false;
}


function validateGender($gender) {
	if (empty($gender)) {
		return "[PHP] Please select a gender.";
	}
}


function validateMovie($movie) {
	if($movie == 'movie1') {
		return "[PHP] Please select a movie.";
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