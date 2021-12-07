<?php 
	if(isset($_POST['submit']))
	{	
        
		$name = $_POST['name'];
		$to = 'nigan.benzonkar@gmail.com';
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$from = $_POST['email'];
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Create email headers
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
		 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<p style="font-size:20px;"> You have appointment request</p>';
		$message .= '<p style="color:#000;">Name : ' . $name . '</p>';
		$message .= '<p style="color:#000;">Email : ' . $email . '</p>';
		$message .= '<p style="color:#000;">Mobile : ' . $mobile . '</p>';
		$message .= '<p> Thanks, <br> Biz Box</p>';
		$message .= '</body></html>';
		 
		// Sending email
		if(mail($to, $subject, $message, $headers)){
			echo 'Your appointment request has been sent successfully.';
		} else{
			echo 'Unable to send email. Please try again.';
		}
	}
?>

