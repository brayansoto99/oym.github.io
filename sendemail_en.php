<?php

$EmailFrom="ConsultaOyM@kangy.com";
$EmailTo="ventas@oym.com.mx";
$EmailTo="escobarperezmariana@gmail.com.mx";
//$Subject="Email from the Contact Form";
$Name=Trim(stripslashes($_POST['name']));
$Email=Trim(stripslashes($_POST['email']));
$Subject=Trim(stripslashes($_POST['subject']));
$Message=Trim(stripslashes($_POST['message']));

// simple way to validate the form
$ValidationOk=true;
if ($Name == "") $ValidationOk=false;
	if (!$ValidationOk) {
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=error_en.html\">";
		exit;
	}
		
	// preparing the body of the email 
	$Body="";
	$Body.="Nombre completo: ";
	$Body.=$Name;
	$Body.="\n";

	$Body.="Correo: ";
	$Body.=$Email;
	$Body.="\n";
	
	$Body.="Asunto: ";
	$Body.=$Subject;
	$Body.="\n";

	$Body.="Mensaje: ";
	$Body.=$Message;
	$Body.="\n";

	//sending the email now
	$success=mail($EmailTo, $Subject, $Body,"From: <$EmailFrom>");

	//redirect after mail send 
	if ($success) {
 
       print "<meta http-equiv=\"refresh\" content=\"0;URL=send_en.html\">";

	}
	else {

		print "<meta http-equiv=\"refresh\" content=\"0;URL=error_en.html\">";

	}
?>