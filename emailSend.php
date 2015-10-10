<?php

	require_once('ses.php');
	$key = '';
	$secret = '';
	$ses = new SimpleEmailService($key, $secret);
	
	
 		
	$receiver = 'Fulano';
	$receiverEmail = 'fulano@mail.com'; 
	$subject = "Subject";
	$from = "from from <from@gmail.com>";





	$m = new SimpleEmailServiceMessage();
	$m->addTo($receiverEmail);
	$m->setFrom($from);
	$m->setSubject($subject);


	$body= "Hello " . $receiver . ", this is a test message";
	$plainTextBody = '';
	$m->setMessageFromString($plainTextBody,$body);    

	echo $receiverEmail . " -> "; print_r($ses->sendEmail($m)); echo "<br>";
	ob_end_flush(); ob_flush(); flush(); ob_start(); 

		
?>