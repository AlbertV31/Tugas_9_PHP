<?php
$a=0;
$b=1;

echo "$a $b";
for ($i=0; $i<20; $i++)
{
  $fibo = $a + $b;
  echo " $fibo";
  $a = $b;
  $b = $fibo;
}

?>
