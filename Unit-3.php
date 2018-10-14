<?php
	
$dateNow = "2018-10-25"; //global variable

	//This function format date in the form "mm/dd/yyyy"
	function formatDate()
	{
		echo  date("m/d/y");
	}
	//This function receive a date in any format and format the date in the form "mm/dd/yyyy"
	function internationalDate($todate)
	{
		$myDate=date_create($todate);
		return date_format($myDate, "m/d/y");
	}

	/* 
	This function receive a string and determine the length;
	 remove all white space;
	 displace string in all lowoercase;
	 and find the word DMACC in the string
	*/

	function formatString($inputID)
	{
		$phrase = $inputID; //create a string
		echo strlen($phrase)." characters"."<br>"; //determine the length
		
		echo "The string is: " . trim($phrase). " without whitespace" . "<br>"; // remove all white spaces
		
		echo "Phrase to lower letters: " . strtolower($phrase). "<br>";
		
		//search for a particular word in a string
		$search ="DMACC";
		$results = strripos($phrase, $search);
		if($results !==false)
		{
			echo 'True';
		}
		else
		{
			echo "There is no $search in the phrase";
		}
	}
	//This function receive words and format them
	function formatNumbers($inputID)
	{
		$number_format = number_format($inputID);
		
		echo $number_format;
	}
	//format currency to USA
	function currencyFormat($inputID)
	{
		
		setlocale(LC_MONETARY,"en_US");
		return money_format('%i', $inputID) ."\n";
	}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unit-3 Assignment</title>
	
	<style>
		
		#container{
			width: 960px;
			background-color:#ACE5F3;
			margin: auto;
			border-radius: 25px;
			padding: 10px;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
			
		}
		#format{
			font-size: 18px;
			color: chocolate;
			
		}
	</style>
</head>

<body>
	<div id="container">
		<p>
			<ul>
				<li><a href = "homework.htm"> Homework Page </a> </li>
			</ul>
			
	<h2>See my date formatted as mm/dd/yyyy: <?php echo formatDate() ?></h2>
	<h3>See another date formatted as mm/dd/yyyy: <em><?php echo internationalDate($dateNow) ?></em></h3>
	
	<P id="format">The string in the function contain: <em><strong><?php echo formatString('My school is DMAcc') ?></strong></em></P>
	
	<h4>Formatted numbers: <?php echo formatNumbers(1234567890)  ?></h4>
	
	<h4>Formatted numbers into currency: <?php echo currencyFormat(123456)  ?></h4>
		
		
	</div>
</body>
</html>