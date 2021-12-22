<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/form.css'); ?>">
    <title>Kegalle Blood Bank - Register Staff</title>
</head>
<body>

<?php
if (!($this->session->userdata('isAdminLoggedIn'))) {
    redirect('admin/index');
}
?>

<?php include_once 'navbars/adminnavbar.php' ?>

<div class="container">

    <?php
    if (validation_errors()) { ?>
        <div class="alert alert-danger m-5" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <?php echo form_open('Validate_Staff/register'); ?>

    <div class="card m-5 shadow-lg">
        <h5 class="card-header">Register Staff</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Staff Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                       placeholder="eg - Pasindu Ruwandeniya"
                       name="staffname">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Staff Username</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - pasindur"
                       name="staffusername">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Staff Password</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="staffpassword"
                       placeholder="Please enter a strong password">
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Staff Designation</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="staffdesignation"
                       placeholder="eg - Nurse">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Staff NIC</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - 945345432V"
                       name="staffnic">
            </div>

            <div class="control ">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>
</div>

<?php include_once 'footer/footer.php' ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<?php if ($this->session->flashdata('staffsuccess')) { ?>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?php echo $this->session->flashdata('staffsuccess'); ?>")
    </script>

<?php } ?>
</html>