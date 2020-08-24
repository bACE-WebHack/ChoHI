<?php

include "login_ck.php";
session_start();

login_ck();



	

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


