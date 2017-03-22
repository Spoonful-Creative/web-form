<?php
//All functions will be called from this file

function dd($data){
    die(var_dump($data));
}

function e($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}



//      **NAME Validation**
function validateName($name) {
    // Checks a value had been entered 
	if (empty($name)) {
		return "Please enter your full name";
	}
    // Must comply as a first/last name
	else if (!preg_match("/\s/", $name)) {
		return "Please enter a valid full name";
	}
    // Maximum limit 40 characters *REQUIREMENT
	else if(strlen($name) > 40){
		return "Full name cannot exceed 40 characters";
	}
	return false;
}
//      **END NAME Validation**



//      **EMAIL Validation**
function validateEmail($email) {
    // Checks a value had been entered, tests if the email address entered is valid
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		return "Please enter a valid email address";
	}
    // Maximum limit 100 characters *REQUIREMENT
	else if(strlen($email) > 100) {
		return "Email address cannot exceed 100 characters";
	}
	return false;
}
//      **END EMAIL Validation**



//      **ADDRESS Validation**
function validateAddress($address) {
    // Checks a value had been entered 
    if (empty($address)) {
    return "Please enter your physical address";
    }
    // Must include a number and space at the beginning 
    else if (!preg_match("/^[0-9]+\ +[a-zA-Z]/", $address)) {
       return "Please include your street number";
    }
    // Maximum limit 200 characters *REQUIREMENT
    else if(strlen($address) > 200){
    return "Physical address cannot exceed 200 characters";
    }
    return false;
}
//      **END ADDRESS Validation**



//      **DOB Validation**
function validateDateOfBirth($dateofbirth) {
    // Checks a value had been entered 
    if (empty($dateofbirth)) {
        return 'Please enter your date of birth';
    }

    if (!checkDateManually($dateofbirth)) {
        return 'Please enter a correct Date of Birth';
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
        return 'Please enter a correct Date of Birth';
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
        return 'We really don\'t think you were born more than 150 years ago';
    }
    else if ($chosenDate >= $todaysDate){
        return 'You cannot be born after today';
    }
    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
        return 'Please enter a correct Date of Birth';
    }

    return false;
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
//      **END DOB Validation**



//      **AGE Validation**
function validateAge($age) {
    // Checks a value had been entered 
    if (empty($age)) {
        return "Please enter your age";
    }
    // Inserted value must not exceed 150
    else if((int)$age >= 151){
        return "Age must be less than 150 years";
    }
    // Inserted value must be 1 or greater
    else if((int)$age < 1){
        return "Age must be of 1 year or older";
    }
    return false;
}
//      **END AGE Validation**



//      ** GENDER Validation**
function validateGender($gender) {
    // Checks a value had been entered 
	if (empty($gender)) {
		return "Please select a gender";
	}
}
//      **END GENDER Validation**



//      **MOVIE Validation**
function validateMovie($movie) {
    // Checks a value had been entered 
	if(empty($movie)) {
     return "Please select a movie";
 }
}
 //      **END MOVIE Validation**