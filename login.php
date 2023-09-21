
<?php include('connection.php');?>


<?php


if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

$sqlinsert = "INSERT INTO `student`(`email`, `password`)
 VALUES (:email,:password)"; 

$insertprepare = $connection->prepare($sqlinsert);
$insertprepare->bindParam(':email',$email,PDO::PARAM_STR);
$insertprepare->bindParam(':password',$password,PDO::PARAM_STR);

$insertprepare->execute();


header('location:signup.php');

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="text-center my-5" >Login</h1>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" class = "form-group">

<label for=""> Email </label>
<input type="email" name = "email" id = "" class = "form-control"> <br>

<label for=""> Password</label>
<input type="password" name = "password" id = "" class = "form-control"> <br>



<input class = " btn btn-success" type="submit" name = "submit" value = "Login">

    </form>
</div>

</body>
</html>








