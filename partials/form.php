<!--Form container with Background-->
<div class="container" id="form-page">
	
	<!--Form title - "LET'S COLLAB"-->
	<div class="row">
		<div class="col s12 m12 l12">
			<h1>LET'S COLLAB!</h1>
		</div>
	</div>
	<!--END Form title-->

	<!--Form BEGINS-->
	<form id="form" action="index.php" method="POST" autocomplete="off" onsubmit="return validate()">
       	
       	<!--NAME Card Panel-->
   		<div class="card-panel-small" id="form-fields">	
			<div class="row">
				<div class="input-field col s12 m12 l8">
					<i class="material-icons prefix">person</i>
					<label for="name">Full Name: </label>
					<input id="name" name="name" type="text" value="<?= !empty($name) ? $name : '' ?>">
				</div>					
				
				<!--NAME error-->
				<div class="input-field col s12 m12 l4">
					<div id="nameError" class="error"><?= !empty($errors['name']) ? $errors['name'] : '' ?></div>
				</div>
				<!--END NAME error-->
			</div>
		</div>
		<!--END NAME Card Panel-->



		<!--EMAIL Card Panel-->
		<div class="card-panel-small" id="form-fields">	
			<div class="row">
				<div class="input-field col s12 m12 l8">
					<i class="material-icons prefix">email</i>
					<label for="email">Email: </label>
					<input id="email" name="email" type="text" value="<?= !empty($email) ? $email : '' ?>">
				</div>	

				<!--EMAIL error-->				
				<div class="input-field col s12 m12 l4">
					<div id="emailError" class="error"><?= !empty($errors['email']) ? $errors['email'] : '' ?></div>
				</div>
				<!--END EMAIL error-->
			</div>
		</div>
		<!--END EMAIL Card Panel-->



		<!--ADDRESS Card Panel-->
		<div class="card-panel-small" id="form-fields">	
			<div class="row">
				<div class="input-field col s12 m12 l8">
					<i class="material-icons prefix">home</i>
					<label for="address"> Address: </label>
						<textarea id="address" class="materialize-textarea" type="text"  name="address" ><?= !empty($address) ? $address : '' ?></textarea>
				</div></br>

				<!--ADDRESS error-->
				<div class="input-field col s12 m12 l4">	
					<div id="addressError" class="error"><?= !empty($errors['address']) ? $errors['address'] : '' ?></div>
				</div>
				<!--END ADDRESS error-->
			</div>
		</div>
		<!--END ADDRESS Card Panel-->



		<!--DOB/AGE Card Panel-->
		<div class="card-panel-small" id="form-fields">	
			<div class="row">
				<!--DOB Content-->
				<div class="input-field col s12 m12 l4">
					<i class="material-icons prefix">date_range</i>
					<label for="dateofbirth">Date of Birth: </label>
					<input id="dateofbirth" name="dateofbirth" type="date" class="datepicker" onchange="calculateAge()" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>">
				</div>

				<!--AGE Content-->
				<div class="input-field col s12 m12 l4">
					<i class="material-icons prefix">cake</i>
					<label for="age"> Age: </label>
					<input id="age" name="age" type="number" min="1" max="150" value="<?= !empty($age) ? $age : '' ?>">
				</div>

				<!--DOB/AGE error-->
				<div class="input-field col s12 m12 l4">
					<div id="dateofbirthError" class="error"><?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : '' ?></div>
					<div id="ageError" class="error"><?= !empty($errors['age']) ? $errors['age'] : '' ?></div>
				</div>
				<!--END DOB/AGE error-->
			</div>
		</div>
		<!--END DOB/AGE Card Panel-->



		<!--GENDER Card Panel-->
		<div class="card-panel-small" id="form-fields">	
			<div class="row">
				<div class="input-field col s12 m12 l8">
					<i class="material-icons prefix">wc</i>
					<label for="gender"></label>
					<!--Dropdown-->
					<select id="gender" name="gender">
					<option disabled selected>Gender</option>
					<option value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'selected="selected"'; ?>>Male</option>
					<option value="female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'selected="selected"'; ?>>Female</option>
					<option value="other" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'other') echo 'selected="selected"'; ?>>Other</option>
					</select>
					<!--END Dropdown-->
				</div>
				
				<!--GENDER error-->	
				<div class="input-field col s12 m12 l4">	
					<div id="genderError" class="error"><?= !empty($errors['gender']) ? $errors['gender'] : '' ?></div>
				</div>
				<!--END GENDER error-->
			</div>
		</div>
		<!--END GENDER Card Panel-->



		<!--MOVIE Card Panel-->
		<div class="card-panel-small" id="form-fields">	
			<div class="row">
				<div class="input-field col s12 m12 l8">
					<i class="material-icons prefix">movie</i>
					<label for="movie"></label>
					<!--Dropdown-->
					<select id="movie" name="movie">
					<option disabled selected <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select A Movie</option>
					<option value="movie2" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie2') echo 'selected="selected"'; ?>>Star Wars</option>
					<option value="movie3" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie3') echo 'selected="selected"'; ?>>The Matrix</option>
					<option value="movie4" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie4') echo 'selected="selected"'; ?>>The Dark Knight</option>
					</select>
					<!--END Dropdown-->
				</div>	

				<!--MOVIE error-->	
					<div class="input-field col s12 m12 l4">	
					<div id="movieError" class="error"><?= !empty($errors['movie']) ? $errors['movie'] : '' ?></div>
					</div>
				<!--END MOVIE error-->		
			</div>
		</div>
		
		<!--*NOTE SUBMIT/CLEAR BUTTONS ARE IN THIS Card Panel*-->
			<div class="row">
	  			<div class="col s12 m12 l12">
					<div class="right">
					<!--SUBMIT Button-->	
						<button id="submitForm" class="btn waves-effect waves-light" type="submit" name="action"> Submit
						<i class="material-icons right">send</i>
						</button>
					<!--END SUBMIT Button-->

					<!--CLEAR Button-->
						<button id="clearFields" type="reset" value="reset"  class="btn waves-effect waves-light" onclick="clearForm()" > Clear
						<i class="material-icons right">undo</i>
						</button>
					<!--END CLEAR Button-->
					</div>
				</div>
			</div>
		</div>
		<!--END MOVIE Card Panel-->
	</form>
	<!--FORM ENDS-->
</div>