<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mike Sinkula First Web Page</title>


<!-- Begin Styles -->
<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- End Styles -->

</head>

<body>

<!-- Begin Header -->
<header>
<h1><a href="index.html"><img src="images/logo.png" width="500" height="50" border="0" alt="Mike Sinkula's Website"></a></h1>
</header>
<!-- End Header -->

<!-- Begin Navigation -->
<nav>
<ul>
<li><a href="about.html">About</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="portfolio.html">Portfolio</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<!-- End Navigation -->

<!-- Begin Middle -->
<div id="middle">

<!-- Begin Text -->
<article>
<h2>Drop me a line, brutha!</h2>
<?php // Script that sends form data as an email

if ( isset ($_POST['submit-form']) ) {  // If form is submitted:

	$mailMesage =  ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email.
	
	$mailSubject = "{$_POST['subject']}"; // Subject of the email.
	
	$mailRecipient = "mike@mikesinkula.com"; // Destination email address.
	
	mail ($mailRecipient, $mailSubject , $mailMesage); // Function to send the email.
	
	print ("<p>Thank You for contacting Me, <b>{$_POST['name']}</b>!</p>\n"); // Notice that thanks the user.
	
	}

?>
<form action="contact.php" method="post">
<table width="620" border="1" cellspacing="10">
  <tr>
    <td><label for="name">Name:</label></td>
    <td><input name="name" type="text" required="required"></td>
  </tr>
  <tr>
    <td><label for="email">Email:</label></td>
    <td><input name="email" type="email" required="required"></td>
  </tr>
  <tr>
    <td><label for="subject">Subject:</label></td>
    <td>
    <select name="subject">
    	<option value="General Inquiry">General Inquiry:</option>
        <option value="Dumb Inquiry">Dumb Inquiry:</option>
        <option value="I'm Here to Annoy You">I'm Here to Annoy You:</option>
    
    </select>
    </td>
  </tr>
  <tr>
    <td><label for="message">Message:</label></td>
    <td><textarea name="message"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <input type="submit" name="submit-form" value="Submit Form">
    <input type="reset" name="reset-form" value="Reset Form">
    </td>
  </tr>
</table>

</form>
</article>
<!-- End Text -->

<!-- Begin Sidebar -->
<aside>
<ul>
   <li>Lorem ipsum dolor sit</li>
   <li>Aliquam tincidunt mauris</li>
   <li>Vestibulum auctor</li>
</ul>
</aside>
<!-- End Sidebar -->

</div>
<!-- End Middle -->

<!-- Begin Footer -->
<footer>
<p class="copyright">&copy; 2013 <a href="mailto:mike@mikesinkula.com">Mike Sinkula</a></p>
</footer>
<!-- End Footer -->

</body>
</html>
