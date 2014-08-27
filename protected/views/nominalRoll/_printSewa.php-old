<table border="1" width="100%">
    <tr>
        <td colspan="8">
            <table width="100%" border="1">
                <tr>
                    <td align="center" colspan="8">RADHA SOAMI SATSANG BEAS</td>
                </tr>
                <tr>
                    <td align="center" colspan="8">NOMINAL ROLL</td>
                </tr>
                <tr>
                    <td align="left" colspan="2">SR. No.:<?php echo $NominalRoll->serial_no; ?></td>
                    <td align="center" colspan="4">CENTRE:<?php echo $NominalRoll->centre_name; ?></td>
                    <td align="right" colspan="2">24x7 HELPLINE NO.</td>
                </tr>
                <tr>
                    <td align="left" colspan="2">DATED:<?php echo $NominalRoll->dated; ?></td>
                    <td align="center" colspan="4">AREA:<?php echo $NominalRoll->area_name; ?>, ZONE-<?php echo $NominalRoll->zone_name; ?></td>
                    <td align="right" colspan="2"><?php echo $NominalRoll->help_line_no; ?></td>
                </tr>

                <tr>
                    <td>Vehicle No.:<?php //echo $NominalRoll->?></td>
                    <td>Vehicle No.:  PB 65V3645            Type:   Bus               Driver: Balwinder Singh(9914879286)</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <th>Serial No</th>
        <th>Name of <br/>Sewadar/<br/>Sewadarni</th>
        <th>Father/ <br/>Husband Name</th>
        <th>Sex</th>
        <th>Age</th>
        <th>Centre <br/>Token No.</th>
        <th>address</th>
        <th>Contact No.</th>
    </tr>
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
</table>
