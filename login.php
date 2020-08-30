<?php


require_once "config.php";
session_start();

if(isset($_SESSION['userid'])){
	echo "<script>alert('이미 사용자로 로그인 되어있습니다.');location.href='welcome.php';</script>";

}


if($_SERVER["REQUEST_METHOD"]=="POST"){

	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
	}
	else
	{
		$id_err = "아이디를 입력해 주세요.";
			
	}

	if(isset($_POST['password']))
	{
		$pw = $_POST['password'];
	}
	else
	{
	
		$pw_err = "패스워드를 입력해 주세요.";
	}

	if(isset($id_err)&&isset($pw_err))
	{
	}
	else
	{
		$sql = "select * from userinfo where id='".$id."' AND PW='".$pw."'";
		$res = mysqli_query($link,$sql);
			
		$row = mysqli_fetch_array($res);

		if($row != null)
		{
			$_SESSION['userid'] = $id;
			echo "<script>document.location.href='welcome.php'</script>";
		}
			
		if($row == null)
		{
			echo "<script>alert('아이디나 패스워드를 확인해주세요.');</script>";
		}
	}
	
}

?>

<!DOCTYPE html>
<html lang="kr">
<head>
<meta charset="UTF-8">
<title>LOGIN</title>
</head>
<body>
	<div>
		<h1 align="center">Login Page!</h1>
	</div>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<table align="center">
			<tr><td>
			<label>ID</label>
			</td><td>
			<input type="text" name="id" placeholder="ID"><br>
			<span><?php echo $id_err; ?></span>
			</td></tr>

			<tr><td>
			<label>PW</label>
			</td><td>
			<input type="password" name="password" placeholder="password"><br>
			<span><?php echo $pw_err; ?></span>	
			</td></tr>	
		</table>
		<div align="center">
			<button type="submit">Login</button>
			<button type="button" onclick="location.href='register.php'">register</button>
		</div>

</body>
</html>

