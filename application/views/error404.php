<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/form.css'); ?>">
    <title>404 - Page not found</title>
</head>
<body>
<?php include_once 'navbars/navbar1.php' ?>

<div class="no-permission" style="display:flex; flex-direction: column; ">
    <div>
        <h3 style="color: wheat; float: left">Whoops, nothing to see here. </h3>
    </div>
    <div>
        <h5 style="color: wheat; float: left">go to <a href="<?php echo base_url('/'); ?>">home page</a>. </h5>
    </div>
    <br>
    <div>
        <img src="https://i.gifer.com/3YhK.gif" ">
    </div>

</div>

<?php include_once 'footer/footer.php' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</script>
</html>
