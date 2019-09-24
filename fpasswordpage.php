<?php require 'dbconnection.php';
require 'sessiongetstarted.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Chidinma Esther Muoghalu">
  <meta name="description" content="this is a quiz web app for programmers">
  <meta name="keywords" content="quiz, HTML, CSS, JavaScript, PHP, MySQL, Frameworks">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JuoQuix</title>
  <link rel="icon" type="image/png" href="images/questions.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mainn.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body>

  <!-- Default form login -->
  <div class="container-fluid mb-2 mt-5 pb-5">
    <form class="text-center border border-light p-5 col-md-6 offset-3 " action="#!">

      <p class="h4 mb-5 pb-5">Forgot Password</p>

      <!-- Email -->
      <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Enter Email">



      <!-- Sign in button -->
      <button class="btn btn-info my-4" type="submit">Reset Password</button>

      <?php
      if (isset($_POST['user'])) {
        $email = $_POST['email'];
        $sql = "SELECT * FROM users where email = '$email'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if ($email = $row['email']) {
          echo "<div class='pass'>";
          echo $row['password'];
          echo "</div>";
        }
      }

      ?>


    </form>
    <!-- Default form login -->

  </div>

  <?php
  require 'footer.php';
  ?>

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/popper.min.js"></script>
</body>

</html>