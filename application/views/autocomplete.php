<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script type="text/javascript">
	
	$(document).ready(function(){

		$("#negara").autocomplete({
			source: 'autocomplete/lookup',

			focus: function(event, ui){
				event.preventDefault();

				$(this).val(ui.item.label);
				$('#ibukota').val(ui.item.value);

				return false;
			},

			select: function(event, ui){
				event.preventDefault();

				$(this).val(ui.item.label);
				$('#ibukota').val(ui.item.value);

				return false;
			}
		});
	});

	</script>
</head>

<body>

<div class="container">
	<h1>Tutorial Autocomplete</h1>
	<hr>

	<form style="width:50%;">
		<div class="form-group">
			<label for="negara">Negara Asia Tenggara</label>
			<input class="form-control ui-widget" id="negara" type="text" name="negara" placholder="Nama Negara Asia Tenggara" required>
		</div>
		<div class="form-group">
			<label for="ibukota">Ibu Kota Negara</label>
			<input class="form-control" id="ibukota" type="text" name="ibukota" placholder="Ibu Kota Negara" disabled="">
		</div>
	</form>
</div>

</body>
</html>