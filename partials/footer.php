<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<script src="js/main.js"></script>

<script type="text/javascript">
// var now = new Date();
// var today = new Date(now).toLocaleDateString('en-NZ', {
//     day : 'numeric',
//     month : 'numeric',
//     year : 'numeric'
// }).split(' ').join('/');
// now.setFullYear( now.getFullYear() - 150 );

// var olddate = new Date(now).toLocaleDateString('en-NZ', {
//     day : 'numeric',
//     month : 'numeric',
//     year : 'numeric'
// }).split(' ').join('/');
// $('.datepicker').pickadate({
// 	format: 'dd/mm/yyyy',
//     selectMonths: true, 
//     selectYears: 150,
//     min: olddate,
//     max: today
//   });

var today = new Date();
today.setFullYear( today.getFullYear() - 150 );
$('.datepicker').pickadate({
	format: 'mm/dd/yyyy',
    selectMonths: true, 
    selectYears: 150,
    min: today,
    max: new Date()
  });

$(document).ready(function() {
    $('select').material_select();
  });


</script>


</body>
</html>