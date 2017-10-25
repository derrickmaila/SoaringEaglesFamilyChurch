<?php

//error_reporting(E_ALL);
//ini_set("display_errors", 1);

$name       = @trim(stripslashes($_POST['fullname'])); 
$from       = @trim(stripslashes($_POST['emailadd']));
$phone       = @trim(stripslashes($_POST['phonenumb'])); 
$subject    = @trim(stripslashes($_POST['subjectprayer'])); 
$message    = @trim(stripslashes($_POST['prayermessage'])); 
$to   		= 'soaringeagleschurch12@gmail.com';//replace with your email

$messagesent = "PRAYER REQUEST FROM : " ."<B> " .$name." </B><BR> PHONE NO: <B>".$phone."</B> <BR>".$message;

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $messagesent, $headers);
echo "You have successfully send your prayer request.";
Header('Location:index.php?#prayerrequests');
die;
?>