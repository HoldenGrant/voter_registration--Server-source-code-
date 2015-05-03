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

    <!-- Timeline CSS -->
    <link href="../css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

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
                    <h1 class="page-header">About the developers</h1>
                </div>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-clock-o fa-fw"></i> Our Team (ACCE)
                    </div>
                    <div class="panel-body">
                        <ul class="timeline">

                            <div class="col-lg-5" style="position:absolute;">
                                <br>
                                <div class="well well-sm">
                                    <h4>Voters Registration Application</h4>
                                    <p style="text-align:justify; text-indent:50px;">
                                        The purpose of the project is to develop an application, 
                                        analyze the requirements of, design, implement, and maintain 
                                        the software for both the voter applicants and the COMELEC admin 
                                        that will comprise the Voters Registration Application, according 
                                        to the requirements specified by the developers.
                                    </p>
                                    <br>
                                </div>
                            </div>
                            <li class="timeline-inverted">
                                <div class="timeline-badge"><i class="fa fa-check"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title"><a href="https://www.facebook.com/kairume">Arnibal, Kyle M.</a></h4>
                                        <p>
                                            <small class="text-muted"><i class="fa fa-clock-o"></i> Project leader (Documentarist)</small> 
                                        </p>
                                    </div>
                                    <div class="timeline-body">
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title"><a href="https://www.facebook.com/hcausing">Causing, Holden Grant R.</a></h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Web Programmer (Server Side)</small>
                                    </div>
                                    <div class="timeline-body">
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title"><a href="https://www.facebook.com/benjoy88">Costanilla, Benedict Joel C.	</a></h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Mobile App Programmer (Client Side)</small>
                                    </div>
                                    <div class="timeline-body">
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge success" ><i class="fa fa-save"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title"><a href="https://www.facebook.com/bermar.emnacen">Emnacen, Bermarie N.</a></h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> Software Tester</small>
                                    </div>
                                    <div class="timeline-body">
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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