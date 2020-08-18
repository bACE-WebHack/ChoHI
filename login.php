<?php


	require_once "config.php";

	if(isset($_POST['id']) && isset($_POST['password'])){

		$id = $_POST['id'];
		$pw = $_POST['password'];
	}

	$sql="select * from userinfo where id='$id'&&PW='$pw'";
	
	if($res=mysqli_fetch_array(mysqli_query($link,$sql))){
		
		$_SESSION['userid']=$id;
		
		echo "<script>alert('로그인 성공!');document.location('welcom.php');<script>";
	}
	else{
		echo "<script>alert('아이디나 패스워드를 확인해주세요.');</script>";
	}




?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="UTF-8">
<title>LOGIN</title>
</head>
<body>
<h2>Login Page!</h2>
<form method="POST">
<label>ID</label>
<input type="text" name="id" placeholder="ID"><br>
<label>PW</label>
<input type="password" name="password" placeholder="password"><br><br>
<button type="submit">Login</button>
<button type="button" onclick="location.href='register.php'">register</button>

</body>
</html>

