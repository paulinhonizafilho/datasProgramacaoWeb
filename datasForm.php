<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exercdatas</title>
</head>
<body>

<form action="datasForm.php" method="POST">
 <input type="text" placeholder= "data1:" name="data1" />
<p> <input type="text" placeholder= "data2:" name="data2" /></p>

 
 <p><input type="submit" value="Diferença"></p>
</form>

<?php 

$dat1 = date_create($_POST["data1"]); 

$dat2 = date_create($_POST["data2"]); 

 $diferenca = date_diff($dat1, $dat2); 

  echo $diferenca->format('A diferença de dias entre essas datas são: %R%a dias'); 
?>















</body>
</html>
