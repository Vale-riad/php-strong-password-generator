<?php 

function generatePassword() {
    $min_length=8;  //Minimum length of the password
    $min_numbers=2; //Minimum of numbers AND special characters
    $min_letters=2; //Minimum of letters
    
    $password = '';
    $numbers=0;
    $letters=0;
    $length=0;
    
    while ( $length <= $min_length OR $numbers <= $min_numbers OR $letters <= $min_letters) {
        $length+=1;
        $type=rand(1, 3);
        if ($type==1) {
            $password .= chr(rand(33, 64)); //Numbers and special characters
            $numbers+=1;
        }elseif ($type==2) {
            $password .= chr(rand(65, 90)); //A->Z
            $letters+=1;
        }else {
            $password .= chr(rand(97, 122)); //a->z
            $letters+=1;
        }
        
    
    } 
    return $password;
   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title> PHP Strong Password Generator</title>
</head>
<body>
    <h1><?php echo  generatePassword();?></h1>
<form class="row g-3 mt-5 mx-4">
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Generate Password</button>
  </div>
</form>
</body>
</html>