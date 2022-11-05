<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
   
   $hoje = date('d/m/Y');
   
   echo ('<h1>'.$hoje.'</h1>');

   $dias = array('Segunda','Terça','Quarta','Quinta');
   $meses =	['Janeiro',	'Fevereiro','Março','Abril'];

   print_r($dias);
   echo '<br>';

   print_r($meses);


    ?>

</body>

</html>