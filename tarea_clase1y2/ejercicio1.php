  <?php
$suma = '';
$n1 = '';
$n2 = '';

if($_POST){
    $n1 = $_POST['txtN1'];
    $n2 = $_POST['txtN2'];
    $suma = $n1+$n2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        input {margin:5px}
    </style>
</head>
<body>
    <h3>1 Realizar un Formulario que acepte 2 numeros y que pueda calcular 
  la suma de estos</h3>
    <form action="" method="post">
    <input value="<?php echo $n1;?>" type="number" placeholder="Numero 1" name="txtN1"><br>
    <input value="<?php echo $n2;?>" type="number" placeholder="Numero 2" name="txtN2"><br><br>
    <button type="submit">Sumar</button>
    <button onclick="nuevo();" type="button">Limpiar</Button>

<hr>
    <h4>Resultado:</h4><label><?php echo $suma?></label>
    </form>
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