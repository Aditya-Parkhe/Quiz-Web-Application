<html> 
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Questions</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>


	<style>
	body{
		background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
		}
	form{
		text-align: center;
		
		width: 600px;
		margin-left: 500px;
		background: #fff;
		border-radius: 15px;
		box-shadow: rgba(225, 225, 225, 0.24) 0px 13px 8px;

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
		margin-left: 30px; 
		margin-right: 300px;
		margin-top: 10px;  
		width: 250px;
		padding: 10px 7px;
		outline: none;
		border: 1px solid blue;
		border-radius: 15px;
		
	}
	.d3{
		margin-left: 290px; 
		margin-right: 30px;
		margin-top: -40px;  
		width: 250px;
		border: 1px solid blue;
		padding: 10px 7px;
		outline: none;
		border-radius: 15px;
		
	}
	.d4{
		margin-left: 290px; 
		margin-right: 30px;
		margin-top: -90px;  
		width: 250px;
		border: 1px solid blue;
		padding: 10px 7px;
		outline: none;
		border-radius: 15px;
		
	}
	.d2{
		margin-left: 170px;
		 margin-right: 300px;
		margin-top: 10px; 
		 width: 250px;
		 border: 1px solid blue;
		padding: 10px 7px;
		outline: none;
		border-radius: 15px;
		
	}
	.add{
     
	border-radius: 3px;
	border: 1px solid #336895;
	box-shadow: inset 0 1px 0 #8dc2f0;
	width: 288px;
	height: 40px;
	margin-top: 40px;
	
	background: linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -o-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -moz-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -webkit-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -ms-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	
	cursor: pointer;
	color: white;
	font-weight: bold;
	text-shadow: 0 -1px 0 #336895;
	
	font-size: 13px;
}

	.sum{
		margin-left: -700px;
		 margin-top: -40px;
		 border-radius: 3px;
	border: 1px solid #336895;
	box-shadow: inset 0 1px 0 #8dc2f0;
	width: 208px;
	height: 40px;
	
	
	background: linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -o-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -moz-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -webkit-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	background: -ms-linear-gradient(bottom, #4889C2 0%, #5BA7E9 100%);
	
	cursor: pointer;
	color: white;
	font-weight: bold;
	text-shadow: 0 -1px 0 #336895;
	
	font-size: 13px;
	}
	</style>
</head>

<body>
		
		
		<div id="new">
				<input type="button" class="add" value="Add Question" onClick="addelement();"/>
		</div>

		
		<script>
			var i = 1;
			function addelement()
			{
				
				var abc = document.createElement('input');
					abc.type='text';
					abc.placeholder= 'Question....';
					abc.className = 'd';
					abc.name = "a"+i;
					
				var opt1 = document.createElement('input');
					opt1.type='text';
					opt1.placeholder= 'option 1 ....';
					opt1.className = 'd1';
					opt1.name = "a"+i;
					opt1.name = "a"+i+"a";
					
				var opt2 = document.createElement('input');
					opt2.type='text';
					opt2.placeholder= 'option 2 ....';
					opt2.className = 'd1';
					opt2.name = "a"+i;
					opt2.name = "a"+i+"b";	
					
				var opt3 = document.createElement('input');
					opt3.type='text';
					opt3.placeholder= 'option 3 ....';
					opt3.className = 'd4';
					opt3.name = "a"+i;
					opt3.name = "a"+i+"c";
					
				var opt4 = document.createElement('input');
					opt4.type='text';
					opt4.placeholder= 'option 4 ....';
					opt4.className = 'd3';
					opt4.name = "a"+i;
					opt4.name = "a"+i+"d";
					
				var cans = document.createElement('input');
					cans.type='number';
					cans.placeholder= 'correct option';
					cans.className = 'd2';
					cans.name = "a"+i;
					cans.name = "a"+i+"z";
					
				document.getElementById("h").value = i;
				//window.alert(abc.name);
				document.getElementById("t").appendChild(abc);
				document.getElementById("t").appendChild(opt1);
				document.getElementById("t").appendChild(opt2);
				document.getElementById("t").appendChild(opt3);
				document.getElementById("t").appendChild(opt4);
				document.getElementById("t").appendChild(cans);
				
				i++;
				
	
			}
		
		</script>
			
			<div id ="newelement">
				<form method ="post" action="hi.php" id="t">
				<input type="number" value = "0" id = "h" name="hid" hidden>
					<button class="sum" type='submit' >Submit</button>	
					<br>

				</form>

			</div> 
			
	</body>	
</html>