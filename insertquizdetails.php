	<?php 
				session_start();
				// code when title id and pass is submited
				
				$id = $_POST["id"];
				$title = $_POST["title"];
				$pass = $_POST["pass"];
				
				
				$_SESSION["did"] = $id;
				$connect = mysqli_connect('localhost', 'root', '','logindatabase') or die (mysql_error());
				
				mysqli_query($connect,"insert into quizhead values($id,'$title','$pass')");

				echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"insertquestion.php")</script>';

				
?>