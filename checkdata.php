<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root', '','logindatabase') or die (mysql_error());
	$id = $_POST['id'];
	$pass = $_POST['password'];
	$result = mysqli_query($connect,"select * from quizhead where id = $id and password = $pass;");
	
	if($row = mysqli_fetch_array($result))
	{
		$_SESSION['id'] = $id;
		echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"takequiz.php")</script>';
		
	}
	else
	{
		echo "<script> window.alert('Id or Password is wrong....')</script>"; 
		echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"userhomepage.php")</script>';
	}
	
?>