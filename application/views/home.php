<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/styles.css'); ?>">
    <title>Kegalle Blood Bank</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>

<!--Banner section-->
<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-header">Central Blood Bank</p>
                <p>The blood you donate gives someone another chance of life.</p>
                <a href="#"><img src="<?php echo base_url('assests/img/play.png'); ?>" class="play-btn">Watch Video</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?php echo base_url('assests/img/banner.jpg'); ?>" class="img-fluid">
            </div>
        </div>
    </div>
    <img src="<?php echo base_url('assests/img/wave1.png'); ?>" class="bottom-img">
</section>

<?php include_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>

