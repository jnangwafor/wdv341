<?php
	$lab_name =""; //define variable to hold name
	$lab_email =""; // define variable to hold email
	$name_errMsg =""; // define variable to hold name error message 
	$email_errMsg =""; // define variable to hold email error message 
	
	$robot = "";
	
	if((isset($_POST['button'])))
	{
		$lab_name = $_POST['lab_name'];
		$lab_email = $_POST['lab_email'];
		$robot = $_POST['robot'];
		
	}
	//BEGIN FORM VALIDATION
	
	$valid_form = true;		
	
	//validate name - Cannot be empty
	if( empty($lab_name)) {
		$name_errMsg = "Please enter a name";
		$valid_form = false;
	}

	//validate email using PHP filter
	if( !filter_var($lab_email, FILTER_VALIDATE_EMAIL)) {
		$email_errMsg = "Invalid email";
		$valid_form = false;	
	}

	if(!empty($robot))
	{
		echo "You are not human";
		
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WDV341 Intro PHP</title>
	<style>
		
		.hide{
			display: none;
		}
	
	</style>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Unit-7 and Unit-8 Form Validations and Self Posting Forms.</h2>
<h3>In Class Lab - Self Posting Form</h3>
<p><strong>Instructions:</strong></p>
<ol>
  <li>Modify this page as needed to convert it into a PHP self posting form.</li>
  <li>Use the validations provided on the page for the server side validation. You do NOT need to code any validations.</li>
  <li>Modify the page as needed to display any input errors.</li>
  <li>Include some form of form protection.</li>
  <li>You do NOT need to do any database work with this form. </li>
</ol>
<p>When complete:</p>
<ol>
  <li>Post a copy on your host account.</li>
  <li>Push a copy to your repo.</li>
  <li>Submit the assignment on Blackboard. Include a link to your page and to your repo.</li>
</ol>
	
	<?php
	
		
	
		if($valid_form)
		{
			echo "<h2>Form was successful</h2>";
		}
		else
		{
	?>
<form name="form1" method="post" action="">
  <p>
    <label for="lab_name">Name:</label>
    <input type="text" name="lab_name" id="lab_name" value="<?php echo $lab_name; ?>" >
	  <span id="errorName"> <?php echo $name_errMsg; ?></span>
	<p class="hide">
		<label for="robot">Name:</label>
		<input type="text" name="robot" id="robot"  autocomplete="off">
	</p>
  </p>
  <p>
    <label for="lab_email">Email:</label>
    <input type="text" name="lab_email" id="lab_email" value="<?php echo $lab_email; ?>">
	  <span id="errorEmail"> <?php echo $email_errMsg; ?></span>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="reset" name="button2" id="button2" value="Reset">
  </p>
</form>
	<?php
	}
		
	?>
<p>&nbsp;</p>
</body>
</html>
