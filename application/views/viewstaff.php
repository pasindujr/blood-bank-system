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
<?php include_once 'navbars/adminnavbar.php' ?>

<?php
if (!($this->session->userdata('isLoggedIn'))) {
    redirect('admin/index');
}
?>


<div class="container">
    <hr>
    <h2 class="is-size-3 mb-3">View Staff 🔍</h2>
    <hr>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Staff Name</th>
            <th scope="col">Staff User Name</th>
            <th scope="col">Staff Designation</th>
            <th scope="col">Staff NIC</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if ($staff->num_rows() > 0) {
            foreach ($staff->result() as $row) {


                ?>
                <tr>

                    <th scope="row"><?php echo $row->StaffName; ?></th>
                    <td><?php echo $row->StaffUserName; ?></td>
                    <td><?php echo $row->StaffDesignation; ?></td>
                    <td><?php echo $row->StaffNIC; ?></td>
                    <td><a href="<?php echo base_url('index.php/admin/editstaff/' . $row->StaffUserName) ?>"
                           class="btn btn-success btn-sm">Edit</a></td>
                    <td><a href="<?php echo base_url('index.php/admin/deletestaff/' . $row->StaffUserName) ?>"
                           class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>

</body>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<?php if ($this->session->flashdata('staffupdated')) { ?>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?php echo $this->session->flashdata('staffupdated'); ?>")
    </script>

<?php } ?>
</html>
