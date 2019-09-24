<?php require 'dbconnection.php';
require 'sessiongetstarted.php';

if (!isset($_SESSION['user'])) {
	header('index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>signout</title>
</head>

<body>

	<?php

	if (session_destroy()) {
		header("Location:index.php");
	}

	?>

</body>

</html>