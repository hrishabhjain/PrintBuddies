<?php
if($_GET) {

    $emailTo = 'support@printbuddies.com, rishabhjain5858@gmail.com';

    $clientName = trim($_GET['feedback_name']);
    $clientEmail = trim($_GET['feedback_email']);
    $clientPhone = trim($_GET['feedback_mobile']);
    if($_GET['feedback_subject'])
        $subject = trim($_GET['feedback_subject']);
    else
        $subject="Feedback from User";
    $message = trim($_GET['feedback_text']);
    $headers = "From: " . $clientName . "< $clientEmail >" . "\r\n" . "Reply-To: " . $clientEmail;
    mail($emailTo, $subject, $message, $headers);
    echo json_encode(true);


}

?>
