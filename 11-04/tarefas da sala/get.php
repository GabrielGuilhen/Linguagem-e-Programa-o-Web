<?php

//$numero1 = $_GET['numero1'];
//echo "<br>";
//$numero2 = $_GET['numero2'];
//$soma = $numero1 + $numero2;
//echo "Número 1 = 17, Número 2 = 13 <br>";
//echo "A soma dos dois numeros é " . $soma;

//$n1 = $_GET ['n1'];
//$n2 = $_GET ['n2'];
//$n3 = $_GET ['n3'];

//$soma = $n1+$n2+$n3;
//$media = $soma / 3;
//echo "Média =" . $media;

//if (isset($_GET['cor'])) {

//    $cor = $_GET['cor'];
//   if ($cor != "") {
//      echo "<body style='background-color:" . $cor . ";'>";
//      echo "</body>";
//   }else{
//      echo "Informe a cor!";
//  }
//} else {
echo "Informe a cor!";
//}

if(isset($_GET['numero1'])&& ($_GET['numero2'])){
    echo "Escolha umas das operações:";
    echo "";

}

$numero1 = $_GET['numero1'];
echo "<br>";
$numero2 = $_GET['numero2'];

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$divisão = $numero1 / $numero2 ;
$multi = $numero1 * $numero2;
$resto = $numero1 % $numero2;

