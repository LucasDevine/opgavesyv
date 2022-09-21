<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Hjem</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    
    <h1>Hjem</h1>
    
    <?php if (isset($user)): ?>
        
        <p>Hej Rotte <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log ud</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log ind</a> or <a href="signup.html">Opret bruger</a></p>
        
    <?php endif; ?>
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    