<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Calculo de Moneda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Calculo de Moneda</h3>
    </div>
  </header>

  <main class="px-3">
    <h1>Convertidor de Divisas</h1>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Divisa de Origen</label>
      <div class="input-group mb-3">
        <label class="input-group-text">Monto</label>
        <input type="text" class="form-control" id="numero">
      </div>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option>Seleccion de Divisa</option>
        <option value="1">Euro</option>
        <option value="2">Dolar</option>
        <option value="3">Libre Esterlina</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Divisa de Cambio</label>
      
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option>Seleccion de Divisa</option>
        <option value="1">Euro</option>
        <option value="2">Dolar</option>
        <option value="3">Libre Esterlina</option>
      </select>
    </div>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Convertir</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>Realizado por Williams Amaya - Rubidia Paz</p>
  </footer>
</div>    
  </body>
</html>
