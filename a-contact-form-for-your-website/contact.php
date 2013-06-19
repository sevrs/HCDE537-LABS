<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Contact | Mike Sinkula's Website</title>

<!-- Begin Styles -->
<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- End Styles -->

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- Begin Header -->
<div id="header">
	<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="Mike Sinkula's Website" /></a></h1>
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<div id="navigation">
    <ul id="navigation-items">
        <li><a href="statement.html">Statement</a></li>
        <li><a href="resume.html">Resum�</a></li>
        <li><a href="skills.html">Skills</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</div>
<!-- End Navigation -->

<!-- Begin Content -->
<div id="content">
	<?php
    
    if ( isset ($_POST['submit-form']) ) {  // Check for each form value when the form is submitted:
    
        $problem = FALSE; // no problems!
    
        if (!$problem) { // if there are no problems:
    
            $mailMesage =  ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email.
    
            $mailSubject = "{$_POST['subject']}"; // subject of the email.
            
            $mailRecipient = "sinkum@u.washington.edu"; // destination email address.
    
            mail ($mailRecipient, $mailSubject , $mailMesage); // Function to send the email.
            
            print ("<p>Thank You for contacting Me, <b>{$_POST['name']}</b>!</p>\n"); // Notice that thanks the user.
    
        }
    
    } 
    
    ?>
	<form action="contact.php" method="post" name="contact-form">
    <table width="500" border="0" cellspacing="10">
    <tr>
    <td>
    <label for="name">Name:</label>    
    </td>
    <td>
    <span id="sprytextfield1">
    <input type="text" name="name" id="name" />
    <span class="textfieldRequiredMsg">A value is required.</span>    
    </span>    
    </td>
    </tr>
    <tr>
    <td>
    <label for="email">Email:</label>    
    </td>
    <td>
    <span id="sprytextfield2">
    <input type="text" name="email" id="email" />
    <span class="textfieldRequiredMsg">A value is required.</span> 
    <span class="textfieldInvalidFormatMsg">Invalid format.</span>    
    </span>    
    </td>
    </tr>
    <tr>
    <td>	
    <label for="subject">Subject:</label>    
    </td>
    <td>
    <span id="spryselect1">
	<select name="subject" id="subject">
      <option value="General Inquiry">General Inquiry</option>
      <option value="Specific Inquiry">Specific Inquiry</option>
      <option value="Other Inquiry">Other Inquiry</option>
    </select>
	<span class="selectRequiredMsg">Please select an item.</span>    
    </span>    
    </td>
    </tr>
    <tr>
    <td valign="top">
    <label for="message">Message:</label>
    </td>
    <td>
    <span id="sprytextarea1">
	<textarea name="message" id="message" cols="45" rows="5"></textarea>
	<span class="textareaRequiredMsg">A value is required.</span>
    </span>
    </td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td>
    <input name="submit-form" type="submit" value="Submit Form" />
    <input name="reset-form" type="reset" value="Reset Form" />
    </td>
    </tr>
    </table>
	</form>
</div>
<!-- End Content -->

<!-- Begin Footer -->
<div id="footer">
    <p>&copy;2011 Mike Sinkula. All rights reserved.</p>
</div>
<!-- End Footer -->

<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
//-->
</script>
</body>
</html>