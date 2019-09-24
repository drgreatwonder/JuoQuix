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
</head>

<body class="quizpage p-3">

<h2 class="text-center text-success">WELL DONE <?php echo $row['username']; ?></h2>
  <br>
   
  



<form action="index.php" method="post">
			<div class="row primary" style="margin:50px 0 0 225px;"> 
                <input type="submit" id="logout" name="btn" class="btn btn-secondary" value="Logout">
		    </div>
	</form>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>