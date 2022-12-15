<?php
    session_start();
    function generatePassword($min) {
        $min_length= $min ;  //Minimum length of the password
        $min_numbers=2; //Minimum of numbers AND special characters
        $min_letters=2; //Minimum of letters
        
        $password = '';
        $numbers=0;
        $letters=0;
        $length=0;
        
        while ( $length < $min_length OR $numbers < $min_numbers OR $letters <= $min_letters) {
            $length+=1;
            $type=rand(1, 3);
            if ($type==1 && $length < $min_length) {
                $password .= chr(rand(33, 64)); //Numbers and special characters
                $numbers+=1;
            }elseif ($type==2 && $length < $min_length) {
                $password .= chr(rand(65, 90)); //A->Z
                $letters+=1;
            }elseif($length < $min_length) {
                $password .= chr(rand(97, 122)); //a->z
                $letters+=1;
            }       
        } 
        return $password;  
    }
    if( !empty($_GET['number'])) {

        $_SESSION['password'] = generatePassword($_GET['number']);
        header("Location: http://localhost/php-strong-password-generator/showPassword.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
        <!-- Bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- /Bootstrap css -->

        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- /Bootstrap JavaScript -->
    </head>

    <body class="container">
        <form class="row g-3" action="index.php" method="GET">

            <div class="col-auto">
                <label for="number" class="">Lunghezza</label>

                <input type="number" min="3" class="" name="number" id="number">
            </div>

            

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Generate Password</button>
            </div>
        </form>
        
    </body>
</html>