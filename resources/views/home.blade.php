@extends('tablar::page')

@section('content')
    <!-- Page header -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - Inventario de Calzado</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
          body {
            font-family: Arial, sans-serif;
            background-color: #637A9F;
          }
          .container {
            margin-top: 50px;
            justify-content: center;
            justify-content: center;
            height: 100vh; 
          }
          h1 {
            text-align: center;
            margin-bottom: 30px;
          }
          .card {
            margin-bottom: 30px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;

          }
          .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 500px; /* Ancho de la tarjeta */
            height: 400px;
            
            object-fit: cover;
          }
          .card-body {
            text-align: center;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <h1>Bienvenido al Sistema de Inventario de Calzados Bumerang</h1>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
              </div>
        </div>
        
      </body>
        
      
    @endsection
