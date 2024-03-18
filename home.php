<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bg {
      background: url('background_image.jpg') no-repeat center center;
      background-size: cover;
      height: 100vh;
    }
    .btn-link {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }
    .btn-link:hover {
      background-color: #0056b3;
      color: white;
    }
  </style>

  <title>Home Page</title>
</head>
<body>
  <div class="bg">
    <div class="container pt-5">
      <h1 class="text-center text-warning">Welcome to Muni Hostels
     <?php echo $_SESSION['username']; ?><br/>  Check out on our hostels</h1>
      <a href="logout.php" class="btn-primary mt-3">Logout</a>
      <div class="row mt-5">
        <div class="col-md-4">
          <h2>Elite Hostel</h2>
          <a href="hostel_register.php?hostel=elite"><img src="Elite.jpeg" class="img-fluid" alt="Elite Hostel" style="border: 2px solid #fff;"></a>
        </div>
        <div class="col-md-4">
        <h3>Blessing Hostel</h3>
          <a href="hostel_register.php?hostel=blessing"><img src="blessing2.jpeg" class="img-fluid" alt="Blessing Hostel" style="border: 2px solid #fff;"></a>
        </div>
        <div class="col-md-4">
        <h2>St.Theresa Hostel</h2>
          <a href="hostel_register.php?hostel=St.Theresa"><img src="St.Theresa.jpeg" class="img-fluid" alt="Blessing Hostel" style="border: 2px solid #fff;"></a>
        </div>

        <div class="col-md-4">
        <h2>Las Vegas Hostel</h2>
          <a href="hostel_register.php?hostel=Las Vegas"><img src="Las Vegas.jpeg" class="img-fluid" alt="Blessing Hostel" style="border: 2px solid #fff;"></a>
        </div>

        <div class="col-md-4">
        <h2>Winners Hostel</h2>
          <a href="hostel_register.php?hostel=Winners"><img src="Winners.jpeg" class="img-fluid" alt="Blessing Hostel" style="border: 2px solid #fff;"></a>
        </div>

        <!-- Add more columns and images for other hostels if needed -->
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>