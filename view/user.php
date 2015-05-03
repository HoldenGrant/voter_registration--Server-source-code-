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

    <title>List of Applicants</title>

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
                    <h1 class="page-header">List of Applicants</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Applicants DataTables
                            <div class="panel-body" style="float:right; margin-top:-23px;">
                                <!--<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add New Applicant</button>-->
                            </div>
                            <!--<hr style="margin:5px auto; width:100%;">-->
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">New Entry : BIR</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="controls/add_applicant.php" method="post">
                                               <div class="form-group">
                                                    <label>Mode of Payment</label>
                                                    <select class="form-control" required name="mode_of_payment">
                                                        <option></option>
                                                        <option>Hourly</option>
                                                        <option>Daily</option>
                                                        <option>Weekly</option>
                                                        <option>Monthly</option>
                                                        <option>Semi-Monthly</option>
                                                        <option>Annual</option>
                                                        <option>On Call</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Exemption</label>
                                                    <input class="form-control" placeholder="Enter Exemption" required name="exemption">
                                                    <label>Start</label>
                                                    <input class="form-control" placeholder="Enter Start" required name="start">
                                                    <label>End</label>
                                                    <input class="form-control" placeholder="Enter End" required name="end">
                                                    <label>Tax</label>
                                                    <input class="form-control" placeholder="Enter Tax" required name="tax">
                                                    <label>Excess %</label>
                                                    <input class="form-control" placeholder="Enter Excess %" required name="excess">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                            </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <?php 
                                        /*$sql="SELECT * FROM user";
                                        $result=mysql_query($sql);
                                        while($row=mysql_fetch_array($result)){
                                            echo $row['username']; 
                                            echo " ";
                                            echo $row['password']; 
                                        } */
                                    ?>
                                    <thead>
                                        <tr>
                                            <th style="text-align:center; width:25%;">Name</th>
                                            <th style="text-align:center; width:15%;">Username</th>
                                            <th style="text-align:center; width:15%;">Password</th>
                                            <!--<th style="text-align:center; width:15%;">Status</th>-->
                                            <th style="text-align:center; width:25%;">Action</th>
                                        </tr>
                                    </thead>
                                    <?php include 'user_table.php';?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="..js/plugins/dataTables/jquery.dataTables.js"></script>
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