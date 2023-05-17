<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$people = $_POST['people'];
$time = $_POST['time'];
$message = $_POST['message'];

$header = 'From: ' . $mail. " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Reservation name: " . $name. " \r\n";
$message .= "Email: " . $mail. " \r\n";
$message .= "Phone: " . $phone. " \r\n";
$message .= "date: " . $date. " \r\n";
$message .= "people: " . $people. " \r\n";
$message .= "time: " . $time. " \r\n";
$message .= "Message: " . $_POST['message'] . " \r\n";
$message .= "Send date" . date('d/m/Y', time());

$para = "ciao@amoresxm.com";
$asunto = 'Amore Resservation web site';

mail($para, $asunto, utf8_decode($message), $header);
echo '<script language="javascript">alert("Your reservation has been sent, we can contact you at the reservation number to confirm.");window.location.href="index.html"</script>';

?>
