
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>
<style type="text/css">
#container  {
			width: 800px;
			border: 1px solid black;
			padding: 10px;
			margin: 10px auto;
			}
.colorRed {
	color: #F00;
}
</style>
</head>

<body>
<div id="container">
<h1>WDV101 Intro HTML and CSS</h1>
<h2>Form Response Porcessor</h2>

<p>This process will process the 'name = value' pairs for all the elements of your contact form. It will format and respond by sending an html page containing a table with the information you entered in the form.
</p>

<p>Instructions:</p>
<ol>
  <li>To call this page use <strong>form_response_basic.php</strong> in the action attribute of your form.</li>
  <li>Make sure you choose method=&quot;post&quot;.</li>
  <li>Ensure a link to this form from your homework page</li>
  <li>Upload the updates homework page, the form.html page AND the php processor file to your host server. NOTE: the html form page AND the processor PHP page must be in the same location!</li>
  </ol>

</div><!--close div container-->

<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']); // Sanitize the phone number
    $message = htmlspecialchars($_POST['message']);

    // Here, you can now email the form data, save it to a database, etc.
    // This example will just echo the data back to the screen.

    echo "<h2>Contact Form Submission</h2>";
    echo "<p>First Name: " . $firstName . "</p>";
    echo "<p>Last Name: " . $lastName . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Phone Number: " . $number . "</p>";
    echo "<p>Message: " . nl2br($message) . "</p>";

    // Typically, you might redirect to a new page or display a success message.
} else {
    // Not a POST request, redirect to the form or display an error
    echo "<p>Error: Form data was not submitted.</p>";
    header('Location: contact.html');
}

?>



</body>
</html>
