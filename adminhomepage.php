<?phP
		session_start();
		
		if(!isset($_SESSION["adminsession"]))   // if session is not set
		{
			//check for cookie
			if(!isset($_COOKIE["adminlogin"]))
			{
				echo '<script> window.location = ((window.location.href.substring(0,window.location.href.lastIndexOf("/")+1))+"adminlogin.php")</script>';
			}
			else
			{
				$_SESSION["adminsession"] = true;
			}
		}
		
?>

<html>
	<head>
		  <meta charset="utf-8">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  
  		<title>box</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		
		<style>
			body{
				font-family: sans-serif;
			}
			.imghome{
	
				height: 101.8%; 
				width: 101.4%;
				margin-left: -10px;
				margin-top: -10px;
			} 
			.title{
				margin-top: -450px;
				margin-left: 50px;
				font-size: 70px;
				color: white;
				letter-spacing: 2px;
			}
			.text{
				font-size: 18px;
				margin-left: 55px;
				color: white;
				margin-top: -20px;
			}
			.b{
				margin-top: 30px;
				color: white;
				background-color: #ff6666;
				border-radius: 30px;
				height: 50px;
				width: 170px;
				margin-left: 55px;
				font-weight: bolder;
				font-size: 19px;
				border: 1px transparent;
			}

			  .box {
				  background-color: #fafafa;
				  width: 250px;
				  height: 400px;
				  padding: 50px;
				  margin: 40px;
				  margin-top: 200px;
			}
			img{
				  width: 350px;
				  height: 300px;
				  margin-top: -50px;
				  margin-left: -49px;
			}
			button{
				  width: 140px;
				  padding: 5px 8px;
				  border-radius: 30px;
				  background-color: #FF6666;
				  height: 40px;
				  margin-top: 570px;
				  margin-left: 190px;
				  border: 1px transparent;
				  color: white;
				  font-weight: bolder;
				  font-size: 17px;
			}

			.boxtext{
				font-size:  16px;
				color: black;
				text-align: left;
				font-weight: normal;
			}

			.scrolltitle{
				margin-left: 580px;
				margin-top:-410px;	
				font-size: 60px;
				color: #ff6666;
				text-align :center;
				margin-right: 110px;
			}

			.scrolltext{
				font-size: 18px;
				margin-left: 600px;
				font-weight: bolder;
				font-family: sans-serif;
				text-align: center;
				margin-right : 100px;
				color: grey;
			}
		</style>
	</head>
	
	<body>
		<img src="image.jpg" class="imghome">
		<h1 class="title"> Create Your <br> First Quiz .</h1>
		<p class="text" >Make Unlimited Quiz  for FREE <br> 	get startted with us </p>
		<form method="get" action="quizdetails.php">
			<button type="submit" class="b">Get Started</buttton>
		</form>

		<div class="box"><img src="coding questions.jpg">
    			<h2 style="color: black; text-align: left;">Think and Create</h2>
			<form action="quizdetails.php" method="post">
		    	<button onclick="quizdetails.php">Create Quiz</button>
			</form>
		</div>

		<h1 class="scrolltitle">Create Design and Share</h1>
		<p class="scrolltext">
		 Quiz maker is a very Powerful online Software dedicated for Quiz Making
		 <br> Quiz Making is Fun Design Quiz in no TIME with Userfriendly interface .
		 <br><br> BE THE QUIZ MAKER
		 </p>


	</body>
</html>