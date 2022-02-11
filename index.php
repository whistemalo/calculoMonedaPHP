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
        <form method="POST">
        <input type="text" name="monto" class="form-control" id="numero">
      </div>
        <select name="div1" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option>Seleccion de Divisa</option>
          <option value="EUR">Euro</option>
          <option value="USD">Dolar</option>
          <option value="GBP">Libra Esterlina</option>
        </select>
      
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Divisa de Cambio</label>
      
        <select name="div2" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option>Seleccion de Divisa</option>
          <option value="EUR">Euro</option>
          <option value="USD">Dolar</option>
          <option value="GBP">Libra Esterlina</option>
        </select>
     
    </div>
    
      <button name="conv" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Convertir</button>
    </form>

    <?php
if(isset($_POST['conv'])&& $_POST['div1'] != "Seleccion de Divisa" && $_POST['div2'] != "Seleccion de Divisa" && $_POST['monto']!=0){

  // if ($_POST['div1'] == "USD"){
  //   $montousd=$_POST['monto'];
  //   echo "<h2> $montousd  dolares es igual a ". ($montousd * 0.87) . " euros <h4/>";
  //   echo var_dump(isset($_POST['conv']));
  // }
   $ch= curl_init();
   $moneda=$_POST['div1'];
   $cambio=$_POST['div2'];
   $monto=$_POST['monto'];
   $url = "https://v6.exchangerate-api.com/v6/9c793953e348a8e6e509d016/latest/$moneda";
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   
   $resp = curl_exec($ch);
   $object = json_decode($resp);  
  
   if($e = curl_exec($ch)){
       //echo $e;
   }
  
   curl_close($ch);
  //  $resultado= $_POST['monto']/$object->;

  // printf('%f convertidos a %s son equivalentes a %s',$_POST['monto']);
   
  
  switch($cambio){
    case "EUR":
      echo "<h3>" . $monto. " $moneda equivalen a ". round((($object->conversion_rates->EUR)*$monto),2) . " $cambio <h3/>";
      break;
    case "USD":
      echo "<h3>" . $monto. " $moneda equivalen a ". round((($object->conversion_rates->USD)*$monto),2) . " $cambio <h3/>";
      break;
    case "GBP":
      echo "<h3>" . $monto. " $moneda equivalen a ". round((($object->conversion_rates->GBP)*$monto),2) . " $cambio <h3/>";
      break;
  }
  
  } 
?>



  </main>

  <footer class="mt-auto text-white-50">
    <p>Realizado por Williams Amaya - Rubidia Paz</p>
  </footer>
</div>    
  </body>
</html>
