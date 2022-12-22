<?php 

				session_start();
				$user = $_POST["username"];
				$pass = $_POST["password"];
				
				$connect = mysqli_connect('localhost', 'root', '','logindatabase') or die (mysql_error());
				
				$result = mysqli_query($connect,"select * from logindata");
				
				while($row = mysqli_fetch_array($result))
				{
					if(strcmp($row['username'],$user) == 0 && strcmp($pass,$row['password']) == 0)
					{
						 //set cookie;
						 setcookie("userlogin",$row['username'],time()+(10*365*24*60*60) );
						 
						 //set session
						 $_SESSION["usersession"] = true;
						 $flag = true;
						 break;
						 //redirect to admin home page
					}
				}
					
				if($flag)
					echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"userhomepage.php")</script>';
				else
				{
					echo "<script> window.alert('user name or password is wrong....')</script>"; 
					echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"userlogin.php")</script>';

				}
		
?>