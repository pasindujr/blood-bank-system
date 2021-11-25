<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kegalle Blood Bank</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>
    
<div class="columns">
<div class="column"></div>


  <div class="column is-half">
  <h2 class="is-size-3">Admin Login</h2>


 <?php
    if($this->session->flashdata('erroradmin')) {
        echo "<h3>".$this->session->flashdata('erroradmin')."</h3>";
    }   
    ?>
 

<hr>

<?php echo validation_errors(); ?>
<?php echo form_open('Login/adminLogin'); ?>

<div class="field">
<p class="control has-icons-left has-icons-right">
<input class="input" type="text" placeholder="Username" name="adminusername">
<span class="icon is-small is-left">
  <i class="fas fa-user"></i>
</span>
</p>
</div>
<div class="field">
<p class="control has-icons-left">
<input class="input" type="password" placeholder="Password" name="adminpassword">
<span class="icon is-small is-left">
  <i class="fas fa-lock"></i>
</span>
</p>
</div>
<div class="field">
<p class="control">
<button class="button is-success" type="submit">
  Login
</button>
</p>
</div>
<?php echo form_close(); ?>
  </div>

  

  <div class="column"></div>



    


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>