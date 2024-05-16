<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="analisador.php" method="POST">


            <label for="primonome">Qual'è il tuo nome?</label>
            <input type="text" name="primonome" id="primonome" placeholder="primo nome...">

            <label for="cognome"> e il tuo cognome?</label>
            <input type="text" name="cognome" id="cognome" placeholder="ultimo nome...">



            <label for="animale"> Qual'è il tuo animale preferito?</label>
            <select name="animale" id="animale">
                <option value="none">none</option>
                <option value="cane">cane</option>
                <option value="gatto">gatto</option>
                <option value="ucello">ucello</option>
            </select>

            <button type="submit">inviare</button>
        </form>
    </main>
</body>
</html>