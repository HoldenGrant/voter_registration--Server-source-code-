<?php
    $db = new DB_con();
    $sql="SELECT * FROM applicant where status = 1";
    $result=mysql_query($sql);
?>
<?php while($row=mysql_fetch_array($result)){ ?>
    <tr>
        <td style="text-align:center;"><?php echo $row['code']; ?></td>
        <td style="text-align:center;"><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
        <td style="text-align:center;"><?php $dt = $row['date']; echo date("M-d-Y", strtotime($dt)); ?></td>
        <td style="text-align:center;">
            <?php 
            if($row['status'] == 1)
                    echo "Approved";
            ?>
        </td>
        <td style="text-align:center; font-weight:bold;">
            <!-- this button will always be present -->
            <a href="view_data.php?id=<?php echo $row['id'];?>" style="color:white; text-decoration: none; ">
                <button type="button" class="btn btn-success btn-sm">
                    View Profile
                </button>
            </a>
            <!-- if the "Send Mail" Button is press it will be hidden and -->
            <!-- the "Done sending mail. :)" will appear -->
            <?php 
                if($row['mailStat'] == 0){ ?>
                    <a href="../control/email.php?id=<?php echo $row['id']; ?>" style="color:white;text-decoration:none;">
                        <button type="button" class="btn btn-danger btn-sm" name="email" value="Approved">
                            Send Mail
                        </button>
                    </a>
                <?php }else{ ?>
                    <?php
                    echo "Done sending mail. :)";
                }
            ?>
        </td>
    </tr>
<?php } ?>

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