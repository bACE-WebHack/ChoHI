<?php

require_once "config.php";
require_once "login_ck.php";
session_start();

login_ck();

$page = $_GET['page'];

$sql = "select * from board where idx='".$page."';";

$res = mysqli_query($link, $sql);

$rows = mysqli_fetch_array($res);

$idx = $rows['idx'];
$title = $rows['title'];
$content = $rows['content'];
$id = $rows['id'];
$date = $rows['date'];
$hit = $rows['hit'];

?>

<!DOCTYPE html>
<html lang="kr">
<head>
	<meta charset="UTF-8">
</head>
<style>
	table.table2{
		border-collapse: separate;
		border-spacing: left;
		text-align: left;
		line-height: 1.5;
		border-top: 1px solid #ccc;
		margin: 20px 10px;
	}
	table.table2 tr{
		width: 50px;
		padding: 10px;
		font-weight: bold;
		vertical-align: top;
		border-bottom: 1px solid #ccc;
	}
	table.table2 td{
		width: 100px;
		padding: 10px;
		vertical-align: top;
		border-bottom: 1px solid #ccc;
	}
</style>
<title>Write</title>
<body>
	<form method="post" action="write_action.php">
	<table style="padding-top:50px" align="center" witdh="700" border="0" cellpadding="2">
		<tr>
			<td height="20" align="center" bgcolor="#ccc">
				<font color="white">게시판 보기</font>
			</td>
		</tr>
		</tr>
			<td bgcolor="white">
				<table class = "table2">
					<tr>
						<td>제목</td>
						<td><?php echo $title; ?></td>
					</tr>
					<tr>
						<td>작성일</td>
						<td><?php echo $date; ?> </td>
						<td>작성자</td>
						<td><?php echo $id; ?> </td>
					</tr>
					<?php
						if($_SESSION['userid']==$id){

							echo "<button type='button' onClick=\"location.href='edit.php'\">수정</button>";
			
						}
					?>
					<tr>
						<td>내용</td>
						<td><textarea name="content" cols="95" rows="15" disabled style="resize:none;"><?php echo $content; ?></textarea></td>
					</tr>
					<tr>
						<td>비밀번호</td>
						<td><input type="password" name="pw" size="15" maxlength="15"></td>
					</tr>
				</table>

				<center>
					<input type="submit" value="작성">
				</center>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

