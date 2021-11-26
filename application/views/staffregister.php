<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
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

<div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>
</div>

        <?php echo form_open('Validate_Staff/register'); ?>
        <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Staff Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - Pasindu Ruwandeniya" name="staffname">
      </div>

      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Staff Username</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - pasindur" name="staffusername">
      </div>

      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Staff Password</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="staffpassword" placeholder="Please enter a strong password">
      </div>

        
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Staff Designation</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="staffdesignation" placeholder="eg - Nurse">
      </div>

      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Staff NIC</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="eg - 945345432V" name="staffnic">
      </div>       

        <div class="control ">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
        <?php echo form_close(); ?>
        </div>  
    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<?php if ($this->session->flashdata('staffsuccess')) { ?>
  <script> 
  alertify.set('notifier','position', 'top-right');
  alertify.success("<?php echo $this->session->flashdata('staffsuccess'); ?>")
  </script>

<?php } ?>
</html>