<?php 
    include('../model/db.php');
    $db = new DB_con();
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

    <title>Reports</title>

    <!-- favicon -->
    <link rel="icon" type="image" href="vra.ico"/>
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="../css/plugins/dataTables.bootstrap.css" rel="stylesheet">
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reports</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
            
                <!-- do not delete this form-->
                <form action="reports.php#reports" method="post" >
                    <center>
                        <table>
                            <tr>
                                <td>From:</td><td> <input class="form-control" id="inputField1" name="x" type="date" style="width:200px;" default-value="<?php echo date("Y/m/d"); ?>"/></td>
                                <td>&nbsp; &nbsp; &nbsp;</td>
                                <td>To:</td><td> <input class="form-control" id="inputField2" name="y" type="date" style="width:200px;"/></td>
                                <td>&nbsp; &nbsp; &nbsp;</td>
                                <td></td><td><input class="btn btn-default btn-lg" name="submit" type="submit"  value="Search" onclick="javascript:child_open()"></td>
                            </tr>
                        
                        </table>
                    </center>
                </form>
                <br>
            <?php //include '../control/reports.php';?>
                <!-- hidden -->
                <table cellpadding="0" cellspacing="0" border="0" id="example" width="100%" class="display2 dataTable" style="display:none">
                    <tbody style="font-size:15px;">
                        <?php
                            error_reporting(0);
                            $a=(($_POST['x']));
                            $b=(($_POST['y']));
                            if (!isset($a)) $a = "now";
                            if (!isset($b)) $b = "now";

                            $result1 = mysql_query("SELECT * FROM applicant where date BETWEEN '$a' AND '$b'");
                            $i=1;
                            $ctr=0;
                            $ctrDec=0;
                            $ctrApp=0;
                            $ctrPen=0;
                            while($row = mysql_fetch_array($result1)){
                                $id=$row['id'];
                                $name_l=$row['fname'];
                                $name_l=$row['mname'];
                                $name_l=$row['lname'];
                                $status=$row['status'];
                                $date=$row['date'];
                                $ctr = $ctr + 1;
                                if($i%2)
                            {
                        ?>
                        <tr id="<?php echo $status; ?>" class="odd invT">
                        <?php } else { ?>
                        <tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="odd invT">
                        <?php } ?>
                        <td class="edit_td">
                            <span class="text"><?php echo $id; ?></span> 
                        </td>
                        <td>
                            <span class="text"><?php echo $lname; ?></span> 
                        </td>
                        <td>
                            <?php
                                if($status==0)
                                    $stat="Pending";
                                else if($status==1)
                                    $stat="Approved";
                                else if($status==2)
                                    $stat="Declined";
                            ?>
                            <span class="text"><?php echo $stat; ?></span> 
                            <?php 
                                if($stat == "Declined"){
                                $ctrDec = $ctrDec + 1; }
                            ?>
                            <?php 
                                if($stat == "Approved"){
                                $ctrApp = $ctrApp + 1; }
                            ?>
                            <?php 
                                if($stat == "Pending"){
                                $ctrPen = $ctrPen + 1; }
                            ?>
                        </td>
                        <?php
                            /*$sql1=mysql_query("SELECT * from applicant where id='$id'");
                                while($row=mysql_fetch_array($sql1)){
                                    $date=$row['date'];
                                }
                            $i++;*/
                            }
                        ?>
                    </tbody>
                </table>
            <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Reports DataTables
                        </div>
                        <div class="panel-body">
                            <!-- ... -->
                            <br>
                            
                            <div class="table-responsive" id="reports" class="content2 active">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; width:20%;">Date Range</th>
                                            <th style="text-align:center; width:20%;">Total Applicant/s</th>
                                            <th style="text-align:center; width:18%;">Pending</th>
                                            <th style="text-align:center; width:18%;">Approved</th>
                                            <th style="text-align:center; width:25%;">Declined</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center;">
                                                <span class="text">
                                                    <?php echo date("M-d-Y", strtotime($a))." ".'<b>To</b>'." ".date("M-d-Y", strtotime($b)) ?>
                                                </span>
                                            </td>
                                            <td style="text-align:center;"><span class="text"><?php echo $ctr; ?></span> </td>
                                            <td style="text-align:center;"><span class="text"><?php echo $ctrPen; ?></span></td>
                                            <td style="text-align:center;"><span class="text"><?php echo $ctrApp; ?></span></td>
                                            <td style="text-align:center;"><span class="text"><?php echo $ctrDec; ?></span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <br>
                            <h3>Pending</h3>
                            <?php include 'report_pending.php'; ?>
                            <hr>
                            <br>
                            <h3>Approved</h3>
                            <?php include 'report_approve.php'; ?> 
                            <hr>
                            <br>
                            <h3>Declined</h3>
                            <?php include 'report_decline.php'; ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
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