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
				<input type="text" required name="name" class="form-control" placeholder="Navn">
			</div>
			<div class="col-md-4">
				<label>Fra:</label><br>
				<input type="date" required name="start_date" class="form-control">
			</div>
			<div class="col-md-4">
				<label>Til:</label><br>
				<input type="date" required name="end_date" class="form-control">
			</div>
		</div>

	<br>
	
		<div class="row">
			<div class="col-md-4">
				<label>Beskrivelse:</label><br>
				<textarea type="textarea" required name="description" class="form-control" style="width: 250px; height: 220px;" placeholder="Beskriv eventet her"></textarea>
			</div>

			<div class="col-md-4">
				<label>Img path:</label><br>
				<input type="text" required name="img_path" class="form-control" placeholder="indsæt billed sti">
			</div> 


			<!-- <div class="col-md-4">
				<form method="POST" action="imagecontroller.php" enctype="multipart/form-data">
					<label>Img:</label>
					<div id="wrapper">
						<input id="fileUpload" multiple="multiple" type="file" name="myimage"> 
						<div id="image-holder"></div>
						<input type="submit" name="submit_image" value="Upload">
					</div>
				</form>
			</div> -->
		</div>

		<div class="row">
			<div class="col-md-4">
				<label>Før Pris:</label><br>
				<input type="decimal" required name="price"  class="form-control">
			</div>
			<div class="col-md-4">
				<label>Efter Pris:</label><br>
				<input type="decimal" required name="discount" class="form-control">
			</div>
			<div class="col-md-4 pull-right"><br>
				<button type="submit" class="btn btn-success" style="text-align: center; width: 150px; ">Save</button> 
			</div>
		</div>
		</fieldset>
		</form>
	</div>
@stop
</html>