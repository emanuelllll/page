Please contact me when in doubt about any information content. Whether it is not true or syntactically incorrect, it does not matter, I will try to update it appropriately as soon as possible.<br>
Write me in case of your further interest in Library material or in case you would like to get your own access. <br>
<br>
Name: XXXXX<br>
Mail: eeerik9.net16.net@gmail.com<br>
Icq: 209929029<br>
<br><br><br>

<form method="post" name="myemailform">

<div class="formfield">
<label for="name">Name</label>
<input type="text" name="name" placeholder="Name" > <br>
 
<label for="email">Email</label>
<input type="text" name="email"  placeholder="Email"> <br>
 
<label for="message">Message</label>
<textarea name="message" rows=9 cols=27 placeholder="Message"></textarea> <br>

<label for="Submit1"></label>
<input name="Submit1" type='submit' value='Submit'> <br>

</div>
<br>
<?php
if (isset($_POST['Submit1']))
    {   
    		$name = $_POST['name'];
				
			$visitor_email = $_POST['email'];
				
			$message = $_POST['message'];
				
				

			$email_from = 'WebPageContact';

			$email_subject = "New Form submission";

			$email_body = "$name.$visitor_email.$message";
				
				
			$to = "eeerik9@protonmail.com";
 
  			$headers = "From: $email_from \r\n";
 
  			$headers .= "Reply-To: $visitor_email \r\n";
  			
  			$email_body = wordwrap($email_body, 70);
			
			/*echo $to." ".$email_subject." ".$email_body." ".$headers;*/
 
  			mail($to,$email_subject,$email_body,$headers);
  			
  			/*redirect*/
			echo "<meta http-equiv='refresh' content=\"0; url=index.php\">";
} else {
	echo ".. (Email not sent)";
	}
	
?>



</form>



