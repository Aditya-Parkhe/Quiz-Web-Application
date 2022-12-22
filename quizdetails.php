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
	border: 1px solid lightgrey;
	border-radius: 3px;
	box-shadow: white(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
	text-align: center;
	padding-top: 1px;
	margin-top: 100px;
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
 .button {																				
	border-radius: 7px;
	border: 1px white;
	box-shadow: inset 0 1px 0 #8dc2f0;
	width: 288px;
	height: 40px;
	margin-top: 60px;
	
	cursor: pointer;
	color: white;
	text-shadow: 0 -1px 0 #336895;
	background-color: #1a73e8;
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

<?php 
	$connect = mysqli_connect('localhost', 'root', '','logindatabase') or die (mysql_error());
				
	$result = mysqli_query($connect,"select * from reqdata where name='randomdata' ");
	$row = mysqli_fetch_array($result);
	$no = $row['value'];
	$rand123 = rand($no+1,$no+10);
	
	$sql = "UPDATE reqdata set value = ($no+10) where name='randomdata'";
	mysqli_query($connect,$sql)

?>

<form method="post" action="insertquizdetails.php">

	<label> <h2 style="color: #3c88eb; font-family: sans-serif; margin-top: 30px; ">Quiz Maker</h2> </label>
		<input type="number" name="id" class="text-field" style="margin-top: 30px;" value="<?php echo $rand123; ?>" readonly//>
		<input type="text" name="title" class="text-field" placeholder="Title" required />
	    <input type="password" name="pass" class="text-field" placeholder="Password" required />
    
		<input type="submit"  class="button" value="Submit">

</form>

</body>

</html>
