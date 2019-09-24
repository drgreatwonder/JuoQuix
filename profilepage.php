<?php require 'dbconnection.php';
require 'sessiongetstarted.php';

if (!isset($_SESSION['user'])) {
  header('location:index.php');
}

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

  <div class="">

    <div class="jumbotron jumbotron-fluid bg-dark profilep p-0 md-12 mb-5">

      <div class="opacity2 pt-0">
        <div class="sticky-top">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand">
              <img src="" alt=""><b class="text-white">JuoQuix</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">


                <li class="nav-item dropdown mr-5">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile Page
                  </a>
                  <div class="dropdown-menu sticky-top" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="updateprofilepix.php">Update Profile Picture</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
                </li>



            </div>
          </nav>



        </div>

        <!-- Avatar -->
        <div class="avatar mx-auto content-center">
          <?php echo "<img src='quixphotos/" . $row['profile_pix'] . "' width='400' height='400' class='rounded-circle' alt='Profile Image'>"; ?>
          <h4 class="card-title text-white"><?php echo $username; ?></h4>
        </div>

        <div>
          <?php echo $firstname; ?>
        </div>
        <div>
          <?php echo $lastname; ?>
        </div>
        <div>
          <?php echo $dob; ?>
        </div>
        <div>
          <?php echo $email; ?>
        </div>
        <div>
          <?php echo $most_preferred_language; ?>
        </div>
        <div>
          <?php echo $bio; ?>
        </div>

        <div class="p-3 m-3">
          <span><a href="editprofilepage.php" class="p-2 m-3"><button class="btn btn-info ml-auto" type="submit">Edit Profile</button></a> <a href="quizpage.php"><button class="btn btn-info ml-auto" type="submit">Take Quiz</button></a></span>
        </div>
      </div>

    </div>

  </div>

  <!-- Card -->


  </div>

  </div>

  <!-- The End oh Hero Image and Navbar -->







  <?php
  require('footer.php');
  ?>

  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/popper.min.js"></script>
</body>

</html>