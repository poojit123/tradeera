<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__,'../.env');
    $dotenv->load();
} catch (Dotenv\Exception\InvalidPathException $ex) {
    print_r($ex->getMessage()); die();
}

$ROOT_DIR = ($_ENV['APP_ENV'] && $_ENV['APP_ENV']!='local') ? $_SERVER['DOCUMENT_ROOT'] : $_SERVER['DOCUMENT_ROOT'].'/tradeera'; 
$LOG_DIR = "$ROOT_DIR/logs";
//Create an instance; passing `true` enables exceptions

function sendMail($data=[]){

    if(count($data)==0){
        return false;
    }
    
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $_ENV['SMTP_USERNAME'];                     //SMTP username
        $mail->Password   = $_ENV['SMTP_PASSWORD'];                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = $_ENV['SMTP_PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_ENV['SMTP_EMAIL_FROM'], 'Mailer');   //Add a recipient
        $mail->addAddress($_ENV['SMTP_EMAIL_FROM']);               //Name is optional
        $mail->addReplyTo($_ENV['SMTP_EMAIL_FROM'], 'Information');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $data['subject'];
        $mail->Body    = $data['body'];
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        $error = json_decode(['errorType:'=>'Email', 'message:'=>$e->getMessage()]);
        error_log($error, 3, "$LOG_DIR/my-errors.log");
        return false;
    }
}