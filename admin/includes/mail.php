<?php
function redirect_to($location){
  if($location != NULL){
    header("Location: {$location}");
    exit;
  }
}

echo "From mail.php";
function submitMessage($name, $message, $email, $phone, $direct){
$header = "From: " . $email;
$header2 = "From: " . $yourEmail;
$subjectTo = "Email From Portfolio Site";
$subjectCon = "A Copy of Your Email";
$yourEmail = "hello@koltons.work";
$formatTo = $email . " has sent you an email.\n\n" . $name . " is their name.\n\n" . $phone " is their phone.\n\n" . $message;
$confirm = "Here is a copy of your message: ". $email . " you sent an email.\n\n" . $name . " is your name.\n\n" . $phone " is your phone.\n\n" . $message;

$mail($yourEmail, $subjectTo, $formatTo);
$mail($email, $subjectCon, $confirm);

$direct = $direct."?name={$name}";
redirect_to($direct);
}
?>
