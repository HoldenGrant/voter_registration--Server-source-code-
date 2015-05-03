<?php
    include '../model/db.php';
    $db = new DB_con();
    $id=$_GET['id'];
    //database name = input name
    $reason = $_POST["reason"];

    $sql="UPDATE applicant SET reason = '$reason' WHERE id = '$id'";
    $result=mysql_query($sql);

    // if successfully updated. 
    $url = $_SERVER['HTTP_REFERER'];
    if($result){
        header("location: $url");
    }
    else {
        echo "<p>Redirecting in a few seconds. If it doesn't, <a href='../view/index.php'>click here</a> to redirect again.<p>";
        header('Refresh: 2;url=../view/pending.php');
    }
?>