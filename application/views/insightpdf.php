<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insight PDF</title>
</head>
<body>

<style>
    table, th, td {
        border: 1px solid;
        padding: 20px;
    }
</style>

<table style="width:60%;">
    <tr>
        <th>Total Donors</th>
        <th>Total Available Packets</th>

    </tr>
    <tr>
        <td><?php echo $donorcount; ?></td>
        <td><?php echo $packetcount; ?></td>

    </tr>
</table>


<?php echo isset($genderChartData['genderLabel']) ? json_encode($packetChartData['packetLabel']) : '[]'; ?>
<!--output = ["A+","AB+","AB-","B+","B-","O+","O-"]-->
<br>

<?php echo isset($genderChartData['genderLabel']) ? json_encode($packetChartData['packetData']) : '[]'; ?>
<!--output = ["5","2","2","2","6","1","2"]-->
<br>

<?php  echo json_encode($packetChartData['packetLabel'][1]); ?>
<!--output = "AB+"-->

<br>

<?php echo json_encode($packetChartData['packetData'][1]); ?>
<!--output = "2"-->


<br>

<br>

<?php echo isset($genderChartData['genderLabel']) ? json_encode($genderChartData['genderLabel']) : '[]'; ?>

<br>

<?php echo isset($genderChartData['genderLabel']) ? json_encode($genderChartData['genderData']) : '[]'; ?>


</body>
</html>
