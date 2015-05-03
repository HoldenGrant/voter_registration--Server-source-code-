<?php
    include '../model/db.php';
    $db = new DB_con();
    
    include 'random_code.php';
    $code = getRandomString();

    $id=$_GET['id'];
    $sql="UPDATE applicant SET status = 1, code = '$code', reason = '12' WHERE id = '$id'";
    $result=mysql_query($sql);

    // if successfully updated. 
    if($result){
        header("location: ../view/pending.php");
    }
    else {
        echo "ERROR";
    }
?>