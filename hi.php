<html>
<head>
<?php session_start() ?>
</head>
<body>


<h1>hello world</h1>





<?php

	$connect = mysqli_connect('localhost', 'username', 'password','logindatabase') or die (mysql_error());
				
		
	$d = $_SESSION["did"];
	$n = $_POST["hid"];
	
	for($i = 1 ; $i <= $n ; $i++)
	{
		
		$title = $_POST["a".$i];
		
		$o1 = $_POST["a".$i."a"];
		$o2 =  $_POST["a".$i."b"];
		$o3 =  $_POST["a".$i."c"];
		$o4 =  $_POST["a".$i."d"];
		
		$c = $_POST["a".$i."z"];
		
		mysqli_query($connect,"insert into quizque values($d,$i,'$title','$o1','$o2','$o3','$o4',$c)");	
	}
	
	
?>

</body>
</html>