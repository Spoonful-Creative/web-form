<!-- <div class="container">
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="banner">
				<p> Add content here</p>
			</div>
		</div>
	</div>
</div> -->


<div class="container">

<!-- Page Layout here -->
    <div class="row">

      <div id="form-left" class="col l6">
        <!-- Grey navigation panel -->
      




<div class="row">
	<form id="form" action="index.php" method="POST" autocomplete="off" onsubmit="return validate()" class="col s12 offset-m2 m8 offset-l2 l8">


		<div class="row">
			<div class="input-field col s12 m12 l12">
			<i class="material-icons prefix">mode_edit</i>
				<label for="name">Full Name: <?= !empty($errors['name']) ? $errors['name'] : '' ?></label>
				<input id="name" name="name" type="text" class="validate" data-length="40" value="<?= !empty($name) ? $name : '' ?>">
				<div id="nameError"></div>
				</div>
		</div>



		<div class="row">
			<div class="input-field col s12 m12 l12">
			<i class="material-icons prefix">mode_edit</i>
				<label for="email">Email: <?= !empty($errors['email']) ? $errors['email'] : '' ?></label>
				<input id="email" name="email" type="text" class="validate" data-length="100" value="<?= !empty($email) ? $email : '' ?>">
				<div id="emailError"></div>
			</div>
		</div>



		<div class="row">
			<div class="input-field col s12 m12 l12">
			<i class="material-icons prefix">mode_edit</i>
				<label for="address"> Address: <?= !empty($errors['address']) ? $errors['address'] : '' ?></label>
				<textarea id="address" name="address" class="materialize-textarea" data-length="200" class="validate" value="<?= !empty($address) ? $address : '' ?>"></textarea>
				<div id="addressError"></div>
			</div>
		</div>




		<div class="row">
			<div class="input-field col s6 m6 l6">
				<label for="dateofbirth">Date of Birth: <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : '' ?></label>
				<input id="dateofbirth" name="dateofbirth" class="input-field datepicker" type="date" class="validate" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>">
				<div id="dateofbirthError"></div>
			</div>



			<div class="input-field col s6 m6 l6">
			<i class="material-icons prefix">mode_edit</i>
				<label for="age"> Age: <?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
				<input id="age" name="age" type="number" min="1" max="150" class="validate" value="<?= !empty($age) ? $age : '' ?>"> <div id="ageError"></div>
			</div>
		</div>



		<div class="row">
			<div class="col s6 m6 l6">
			<i class="material-icons prefix">list</i>
				<label for="gender">Gender: <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
					<select id="gender" name="gender">
					<option value="gender1" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'gender1') echo 'selected="selected"'; ?>>Please select a gender.</option>
					<option value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'selected="selected"'; ?>>Male</option>
					<option value="female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'selected="selected"'; ?>>Female</option>
					<option value="other" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'other') echo 'selected="selected"'; ?>>Other</option>
					</select>
				<div id="genderError"></div>
			</div>



			<div class="col s6 m6 l6">
			<i class="material-icons prefix">list</i>
				<label for="movie">Favourite Movie: <?= !empty($errors['movie']) ? $errors['movie'] : '' ?></label>
					<select id="movie" name="movie">
					<option value="movie1" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select Movie</option>
					<option value="movie2" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie2') echo 'selected="selected"'; ?>>Movie 1</option>
					<option value="movie3" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie3') echo 'selected="selected"'; ?>>Movie 2</option>
					<option value="movie4" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie4') echo 'selected="selected"'; ?>>Movie 3</option>
					</select>
				<div id="movieError"></div>
			</div>
		</div>


		<div class="row">
			<div class="col s12 m8 l8">
				<button id="submitForm" type="submit"> Submit </button>
				<button id="clearForm" type="reset" value="reset">Clear </button>
			</div>
		</div>
	</form>
</div>
</div>

      <div id="form-right" class="col l6">
        <!-- Teal page content  -->
      </div>

    </div>
</div>