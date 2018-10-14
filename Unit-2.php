<?php

	$yourName = "Jackson Angwafor"; // variable to hold name
	$number1 = 50;  // hold an interger number1
	$number2 = 75;  // hold an interger number2
	$total = 0;
	$total += $number1 + $number2; // total of number1 and number2

	//echo "<h1> My name is: Jackson Angwafor</h1>";
	
	

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WDV341 Intro to PHP Unit 2</title>
	
	
	
	
</head>

<body>
	
	<h1><?php echo $yourName?></h1>
	<h2>My name is <?php echo $yourName?></h2>
	<p>Here I'm going to display a number: <strong><?php echo $number1?></strong> </p>
	<p>Here I'm going to display a another number: <strong><?php echo $number2?></strong></p>
	
	<p>The total of both numbers is: <strong><?php echo $total?></strong></p>
	
	<p>
		<?php
		//output a javascript array in php
			echo "<script type='text/javascript'>
		
		var codeArray = ['PHP', 'HTML', 'Javascript'];
		for(var count = 0; count < codeArray.length; count++)
		{
		document.write(codeArray[count]+ '<br/>');
		}
		
	</script>";
	
		?>
	
	</p>
</body>
</html>