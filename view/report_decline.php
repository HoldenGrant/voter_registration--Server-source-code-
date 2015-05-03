<div class="table-responsive" id="reports" class="content2 active">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th style="text-align:center; width:18%;">Date</th>
                <th style="text-align:center; width:20%;">Name</th>
                <th style="text-align:center; width:20%;">Status</th>
            </tr>
        </thead>
        <?php
            error_reporting(0);
            $a=(($_POST['x']));
            $b=(($_POST['y']));
            if (!isset($a)) $a = "now";
            if (!isset($b)) $b = "now";

            $result1 = mysql_query("SELECT * FROM applicant where date BETWEEN '$a' AND '$b' AND status = 2");
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
        <tr id="<?php echo $id; ?>" class="odd invT">
        <?php } else { ?>
        <tr id="<?php echo $id; ?>" bgcolor="#f2f2f2" class="odd invT">
        <?php } ?>
            
        <td class="edit_td" style="text-align:center;">
            <span class="text"><?php echo date("M-d-Y", strtotime($date)); ?></span> 
        </td>
            
        <td style="text-align:center;">
            <span class="text"><?php echo $row['fname']," ".$row['mname']." ".$row['lname']; ?></span> 
        </td>

        <td style="text-align:center;"> <!--this <td> will display that status-->
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
            $sql1=mysql_query("SELECT * from applicant where id='$id'");
                while($row=mysql_fetch_array($sql1)){
                    $date=$row['date'];
                } 
        ?>
        <?php
            $i++;
            }
        ?>
    </table>
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