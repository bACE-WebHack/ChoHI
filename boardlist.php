<?php

require_once "config.php";
$sql = "select * from board order by idx desc";
$res = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<style>
	table{
		border-top: 1px solid #444444;
		border-collapse: collapse;
	}
	tr{
		border-bottom: 1px solid #444444;
		padding: 10px;	
	}
	td{
		border-bottom: 1px solid #efefef;
		padding: 10px;
	}
	table .even{
		background: #efefef;
	}
	.text{
		text-align: center;
		padding-top: 20px;
		color: #000000;
	}
	.text:hover{
		text-decoration: underline;
	}
	a:link {color : #57A0EE; text-decoration:none;}
	a:hover {text-decoration : underline;}
</style>
<body>
	<h2 align="center">게시판</h2>
	<table align="center">
		<tr>
			<td width = "50" align = "center">번호</td>
			<td width = "500" align = "center">제목</td>
			<td width = "100" align = "center">작성자</td>
			<td width = "200" align = "center">날짜</td>
			<td width = "50" align = "center">조회수</td>
		</tr>
	<?php
		while($rows = mysqli_fetch_array($res)){
			echo "<tr>";
			echo "<td width = '50' align = 'center'>".$rows['idx']."</td>";
			echo "<td width = '500' align = 'center'><a href='view.php?page=".$rows['idx']."'>".$rows['title']."</a></td>";
			echo "<td width = '100' align = 'center'>".$rows['id']."</td>";
			echo "<td width = '200' align = 'center'>".$rows['date']."</td>";
			echo "<td width = '50' align = 'center'>".$rows['hit']."</td>";
			echo "</tr>";
		}
	?>
	</table>
	
	<div class = text>
	<Button onClick="location.href='write.php'"><font style="cursor:hand">글쓰기</font></Button>
	</div>	

</body>
</html>
