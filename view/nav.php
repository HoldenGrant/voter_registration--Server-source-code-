<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="applicant_list.php">Voters Registration</a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
        </li>
        <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php //if($_SESSION['logged_in']){  echo $_SESSION['username'];} ?>
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <?php if($_SESSION['level'] == 1){
                echo '<li><a href="#" data-toggle="modal" data-target="#myModalReg"><i class="fa fa-sign-out fa-fw" ></i> Create User</a></li>';
                }?>
                <li><a href="../control/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--Nav Area-->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form"></div>
                </li>
                <?php if($_SESSION['level'] == 1){  
                    echo '<li><a href="user.php"><i class="fa fa-home fa-fw"></i> Users</a></li>';
                } ?>
                <li>
                    <a href="applicant_list.php"><i class="fa fa-th-list fa-fw"></i> List</a>
                </li>
                <li>
                    <a href="applicant_list.php"><i class="fa fa-home fa-fw"></i> Applicants <span class="fa arrow"></span><!--<h5 style="float:right; font-variant:small-caps; font-weight:bold;">pending</h5>--></a>
                    <ul class="nav nav-second-level">
                        <li><a href="pending.php"><i class="fa fa-th-list fa-fw"></i> Pending</a></li>
                        <li><a href="approved.php"><i class="fa fa-th-list fa-fw"></i> Approved</a></li>
                        <li><a href="declined.php"><i class="fa fa-th-list fa-fw"></i> Declined</a></li>
                    </ul>
                </li>
                <li>
                    <a href="reports.php"><i class="fa fa-times fa-fw"></i> Reports</a>
                </li>
                <li>
                    <a href="about.php"><i class="fa fa-info-circle fa-fw"></i> Developers :)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- REGISTER -->
<div class="modal fade" id="myModalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <input class="form-control" id="Name" type="text" placeholder="Username">
                        <br/>
                        <input class="form-control" id="Name" type="password" placeholder="Password">
                        <br/>
                        <br/>
                        <input class="form-control" id="Name" type="text" placeholder="First Name">
                        <br/>
                        <input class="form-control" id="Name" type="text" placeholder="Last Name">
                        <br/>
                        <input class="form-control" id="Name" type="text" placeholder="E-mail">
                        <br/>
                        <input class="form-control" id="Name" type="text" placeholder="Address">
                        <br/>
                        <br/>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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