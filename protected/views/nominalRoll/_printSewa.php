<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Radha Soami Satsang Beas </title>
    <style>
        *{font-family:Arial, Helvetica, sans-serif; line-height:20px; margin:0 auto; font-size:13px; 	    }
        table td {border:1px solid #CCC; line-height:18px;  }
        th{border:1px solid #ccc; border-collapse:separate; padding:5px 6px; line-height:13px;   }
        .wraper{width:750px;}
        table #zonal
        {
            border:none;
            text-align:center;
            line-height:22px;
        }
    </style>
</head>
<body>
<div class="wraper">
<table cellspacing="0" cellpadding="0" width="682"  >
<tr>
    <th>RADHA SOAMI SATSANG BEAS</th>
</tr>
<tr>
    <th>
        <div style="float:left; margin:18px 0 0px 5px; text-align:left; line-height:20px;">
            SR.NO.: <?php echo $NominalRoll->serial_no; ?><br>DATED: <?php echo date('d/m/Y',strtotime($NominalRoll->dated)); ?>
        </div>

        <div style=" position:relative; display:block;  float:left; text-align:center; line-height:13px; left:128px; ">
            NOMINAL ROLL</u><br />CENTER : <?php echo $NominalRoll->centre_name; ?><br />AREA : <?php echo $NominalRoll->area_name; ?>, ZONE - <?php echo $NominalRoll->zone_name; ?> </div>

        <div style="float:right; margin:18px 5px 0px 0; text-align:right; line-height:20px; ">
            24X7 HELPLINE NO.<br><?php echo $NominalRoll->help_line_no; ?>
        </div> </th></tr>
<tr>
    <td valign="top">
        <div style="float:left; padding:0 10px; margin:0; ">Vehicle: <?php echo $NominalRoll->driver_vehicle_no; ?> <span style="margin:0; padding-left:50px;">Type : <?php echo $NominalRoll->driver_vehicle_type; ?></span><br>
            Period From : <?php echo date('d/m/Y', strtotime($NominalRoll->period_from)); ?> to <?php echo date('d/m/Y',strtotime($NominalRoll->period_to)); ?> </div>
        <div style="float:right; margin:0 10px 4px;">Driver : <?php echo $NominalRoll->drive_name; ?> (<?php echo $NominalRoll->drive_mobile_no; ?>) <br />
            Destination : <?php echo $NominalRoll->destination; ?>
        </div>
    </td></tr>
<tr><td>
<table cellspacing="0" cellpadding="0" id="zonal" width="100%">

<th align="center" >S. No.</th>
<th >Name of<br />
    Sewadar/Sewadarni</th>
<th>Father/Husband Name</th>
<th >Sex</th>
<th>Age</th>
<th>Center<br />
    Token No.</th>
<th >Address</th>
<th>Contact No.</th>

    <?php
    $counter = 1;
    foreach($NominalRollDetail as $list) {

        $data = Sewadars::model()->findByPk($list->sewadar_id);
        $datetime1 = new DateTime($data->date_of_birth);
        $datetime2 = new DateTime(date('Y-m-d'));
        $interval = $datetime1->diff($datetime2);
        $age =  $interval->format('%y');
        ?>
        <tr>
            <td align="center"><?php echo $counter; ?></td>
            <td><?php echo $data->sewadar_name; ?></td>
            <td><?php echo $data->father_dauther_son_wife_of; ?></td>
            <td align="center"><?php echo ($data->gender == 'MALE') ? 'M' : 'F'; ?></td>
            <td align="center"><?php echo $age; ?></td>
            <td></td>
            <td align="center"><?php echo $data->address1.' '.$data->address2.' '. $data->address3; ?></td>
            <td align="center"><?php echo $data->mobile_primary; ?></td>
        </tr>
        <?php $counter++;
    }
    ?>

</table></td>
</tr>
</table><br>
<table width="682" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <section style="float:left; padding:10px 0 5px 10px; ">
                Name of Incharge : <?php echo $NominalRoll->sewadar_id; ?><br>
                Badge No. : <?php echo $NominalRoll->incharge_badge_no; ?><br>
                Mobile No. : <?php echo $NominalRoll->incharge_mobile_no; ?><br>
                Signature:
            </section>
            <section style="float:right; padding:10px 10px 5px 0;">
                <p>For Radha Soami Satsang Beas <br>
                    Secretary Baltana Centre</p>
                <p><br>
                    Secretary/President<br>
                    Contact Nos. <?php echo $NominalRoll->secretary_president_mobile_no; ?>
                </p>
            </section></td></tr>
</table>

<p><br></p>
<table width="682" cellpadding="0" cellspacing="0">
    <tr><td>

            <u><strong><center>For Area/Zonal Office Use</center></strong></u>
            <section style="float:left; padding:15px 0px 5px 10px;" >
                Sr. No. : <?php echo $NominalRoll->serial_no; ?><br>
                DATED: <?php echo date('d/m/Y' , strtotime($NominalRoll->dated)); ?><br>
                No. Of Male Sewadars:<?php echo $NominalRoll->total_male; ?><br>
                No. Of Female Sewadars:<?php echo $NominalRoll->total_female; ?><br>
                Total Sewadars:<?php echo $NominalRoll->total_sewadar; ?>
            </section>
            <section style="float:right; padding:10px 10px 5px 0px;"  >
                Area Secretary Contact Nos. <?php echo $NominalRoll->total_sewadar; ?> <br>
                <?php echo $NominalRoll->centre_name; ?> Centre,  <?php echo $NominalRoll->area_name; ?> Area, Zone-  <?php echo $NominalRoll->zone_name; ?><br>
                Department Name : <?php echo $NominalRoll->department_name; ?><br>
                Period From: <?php echo date('d/m/Y', strtotime($NominalRoll->period_from)); ?> to <?php echo date('d/m/Y',strtotime($NominalRoll->period_to)); ?><br><br>
                Incharge Signature
            </section>

        </td>

    </tr>
</table>
<br>

</div>
</body>
</html>
