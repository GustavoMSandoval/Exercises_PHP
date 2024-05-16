<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <input type="number" name="idade" id="idade">
        <input type="submit" value="enviar">
    
    
    </form>
    </div>
    <?php 
    $id = isset($_POST["idade"])?$_POST["idade"]:1900;
    $at = date("Y") - $id;
    if($at >= 18){
        echo "pode dirigir";
    }else{
        echo"não pode dirigir";
    }
    
    
    
    
    ?>
</body>
</html>