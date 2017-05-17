@extends('layouts.master')

@section('title', 'testmaster')

@section('navbar')
  @parent
@stop
@section('content')
	<div class="box solid">
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
			<div class="col-md-4">
				<label>Beskrivelse:</label><br>
				<textarea style="width: 250px; height: 220px;">Test</textarea>
			</div>
			<div class="col-md-4">
				<form method="POST" action="imagecontroller.php" enctype="multipart/form-data">
					<label>Img:</label>
					<div id="wrapper">
						<input id="fileUpload" multiple="multiple" type="file" name="myimage"> 
						<div id="image-holder"></div>
						<input type="submit" name="submit_image" value="Upload">
					</div>
				</form>
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
			<div class="col-md-4 pull-right"><br>
				<button type="button" name="save" class="btn btn-success" style="text-align: center; width: 150px; ">Save</button> 
			</div>
		</div>
	</div>
@stop
</html>