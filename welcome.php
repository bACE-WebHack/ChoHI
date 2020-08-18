<?php

session_start();
	
if(!isset($_SESSION['userid'])){
	header("location: login.php");
	exit;
}

?>

<!DOCTYPE html>
<html lang="kr">
<head>
	<meta charset="UTF-8">
</head>
<title>Welcome!</title>
<body>
	<div>
	<h1>Hi! <b><?php echo htmlspecialchars($_SESSION['userid']); ?></b></h1>

</body>
</html>


