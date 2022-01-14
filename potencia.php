<?php
function pot($x,$y){
  $result=1;
  if (!is_int($y)){
      return 'Erro';
  }
if  ($y <0){
     $x = 1/$x;
     $y =$y* -1;

}

  for ($i=0; $i < $y; $i++) {
     $result = $result * $x ;
  }
  return $result;
}

$num1= (int) $_POST["num1"];
$num2= (int) $_POST["num2"];
echo pot($num1,$num2);
?>