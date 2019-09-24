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
                    Dashboard
                  </a>
                  <div class="dropdown-menu sticky-top" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profilepage.php">Profile Page</a>
                    <a class="dropdown-item" href="updateprofilepix.php">Update Profile Picture</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                  </div>
                </li>



            </div>
          </nav>



          <hr class="my-4 bg-stylish-color #4B515D">
        </div>
        <!-- Card -->
        <div class="card testimonial-card">

          <!-- Background color -->
          <div class="card-up indigo lighten-1"></div>

          <!-- Avatar -->
          <div class="avatar mx-auto white">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle" alt="woman avatar">
          </div>

          <!-- Content -->
          <div class="card-body">
            <!-- Name -->
            <h4 class="card-title text-dark text-center"><?php echo $row['username']; ?></h4>
            <hr>
            <div class="col-md-6">
              <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                <input type="file" class="form-control" name="profile_pix">
                <input type="submit" name="btn" class="btn btn-primary" value="Submit">
                <span></span>
                <input type="reset" class="btn btn-default" value="Cancel">

            </div>
            </form>

          </div>

        </div>

      </div>
      <!-- Card -->


    </div>

  </div>

  <!-- The End oh Hero Image and Navbar -->







  <?php
  require 'footer.php';
  ?>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
  <script src="/js/jquery-3.4.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/popper.min.js"></script>
</body>

</html>