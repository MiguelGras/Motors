<!DOCTYPE html>
<html>
  <head>
    <title>Cars</title>
  </head>
  <body>
      @foreach ($car as $car)
      <h1>Car {{ $car->id }}</h1>
      <ul>
        <li>Make: {{ $car->make }}</li>
        <li>Model: {{ $car->model }}</li>
        <li>Produced on: {{ $car->produced_on }}</li>
      </ul> 
      @endforeach
      <form action="{{url('/cars/create')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <!--@csrf-->
        {{method_field('POST')}}
        <p>Make: <input type="text" name="make" id="make"></p>
        <p>Model: <input type="text" name="model" id="model"></p>
        <p>Produced on: <input type="date" name="produce" id="date"></p>
        <p>Created at: <input type="date" name="created" id="date"></p>
        <p>Updated at: <input type="date" name="updated" id="date"></p>
        <input type="submit" value="Crear" name="Crear">
  </body>
</html>