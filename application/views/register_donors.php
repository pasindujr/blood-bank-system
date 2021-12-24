<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/form.css'); ?>">
    <title>Kegalle Blood Bank - Login</title>
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

    <?php echo form_open('Validate_Donors/register'); ?>

<!--    ------------------------->

    <div class="card m-5 shadow-lg">
        <h5 class="card-header">Register Donors</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Donor Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - Pasindu Ruwandeniya"
                       name="donorname">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>

                <?php $donorgender = array(
                    '' => 'Select',
                    'Male' => 'Male',
                    'Female' => 'Female',
                );
                echo form_dropdown('donorgender', $donorgender, '', 'required="required"');
                ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Donor NIC</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - 965438764V"
                           name="donornic">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="donordob">
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Weight</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="donorweight"
                           placeholder="65KG">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1"
                           placeholder="712345678 | Please don't use 0 at the beginning"
                           name="donormobile">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Blood Type</label>

                    <?php $bloodtypes = array(
                        '' => 'Select',
                        'O-' => 'O-',
                        'O+' => 'O+',
                        'A-' => 'A-',
                        'A+' => 'A+',
                        'B-' => 'B-',
                        'B+' => 'B+',
                        'AB-' => 'AB-',
                        'AB+' => 'AB+',
                    );
                    echo form_dropdown('bloodtypes', $bloodtypes, '', 'required="required"');
                    ?>


                    <div class="control ">
                        <button type="submit" class="btn btn-primary"
                        ">Submit</button>
                    </div>
        </div>
    </div>

<!--    ------------------------->



            <?php echo form_close(); ?>

            <?php include_once 'footer/footer.php' ?>
</body>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php if ($this->session->flashdata('msg')) { ?>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?php echo $this->session->flashdata('msg'); ?>")
    </script>
    <?php unset($_SESSION['msg']); ?>

<?php } ?>
</html>