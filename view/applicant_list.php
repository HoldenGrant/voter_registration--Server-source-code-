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
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <!--<th style="text-align:center; width:15%;">Code</th>-->
                                            <th style="text-align:center; width:25%;">Name</th>
                                            <th style="text-align:center; width:20%;">Date</th>
                                            <th style="text-align:center; width:20%;">Status</th>
                                            <th style="text-align:center; width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <?php include 'applicant_table.php'; ?>
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
