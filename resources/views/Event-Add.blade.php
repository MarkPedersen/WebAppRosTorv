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
				<label>Navn:</label><br>
				<input type="text" name="name" class="form-control" placeholder="Navn">
			</div>
			<div class="col-md-4">
				<label>Fra:</label><br>
				<input type="date" name="start_date" class="form-control">
			</div>
			<div class="col-md-4">
				<label>Til:</label><br>
				<input type="date" name="end_date" class="form-control">
			</div>
		</div>
		<br>
		
		<div class="row">
			<div class="col-md-4">
				<label>Beskrivelse:</label><br>
				<textarea type="textarea" name="description" class="form-control" style="width: 250px; height: 220px;" placeholder="Beskriv eventet her"></textarea>
				
			</div>

			 <div class="col-md-4">
				<label>Img path:</label><br>
				<input type="text" name="img_path" class="form-control" placeholder="img_path">
			</div> 
			
			<!-- <div class="col-md-4">
				<form method="POST" action="imagecontroller.php" enctype="multipart/form-data">
					<label>Img:</label>
					<div id="wrapper">
						<input id="fileUpload" multiple="multiple" type="file" name="myimage"> 
						<div id="image-holder"></div>
						<input type="submit" name="img_path" value="Upload">
					</div>
				</form>
			</div> -->
				<div class="col-md-4" style="padding-top: 17%;"><br>
					<button type="submit" class="btn btn-success" style="text-align: center; width: 150px;">Save</button> 
				</div>
		</div>
		</fieldset>
		</form>
	</div>
@stop
</html>