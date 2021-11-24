<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Kegalle Blood Bank</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>
    
<div class="columns">
<div class="column"></div>


  <div class="column is-half">
  <h2 class="is-size-3">Admin Login</h2>

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

</html>