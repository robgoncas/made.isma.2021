<?php

	$to = "rob.gonzalez.castro@gmail.com";
	$from  = $_POST['email']; 
	$sender_name = $_POST['name'];
	$tipo_menu = $_POST['rsvp']; 
	$plato_fuerte = $_POST['platofuerte']; 
	$postre = $_POST['postre'];


	$subject = "Formulario Menú";
	$message = "Hola Made&Isma, ".$sender_name." envió su selección para el menú, siendo las siguientes sus preferencias".
	 "\n\n" ."Tipo Menú:". $tipo_menu .
	 "\n\n" ."Plato fuerte:". $plato_fuerte.
	 "\n\n" ."Postre:". $postre.
	 "\n\n" ."Email:". $from;




	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>