
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ecco la tua Password:</h2>
    <?php 
    session_start();
    echo $_SESSION['password'];
?>
    <div class=""><a href="index.php">Torna al form</a></div>
</body>
</html>