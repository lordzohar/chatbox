<?php include 'db.php';?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title>My Chat App</title> 
		<link rel="stylesheet" href="style.css" media="all" /> 
	<script> 
		function chat_ajax(){ 
		var req = new XMLHttpRequest(); 
		req.onreadystatechange = function() 
		{ 
			if(req.readyState == 4 && req.status == 200)
			{ document.getElementById('chat').innerHTML = req.responseText; } 
			} 
			req.open('GET', 'chat.php', true); 
			req.send(); 
			} 
			setInterval(function(){chat_ajax()}, 1000) 
	</script>

</head> 
<body> 
	<div id="container"> 
		<div id="chat"> 
	



		<span style="color:green;">Samarth: </span> 
		<span style="color:brown;">Hey, How are you?</span> 
		<span style="float:right;">12.30PM</span> 
	</div> 
	</div> 
	<form method="post" action="index.php"> 
			<input type="text" name="name" placeholder="Enter Name: " /> 
			<textarea name="enter message" placeholder="Enter Message"></textarea> 
			<input type="submit" name="submit" value="Send!" /> 
	</form> 
	<?php if(isset($_POST['submit']))
	{ 
	$name = $_POST['name']; 
	$msg = $_POST['enter_message']; 
	$query = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')"; $run = $con->query($query); 
	} 
	?>
		</div> 
</body> 
</html>
	
