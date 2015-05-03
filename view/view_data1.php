<!-- Name -->
<div class="col-lg-7">
    <div class="panel panel-default">
        <div class="panel-heading">
            Name
        </div>
        <div class="panel-body">
            <table>
                <tr>
                    <td><p>Last name : </p></td>
                    <td><p><strong><?php echo $row['lname']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>Middle name : </p></td>
                    <td><p><strong><?php echo $row['mname']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>First name : </p></td>
                    <td><p><strong><?php echo $row['fname']; ?></strong></p></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- ********************************************************************************** -->
<div class="col-lg-5" style="float:right;">
    <div class="panel panel-default">
        <div class="panel-body">
            <table style="width:100%;">
                <tr>
                    <td style="width: 30%;"><p>Gender : </p></td>
                    <td><p><strong><?php echo $row['gender']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>Height : </p></td>
                    <td><p><strong><?php echo $row['height']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>Weight : </p></td>
                    <td><p><strong><?php echo $row['weight']; ?></strong></p></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><p>Date of birth : </p></td>
                    <td><p><strong><?php echo $row['birth']; ?></strong></p></td>
                </tr>
                <tr>
                    <td colspan="2"><em>Place of birth</em></td>
                </tr>
                <tr>
                    <td><p>City / Mun : </p></td>
                    <td><p><strong><?php echo $row['birthcity']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>Province : </p></td>
                    <td><p><strong><?php echo $row['birthprovince']; ?></strong></p></td>
                </tr>
                <tr>
                    <td colspan="2"><hr></td>
                </tr>
                <tr>
                    <td><p>Civil Status : </p></td>
                    <td><p><strong><?php echo $row['civil']; ?></strong></p></td>
                </tr>
                <tr>
                    <td colspan="2"><p>Name of Spouse, if married : </p></td>
                </tr>
                <tr>
                    <td></td>
                    <td><p><strong><?php echo $row['spouse']; ?></strong></p></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- ********************************************************************************** -->
<!-- Residence / Address -->
<div class="col-lg-7">
    <div class="panel panel-default">
        <div class="panel-heading">
            Residence / Address
        </div>
        <div class="panel-body">
            <table>
                <tr>
                    <td><p>Province : </p></td>
                    <td><p><strong><?php echo $row['province']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>City/Municipality : </p></td>
                    <td><p><strong><?php echo $row['city']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>Barangay : </p></td>
                    <td><p><strong><?php echo $row['brgy']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>House No. / Street : </p></td>
                    <td><p><strong><?php echo $row['houseno']; ?></strong></p></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- Citizenship -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Citizenship
        </div>
        <div class="panel-body">
            <table>
                <tr>
                    <td><p>Citizenship : </p></td>
                    <td><p><strong><?php echo $row['citizenship']; ?></strong></p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p><strong><?php echo $row['citizentype']; ?></strong></p></td>
                </tr>
            </table>
            <p>
                <em style="font-size:12px;">(If naturalized/reacquired, state date of naturalization/reacquisition and Certificate number of naturalization/order of approval of reacquisition)</em>
            </p>
            <table>
                <tr>
                    <td><p>Date of Naturalization / </p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p>Month - Day - Year</p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;</td>
                    <td><p>Certificate No./Order of Approval</p></td>
                </tr>
                <tr>
                    <td><p>Reacquisition </p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p><strong><?php echo $row['natdate']; ?></strong></p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;</td>
                    <td><p><strong><?php echo $row['natno']; ?></strong></p></td>
                </tr>
            </table>

        </div>
    </div>
</div>
<!-- Period of Residence -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Period of Residence
        </div>
        <div class="panel-body">
            <table>
                <tr>
                    <td><p></p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p>No. of Years</p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p>No. of Months</p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;</td>
                    <td><p></p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p>No. of Years</p></td>
                </tr>
                <tr>
                    <td><p>In the City / Mun</p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p><strong><?php echo $row['cityresyears']; ?></strong></p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p><strong><?php echo $row['cityresmonths']; ?></strong></p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;&thinsp; &thinsp; &thinsp;</td>
                    <td><p>In the Philippines</p></td>
                    <td>&thinsp; &thinsp; &thinsp;</td>
                    <td><p><strong><?php echo $row['philresyears']; ?></strong></p></td>
                </tr>
            </table>                                    
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Profession / Occuoation
        </div>
        <div class="panel-body">
            <table>
                <tr>
                    <td><p>Profession / Occuoation</p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp;</td>
                    <td><p><strong><?php echo $row['occupation']; ?></strong></p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp;</td>
                    <td><p>TIN</p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp;</td>
                    <td><p><strong><?php echo $row['tinnum']; ?></strong></p></td>
                </tr>
            </table>                                    
        </div>
    </div>
</div>
<!-- Name of father and mother -->
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Name of father and mother
        </div>
        <div class="panel-body">
            <div class="col-lg-6">
                <div class="well">
                    <h5><b>Name of father</b></h5>
                    <table>
                        <tr>
                            <td><p>Last name : </p></td>
                            <td><p><strong><?php echo $row['fatherlname']; ?></strong></p></td>
                        </tr>
                        <tr>
                            <td><p>First name : </p></td>
                            <td><p><strong><?php echo $row['fathermname']; ?></strong></p></td>
                        </tr>
                        <tr>
                            <td><p>Last name : </p></td>
                            <td><p><strong><?php echo $row['fatherfname']; ?></strong></p></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="well">
                    <h5><b>Name of mother</b></h5>
                    <table>
                        <tr>
                            <td><p>Last name : </p></td>
                            <td><p><strong><?php echo $row['motherlname']; ?></strong></p></td>
                        </tr>
                        <tr>
                            <td><p>First name : </p></td>
                            <td><p><strong><?php echo $row['mothermname']; ?></strong></p></td>
                        </tr>
                        <tr>
                            <td><p>Last name : </p></td>
                            <td><p><strong><?php echo $row['motherfname']; ?></strong></p></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            Other Details
        </div>
        <div class="panel-body">
            <table>
                <tr>
                    <td><p>Phone Number :</p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp;</td>
                    <td><p><strong><?php echo $row['mobile']; ?></strong></p></td>
                </tr>
                <tr>
                    <td><p>E-mail Address :</p></td>
                    <td>&thinsp; &thinsp; &thinsp;&thinsp;</td>
                    <td><p><strong><?php echo $row['emailad']; ?></strong></p></td>
                </tr>
            </table>                                    
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