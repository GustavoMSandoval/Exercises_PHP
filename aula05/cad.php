<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            var_dump($_GET);//Descreve todas as características 
            /*var_dump($_REQUEST);//usa get post e cookies */
            $nome = $_GET["nome"] ?: "sem nome";/*se não for colocado nome*/
            $sobrenome = $_GET["sobrenome"] ?: "desconhecido";
            print "<p> é um prazer <strong> $nome $sobrenome</strong>";
            

        ?>
        <p><a href="javascript:history.go(-1)">voltar</a></p>
    </main>
</body>
</html>