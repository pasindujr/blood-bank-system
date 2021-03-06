<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/form.css'); ?>">
    <title>Kegalle Blood Bank - Donations</title>
</head>
<body>

<?php include_once 'navbars/navbar2.php' ?>
<?php
if (!($this->session->userdata('isStaffLoggedIn'))) {
    redirect('home/login');
}
?>

<div class="container">

    <?php
    if (validation_errors()) { ?>
        <div class="alert alert-danger m-5" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <?php echo form_open('staff/savepacket/' . $donor->DonorID); ?>

    <div class="card m-5 shadow-lg">
        <h5 class="card-header">
            Register Donations
        </h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Donor Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                       name="donorname" value="<?php echo $donor->DonorName ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Donor NIC</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                       name="donornic" value="<?php echo $donor->DonorNIC ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Donor ID</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                       name="donorid" value="<?php echo $donor->DonorID ?>" readonly>
            </div>

            <!--    Hidden field to get the blood type-->
            <?php echo form_hidden('bloodtype', $donor->DonorBloodType); ?>
            <!--/-->

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Donated Date</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="packetdonateddate">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comments"></textarea>
            </div>

            <div class="control ">
                <button type="submit" class="btn btn-primary"
                ">Save</button>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>

    <?php include_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php if ($this->session->flashdata('packetsaved')) { ?>
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
            title: '<?php echo $this->session->flashdata('packetsaved'); ?>',
            icon: 'success'
        });
    </script>
    <?php unset($_SESSION['packetsaved']); ?>
<?php } ?>
</html>