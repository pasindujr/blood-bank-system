<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/login.css'); ?>">
    <title>Kegalle Blood Bank</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>


<div class="container">
    <hr>
    <h2>Admin Login</h2>

    <hr>

    <?php
    if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <?php echo form_open('Login/adminLogin'); ?>

    <!--    ------------------------------------------------------------------->
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="<?php echo base_url('assests/img/admin.png'); ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Log In</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Admin Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="eg - pasindur" name="adminusername">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="adminpassword">
                </div>
                <button type="submit" class="btn btn-class">Login</button>
            </div>
        </div>
    </div>

    <!--    ------------------------------------------------------------------->

    <?php echo form_close(); ?>
</div>
</div>

<?php include_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<?php if ($this->session->flashdata('erroradmin')) { ?>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.warning("<?php echo $this->session->flashdata('erroradmin'); ?>")
    </script>
<?php } ?>


</script>
</html>