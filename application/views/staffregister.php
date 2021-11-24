<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Kegalle Blood Bank - Login</title>
</head>
<body>
    
<?php include_once 'navbars/adminnavbar.php' ?>

<div class="columns">
<div class="column"></div>

  <div class="column is-half">

    
        <h2 class="is-size-3 mb-3">Register Staff</h2>
        <?php
    if($this->session->flashdata('msg')) {
        echo "<h3>".$this->session->flashdata('msg')."</h3>";
    } 
    
    ?>

        <?php echo validation_errors(); ?>
        <?php echo form_open('Validate_Donors/register'); ?>
        <div class="field">
        <label class="label">Staff Name</label>
        <div class="control">
        <input class="input" type="text" placeholder="e.g Pasindu Ruwandeniya" name="donorname">
        </div>
        </div>

        <div class="field">
        <label class="label">Staff User Name</label>
        <div class="control">
        <input class="input" type="text" placeholder="e.g pasindur" name="staffusername">
        </div>
        </div>

        <div class="field">
        <label class="label">Staff Password</label>
        <div class="control">
        <input class="input" type="text" placeholder="Please use a strong password" name="staffpassword">
        </div>
        </div>

        <div class="field">
        <label class="label">NIC</label>
        <div class="control">
        <input class="input" type="input" placeholder="e.g. 971654875V" name="donornic">
        </div>
        </div>


        <div class="field">
        <label class="label">Mobile Number</label>
        <div class="control">
        <input class="input" type="number" placeholder="0712345678" name="donormobile">
        </div>
        </div>

        <div class="control ">
        <button type="submit" class="button is-primary">Submit</button>
        </div>
        
        <?php echo form_close(); ?>
        </div>      
  
  <div class="column"></div>
</div>
    
    
    
</body>

</html>