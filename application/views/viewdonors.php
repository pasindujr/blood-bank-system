<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/styles/table.css'); ?>">
    <title>Kegalle Blood Bank - View Donors</title>
</head>
<body style="margin-bottom: 50px">
<?php include_once 'navbars/navbar2.php' ?>

<?php
if (!($this->session->userdata('isStaffLoggedIn'))) {
    redirect('home/login');
}
?>


<div class="container">
    <hr>
    <h2 class="is-size-3 mb-3">View Donors 🔍</h2>
    <hr>
    <table id="donortable" class="table table-dark table-hover">
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
            <th scope="col">Edit</th>
            <th scope="col">Donate</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if ($donors->num_rows() > 0) {
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
                    <td>
                        <a href="<?php echo base_url('index.php/staff/editdonors/' . $row->DonorNIC) ?>"
                           class="btn btn-success btn-sm">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url('index.php/staff/donate/' . $row->DonorID) ?>"
                           class="btn btn-info btn-sm">Donate</a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>

<?php include_once 'footer/footer.php' ?>
</body>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>$(document).ready(function () {
        $('#donortable').DataTable();
    });
</script>

<?php if ($this->session->flashdata('donorupdated')) { ?>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?php echo $this->session->flashdata('donorupdated'); ?>")
    </script>

<?php } ?>

</html>