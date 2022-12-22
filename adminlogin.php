<?php
		//checking cookies for login 
		if(isset($_COOKIE["userlogin"]))
		{
			//redirecting to user home page
			echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"userhomepage.php")</script>';
		}
		else
		{
			if(isset($_COOKIE["adminlogin"]))
			{
				//redirect to admin home page
				echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"adminhomepage.php")</script>';
			}
		}	
?>




<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
:root {
  --primary-color: white;
  --secondary-color: #4caf50;
  --bg-color: rgba(0, 0, 0, 0.8);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  background: url(https://picsum.photos/2500/1667?image=353) no-repeat;
  background-size: auto;
  background-position-y: 30%;
}

/*--------------------------------------------------------------
# Login
--------------------------------------------------------------*/
.login-box {
  width: 320px;
  height: 350px;
  padding: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: var(--bg-color);
  box-shadow: 0 15px 25px #000;
  border-radius: 10px;
}
.login-box h1 {
  font-size: 30px;
  color: var(--primary-color);
  margin-bottom: 10px;
  padding: 13px 0;
  text-align: center;
}

.textbox {
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0 30px 0;
  border-bottom: 2px solid var(--secondary-color);
}

.textbox i {
  width: 26px;
  float: left;
  text-align: center;
  color: var(--primary-color);
}

.textbox input {
  border: none;
  outline: none;
  background: none;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
  color: var(--primary-color);
}

.btn {
  width: 100%;
  height: 50px;
  background: none;
  border: 2px solid var(--secondary-color);
  border-radius: 5px;
  color: var(--primary-color);
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
  color: var(--primary-color);
  background-color: var(--secondary-color);
}
.but{
	color: #fff;
	float: right;
	margin-top: 20px;
	margin-right: 50px;
	margin-left: 20px;
	font-weight: 300;
	font-size: 18px;
}

.but:hover{
  color: var(--secondary-color);	
}
	

	</style>
</head>
<body>
	<div class="but">
		
<a class="but" onclick="location.href='userlogin.php';">User Login</a>
<a  class="but" onclick="location.href='http://google.com';">Help</a>
</div>
<div class="login-box">
  <h1>Admin</h1>

  <form action="checkadminlogin.php" method="POST">
  <!-- ======= Username ======= -->
  <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>
    <input type="text" placeholder="Admin name" name="username" required />
  </div>

  <!-- ======= Password ======= -->
  <div class="textbox">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <input type="password" placeholder="adminPassword" name="password" required />
  </div>

  <!-- ======= Sign in ======= -->
  <input class="btn" type="submit" style="margin-top: 30px;" name="" value="Sign In" />
  </form>
</div>
</body>
</html>