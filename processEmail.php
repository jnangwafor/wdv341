<?php

  require "Emailer_1.php";

  $standardEmail = new Emailer_1(); //instantiate a new instance of a class

  $standardEmail->setMessageOut("Hello I'm trying to learn PHP"); //located a value into the object

  $standardEmail->setSenderAddress("contact@wdv341.spysportworld.com");

  $standardEmail->setSendToAddress("angwaforj@gmail.com");

  $standardEmail->setMsgSubject("This is a unit-4 assignment--emailer class");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unit-4 Function and Classes in PHP</title>
	
	<style>
		#container{
			width: 960px;
			background-color:#ACE5F3;
			margin: auto;
			border-radius: 25px;
			padding: 10px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, 
				"Times New Roman", "serif";
			color: brown;
			
		}
	
	</style>
</head>

<body>
	<div id="container">
		<h3><p>
			<ul>
				<li><a href = "homework.htm"> Homework Page </a> </li>
			</ul>
			</h3>
		<p>The email message is: <?php echo $standardEmail->getMessageOut(); ?></p>
		<p>The email sender address is: <?php echo $standardEmail->getSenderAddress(); ?></p>
		<p>Send to address: <?php echo $standardEmail->getSendToAddress(); ?></p>
		<p>Subject Line: <?php echo $standardEmail->getMsgSubject(); ?></p>
		
		<p>
			<?php 
				if(!$standardEmail==true) 
				{
					echo "Email not sent";
				}
				else 
				{
					echo "Email sent sucessfully!";
				} 
			?>
		</p>
	</div>
</body>
</html>