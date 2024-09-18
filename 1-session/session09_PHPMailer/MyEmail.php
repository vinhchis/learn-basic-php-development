<!DOCTYPE html>
<?php
#1. Php Mailer
include_once './PHPMailer/PHPMailer.php';
include_once './PHPMailer/OAuth.php';
include_once './PHPMailer/POP3.php';
include_once './PHPMailer/SMTP.php';
include_once './PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

#2. Check Form in Submitted ?
if (isset($_POST['btnSend'])):
#3. Get data from element
    $sTo = $_POST['txtTo'];
    $sSubject = $_POST['txtSubject'];
    $sMes = $_POST['txtContent'];

#4. Mail processing ..
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

#5. Gmail Propeties
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587";

#6. Set Encryption mechanism
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
#7. User Information
    $mail->Username = "levinhchi123@gmail.com";
    $mail->Password = "ayly ibme iego udzk";
    $mail->FromName = "Mr PHP Mailer";
#8. Mail source
    $mail->setFrom("levinhchi123@gmail.com");
    $mail->addAddress($sTo);
    $mail->Subject = $sSubject;
    $mail->msgHTML($sMes);
#9. Mail sending ....
    if (!$mail->send()):
        header("location: MyEmail.php?msgErr=Cannot sending email");
    else:
        header("location: MyEmail.php?msgOk=Successful Sending");

    endif;
endif; //btnSend
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>My Email</title>
    </head>
    <body>
        <?php
        if (isset($_GET['msgErr'])):
            echo "<div class='alert alert-warning'> {$_GET['msgErr']} </div>";
        elseif (isset($_GET['msgOK'])):
            echo "<div class='alert alert-info'> {$_GET['msgOK']} </div>";
        endif;
        ?>

        <div class="container">
            <h1>Sending Mail</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="txtTo">To</label>
                    <input type="text" class="form-control"  id="txtTo" name="txtTo">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="txtSubject" >
                </div>
                <div class="form-group">
                    <label for="txtContent">Content</label>
                    <textarea class="form-control" id="txtContent" name="txtContent" rows="4" cols="50"> </textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="btnSend">Send</button>
            </form>
        </div>

    </body>
</html>
