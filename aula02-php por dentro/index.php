<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="get.php" method="get"></form>


<?= "Curso em Video" ?>

<?php

print "<p>Dia servidor </p>".date("d/M/Y");//D maiúsculo diz o dia em si
print "<p>HORA do servidor</p>".date("G:i:s");

date_default_timezone_set("America/Sao_Paulo");
print "<p>HORA configurada</p>".date("G:i:s");


/*
$nome = "Gus";

if($nome == "Gustavo"){
   print("<p> $nome  bonito nome</p>");}
else{
    print "<p> nome feio</p>";
}
*/

?>
</body>
</html>


