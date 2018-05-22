<?PHP
// on some servers you need to add this code in order to work without problems
$Name = $_REQUEST["name"];
$Email = $_REQUEST["email"];
$Subject = $_REQUEST["subject"];
$Message = $_REQUEST["message"];

$to ="meghwani.suraj@gmail.com";
$subject = "Contact Form";
$message = "First Name: " . $Name;
$message .= "\nEmail: " . $Email;
$message .= "\nIP Adress: " . $_SERVER['REMOTE_ADDR'];
$message .= "\nBrowser: " . $_SERVER['HTTP_USER_AGENT'];
$message .= "\n\nMessage: " . $Message;
$headers = "From: $Email";
$headers .= "\nReply-To: $Email";


$sentOk = mail($to,$subject,$message,$headers);

echo "Thank You";

?> 
