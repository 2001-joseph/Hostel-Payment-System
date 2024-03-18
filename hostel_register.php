
<?php
$success = 0;
$user = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'connect.php';  // Include your database connection

  //$Student_number = $_POST['Student_number'];
  $Room_number = $_POST['Room_number'];
  $Amount= $_POST['Amount'];
  $hostel = $_POST['hostel'];
  $username = $_POST['username'];  // Add a field for selecting the hostel during registration

  $sql = "SELECT * FROM " . $hostel . "_registration WHERE username='$username'";
  $result = mysqli_query($con, $sql);

  $sql = "SELECT * FROM " . $hostel . "_registration WHERE Room_number='$Room_number'";
  $result = mysqli_query($con, $sql);

  if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      $user = 1;  // User already exists
    } else {
      $sql = "INSERT INTO " . $hostel . "_registration (username, Room_number,Amount) VALUES ('$username', '$Room_number','$Amount')";
      $result = mysqli_query($con, $sql);
      if ($result) {
        $success = 1;  // Signup successful
        header("location:home.php");
      } else {
        die(mysqli_error($con));
      }
    }
  }
}
?>

<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    
  </head>
  <body>
  <?php
if($user){
  echo '<div class="alert-danger alert-dismissible fade show" role="alert">
  <strong>Oh no sorry</strong> user already exists,change username or room number.
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
if($success){
  echo '<div class="alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> You have successfuly registered.
  <button type="button" class="close" data-dismiss="alert" aria-label="close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
}
?>
<div class="container mt-5">
  <form action="hostel_register.php" method="post">
    <input type="text" name="username" placeholder="username" required>
    <input type="text" name="Room_number" placeholder="Room number" required>
    <input type="text" name="Amount" placeholder="Amount" required>
    <select name="hostel" class="form-select mb-3">
      <option value="elite">Elite Hostel</option>
      <option value="blessing">Blessing Hostel</option>
      <option value="winners">Winners Hostel</option>
      <option value="st_theresa">St. Theresa Hostel</option>
      <option value="las_vegas">Las Vegas Hostel</option>
      <!-- Add more options for other hostels if needed -->
    </select>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    -->
  </body>
</html>