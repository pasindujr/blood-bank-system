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
<?php include_once 'navbars/navbar1.php' ?>
    

    <div class="container mt-3">

    <h2>Staff Login</h2>

    <hr>

    <?php
    if($this->session->flashdata('errorstaff')) {
        echo "<h4>".$this->session->flashdata('errorstaff')."</h4>";
    }   
    ?>

<hr>

<?php echo validation_errors(); ?>
<?php echo form_open('Login/staffLogin'); ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Staff Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="staffusername">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="staffpassword">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <?php echo form_close(); ?>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>