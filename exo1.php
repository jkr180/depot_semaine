<?php
function impair($num)
{
 if($num % 2 != 0)
 {
  return true;
 }
 return false;
}
 
for($i= 0; $i <= 150; $i++)
{
 if(impair($i))
 {
  echo $i;
  echo"<br/>";
 }
}
?>