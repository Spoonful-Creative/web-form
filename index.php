<?php

require 'includes/function.php';

//define variables and set to empty values
$name = $email = $address = $age = $dateofbirth = $gender = $movie = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
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


	if (!$errors['name'] && !$errors['email'] && !$errors['address'] && !$errors['dateofbirth'] && !$errors['age'] && !$errors['movie'] && !$errors['gender']) {
		$formcontent=" From: $name \n Email: $email \n Message: $address";
		$recipient = "pughsinead@gmail.com";
		$subject = "Website Form Submission";
		$mailheader = "From: $email \r\n";

		mail ($recipient, $subject, $formcontent, $mailheader) or die ("error");
		require 'partials/thanks.php';
		die();
	}
}


require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';

?>