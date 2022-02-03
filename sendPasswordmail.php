<?php

    if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){

            die(header('location:index.php'));

    }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require_once('dbconfig/config.php');

    if(isset($_POST['email-btn'])){

        $forgotPemail = $_POST['forgotPemail'];
        $q="select * from logintb WHERE email='$forgotPemail'";
                                    
        $q_run=mysqli_query($con,$q);
                                    
        if(mysqli_num_rows($q_run)>0){

        	$rowData = mysqli_fetch_assoc($q_run);
            $username = $rowData['username'];
        	$str=$rowData['password'];
        	$strlen=strlen($str);
        	$orilen=$strlen-32;
        	$strdiv=intdiv($orilen,3);

    		$str1=substr($str,0,$strdiv);
    				 
    		$str2=substr($str,16+$strdiv,$strdiv);

    		$str3=substr($str,32+$strdiv+$strdiv);

    		$original_password=$str1.$str2.$str3;

            require 'PHPMailer/src/Exception.php';
            require 'PHPMailer/src/PHPMailer.php';
            require 'PHPMailer/src/SMTP.php';
            $mail = new PHPMailer(true);  
                                        // Passing `true` enables exceptions
            try {
                
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'nakshikuthir04@gmail.com';                 // SMTP username
                $mail->Password = '';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom($mail->Username);
                // $mail->addAddress('where to send @gmail.com', 'Joe User');     // Add a recipient
                $mail->addAddress($forgotPemail);               // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forgot Password';
                $message = 'Username: '.$username.'<br>'.'Password: '.$original_password;
                $mail->Body    = $message;

                $mail->send();
                echo 'Username and Password has been sent.Check your email';

            } catch (Exception $e) {

                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

            }
        }else{

            echo "Email is not registered";

        }
    }
?>