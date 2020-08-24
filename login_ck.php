<?php
function login_ck(){
	if(!isset($_SESSION['userid'])){
		
		header("location: login.php");
		exit;
	}
};

?>
