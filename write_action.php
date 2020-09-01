<?php

require_once "config.php";
session_start();


	$id = $_SESSION['userid'];
	$pw = $_POST['pw'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$date = date('Y-m-d H:i:s');

	$URL = 'welcome.php';	


	$sql = "insert into board (idx, title, content, date, hit, id, password) values(null,'$title','$content','$date','0','$id','$pw')";

	$res = mysqli_query($link, $sql);
	
	if($res){
		echo "<script>alert('글이 등록되었습니다.');document.location.href='boardlist.php';</script>";	
	}
	else{
		echo "FAIL";	
	}
	
	mysqli_close($connect);
?>


