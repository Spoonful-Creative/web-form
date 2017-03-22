<?php include 'header.php'; ?>
	
	<div id="center-page">
		<div class="container" id="thanks-page">
			
			<div class="row">
				<div class="col s10 offset-s1 m8 offset-m2 l8 offset-l2">
					<div class="center">
						<img id="open-mail" src="img/thanks-icon.png" />
					</div>
			
					
					<h2 class="text-center">Thanks for the message </br><span class="highlight"><?= $name ?></span></h2>
					<h2 class="text-center text-muted">We will be in contact shortly via </br><span class="highlight"><?= $email ?></span></h2>


					<div class="right">
						<a href="./index.php" id="resetForm" class="btn waves-effect waves-light" type="submit" name="action">
							  Return <i class="material-icons right">replay</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>

