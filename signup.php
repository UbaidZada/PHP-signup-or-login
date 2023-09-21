
<?php include('connection.php');?>


<?php

if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sqlinsert = "INSERT INTO `student`(`first_name`, `last_name`, `email`, `password`)
 VALUES (:firstname,:lastname,:email,:password)";

$insertprepare = $connection->prepare($sqlinsert);

$insertprepare->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$insertprepare->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$insertprepare->bindParam(':email',$email,PDO::PARAM_STR);
$insertprepare->bindParam(':password',$password,PDO::PARAM_STR);


$insertprepare->execute();

header('location:login.php');


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="text-center my-5" >Signup</h1>
<div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method = "post" class = "form-group">

<label for=""> First Name</label>
<input type="text" name = "firstname" id = "" class = "form-control"> <br>

<label for=""> Last Name</label>
<input type="text" name = "lastname" id = "" class = "form-control"> <br>

<label for=""> Email </label>
<input type="email" name = "email" id = "" class = "form-control"> <br>

<label for=""> Password </label>
<input type="password" name = "password" id = "" class = "form-control"> <br> 

<input class = " btn btn-success" type="submit" name = "submit" value = "Sign Up">

    </form>
</div>

</body>
</html>








