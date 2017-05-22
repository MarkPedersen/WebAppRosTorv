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
 @foreach($stores as $store)
            <tr align="center">
            <td>
            <form action="/admin/forside">
            <button data-toggle="modal" data-target="#myModalEdit"><span class="glyphicon glyphicon-pencil" style="color:blue"></span></button>
            </form> 
            </td>
            
            <td>{{ $store->name }} </td>
            
            <td>
            
            <form action="/admin/forside" method="DELETE">
            <input type="hidden" name="store_id" value="DELETE">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
             <button type="submit"><span class="glyphicon glyphicon-remove" style="color:red"></span></button> 
              </form>

           <!--  <a href="{!! action('storeController@destroy', $store->id) !!}" class="glyphicon glyphicon-remove">
               -->
          <!-- <form method="post" class="pull-left">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="_delete" value="{{ $store->id }}">
               <div>
                   <button type="submit" class="glyphicon glyphicon-remove">Delete</button>
               </div>
           </form>
 -->
            <!-- <form method="post" action="{!! action('storeController@destroy', $store->id) !!}">
            <input type="hidden" name="_token" value="{{!! csrf_token() !!}}">

            <div>

            <button type="submit"><span class="glyphicon glyphicon-remove" style="color:red"></span></button> 
            </div>
            </form> -->
            
            

            </td>
            </tr>
            @endforeach
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

<!-- Create shop Modal -->
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
                <form method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <fieldset>
                  <div class="form-group">
                    <label for="name">Butikkens Navn</label>
                      <input type="text" class="form-control"
                      name="name" placeholder="Indsæt Navn"/>
                  </div>
                  <div class="form-group">
                    <label for="password">Adgangskode</label>
                      <input type="text"  class="form-control" name="password"
                          placeholder="Adgangskode"/>
                  </div>
                 <!--  <div class="form-group">
                    <label for="exampleInputRPassword1">Gentag Adgangskode</label>
                      <input type="Rpassword" class="form-control"
                          id="exampleInputRPassword1" placeholder="Adgangskode"/>
                  </div> -->
                  <div class="form-group">
                <button type="button" class="btn btn-default pull-left"
                        data-dismiss="modal">
                            Luk
                </button>
                <button type="submit" class="btn btn-success">
                    Gem butik
                </button>
                </div>
               </fieldset>


            </form>
                
            </div>
            
            
        </div>
    </div>
</div>


<!-- Post Info -->
<div style='position:fixed;bottom:0;left:0; background:lightgray;width:100%;'>
    
    
</div>


    </div>

  <div class="col-md-2 text-center">
  </div>
</body>
<style type="text/css">

  .modal-body .form-horizontal .col-sm-2,
  .modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

table {
  table-layout: fixed;
  width: 100%;
}

table td {
  word-wrap: break-word;
  overflow-wrap: break-word;
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}
</style>
</html>