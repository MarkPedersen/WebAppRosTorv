@extends('layouts.master')

@section('title', 'testmaster')

@section('navbar')
  @parent
@stop
@section('content')
<div style="padding-top: 20px;">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 class="panel-heading text-center">Events</h2>
    </div>
      <table class="table">
        <thead>
          <tr>
<!-- 
                  <div class="text-left">
      <button type="button" class="btn-success " style="width: 200px; height: 40px;">
      <span class="glyphicon glyphicon-plus"></span> Tilføj Ny Event</button>
      </div> -->
        <div class="pull-right">
           <a href="/tilføj-event"><button type="button" class="btn-success " style="width: 200px; height: 40px;">
            <span class="glyphicon glyphicon-plus"></span> Tilføj Ny Event</button></a> 
        </div>
   
        </tr>
        <tr>
          <th>
            Navn
          </th>
          <th>
            Beskrivelse
          </th>
          <th>
            Fra
          </th>
          <th>
            Til
          </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
          <tr>
          <td>{{ $event->name }}</td>
          <td>{{ $event->description }}</td>
          <td>{{ $event->start_date }}</td>
          <td>{{ $event->end_date }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
  </div>
</div>
@stop
<style type="text/css">
.forsideheader {
      padding: 1em;
    color: white;
    background-color: white;
    clear: left;
    text-align: center;
}
table {
    table-layout: fixed;
    width: 100%;
}

table td {
    word-wrap: break-word;         /* All browsers since IE 5.5+ */
    overflow-wrap: break-word;     /* Renamed property in CSS3 draft spec */
}
.basic {
  padding-top: 20px;
}
</style>

</html>