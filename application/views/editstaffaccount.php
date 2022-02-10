<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/form.css'); ?>">
    <title>Kegalle Blood Bank - Edit Staff</title>
</head>
<body>

<?php include_once 'navbars/navbar2.php' ?>
<?php
if (!($this->session->userdata('isStaffLoggedIn'))) {
    redirect('home/login');
}
?>

<?php if ($_SESSION['staffUserName'] == $staff->StaffUserName) { ?>

    <div class="container">

        <?php
        if (validation_errors()) { ?>
            <div class="alert alert-danger m-5" role="alert">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>

        <?php echo form_open('staff/updateaccount/' . $staff->StaffUserName); ?>

        <div class="card m-5 shadow-lg">
            <h5 class="card-header">
                Edit Staff Details
            </h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Staff Username</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                           placeholder="eg - pasindur"
                           name="staffusername" value="<?php echo $staff->StaffUserName ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Staff Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                           placeholder="eg - Pasindu Ruwandeniya"
                           name="staffname" value="<?php echo $staff->StaffName ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Staff Designation</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="staffdesignation"
                           placeholder="eg - Nurse" value="<?php echo $staff->StaffDesignation ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Staff NIC</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                           placeholder="eg - 945345432V"
                           name="staffnic" value="<?php echo $staff->StaffNIC ?>">
                </div>

                <div class="control ">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>

        <?php echo form_close(); ?>
    </div>

<?php } else { ?>
    <div class="no-permission">
        <h3 style="color: wheat">You don't have permission to do that function so... </h3>

        <img src="<?php echo base_url('assests/img/gtfo.jpg'); ?>" height="300px" width="300px">
    </div>
<?php } ?>

<?php include_once 'footer/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php if ($this->session->flashdata('staffupdated')) { ?>
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
            title: '<?php echo $this->session->flashdata('staffupdated'); ?>',
            icon: 'success'
        });
    </script>
    <?php unset($_SESSION['staffupdated']); ?>
<?php } ?>

</html>
