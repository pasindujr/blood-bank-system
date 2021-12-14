<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Kegalle Blood Bank - View Packets</title>
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
    <h2 class="is-size-3 mb-3">View Blood Packets 🔍</h2>
    <hr>
    <table id="packettable" class="table table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Packet ID</th>
            <th scope="col">Donor ID</th>
            <th scope="col">Donated Date</th>
            <th scope="col">Expiring Date</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Availability</th>
            <th scope="col">Comments</th>
            <th scope="col">Mark as Used</th>
        </tr>
        </thead>
        <tbody>

        <?php
        if ($packets->num_rows() > 0) {
            foreach ($packets->result() as $row) {

                ?>
                <tr>

                    <th scope="row"><?php echo $row->PacketID; ?></th>
                    <td><?php echo $row->DonorID; ?></td>
                    <td><?php echo $row->DonatedDate; ?></td>
                    <td><?php echo $row->ExpiringDate; ?></td>
                    <td><?php echo $row->BloodType; ?></td>
                    <td><?php if ($row->isAvailable) {
                            echo '<span class="badge bg-success">Available</span>';
                        } else {
                            echo '<span class="badge bg-danger">Used</span>';
                        } ?></td>
                    <td><?php echo $row->comments; ?></td>
                    <td>
                        <?php if ($row->isAvailable) { ?>
                            <a id="mylink" href="javascript:;" class="btn btn-danger btn-sm"
                               onclick="return confirm('<?php echo $row->PacketID; ?>');">Mark</a>
                        <?php } ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>$(document).ready(function () {
        $('#packettable').DataTable();
    });
</script>

<script>
    function confirm(packetID) {
        Swal.fire({
            title: 'Do you want to mark this donation as used?',
            showDenyButton: true,
            confirmButtonText: 'Yes, I do',
            denyButtonText: `No, I don't`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = "<?php echo base_url('index.php/staff/markasused/')?>" + packetID;
                Swal.fire('Marked as used!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Denied', '', 'info')
            }
        });
    }
</script>

<?php if ($this->session->flashdata('donationerror')) { ?>
    <script>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success("<?php echo $this->session->flashdata('donationerror'); ?>")
    </script>

<?php } ?>

</html>