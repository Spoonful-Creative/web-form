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



function validateAddress($address) {
	if (empty($address)) {
		return "[PHP] Please enter your physical address.";
	}
	else if(strlen($address) > 200){
		return "[PHP] Physical address cannot exceed 200 characters.";
	}
	return false;
}


<<<<<<< HEAD
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

=======

//Validate Function//
function validateDateOfBirth($dateofbirth) {
    if (empty($dateofbirth)) {
        return 'Date of Birth is required.';
    }

    if (!checkDateManually($dateofbirth)) {
        return 'Please enter a correct Date of Birth.';
    }

    if (DateTime::createFromFormat('Y-m-d', $dateofbirth)) {
        $dateofbirth = DateTime::createFromFormat('Y-m-d', $dateofbirth);
    }
    else if (DateTime::createFromFormat('Y/m/d', $dateofbirth)) {
        $dateofbirth = DateTime::createFromFormat('Y/m/d', $dateofbirth);
    }
    else if (DateTime::createFromFormat('d-m-Y', $dateofbirth)) {
        $dateofbirth = DateTime::createFromFormat('d-m-Y', $dateofbirth);
    }
    else if (DateTime::createFromFormat('d/m/Y', $dateofbirth)) {
        $dateofbirth = DateTime::createFromFormat('d/m/Y', $dateofbirth);
    }
    else {
        return 'Please enter a correct Date of Birth.';
    }

    $time = new DateTime('now');
    $today = new DateTime('now');

    $date150YearsAgo = DateTime::createFromFormat('Y-m-d', $time->modify('-150 Year')->format('Y-m-d'));

    $chosenDate = $dateofbirth->format('Y-m-d');
    $chosenDay = $dateofbirth->format('d');
    $chosenMonth = $dateofbirth->format('m');
    $chosenYear = $dateofbirth->format('Y');
    $todaysDate = $today->format('Y-m-d');
    $minDate = $date150YearsAgo->format('Y-m-d');

    if ($chosenDate <= $minDate){
        return 'We really don\'t think you were born more than 150 years ago.';
    }
    else if ($chosenDate >= $todaysDate){
        return 'You cannot be born after today.';
    }
    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
        return 'Please enter a correct Date of Birth.';
    }

    return false;
>>>>>>> Adding-CSS
}

function checkDateManually($dateofbirth) {
    $dateArray = [];

    if(strpos($dateofbirth, '/') !== false) {
        $dateArray = explode("/", $dateofbirth);
    }
    else if(strpos($dateofbirth, '-') !== false){
        $dateArray = explode("-", $dateofbirth);
    }

    if (empty($dateArray)) {
        return false;
    }

    if($dateArray && count($dateArray) === 3 && (int)$dateArray[0] > 0 && (int)$dateArray[1] > 0 && (int)$dateArray[2] > 0) {
        if (checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
            return true;
        } else if (checkdate($dateArray[1], $dateArray[0], $dateArray[2])) {
            return true;
        }
        return false;
    }

    return false;
}

//Validate Date Function Ends//


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
	if ($gender == 'gender1') {
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