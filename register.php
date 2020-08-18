<?php


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
	<tr><td>
	<label>아이디</label>
	</td><td>
	<input type="text" name="id" placeholder="ID"><br>
	</td></tr>
	<tr><td>
	<label>비밀번호</label>
	</td><td>	
	<input type="password" name="pw" placeholder="PW"><br>
	</td></tr>
	<tr><td>
	<label>비밀번호 확인</label>
	</td><td>	
	<input type="password" name="pwck" placeholder="PW Confirm"><br>
	</td></tr>
	<tr><td>
	<label>휴대폰 번호</label>
	</td><td>
	<input type="text" name="pn" placeholder="Phone number"><br>
	</td></tr>
	<tr><td>
	<label>성별</label>
	</td><td>
	남자<input type="radio" id="sex" name="sex" value="남자">
	여자<input type="radio" id="sex" name="sex" value="여자">
	</td></tr>
	</table>
	<div align="center">
	<button type="submit" name="register">Register</button>
	<button type="button" name="cancle" onclick="location.href='login.php'">취소</button>
	</div>
	</form>
</body>
</html>
