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
        padding: 5px 10px 5px 10px;
    }
</style>

<h1 style="color: #e33737">Report</h1>

<table style="width:60%; margin-bottom: 20px">
    <tr>
        <th>Total Donors</th>
        <th>Total Available Packets</th>

    </tr>
    <tr>
        <td><?php echo $donorcount; ?></td>
        <td><?php echo $packetcount; ?></td>

    </tr>
</table>


<table>
    <tr>
        <th>Blood Type</th>
        <th>Packet Count</th>
    </tr>
    <?php for ($i=0; $i<=count($packetChartData['packetData'])-1; $i++) { ?>
        <tr>
            <th><?php print_r($packetChartData['packetLabel'][$i]) ?></th>
            <th><?php print_r($packetChartData['packetData'][$i]) ?></th>
        </tr>
    <?php } ?>
</table>

<br>


<table>
    <tr>
        <th>Blood Type</th>
        <th>Packet Count</th>
    </tr>
    <?php for ($i=0; $i<=count($genderChartData['genderLabel'])-1; $i++) { ?>
        <tr>
            <th><?php print_r($genderChartData['genderLabel'][$i]) ?></th>
            <th><?php print_r($genderChartData['genderData'][$i]) ?></th>
        </tr>
    <?php } ?>
</table>

</body>
</html>
