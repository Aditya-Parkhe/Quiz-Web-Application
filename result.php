
		<?php 
	session_start();
	?>


<html>
	<head>
			<style>
					table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 95%;
  margin-left: -5px;
  overflow-y: auto;
  color: #17252a;
  margin-left: 30px;
  border-collapse: separate;
  border-spacing: 0 15px;
}

td, th {

  text-align: center;
  padding-left: 12px;
  padding-bottom: 6px;
  color:#17252a;
  line-height: 37px;
  padding-left:  40px;
}
		

		.score{
				margin-top: 10px;
				margin-left: 520px;
				height: 40px;
				width: 400px;
				font-size: 30px;
				border: 1px solid white;
		}
		
		

		</style>
	</head>
	
	
	<body>
		<br><input type = "text" value="" id="score" class="score"><br><br><br>
		<table>
		<th>NO</th>
		<th>Question </th>
		<th>Selected Option</th>
		<th>Correct option</th>
		<th>Status</th>
			<?php 
	
	
	$length = $_SESSION['length'];
	$right = 0;
	for($i = 1 ; $i <= $length ; $i++)
	{
		$que = $_POST['a'.$i];
		$s = $_POST['a'.$i.'a'];
		$c = $_POST['a'.$i.'z'];
		
		if($s == $c)
		{
			$color = "#d1ffd1";
			$status = "Correct";
			$right++;
		}
		else
		{
			$color = "#ffc6c4";
			$status = "Wrong";
		}
	
	?>
		
		<tr style="background-color: <?php echo $color ?>;">
					<td><?php echo $i ?></td>
					<td><?php echo $que; ?></td>
					<td><?php echo $s; ?></td>
					<td><?php echo $c; ?></td>
					<td><?php echo $status; ?></td>
		</tr>
				
	<?php } ?>
		</table>
		
		<script>
				var ele = document.getElementById("score");
				ele.value="<?php echo 'Final Score : '.$length.' / '.$right ?>";
		</script>
		
	</body>
	
	
</html>