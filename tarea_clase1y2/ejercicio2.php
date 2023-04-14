  <?php
$Rango = '';


if($_POST){
  $Rango = array();
    $n1 = $_POST['Primer_Numero'];
    $n2 = $_POST['Segundo_Numero'];

    $mayor= 0;
    $menor=0; 

    if($n1 > $n2){
      $mayor = $n1;
      $menor = $n2;
    }else {
      $mayor = $n2;
      $menor = $n1;
    }
  for ($x = $menor+1; $x < $mayor; $x++){
    $Rango[] = $x;
  }

  $Rango = implode(" - ", $Rango);
  }
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
  </head>
  <body>
    <h3>Introduzca dos numeros y se mostrará los
  numeros que estan entre el rango de ambos</h3>

  <form action="" method="post">
    <input value="<?php echo $n1; ?>" require type="number" placeholder="Primer Numero" name="Primer_Numero"><br><br>
    <input value="<?php echo $n2; ?>" require type="number" placeholder="Segundo Numero" name="Segundo_Numero"><br><br>
    <button type="submit">Calcular</button>
    <button onclick="nuevo();" type="button">Limpiar</Button>

<hr>
<div>
    <h4>Resultado:</h4>
      <?php echo $Rango?>
      </div></form>
    <hr>
 <a href="index.php"><button>Menu Principal</button></a>
    <script>
        function nuevo(){
            if(confirm("Seguro que desea limpiar ?")) {
                window.location=window.location
            }
        }
    </script>
  </body>
  </html>