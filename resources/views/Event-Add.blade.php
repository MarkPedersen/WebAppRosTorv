@extends('layouts.master')

@section('title', 'testmaster')

@section('navbar')
  @parent
@stop
@section('content')



	<div class="box solid">
	<form method="POST">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
     <fieldset>
		<div class="row">
			<div class="col-md-4">
				<label for="name">Navn:</label><br>
				<input type="text" name="name" placeholder="Navn">
			</div>
			<div class="col-md-4">
				<label>Fra:</label><br>
				<input type="date" name="start_date">
			</div>
			<div class="col-md-4">
				<label>Til:</label><br>
				<input type="date" name="end_date">
			</div>
		</div>
		<br>
		
		<div class="row">
			<div class="col-md-4">
				<label>Beskrivelse:</label><br>
				<textarea style="width: 250px; height: 220px;">Beskriv eventet her</textarea>
				<input type="text" name="description">
			</div>
			
			<div class="col-md-4">
				<form method="POST" action="imagecontroller.php" enctype="multipart/form-data">
					<label>Img:</label>
					<div id="wrapper">
						<input id="fileUpload" multiple="multiple" type="file" name="myimage"> 
						<div id="image-holder"></div>
						<input type="submit" name="img_path" value="Upload">
					</div>
				</form>
			</div>
				<div class="col-md-4" style="padding-top: 17%;"><br>
					<button type="submit" class="btn btn-success" style="text-align: center; width: 150px;">Save</button> 
				</div>
		</div>
		</fieldset>
		</form>
	</div>
@stop
</html>