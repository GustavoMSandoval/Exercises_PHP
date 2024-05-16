<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro alimentado</title>
           <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
       //Capturando dados do formulário Retroalimentado
       $valor1 = $_GET["v1"] ?? 0;
       $valor2 = $_GET["v2"] ?? 0;//sem parâmetro 0
       
    
    
    ?>
    <main>
        <h1>Somador</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1//short tag?>" step="0.01">
            <label for="v2">valor 2</label>
            <input type="number" name="v2" id="v2 " value="<?=$valor2?>" step="0.01">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado soma</h2>
        <?php 
        
        $soma = $valor1 + $valor2;
        if ($soma!=0){
        print"<p>Essa é a soma <strong>$soma</strong> </p>";
        }
        else{
            print"soma inválida";
        }
        ?>
    </section>
</body>
</html>