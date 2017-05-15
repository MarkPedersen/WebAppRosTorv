<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Add Event</title>
@include('header-user') 
</head>
<body>
<div class="col-md-2">
	
</div>
<div class="col-md-8">
		<div class="row">
			<div class="col-md-4">
				<label for="name">Navn:</label><br>
				<input type="text" name="Name" placeholder="Navn">
			</div>
			<div class="col-md-4">
				<label>Fra:</label><br>
				<input type="date" name="DateFrom">
			</div>
			<div class="col-md-4">
				<label>Til:</label><br>
				<input type="date" name="DateTo">
			</div>
		</div>

	<br>
	
		<div class="row">
			<div class="col-md-6">
			<label>Beskrivelse:</label><br>
			<textarea style="width: 250px; height: 60px;">Test</textarea>
			</div>
			<div class="col-md-6">
			<label>Img:</label><br>
			<input type="file" id="browse" name="fileupload" style="display: none" onChange="Handlechange();"/>
			<input type="text" id="filename" readonly="true"/>
			<input type="button" value="Click to select file" id="fakeBrowse" onclick="HandleBrowseClick();"/>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<label for="name">Før Pris:</label><br>
				<input type="number" name="fprice" placeholder="Pris">
			</div>
			<div class="col-md-4">
				<label>Efter Pris:</label><br>
				<input type="number" name="eprice">
			</div>
			<div class="col-md-4">
				<button type="button" name="save" class="btn btn-success">Save</button> 
			</div>
		</div>
</div>	
<div class="col-md-2">
	
</div>

</body>
<script type="text/javascript">
function HandleBrowseClick()
{
    var fileinput = document.getElementById("browse");
    fileinput.click();
}

function Handlechange()
{
    var fileinput = document.getElementById("browse");
    var textinput = document.getElementById("filename");
    textinput.value = fileinput.value;
}
</script>
</html>