<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/table.css'); ?>">
    <title>Kegalle Blood Bank - Blood Types Insight</title>
</head>
<body style="margin-bottom: 50px">
<?php include_once 'navbars/navbar2.php' ?>

<?php
if (!($this->session->userdata('isStaffLoggedIn'))) {
    redirect('home/login');
}
?>

<div class="container col-md-10" >
    <div class="row" >
        <div class="col-md-12 text-center mt-5 mb-5">
            <h1>Insight</h1>
        </div>
        <div class="row text-center mb-4" >
            <div class="col-md-6" >
                <div class="card border-info mx-sm-1 p-3 shadow-lg cardBox">
                    <div class="card border-danger shadow text-danger p-3 cardBox"><span class="fa fa-heart"
                                                                                         aria-hidden="true"></span>
                    </div>
                    <div class="text-danger text-center mt-3"><h4>Total Donors</h4></div>
                    <div class="text-danger text-center mt-2"><h1><?php echo $donorcount; ?></h1></div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-success mx-sm-1 p-3 shadow-lg cardBox">
                    <div class="card border-success shadow text-success p-3 cardBox"><span class="fa fa-eye"
                                                                                           aria-hidden="true"></span>
                    </div>
                    <div class="text-success text-center mt-3"><h4>Total Available Packets</h4></div>
                    <div class="text-success text-center mt-2"><h1><?php echo $packetcount; ?></h1></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=" col-md-10 offset-md-1 mb-5 ">
    <div class="card border-info mx-sm-1 p-3 shadow-lg cardBox">

        <div class="text-danger text-center mt-3"><h4># of packets available</h4></div>
        <div class="text-danger text-center mt-2">
            <div class="chart-container container mb-4">
                <div class="bar-chart-container">
                    <canvas id="packet-count-chart" style="background: #ecf5ec"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>

<div class=" col-md-8 offset-md-2">
    <div class="card border-info mx-sm-1 p-3 shadow-lg cardBox">

        <div class="text-danger text-center mt-3"><h4># of donors</h4></div>
        <div class="text-danger text-center mt-2">
            <div class="chart-container container">
                <div class="doughnut-chart-container ">
                    <canvas id="gender-count-chart" style="background: #ecf5ec"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>


<?php include_once 'footer/footer.php' ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    const ctx1 = document.getElementById('packet-count-chart');
    const chart1 = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: <?php echo isset($genderChartData['genderLabel']) ? json_encode($packetChartData['packetLabel']) : '[]';?>,
            datasets: [{
                label: '# of packets available',
                data: <?php echo isset($genderChartData['genderLabel']) ? json_encode($packetChartData['packetData']) : '[]';?>,
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)',
                    'rgba(255, 206, 86)',
                    'rgba(75, 192, 192)',
                    'rgba(153, 102, 255)',
                    'rgba(255, 159, 64)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctx2 = document.getElementById('gender-count-chart');
    const chart2 = new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: <?php echo isset($genderChartData['genderLabel']) ? json_encode($genderChartData['genderLabel']) : '[]';?>,
            datasets: [{
                label: '# of donors',
                data: <?php echo isset($genderChartData['genderLabel']) ? json_encode($genderChartData['genderData']) : '[]'; ?>,
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(54, 162, 235)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</html>