<?php
    include '../model/db.php';
    $db = new DB_con();
    $id=$_GET['id'];
    $sql="UPDATE applicant SET status = 2 WHERE id = '$id'";
    $result=mysql_query($sql);

    $url = $_SERVER['HTTP_REFERER']; 

    // if successfully updated. 
    if($result){
        header("location: $url ");
    }
    else {
        echo "ERROR";
    }
?>