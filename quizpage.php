<?php require 'dbconnection.php';
require 'sessiongetstarted.php';
?>
<!DOCTYPE html>
<html>

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

	<h2 class="text-center text-success">Welcome <?php echo $row['username']; ?></h2>
	<br>


	<form method="POST" action="resultpage.php">

	<?php
	$sql = "SELECT * FROM questions ORDER BY RAND()";
	$result = mysqli_query($con, $sql);
	while ($row = mysqli_fetch_array($result)) { ?>
		<?php
		$question = $row['question_id'];
		echo $row['questions'] .'<br />';
		//Get answers from options table using question ID
		$option = "SELECT * FROM options WHERE question_id = '$question'";
		$sqlOption = mysqli_query($con, $option);
		while ($row = mysqli_fetch_array($sqlOption)) {
		
			echo $row['option_1'] . '<br/>' . $row['option_2'] .'<br/>' .  $row['option_3'] .'<br/>' . $row['option_4'] . '<br/>' .$row['correct_option'];
		
		?> 
		<?php
		
		echo "<br><br>";
		
		?>
		<input type="submit" name="submit" value="Submit">
	   
	   </form>
		<?php
		}
		echo "<br><br>";
		}
		?>

	<!-- <br><br>
	<nav aria-label="...">
		<ul class="pagination">
			<li class="page-item">
				<a class="page-link" href="#">Next</a>
			</li>
		</ul>
	</nav> -->


	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
</body>

</html>