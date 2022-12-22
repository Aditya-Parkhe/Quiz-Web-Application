<?php
		session_start();
		
		if(!isset($_SESSION["usersession"]))
		{
			//check for cookie
			if(!isset($_COOKIE["userlogin"]))
			{
				echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"userlogin.php")</script>';
			}
			else
			{
				echo "asdf";
				$_SESSION["usersession"] = true;
			}
		}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <title>Admin page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	
	<style>
		
	

body {
	font-family: Elephant;
	background-color: #fff;
}

h2 {
	color: #336895;
}

.img{
	height: 650px;
	width: 100%;
}


/* NAVIGATION */

nav {
	position: fixed;
	top: 10px;
	left: 10px;
}

nav a {
	color: #4889C2;
	font-weight: bold;
	text-decoration: none;
	opacity: .3;
	-moz-transition: all .4s;
}

nav a:hover {
	opacity: 1;
}

nav a.focus {
	opacity: 1;
}

/* LOGIN & REGISTER FORM */

form {
	width: 380px;
	height: 410px;
	margin: 200px auto;
	background: #fff;

	border-radius: 3px;
	box-shadow: white(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
	text-align: center;
	padding-top: 1px;
	margin-top: -540px;
	margin-left: 100px;
}

form.register{																				
	height: 420px;
}

form .text-field {																			
	border: 1.3px solid #86b5f2;
	width: 280px;
	height: 40px;
	border-radius: 3px;
	margin-top: 10px;
	padding-left: 10px;
	color: blue;
	background: #fff;
	outline: none;
}

form .text-field:focus {
	box-shadow: inset 0 0 2px rgba(0,0,0, .3);
	color: black;
	
}


.focus{
	margin-left: 5px;

}
 .button {																				/* Submit button */
	border-radius: 30px;
	border: 1px solid #f9813a;
	box-shadow: inset 0 1px 0 #8dc2f0;
	width: 288px;
	height: 40px;
	margin-top: 50px;
	
	cursor: pointer;
	color: white;
	text-shadow: 0 -1px 0 #336895;
	background-color: #ff1e56;
	font-size: 16px;
}


form .button:hover {
	background: linear-gradient(bottom, #1ED515 0%, #6bafea 100%);
	background: -o-linear-gradient(bottom, #1ED515 0%, #6bafea 100%);
	background: -moz-linear-gradient(bottom, #1ED515 0%, #6bafea 100%);
	background: -webkit-linear-gradient(bottom, #1ED515 0%, #6bafea 100%);
	background: -ms-linear-gradient(bottom, #1ED515 0%, #6bafea 100%);

}

form .button:active {
	box-shadow: inset 0 0 2px rgba(0,0,0, .3), 0 1px 0 white;
	background-color: #1a73e8;
}

	</style>

</head>

<body>

<img src="image3.jpg" class="img">


	<form method="post" action="checkdata.php">

	<label> <h1 style="color: white; font-size: 45px;  font-family: sans-serif; margin-top: 90px; ">Join Quiz</h1> </label>
		
		<input type="text" name="id" class="text-field" placeholder="Id" style="margin-top: 30px;" required />

	    <input type="password" name="password" class="text-field" placeholder="Password" required />
    
		<input type="submit"  class="button" value="Join">

	</form>

</body>

</html>
</html>


