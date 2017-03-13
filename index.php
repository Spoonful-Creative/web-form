<?php

require 'includes/function.php';

//define variables and set to empty values
$name = $email = $address = $age = $dateofbirth = $gender = $movie = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	// die('lolswag');
//Add data from form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$age = $_POST['age'];
	$dateofbirth = $_POST['dateofbirth'];
	$gender = !empty($_POST['gender']) ? $_POST['gender'] : '';
	$movie = $_POST['movie'];
	

	$errors['name'] = validateName($name);
	$errors['email'] = validateEmail($email);
	$errors['address'] = validateAddress($address);
	$errors['age'] = validateAge($age);
	$errors['dateofbirth'] = validateDateOfBirth($dateofbirth);
	$errors['movie'] = validateMovie($movie);
	$errors['gender'] = validateGender($gender);
}


require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';

?>