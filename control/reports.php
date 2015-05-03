<table cellpadding="0" cellspacing="0" border="0" id="example" width="100%" class="display2 dataTable">
                    <thead style="font-size:17px;">
                        <tr  class="inv">
                            <th>id</th>
                            <th>Name_l</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
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
                                $fname=$row['fname'];
                                $mname=$row['mname'];
                                $lname=$row['lname'];
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
                        <td class="edit_td">
                            <span class="text"><?php echo $id; ?></span> 
                        </td>
                        <td>
                            <span class="text"><?php echo $fname; ?></span> 
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
                            $sql1=mysql_query("SELECT * from applicant where id='$id'");
                                while($row=mysql_fetch_array($sql1)){
                                    $date=$row['date'];
                                } 
                        ?>
                        <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>