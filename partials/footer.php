		<!--Materialize jQuery-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

		<!-- Compiled and minified JavaScript-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

		<!--Web Form JS-->
		<script type="text/javascript" src="js/main.js"></script>

		<!--Materialize JS Features-->
		<script type="text/javascript">

		//Date Picker Feature-----------
		var today = new Date();
		today.setFullYear( today.getFullYear() - 150 );
		$('.datepicker').pickadate({
		    selectMonths: true, 
		    selectYears: 150,
		    format: 'mm/dd/yyyy',
		    min: today,
		    max: new Date()
		  });


		//Dropdown Select Feature-----------
		$(document).ready(function() {
		    $('select').material_select();
		  });
		</script>
	</body>
</html>