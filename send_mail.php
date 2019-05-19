<?php

use PHPMailer\PHPMailer\PHPMailer;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'PHPMailer-6.0.3/src/Exception.php';
require 'PHPMailer-6.0.3/src/PHPMailer.php';
require 'PHPMailer-6.0.3/src/SMTP.php';

class VerificationCode
{
    public $smtpHost;
    public $smtpPort;
    public $sender;
    public $password;
    public $receiver;
    public $code;

    public function __construct($receiver)
    {
        /**
         * Your email id  
         * For example : johndoe@gmail.com
         * contact@johndoe.com
         * 
         */
        $this->sender = "kontakt@pamarpszczyna.pl"; 

        /**
         *  YOUR PASSWORD 
         *  ************
         */               
        $this->password = "Komar123!";  

        /**
         * Receiver email
         * For example : johndoe@gmail.com
         */     
        $this->receiver = 'biuro@pamarpszczyna.pl'; //biuro@pamarpszczyna.pl //logan120892@gmail.com  

        /**
         * YOUR SMTP HOST NAME 
         * For example : smtp.gmail.com 
         * OR mail.youwebsite.com
         */     
        $this->smtpHost="strefa.home-whs.pl";        
        
        /**
         * SMTP port number
         * For example :587
         */
        $this->smtpPort = 587;

    }

    public function sendMail( $subject, $message ){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;   
        $mail->Port = $this->smtpPort;    
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body = $message;
        $mail->Subject = $subject;
        $mail->SetFrom($this->sender, $subject );
        $mail->AddAddress($this->receiver);
        if($mail->send()){
          $_SESSION['send'] = true;
          header('Location: index.php');
        }
        header('Location: index.php');
    }
}

    if(isset($_POST['email'])) {
        session_start();

        $email_to = "logan120892@gmail.com";
        $email_subject = "Wiadomość z formularza kontaktowego pamarpszczyna.pl";
        $from = '';
        ini_set('sendmail_from', $from);
        $first_name = $_POST['name']; // required
        $email_from = $_POST['email']; // required
        $comments = $_POST['message']; // required
    
        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
        function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
        }
    
        $email_message = '
        <!DOCTYPE html>
        <html lang="pl">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Wiadomość z portalu pamarpszczyna.pl</title>
        </head>
        <body>
            <p>Imię: <b>'.clean_string($first_name).'</b></p>
            <p>Email: <b>'.clean_string($email_from).'</b></p>
            <p>Wiadomość: <b>'.clean_string($comments).'</b></p>
        </body>
        </html>        
        ';

        $mail = new VerificationCode();
        $mail->sendMail( $email_subject, $email_message );

        // $headers  = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        // $headers .= "From: ". $from. "\r\n";
        // $headers .= "Reply-To: ". $from. "\r\n";
        // $headers .= "X-Mailer: PHP/" . phpversion();
        // $headers .= "X-Priority: 1" . "\r\n"; 

        // $r = mail($email_to, $email_subject, $email_message, $headers);  

        // var_dump( $r );
        // $_SESSION['send'] = true;

        // $filename = "mails.txt";
        // $fh = fopen($filename, "a");
        // fwrite($fh, $email_message);
        // fclose($fh);        

        // header('Location: index.php');
    }else{
        header('Location: index.php');
    }
?>