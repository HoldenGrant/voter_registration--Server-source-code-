<?php
    include '../model/db.php';
    $db = new DB_con();
    
    include 'net_connect.php';
    $net_con = is_connected();
        
    include 'updateMailStat.php';
    $mailStat = updateMailApp();

    

    $id = $_GET['id'];
    $email = $_POST['email'];
    $sql="SELECT * FROM applicant where id = '$id'";
    $result=mysql_query($sql);
    if (!$result){                                      // checks if there is a database connection
        die('Invalid query: ' . mysql_error());
    }
    require("../PHPMailer-master/PHPMailerAutoload.php");
    $mail = new PHPMailer();
    
    $mail->IsSMTP();                                    // telling the class to use SMTP
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = 'tls';
    $mail->SMTPSecure = 'ssl';
    $mail->Host     = "smtp.gmail.com";                 // SMTP server
    //$mail->Port       = 587;                          // set the SMTP port for the GMAIL server
    $mail->Port       = 465;                            // set the SMTP port for the GMAIL server
    $mail->Username   = "holdengrantdummy@gmail.com";   // GMAIL username
    $mail->Password   = "seventhlord";                  // GMAIL password

    $mail->SetFrom('holdengrantdummy@gmail.com', "Voter's Registration");
    $mail->AddReplyTo("holdengrantdummy@gmail.com","Voter's Registration");

    while($row=mysql_fetch_array($result)){
        // HTML body :: the message that will sent to the receiver
        $mailAdd = $row['emailad'];
        
        //if ($_POST["email"] != "Approved"){
        $body  = "Hello <font size=\"4\"> " . $row['fname']." ".$row['mname']." ".$row['lname'] . "</font>, <p>";
        $body .= "Your personal code is"." "."<b>".$row['code']."</b>"." ".", please present the code to the office.<p>";
        $body .= "Sincerely, <br>";
        $body .= "Voters' Registration Admin";
        /*}else{
            $body = "Your dead... <br>";
        }*/
        // Plain text body (for mail clients that cannot read HTML)
        $text_body  = 'Hello ' . $row['fname']." ".$row['mname']." ".$row['lname'] . ", \n\n";
        $text_body .= "Your personal code is"." "."<b>".$row['code']."</b>"." ".", please present the code to the office.\n\n";
        $text_body .= "Sincerely, \n";
        $text_body .= "Voters' Registration Admin";
        
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