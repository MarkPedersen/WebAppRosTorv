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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Ro's Torv Forside</title>
</head>
<body>
@include('header')
  <div class="col-md-2">
  </div>
  <div class="col-md-8 ">
  <div class="row">
    <div class="btn text">

    </div>
  </div>
    <div class="row text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-heading">Butikker</h2>
        </div>
        <table class="table">
          <thead>
          <tr>
            <th>
              
            </th>
            <th>
            </th>
            <th class="text-right">

              <button class="btn btn-success" data-toggle="modal" data-target="#myModalNorm"style="width: 100px; height: 40px;"><span class="glyphicon glyphicon-plus"></span>Tilføj</button>  
            </th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Mindre langt</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Tilføj ny butik
                </h4>
            </div>
             
        </div>
    </div>
</div>





<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Tilføj ny butik
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputName1">Butikkens Navn</label>
                      <input type="name" class="form-control"
                      id="exampleInputName1" placeholder="Indset Navn"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Adgangskode</label>
                      <input type="password" class="form-control"
                          id="exampleInputPassword1" placeholder="Adgangskode"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputRPassword1">Gentag Adgangskode</label>
                      <input type="Rpassword" class="form-control"
                          id="exampleInputRPassword1" placeholder="Adgangskode"/>
                  </div>
                </form>
                
                
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left"
                        data-dismiss="modal">
                            Luk
                </button>
                <button type="button" class="btn btn-success">
                    Gem butik
                </button>
            </div>
        </div>
    </div>
</div>





<!-- Post Info -->
<div style='position:fixed;bottom:0;left:0; background:lightgray;width:100%;'>
    About this SO Question:
    <a href='http://stackoverflow.com/q/26562900/1366033'>
        Twitter Bootstap - form in Modal fomatting
    </a><br/>
    Fork This Skeleton Here: 
    <a href='http://jsfiddle.net/KyleMit/kcpma/'>
        Bootstrap 3 Skeleton
    </a><br/>
</div>


    </div>
<!--       <div class="text-center">
      <br>
      <br>
        <button type="button" class="btn-success" style="width: 300px; height: 40px;">
        <span class="glyphicon glyphicon-plus"></span>Tilføj Event her?</button>
      </div>
  </div> -->
  <div class="col-md-2 text-center">
  </div>
</body>
<style type="text/css">

  .modal-body .form-horizontal .col-sm-2,
  .modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}
</style>
</html>