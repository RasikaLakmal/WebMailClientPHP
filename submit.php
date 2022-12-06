<?php
include('database.inc.php');
$msg="";
if(isset($_POST['receiver_email']) && isset($_POST['subject']) && isset($_POST['message'])){
	$receiver_email=mysqli_real_escape_string($con,$_POST['receiver_email']);
	$subject=mysqli_real_escape_string($con,$_POST['subject']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	mysqli_query($con,"insert into maildata(receiver_email,subject,message) values('$receiver_email','$subject','$message')");
	$msg="Email Sent";
	
	$html="<table><tr><td>subject</td><td>$subject</td></tr><tr><td>message</td><td>$message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="EMAIL";
	$mail->Password="PASSWORD";
	$mail->SetFrom("EMAIL");
	$mail->addAddress($receiver_email);
	$mail->IsHTML(true);
	$mail->Subject="New Email";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
?>