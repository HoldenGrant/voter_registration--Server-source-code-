<?php
    function data(){
        $id=$_GET['id'];
        $sql="UPDATE applicant SET mailStat = 1 WHERE id = '$id'";
        $result=mysql_query($sql);
    }

    function updateMailApp(){
        $dt = data();
        //$id=$_GET['id'];
        //$sql="UPDATE applicant SET mailStat = 1 WHERE id = '$id'";
        //$result=mysql_query($sql);

        // if successfully updated. 
        if($result){
            header("location: ../view/approved.php");
        }
        else {
            header("location: ../view/approved.php");
        }
    }

    function updateMailDec(){
        $dt = data();
        /*$result=mysql_query($sql);
        $id=$_GET['id'];
        $sql="UPDATE applicant SET mailStat = 1 WHERE id = '$id'";
        $result=mysql_query($sql);*/

        // if successfully updated. 
        if($result){
            header("location: ../view/declined.php");
        }
        else {
            header("location: ../view/declined.php");
        }
    }
?>