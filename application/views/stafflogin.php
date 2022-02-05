<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/login.css'); ?>">

    <title>Kegalle Blood Bank - Login</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>


<div class="container mt-3">

    <hr>
    <h2 class="is-size-3">Staff Login</h2>
    <hr>

    <?php
    if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <?php echo form_open('Login/staffLogin'); ?>

    <!--    ---------------------------------------------------------------------------->

    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="<?php echo base_url('assests/img/team.png'); ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h3 class="signin-text mb-3">Log In</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Staff Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           name="staffusername">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="staffpassword">
                </div>
                <button type="submit" class="btn btn-class">Login</button>
            </div>
        </div>
    </div>

    <!--    ---------------------------------------------------------------------------------->


    <?php echo form_close(); ?>

</div>

<?php include_once 'footer/footer.php' ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($this->session->flashdata('errorstaff')) { ?>
    <script>

        var toastMixin = Swal.mixin({
            toast: true,
            icon: 'success',
            title: 'General Title',
            animation: false,
            position: 'top-right',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        toastMixin.fire({
            title: '<?php echo $this->session->flashdata('errorstaff'); ?>',
            icon: 'warning'
        });
    </script>
    <?php unset($_SESSION['errorstaff']); ?>

<?php } ?>

</html>