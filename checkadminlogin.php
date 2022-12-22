<?php 
				session_start();
				$user = $_POST["username"];
				$pass = $_POST["password"];
	

				$flag = false;
				$connect = mysqli_connect('localhost', 'root', '','logindatabase') or die (mysql_error());
				
				$result = mysqli_query($connect,"select * from admindata");
				
				while($row = mysqli_fetch_array($result))
				{
					if(strcmp($row['username'],$user) == 0 && strcmp($pass,$row['password']) == 0)
					{
						 //set cookie;
						 setcookie("adminlogin",$row['username'],time()+(10*365*24*60*60) );
						 
						 //set session
						 $_SESSION["adminsession"] = true;
						 $flag = true;
						 break;
					}
				}

					
				if($flag)
					echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"adminhomepage.php")</script>';
				else
				{
					echo "<script> window.alert('admin name or password is wrong....')</script>"; 
					echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"adminlogin.php")</script>';

				}
?>