@extends('layouts.master')

@section('title', 'testmaster')

@section('navbar')
  @parent
@stop
<p>For later:
if user.role = admin
include('header') 
else</p>
@section('content') 
  <div class="col-md-12">
      <div>
        <input type="text" disabled="disabled" value="" name="Butiksnavn">
      </div>
  <div class="row">
    <div class="btn text">

    </div>
  </div>
    <div class="row text-center">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-heading text-center">Tilbud</h2>
        </div>
        <table class="table">
          <thead>
          <tr>
            <th>
                    <div class="text-left">
        <a href="nyt-tilbud"><button type="button" class="btn-success " style="width: 200px; height: 40px;">
        <span class="glyphicon glyphicon-plus"></span> Tilføj nyt tilbud</button></a>
            </th>
            <th>
            
            </th>
            <th>

            </th>
            <th class="text-right">
              <button type="button" class="btn-danger" style="width: 200px; height: 40px;">
              <span class="glyphicon glyphicon-minus"></span> Delete Tilbud</button>            
            </th>            
          </tr>
          <tr>
            <td>
              Navn
            </td>
            <td>
              Beskrivelse
            </td>
            <td>
              Fra
            </td>
            <td>
              Til
            </td>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Mindre langt</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
            <tr>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            <td>Føtex</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop
</html>