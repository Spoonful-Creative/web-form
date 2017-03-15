<form action="index.php" method="POST" autocomplete="off" onsubmit="return validate()">

  <label for="name">Full Name: <?= !empty($errors['name']) ? $errors['name'] : '' ?></label>
  <input id="name" name="name" type="text" placeholder="John Doe" value="<?= !empty($name) ? $name : '' ?>">
  <div id="nameError"></div>
</br>



<label for="email">Email: <?= !empty($errors['email']) ? $errors['email'] : '' ?></label>
<input id="email" name="email" type="text" placeholder="yourname@email.com" value="<?= !empty($email) ? $email : '' ?>">
<div id="emailError"></div>
</br>



<label for="address"> Address: <?= !empty($errors['address']) ? $errors['address'] : '' ?></label></br>
<textarea id="address" name="address" rows="4" cols="50" placeholder="Address Line 1 <?="\n"?>Address Line 2 <?="\n"?>Town or City <?="\n"?>Country" value="<?= !empty($address) ? $address : '' ?>"></textarea>

</br>
<div id="addressError"></div>
</br>



<label for="dateofbirth">Date of Birth: <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : '' ?></label>
<input id="dateofbirth" name="dateofbirth" type="date" placeholder="dd/mm/yyyy"  value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>">
<div id="dateofbirthError"></div>
</br>
<!-- onchange="calculateAge(dateofbirth)" -->



<label for="age"> Age: <?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
<input id="age" name="age" type="number" min="1" max="150" placeholder="##" value="<?= !empty($age) ? $age : '' ?>"> <div id="ageError"></div> </br>



<label for="gender">Gender: <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
<input type="radio" name="gender" value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>> Male
<input type="radio" name="gender" value="female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>> Female </br>
<div id="genderError"></div>
</br>




<label for="movie">Favourite Movie: <?= !empty($errors['movie']) ? $errors['movie'] : '' ?></label>
<select id="movie" name="movie">
  <option value="movie1" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select Movie</option>
  <option value="movie2" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie2') echo 'selected="selected"'; ?>>Movie 1</option>
  <option value="movie3" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie3') echo 'selected="selected"'; ?>>Movie 2</option>
  <option value="movie4" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie4') echo 'selected="selected"'; ?>>Movie 3</option>
</select>
<div id="movieError"></div>
</br>

<button id="submitForm" type="submit"> Submit </button>
<button id="clearForm" type="reset" value="reset">Clear </button>
</form>
