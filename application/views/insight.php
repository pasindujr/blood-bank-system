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

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center mt-5">
            <h1>Insight</h1>
        </div>
        <div class="row text-center m-5">
            <div class="col-md-6">
                <div class="card border-info mx-sm-1 p-3 shadow-lg">
                    <div class="card border-danger shadow text-danger p-3 my-card"><span class="fa fa-heart"
                                                                                         aria-hidden="true"></span>
                    </div>
                    <div class="text-danger text-center mt-3"><h4>Total Donors</h4></div>
                    <div class="text-danger text-center mt-2"><h1><?php echo $donorcount; ?></h1></div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-success mx-sm-1 p-3 shadow-lg">
                    <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye"
                                                                                           aria-hidden="true"></span>
                    </div>
                    <div class="text-success text-center mt-3"><h4>Total Available Packets</h4></div>
                    <div class="text-success text-center mt-2"><h1><?php echo $packetcount; ?></h1></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer/footer.php' ?>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

</html>
