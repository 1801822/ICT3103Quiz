<?php

function checkPassword($pass){
	
	$check = true;
	
	$allwords = file("10-million-password-list-top-100.txt", FILE_IGNORE_NEW_LINES)
	
	foreach($allwords as $word){
		if($pass==$word){
			$check = false
		}
	}
	
	if(!$check){
		echo "<p>Password is common</p>";
	}
	else if(strlen($pass)<10){
		echo "<p>Password okay</p>";
	}
	else{
		session_start();
		$_SESSION['password'] = $pass
		header("Location:welcome.php");
	}
}

checkPassword($_POST["password"]);
?>