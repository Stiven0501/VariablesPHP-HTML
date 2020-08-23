<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
   <?php
   $carafeliz = "php/img/carafeliz.jpg";
   $caratriste = "php/img/caratriste.jpg";
$n1= $_REQUEST["n1"];
$n2= $_REQUEST["n2"];
$sum = $n1 + $n2;
$rest = $n1 - $n2;
$mult = $n1 * $n2;
$div = $n1 / $n2;
$signosum = "";
$signorest = "";
$signomult = "";
$signodiv = "";
$carasum="";
$cararest="";
$caramult="";
$caradiv="";

if ($sum > 0){
    $signosum= "POSITIVO";
    $carasum= $carafeliz;
} else {
    $signosum= "NEGATIVO";
    $carasum= $caratriste;
}

if ($rest > 0){
    $signorest= "POSITIVO";
    $cararest= $carafeliz;
} else {
    $signorest= "NEGATIVO";
    $cararest= $caratriste;
}

if ($mult > 0){
    $signomult= "POSITIVO";
    $caramult= $carafeliz;
} else {
    $signomult= "NEGATIVO";
    $caramult= $caratriste;
}

if ($div > 0){
    $signodiv= "POSITIVO";
    $caradiv= $carafeliz;
} else {
    $signodiv= "NEGATIVO";
    $caradiv= $caratriste;
}

?>
   
   <table border="4"  align "center" >
  
   <h2>CALCULADORA DE VARIABLES HTML/PHP </h2>

  <tr align "center" bgcolor=#2CA8E0>
  <td><h4><center> OPERACIÓN</center></h4></td>
   <td><H4><center>RESULTADO</center></h4></td>
   <td><H4><center>SIGNO</center></h4></td>
   <td><H4><center>CARA</center></h4></td>
  </tr>
  <tr align "center">
  <td><h4><center> SUMA</center>  </h4></td>
   <td><H4><center><span> <b> <?php echo $sum; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $signosum; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $carasum; ?> </b></span></center></h4></td>
  </tr>
  <tr align "center">
  <td><h4><center> RESTA</center></h4></td>
   <td><H4><center><span><b> <?php echo $rest; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $signorest; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $cararest; ?> </b></span></center></h4></td>
  </tr>
  <tr align "center">
  <td><h4><center> MULTIPLICACIÓN</center></h4></td>
   <td><H4><center><span><b> <?php echo $mult; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $signomult; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $caramult; ?> </b></span></center></h4></td>
  </tr>
  <tr align "center">
  <td><h4><center> DIVISIÓN</center></h4></td>
   <td><H4><center><span><b> <?php echo $div; ?> </b></span></center></h4></td>
   <td><H4><center><span><b> <?php echo $signodiv; ?> </b></span></center></h4></td>
   <td><H4><center><span> <b> <?php echo $caradiv; ?> </b></span></center></h4></td>
  </tr>    
  </table> 
 </body>
</html>
