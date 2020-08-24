<?php

require_once "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){

	if(!isset(trim($_POST['id'])))
	{
		$id_err = "아이디를 입력해 주세요.";
	}
	else
	{
		$id = $_POST['id'];
	}

	if(!isset(trim($_POST['name']))){
	
		$name_err = "이름을 입력해 주세요.";
	}
	else
	{
		$name = $_POST['name'];
	}

	if(!isset(trim($_POST['pw'])))
	{
		$pw_err = "패스워드를 입력해 주세요.";
	}
	else	
	{
		$pw = $_POST['pw'];
	}

	if($_POST['pw'] != $_POST['pwck'])
	{
		$pwck_err = "패스워드 값이 다릅니다.";
	}

	if(!isset(trim($_POST['pn']))){
	
		$pn_err = "휴대폰 번호를 입력해주세요.";
	}
	else
	{
		$pn = $_POST['pn'];
	}

	if(!isset(trim($_POST['sex'])))
	{
		$sex_err = "성별을 체크해주세요.";
	}
	else
	{
		if($_POST['sex']=="남자")
		{
			$sex=1;
		}
		else
		{
			$sex=2;
		}
	}


	if(!isset($id_err)&&empty($pw_err)&&empty($pwck_err)&&empty($pn_err)&&empty($sex_err)){

		$sql = "insert into userinfo value('".$id."','".$name."','".$pn."','".$pw."','".$sex."');";
		echo $sql;
		$res = mysqli_query($link,$sql);
		

		echo "<script>alert('회원가입이 완료되었습니다.');document.location.href='login.php';</script>";
	
	}	


}




?>
<!DOCTYPE html>
<html lang="kr">
	<head>
		<meta charset="UTF-8">
		<title>Register!</title>
	</head>
	<body>
		<h1 align="center">회원가입</h1>
		<form method="post">
			<table border="1" width="500" height="300" align="center">
				<tr>
					<td>
						<label>아이디</label>
					</td>
					<td>
						<input type="text" name="id" placeholder="ID"><br>
					</td>
				</tr>
				<tr>
					<td>
						<label>이름</label>
					</td>
					<td>
						<input type="name" name="name" placeholder="NAME"><br>
					</td>
				</tr>
				<tr>
					<td>
						<label>비밀번호</label>
					</td>
					<td>	
						<input type="password" name="pw" placeholder="PW"><br>
					</td>
				</tr>
				<tr>
					<td>
						<label>비밀번호 확인</label>
					</td>
					<td>	
						<input type="password" name="pwck" placeholder="PW Confirm"><br>
					</td>
				</tr>
				<tr>
					<td>
						<label>휴대폰 번호</label>
					</td>
					<td>
						<input type="text" name="pn" placeholder="Phone number"><br>
					</td>
				</tr>
				<tr>
					<td>
						<label>성별</label>
					</td>
					<td>
						남자<input type="radio" id="sex" name="sex" value="남자">
						여자<input type="radio" id="sex" name="sex" value="여자">
					</td>
				</tr>
			</table>
			<div align="center">
				<button type="submit" name="register">Register</button>
				<button type="button" name="cancle" onclick="location.href='login.php'">취소</button>
			</div>
		</form>
	</body>
</html>
