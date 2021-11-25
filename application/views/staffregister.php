<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kegalle Blood Bank - Login</title>
</head>
<body>
    
<?php include_once 'navbars/adminnavbar.php' ?>
<?php
    if(!($this->session->userdata('isLoggedIn'))) {
        redirect('admin/index');
    }
?>

<div class="container">
<hr>
<h2 class="is-size-3 mb-3">Register Staff</h2>
<hr>
<?php echo validation_errors(); ?>
        <?php echo form_open('Validate_Donors/register'); ?>
        <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Staff Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - Pasindu Ruwandeniya" name="donorname">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gender</label>

        <?php  $donorgender = array(
                  ''  => 'Select',
                  'Male'  => 'Male',
                  'Female'    => 'Female',
                );
    echo form_dropdown('donorgender', $donorgender, '', 'required="required"');
     ?>

      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Donor NIC</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - 965438764V" name="donornic">
      </div>

      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="donordob">
      </div>

        
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Weight</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="donorweight" placeholder="65KG">
      </div>

      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Mobile Number</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="0712345678" name="donormobile">
      </div>

        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Blood Type</label>

        <?php  $bloodtypes = array(
                  ''  => 'Select',
                  'O-'  => 'O-',
                  'O+'    => 'O+',
                  'A-'   => 'A-',
                  'A+' => 'A+',
                  'B-' => 'B-',
                  'B+' => 'B+',
                  'AB-' => 'AB-',
                  'AB+' => 'AB+',
                );
    echo form_dropdown('bloodtypes', $bloodtypes, '', 'required="required"');
     ?>

       

        <div class="control ">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
        <?php echo form_close(); ?>
        </div>  
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>