<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio switch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Número</label>
        <input type="number" name="num" id="num">
        <label for="n">Escolha</label>
        <label for="dobro">dobro</label>
        <input type="radio" name="def" id="dobro" value="1" checked>
        <label for="raiz">raíz</label>
        <input type="radio" name="def" id="raiz" value="2">
        <label for="cubo">cubo</label>
        <input type="radio" name="def" id="cubo" value="3">
        <input type="submit" value="enviar">
       </form>
    </main>
    <?php 
    
    $valor = $_GET['num'] ?? 0;
    $def = $_GET['def'] ?? 0;
    
    
    switch($def){
        case 1:
        $vr = $valor * 2;
       
        break;
        case 2:
        $vr = $valor **(1/2);
        
        break;
        case 3:
        $vr = $valor**(1/3);
        
        break;  
 
    }
    print $vr

    
    
    ?>
</body>
</html>