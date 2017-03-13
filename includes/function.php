<?php
//ALL your functions will go inside here
function validateName($name) {
  if (empty($name)) {
    return "Name is required";
  }
  if (strlen($name) > 40 || !preg_match("/\s/", $name)) {
    return "Please enter full name";
  }
  else {
    return false;
  }
}


function validateEmail($email) {
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    return "Email is required";
  }
}


function validateAddress($address) {
	if(empty($address)) {
		return "An address is required";
	}
	if (strlen($address) > 200 || !preg_match("/\s/", $address)) {
    return "Please enter full name";
  }
  else {
    return false;
  }
}


function validateDateOfBirth($dateofbirth) {
	if(empty($dateofbirth)){
		return "Date of Birth is required";
	}
}


function validateAge($age) {
	if(empty($age)){
		return "Age is required";
	}
}


function validateGender($gender) {
	if(empty($gender)){
		return "Please select a gender";
	}
}


function validateMovie($movie) {
	if(empty($movie)){
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