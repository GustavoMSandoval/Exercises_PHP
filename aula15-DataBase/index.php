
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
        <h3>Register</h3>
        <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" id="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="text" name="email" placeholder="E-mail">
            <button>Signup</button>
        </form>
        <h3>Update</h3>
        <form action="includes/userupdate.inc.php" method="post">
            <input type="text" name="username" id="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="text" name="email" placeholder="E-mail">
            <button>Update</button>
        </form>
        <h3>Delete</h3>
        <form action="includes/userdelete.inc.php" method="post">
            <input type="text" name="username" id="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button>Delete</button>
        </form>
    </main>
</body>
</html>