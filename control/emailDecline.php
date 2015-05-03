<?php
    include '../model/db.php';
    $db = new DB_con();
    
    include 'updateMailStat.php';
    $mailStat = updateMailDec();

    $id = $_GET['id'];
    $sql="SELECT * FROM applicant where id = '$id'";
    $result=mysql_query($sql);
    if (!$result){ //checks if there is a connection
        die('Invalid query: ' . mysql_error());
    }
    require("../PHPMailer-master/PHPMailerAutoload.php");
    $mail = new PHPMailer();
    
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = 'tls';
    $mail->SMTPSecure = 'ssl';
    $mail->Host     = "smtp.gmail.com"; // SMTP server
    //$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = "holdengrantdummy@gmail.com";  // GMAIL username
    $mail->Password   = "seventhlord";            // GMAIL password

    $mail->SetFrom('holdengrantdummy@gmail.com', "Voter's Registration");
    $mail->AddReplyTo("holdengrantdummy@gmail.com","Voter's Registration");

    while($row=mysql_fetch_array($result)){
        // HTML body :: the message that will sent to the receiver
        $mailAdd = $row['emailad'];
        
        $body  = " Hello <font size=\"4\"> " . $row['fname']." ".$row['mname']." ".$row['lname'] . "</font>, <p>";
        $body .= "Sorry, your application has been declined.<p>";
        $body .= "The reason why your application has been cancelled is: <p>";
        $body .= "<b>".$row['reason']."</b><p>";
        $body .= "Please try again.<p>";
        $body .= "Sincerely, <br>";
        $body .= "Voters' Registration Admin";
        
        // Plain text body (for mail clients that cannot read HTML)
        $text_body  = 'Hello ' . $row['id'] . ", \n\n";
        $text_body .= "Your personal photograph to this message.\n\n";
        $text_body .= "Sincerely, \n";
        $text_body .= 'phpmailer List manager';
        
        $mail->Subject  = "Hi, this is from Voter's Registration.";
        $mail->AltBody  = $text_body;
        $mail->Body     = $body;
        $mail->WordWrap = 50;
        $mail->AddAddress($row['emailad']);
        
        if(!$mail->Send()) {
            echo  "Mailer Error (" . str_replace("@", "&#64;", $row["emailad"]) . ') ' . $mail->ErrorInfo . '<br>';
        }   else {
            echo  "Message sent to :" . $row["fname"] . ' (' . str_replace("@", "&#64;", $row["emailad"]) . ')<br>';
        }
        // Clear all addresses and attachments for next loop
        $mail->ClearAddresses();
        $mail->ClearAttachments();
    }
?>