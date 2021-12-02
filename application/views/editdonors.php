<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <title>Kegalle Blood Bank - Edit Donors</title>
</head>
<body>

<?php include_once 'navbars/navbar2.php' ?>
<?php
if (!($this->session->userdata('isStaffLoggedIn'))) {
    redirect('home/login');
}
?>

<div class="container">
    <hr>
    <h2 class="is-size-3 mb-3">Edit Donor</h2>
    <hr>

    <?php
    if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php } ?>

    <?php echo form_open('staff/updatedonor/' . $donor->DonorNIC); ?>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Donor NIC</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - 965438764V"
               name="donornic" value="<?php echo $donor->DonorNIC ?>" readonly>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Donor Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - Pasindu Ruwandeniya"
               name="donorname" value="<?php echo $donor->DonorName ?>">
    </div>


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="donordob"
               value="<?php echo $donor->DonorDOB ?>">
    </div>


    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Weight</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="donorweight"
               placeholder="65KG" value="<?php echo $donor->DonorWeight ?>">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0712345678"
               name="donormobile" value="<?php echo $donor->DonorMobile ?>">
    </div>

    <div class="control ">
        <button type="submit" class="btn btn-primary"
        ">Update</button>
    </div>

    <?php echo form_close(); ?>


</body>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>