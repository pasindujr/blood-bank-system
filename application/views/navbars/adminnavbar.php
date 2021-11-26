<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('index.php') ?>">
            <img src="<?php echo base_url('assests/img/blood.png'); ?>" alt="" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page"
                       href="<?php echo base_url('index.php/admin/home') ?>">Register Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">View Staff</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page"
                       href="#">Welcome <?php echo $_SESSION['adminUserName'] ?></a>
                </li>

            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-success" href="<?php echo base_url('index.php/Admin/adminLogout'); ?>">
                    Log Out
                </a>
            </form>

        </div>
    </div>
</nav>