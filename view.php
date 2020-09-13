<?php

require_once "config.php";
require_once "login_ck.php";
session_start();

login_ck();

$page = $_GET['page'];

$sql = "update board set hit=hit+1 where idx='$page'";

$res = mysqli_query($link, $sql);

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
		width: 950px;
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
	<table style="padding-top:50px;" align="center" witdh="700" border="0" cellpadding="2">
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
						<td>조회수</td>
						<td><?php echo $hit; ?></td>
					</tr>
					<tr>
						<td>작성일</td>
						<td><?php echo $date; ?> </td>
						<td>작성자</td>
						<td><?php echo $id; ?> </td>
					</tr>
					<?php
						if($_SESSION['userid']==$id){

							echo "<button type='button' onClick=\"location.href='edit.php?page=".$page."'\">수정</button>";
							echo "<button type='button' onClick=\"location.href='delete.php?page=".$page."'\">삭제</button>";
							
						}
					?>
					<tr>
						<td height=500px>내용</td>
						<td><?php echo $content; ?></td>
					</tr>
					<tr>
						<td>댓글</td>
						<td><input type="textarea" name="comment" size="15" maxlength="15"></td>
						<td><button type="submit">작성</button>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

