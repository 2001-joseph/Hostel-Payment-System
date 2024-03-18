<?php
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  

$sql="Select * from registration where username='$username' and password='$password'";
$result=mysqli_query($con,$sql);
if($result){
  $num=mysqli_num_rows($result);
  if($num>0){
    //echo "login successful";
   $login=1;
   
   session_start();
   $_SESSION['username']=$username;
   header("location:home.php");

  }else{
//echo "Invalid data";
$invalid=1;
}

   
  }
  
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>login page</title>
  </head>
  <body>
  <?php
if($invalid){
  echo '<div class="alert-danger alert-dismissible fade show" role="alert">
  <strong>Oh no sorry</strong> invalid credentials.
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
if($login){
  echo '<div class="alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> You have successfuly logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
?>



    <h1 class="text-center">Welcome to muni hostels<br/>
    login to our site</h1>
    
    
    <div class="container fluid mt-5">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" 
    placeholder="enter your username" name="username">
    <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" 
    placeholder="Enter your password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary
   w-1oo">login</button>
  
</form>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>