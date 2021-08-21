<?php
    //Delete files exist
    $files = glob('files/*');
    foreach($files as $file)
    {       
        if(is_file($file))
        unlink($file);
    }
    reset($files);

    if(!empty($_POST['data']))
    {
        $data = base64_decode($_POST['data']);
        $fileName = $_POST['filename'];
        $fileName_url = "files/".$fileName.".pdf";
        file_put_contents( $fileName_url, $data ); 

        $email = $_POST['email'];
        //Send email
        require('phpmailer/class.phpmailer.php');
        require('phpmailer/class.smtp.php');

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = "utf-8";
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port     = "587";  
        $mail->Username = "vinhha.dev@gmail.com";
        $mail->Password = "cksbakxfdzijzhbj";
        $mail->Host     = "smtp.gmail.com";
        $mail->Mailer   = "smtp";
        $mail->Subject = "Persona";
        $mail->SetFrom("viecjapan@sougo-career-vietnam.com", "Persona");
        $mail->AddReplyTo("vinhha.dev@gmail.com");
        $mail->AddAddress($email);	
        $mail->WordWrap   = 80;
        $mail->MsgHTML("Mail from Persona");
        $mail->IsHTML(true);
        $mail->addAttachment($fileName_url); 

        if(!$mail->Send()) {
            echo "<p class='error'>Problem in Sending Mail.</p>";
        } else {
            echo "<p class='success'>Contact Mail Sent.</p>";
            header ("Location: complete.php");
            exit ();
        }	
    } 
    else {
        echo "No Data Sent";
    }
    exit();
?>