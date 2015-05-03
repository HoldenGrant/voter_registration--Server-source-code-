<?php

    session_start();
	if(!isset($_SESSION['logged_in'])){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Voters' Registration</title>

    <!-- favicon -->
    <link rel="icon" type="image" href="vra.ico"/>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include("nav.php") ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Personal Data</h1>
                </div>
            </div>
                <?php
                    include '../model/db.php';
                    $db = new DB_con();
                    $id = $_GET['id'];
                    $sql="SELECT * FROM applicant where id='$id'";
                    $result=mysql_query($sql);
                ?>
                <?php while($row=mysql_fetch_array($result)){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?>
                    </div>
                <!-- /.panel-heading -->
                    <div class="panel-body">
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#home" data-toggle="tab">Applicant Profile</a>
                            </li>
                            <li><a href="#profile" data-toggle="tab">Attachment/s</a>
                            </li>
                            <?php if($row['status'] == 2) {?>
                            <li><a href="#messages" data-toggle="tab">
                                Comment &thinsp;
                                <?php
                                    if($row['reason'] == null){
                                echo "<b style='float:right; font-size:18px; color:red; font-weight:900;'> * </b>";
                                    }
                                ?>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if($row['status'] == 0) {?>
                            <li style="float:right;">
                                <button class="btn btn-success btn-sm" name="pending2approve">
                                    <a href="../control/update2approve.php?id=<?php echo $row['id']; ?>" style="color:white; text-decoration:none;">Approve</a>
                                </button>
                            </li>
                            <li style="float:right;">
                                &thinsp; &thinsp; &thinsp;
                            </li>
                            <li style="float:right;">
                                <button type="submit" class="btn btn-danger btn-sm" name="pending2decline">
                                   <a href="../control/update2decline.php?id=<?php echo $row['id']; ?>" style="color:white; text-decoration:none;">Decline</a>
                                </button>
                            </li>
                            <?php }elseif($row['status'] == 1){ 
                                echo "<b style='float:right;'>This applicant has been approved...</b><br>";
                                } elseif($row['status'] == 2){
                                echo "<b style='float:right;'>This applicant has been declined...</b>";
                            }?>
                            <!--<li><a href="#settings" data-toggle="tab">Settings</a>
                            </li>-->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <h4>Profile Tab</h4>
                                <p></p>
                                <?php include 'view_data1.php'; ?>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <h4>Attachment/s Tab</h4>
                                <p></p>
                                <p style="align:center"><a href="../control/<?php echo $row['document']; ?>" class="btn btn-primary">Download Uploaded Document</a></p>
                                <p><img style="height:20%; width:20%;" src="<?php echo '../control/'.$row['image']; ?>"/></p>
                                
                            </div>
                            <div class="tab-pane fade" id="messages">
                                <h4>Comment Tab</h4>
                                
                                <?php if($row["reason"] == null) { ?>
                                
                                    <form method="post" id="reason" action="../control/reason.php?id=<?php echo $row['id']; ?>">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="reason" id="reason" ></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-primary" style="float:right;" value="Save"/>
                                    </form>
                                
                                <?php }else{ ?>
                                <div class="alert alert-info">
                                    <?php echo $row['reason'];?>
                                </div>
                                <?php } ?>
                            </div>
                            <!--<div class="tab-pane fade" id="settings">
                                <h4>Settings Tab</h4>
                                <p></p>
                            </div>-->
                        </div>
                    </div>                      
                </div>
                <?php } ?>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

</body>
</html>
<!-- Arnibal, Kyle M.,Causing, Holden Grant R.,Costanilla, Benedict Joel C.,Emnacen, Bermarie N. -->
<!-- ***********************************************************************************************

The project was proposed by : Arnibal, Kyle M.(Project Leader)

This Project is:
    lead by         : Arnibal, Kyle M.(Project Leader)
    programmed by   : Causing, Holden Grant R.(Main Web Server Programmer)
                      Costanilla, Benedict Joel C.(Main Android Application Programmer)
    tested by       : Emnacen, Bermarie N.(Software Tester)

Software Documentation (SRS, SPMP, SDD, STD) was created by the team:
     Arnibal, Kyle M.
     Causing, Holden Grant R.
     Costanilla, Benedict Joel C.
     Emnacen, Bermarie N.

This software application is created by Holden Grant R. Causing (Web Programmer).

************************************************************************************************ -->
<!-- Arnibal, Kyle M.,Causing, Holden Grant R.,Costanilla, Benedict Joel C.,Emnacen, Bermarie N. -->