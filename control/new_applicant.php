<?php 
    include '../model/db.php';
    $db = new DB_con();
    //database = android
    $citizenship =  $_POST["citizenship"];
    $birth = $_POST["birth"];
    $emailad =$_POST["emailad"];
    $mobile = $_POST["mobile"];
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $brgy = $_POST["brgy"];
    $houseno = $_POST["houseno"];
    $gender = $_POST["gender"];
    $birthcity = $_POST["birthcity"];
    $birthprovince = $_POST["birthprovince"];
    $civil = $_POST["civil"];
    $spouse = $_POST["spouse"];
    $citizentype = $_POST["citizentype"];
    $natdate = $_POST["natdate"];
    $natno= $_POST["natno"];
    $cityresyears =$_POST["cityresyears"];
    $cityresmonths =$_POST["cityresmonths"];
    $philresyears = $_POST["philresyears"];
    $occupation =$_POST["occupation"];
    $tinnum =$_POST["tinnum"];
    $fatherlname =$_POST["fatherlname"];
    $fatherfname =$_POST["fatherfname"];
    $fathermname =$_POST["fathermname"];
    $motherlname =$_POST["motherlname"];
    $motherfname = $_POST["motherfname"];
    $mothermname = $_POST["mothermname"];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $image = $_FILES["image"]["name"];
    $document = $_FILES["document"]["name"];
    
    $newDocument = $_FILES["document"]["name"];
    $newImage = $_FILES["image"]["name"];

    move_uploaded_file($_FILES["image"]["tmp_name"],$newImage);
    move_uploaded_file($_FILES["document"]["tmp_name"],$newDocument);

    //date("M-d-Y", strtotime($dt));
    //$date = $_POST["date"];
    $status = "0";

    $sql="INSERT INTO applicant(citizenship, birth, emailad, mobile, lname, fname, mname, province, city, brgy, houseno, gender, birthcity, birthprovince, civil, spouse, citizentype, natdate, natno, cityresyears, cityresmonths, philresyears, occupation, tinnum, fatherlname, fatherfname, fathermname, motherlname, motherfname, mothermname, date, image, document, height, weight, status)
    VALUES('$citizenship', '$birth', '$emailad', '$mobile', '$lname', '$fname', '$mname', '$province', '$city', '$brgy',  '$houseno', '$gender', '$birthcity', '$birthprovince', '$civil', '$spouse', '$citizentype', '$natdate', '$natno', '$cityresyears', '$cityresmonths', '$philresyears', '$occupation', '$tinnum', '$fatherlname', '$fatherfname', '$fathermname', '$motherlname', '$motherfname', '$mothermname', now(), '$newImage', '$newDocument', '$height', '$weight', '$status' )";



    $validateSql = "SELECT COUNT(*) AS duplicates FROM applicant WHERE fname = '$fname' AND mname = '$mname' AND lname = '$lname' AND birth = '$birth'";
    $validationResult = mysql_query($validateSql);

    if(mysql_result($validationResult,0) == 0) {
        $result=mysql_query($sql);
        if($result){
            echo "nasudna";	
            }	
        else{
            echo "wa";
        }
    } 
    else {
        echo "duplicate";
    }



	
?>