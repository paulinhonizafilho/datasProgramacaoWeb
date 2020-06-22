<?php 

$dat1 = date_create('23-02-2004'); 

$dat2 = date_create('22-06-2020'); 

 $diferenca = date_diff($dat1, $dat2); 

  echo $diferenca->format('A diferença de dias entre essas datas são: %R%a dias'); 
?>