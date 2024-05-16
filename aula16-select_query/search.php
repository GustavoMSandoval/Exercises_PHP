<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["usersearch"];

    try{

        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments2 WHERE username = :usersearch;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":usersearch",$username);
    
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

    } catch (PDOException $e) {

        die("Query failed: ". $e->getMessage());

    }

} else {

    header("Location: ../index.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <h3>Search results:</h3>

<main>
    
    <section>
        <pre>
        
                 <?php
        
                 if(empty($results)){
                    echo "<div>";
                    echo "<p>No results</p>";
                    echo "</div>";
                 } else {
                    foreach ($results as $row) {
                        echo "<div>";
                        echo "<h4>".htmlspecialchars($row["username"])."<br>"."</h4>";
                        echo "<p>".htmlspecialchars($row["comment_text"])."<br>"."</p>";
                        echo "<p>".htmlspecialchars($row["created_at"])."<br>"."</p>";
                        echo "</div>";
                    }
                 }
        
                 ?>
        </pre>
    </section>
</main>



</body>
</html>