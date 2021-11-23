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
<?php include_once 'navbars/navbar2.php' ?>

<div class="columns">
<div class="column"></div>


  <div class="column is-half">

    
        <h2 class="is-size-3 mb-3">Register Donor</h2>

        <?php echo validation_errors(); ?>
        <?php echo form_open('Donors/register'); ?>
        <div class="field">
        <label class="label">Donor Name</label>
        <div class="control">
        <input class="input" type="text" placeholder="e.g Pasindu Ruwandeniya" name="donorname">
        </div>
        </div>

        <div class="field">
        <label class="label">NIC</label>
        <div class="control">
        <input class="input" type="input" placeholder="e.g. pasindu@gmail.com" name="donornic">
        </div>
        </div>

        <div class="field">
        <label class="label">Date of birth</label>
        <div class="control">
        <input class="input" type="date" placeholder="e.g. pasindu@gmail.com" name="donordob">
        </div>
        </div>

        <div class="field">
        <label class="label">Weight</label>
        <div class="field has-addons ">
        <p class="control">
        <input class="input" type="number" name="donorweight">
        </p>
        <p class="control">
        <a class="button is-static">
        KG
        </a>
        </p>
        </div>


        <div class="field">
        <label class="label">Mobile Number</label>
        <div class="control">
        <input class="input" type="input" placeholder="0712345678" name="donormobile">
        </div>
        </div>

        <div class="field">
        <label class="label">Blood Type</label>
        <div class="field has-addons is-grouped">
        <div class="control is-expanded">
        <div class="select is-fullwidth">
        <select name="country" name="bloodtype">
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
        </select>
        </div>
        </div>
        </div>


        </div>

        <div class="control">
        <button type="submit" class="button is-primary">Submit</button>
        </div>
        
        <?php echo form_close(); ?>
        </div>
        
</div>
  
  <div class="column"></div>
</div>
    
    
    
</body>

</html>