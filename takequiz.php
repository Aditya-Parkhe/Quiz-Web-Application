
<?php



/*

<style>
	.d{
		margin-left: 50px; margin-right: 800px;
		margin-top: 60px;width: 400px;
	}
	.d1{
		margin-left: 70px; margin-right: 800px;
		margin-top: 10px;  width: 150px;
	}
	.d2{
		margin-left: 70px;  margin-right: 850px;
		margin-top: 20px;	width: 80px;
	}
	</style>

*/


	session_start();
	$id =  $_SESSION["id"];	
	
	$connect = mysqli_connect('localhost', 'root','','logindatabase') or die (mysql_error());
	$result = mysqli_query($connect,"select * from quizque where id = $id");

	
	class Data
	{
		public $question,$o1,$o2,$o3,$o4,$cans;
		
		public function setQuestion($que)
		{
			$this->question = $que;
			
		}
		public function seto1($o)
		{
			$this->o1 = $o;
		}
		public function seto2($o)
		{
			$this->o2 = $o;
		}
		public function seto3($o)
		{
			$this->o3 = $o;
		}
		public function seto4($o)
		{
			$this->o4 = $o;
		}
		public function setcans($o)
		{
			$this->cans = $o;
		}
		
		
		public function getQuestion()
		{
			return $this->question;
		}
		public function geto1()
		{
			return $this->o1;
		}
		public function geto2()
		{
			return $this->o2;
		}
		public function geto3()
		{
			return $this->o3;
		}
		public function geto4()
		{
			return $this->o4;
		}
		public function getcans()
		{
			return $this->cans;
		}
		
	}
	
	$Data12 = array();
	$length = 0;
	while($row = mysqli_fetch_array($result))
	{
		$obj = new Data();
		
		$que = $row['question'];
		$obj->setQuestion($que);
		
		$que = $row['op1'];
		$obj->seto1($que);
		
		$que = $row['op2'];
		$obj->seto2($que);
		
		$que = $row['op3'];
		$obj->seto3($que);
		
		$que = $row['op4'];
		$obj->seto4($que);
		
		
		$que = $row['cans'];
		$obj->setcans($que);
		
		$Data12[] = $obj;
		$length++;
	}	
	$_SESSION['length'] = $length;
?>



<html><head>
	<style>
	body{
		background: white;
		}
	form{
		text-align: center;
		
		width: 600px;
		margin-left: 400px;
		background: #fff;
		border-radius: 15px;
		box-shadow: rgba(221, 221, 221, 0.99) 1px 0px 20px;

	}
	.d{
		margin-left: 20px; 
		margin-right: 298px;
		margin-top: 60px;
		width: 550px;
		height: 20px;
		padding: 20px 7px;
		outline: none;
		border: 1px solid blue;
		border-radius: 15px;
	



	}
	.d1{
		margin-left: 50px;
		margin-right: 350px;
		margin-top: 25px;
	}



	.sum{
		margin-left: -1050px;
		 margin-top: 50px;
		 border-radius: 3px;
	 
		box-shadow: inset 0 1px 0 #8dc2f0;
	width: 160px;
	height: 35px;
	
	border-radius: 30px;
		
	background-color: green;
	cursor: pointer;
	color: white;
	font-weight: bold;
	text-shadow: 0 -1px 0 #336895;
	
	font-size: 15px;
	}
	</style>
</head>
<body>

	<div id ="newelement">	
		<form method ="post" action="result.php" id="t">
				<button type='submit' class="sum" >Submit</button>	
				<br>
		</form>
	</div>



<script>
	var i = 1;
	
		function addelement(que,o1,o2,o3,o4,ca)
		{
				
				var abc = document.createElement('input');
					abc.type='text';
					abc.className = 'd';
					abc.name = "a"+i;
					abc.value=que;
					abc.setAttribute("required",true);
					abc.readOnly = true;
					
				var opt1 = document.createElement('input');
					opt1.type='radio';
					opt1.className = 'd1';
					opt1.name = "a"+i+"a";
					opt1.value=1;
									
				var opt2 = document.createElement('input');
					opt2.type='radio';
					opt2.className = 'd1';
					opt2.name = "a"+i+"a";
					opt2.value=2;
						
					
				var opt3 = document.createElement('input');
					opt3.type='radio';
					opt3.className = 'd1';
					opt3.name = "a"+i+"a";
					opt3.value=3;
					
				var opt4 = document.createElement('input');
					opt4.type='radio';
					opt4.className = 'd1';
					opt4.name = "a"+i+"a";
					opt4.value=4;
					opt4.style="margin-right: 170px;";
					
					
				var cans = document.createElement('input');
					cans.type='number';
					cans.name = "a"+i+"z";
					
					cans.value=ca;
					cans.style.visibility = "hidden";
					
				
				document.getElementById("t").appendChild(abc);
				document.getElementById("t").appendChild(opt1);
				document.getElementById("t").appendChild(opt2);
				document.getElementById("t").appendChild(opt3);
				document.getElementById("t").appendChild(opt4);
				document.getElementById("t").appendChild(cans);
				
				i++;
				
			}
	
	
	
</script>

<?php

		for($i = 0; $i < $length ; $i++)
		{ ?>
			<script>
						var t = "<?php echo $Data12[$i]->getQuestion();?>";
						var o1 = "<?php echo $Data12[$i]->geto1(); ?>";
						var o2 = "<?php echo $Data12[$i]->geto2(); ?>";
						var o3 = "<?php echo $Data12[$i]->geto3(); ?>";
						var o4 = "<?php echo $Data12[$i]->geto4(); ?>";
						var ca = "<?php echo $Data12[$i]->getcans(); ?>";
			</script>
			<?php	echo "<script> 	addelement(t,o1,o2,o3,o4,ca);</script>"; 
		}
?>
</body>
</html>