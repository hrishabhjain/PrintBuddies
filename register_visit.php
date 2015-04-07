<?php
if($_POST) {

    $emailTo = 'support@printbuddies.com';

    $printerName = trim($_POST['name']);
    $printerEmail = trim($_POST['email']);
    $printerPhone = trim($_POST['phone']);
    $printerAddress = trim($_POST['address']);
    $printerPincode = trim($_POST['pincode']);
    $printerCity = trim($_POST['city']);

    $message = "xyz";
    $headers = "From: " . $printerName . "< $printerEmail >" . "\r\n" . "Reply-To: " . $printerEmail;
    $mail=mail($emailTo, $message, $headers);
    echo json_encode($mail);
}

?>
