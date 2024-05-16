<?php 

//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST" ){

    $primonome = htmlspecialchars($_POST["primonome"]);
    $cognome = htmlspecialchars($_POST["cognome"]);
    $animale = htmlspecialchars($_POST["animale"]);

    if(empty($primonome)){
        header("Location: forms.php");
        exit();
    }

    echo "Questa è la data inviata dall`utente ";
    echo $primonome." ";
    echo $cognome." ";
    echo $animale;

    header("Location: forms.php");//pode estar errado
}else{
    header("Location: forms.php");
}