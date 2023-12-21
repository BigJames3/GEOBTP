<?php

// Define some constants
define( "RECIPIENT_NAME", "John Doe" );
define( "RECIPIENT_EMAIL", "traorejames34@gmail.com" );


// Read the form values
$success = false;
$sendername = isset( $_POST['username'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$senderSubject = isset( $_POST['subject'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $sendername && $senderEmail && $senderSubject && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = " From: " . $senderEmail . " <" . $senderSubject . ">";
  $msgBody = " Message: " . $message . "";
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  //header('Location: contact.php?message=Successfull');
  $messagee = "Alerte : Erreur de connexion !";
header("Location: contact.php?message=" . urlencode($messagee));
exit();
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index.php?message=Failed');	
}

?>