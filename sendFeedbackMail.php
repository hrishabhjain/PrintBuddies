<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

if($_GET) {

    $emailTo = 'support@printbuddies.com, rishabh@webblitz.in';

    $clientName = trim($_GET['feedback_name']);
    $clientEmail = trim($_GET['feedback_email']);
    $clientPhone = trim($_GET['feedback_mobile']);
    if($_GET['feedback_subject'])
        $subject = trim($_GET['feedback_subject']);
    else
        $subject="Feedback from User";
    $message = trim($_GET['feedback_text']).' Mobile No. : '.$clientPhone;
    $headers = "From: " . $clientName . "< $clientEmail >" . "\r\n" . "Reply-To: " . $clientEmail;
    $mail=mail($emailTo, $subject, $message, $headers);
    echo json_encode($mail);
}

?>
