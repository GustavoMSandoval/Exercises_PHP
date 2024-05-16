<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super_globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
            setcookie("dia-da-semana","segunda",time()+3600);

            session_start();
            $_SESSION["teste"] = "funcionou";

            print "<h1> Super global GET</h1>";
            var_dump($_GET);//possível passar valores pela url,query string 
            
            print"<h1>Super Global Post</h1>";
            var_dump($_POST);// é visível ao enviar por formulário

            print"<h1>Super Global Request</h1>";
            var_dump($_REQUEST);//mostra todos os valores em um único array

            print"<h1>Super Global Cookie </h1>";
            var_dump($_COOKIE);

            print"<h1>Super Global FILES </h1>";
            var_dump($_FILES);

            print"<h1>Super Global SESSION </h1>";
            var_dump($_SESSION);

            print"<h1>Super Global ENV </h1>";
            var_dump($_ENV);
            //foreach(getenv() as $c => $v){
            //   echo"<br> $c -> $v";
            //}

            print"<h1>Super Global Server </h1>";
            var_dump($_SERVER);

            print"<h1>Super Global GlOBALS </h1>";
            var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>