<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <title>Kegalle Blood Bank - View Donors</title>
</head>
<body>
<?php include_once 'navbars/navbar2.php' ?>

<?php
if (!($this->session->userdata('isLoggedIn'))) {
    redirect('home/login');
}
?>


<div class="container">
    <hr>
    <h2 class="is-size-3 mb-3">View Donors 🔍</h2>
    <hr>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">DonorID</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Donor Gender</th>
            <th scope="col">Donor NIC</th>
            <th scope="col"> Donor DOB</th>
            <th scope="col">Donor Age</th>
            <th scope="col">Donor Weight</th>
            <th scope="col">Donor Mobile</th>
            <th scope="col">Donor Blood Type</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if( $donors->num_rows() > 0 ){
            foreach ($donors->result() as $row) {


        ?>
        <tr>

            <th scope="row"><?php echo $row->DonorID; ?></th>
            <td><?php echo $row->DonorName; ?></td>
            <td><?php echo $row->DonorGender; ?></td>
            <td><?php echo $row->DonorNIC; ?></td>
            <td><?php echo $row->DonorDOB; ?></td>
            <td><?php echo $row->DonorAge; ?></td>
            <td><?php echo $row->DonorWeight; ?></td>
            <td><?php echo $row->DonorMobile; ?></td>
            <td><?php echo $row->DonorBloodType; ?></td>
        </tr>
        <?php
            }}
        ?>
        </tbody>
    </table>
</div>

</body>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</html>