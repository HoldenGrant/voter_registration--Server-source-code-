<?php
    $sql="SELECT * FROM user";
    $result=mysql_query($sql);
?>
<?php while($row=mysql_fetch_array($result)){ ?>
    <tr>
        <td style="text-align:center;"><?php echo $row['fname']." ".$row['lname']; ?></td>
        <td style="text-align:center;"><?php echo $row['username']; ?></td>
        <td style="text-align:center;"><?php echo $row['password']; ?></td>
        <td  style="text-align:center;">
            <button type="button" class="btn btn-success btn-sm" style="margin-top:-20px;margin-bottom:-15px;">
                <a href="#" style="color:white; text-decoration: none;"  data-toggle="modal" data-target="#myModalEdit">View</a>
            </button>
            <button type="button" class="btn btn-danger btn-sm" style="margin-top:-20px;margin-bottom:-15px;">
                <a href="controls/delete_entry_bir.php?id=<?php echo $row['id']; ?>" style="color:white;text-decoration:none;">Delete</a>
            </button>
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