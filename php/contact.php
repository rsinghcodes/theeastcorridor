<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

	$name=strip_tags(trim($_POST['name']));
	$email=filter_var(trim($_POST['email'], FILTER_SANITIZE_EMAIL));
	$message = trim($_POST["message"]);
    $subject= trim($_POST["subject"]);
	$recipient='info@theeastcorridor.eu';

	$content="Name:".$name."\n";
	$content.="Email: ".$email."\n";
	$content.="Message:".$message."\n";

	$email_headers = "From: ".$name."<".$email.">";

	if(mail($recipient,$subject,$content,$email_headers)){
	 	http_response_code(200);
	    echo "Thanks for contacting us with your comments and questions. we'll respond you very soon.";
		header( "refresh:5;url=../" );
	} else {
	 	// Set a 500 (internal server error) response code.
		http_response_code(500);
		echo "Oops! Something went wrong and we couldn't send your message.";
		header( "refresh:5;url=../" );
	}

} else {
	http_response_code('403');
	echo "There was a problem with your submission, please try again.";
}
?>