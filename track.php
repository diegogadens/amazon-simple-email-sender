<?php

	header('Content-Type: image/gif');

	$email = $_REQUEST['email'];

	$con=mysqli_connect("host","user","passw","db");
	
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
  	

	mysqli_query($con,"INSERT INTO tb_track_openings(email,data_abertura) VALUES ('" . $email . "', now());");



	if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off');	}
	header('Pragma: public'); 	// required
	header('Expires: 0');		// no cache
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Cache-Control: private',false);
	header('Content-Disposition: attachment; filename="blank.gif"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize('blank.gif'));	// provide file size
	readfile('blank.gif');		// push it out
	exit();


?>
