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
                       href="<?php echo base_url('index.php/staff/registerdonor') ?>">Register Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Edit Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">View Donors</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Hello <?php echo $_SESSION['staffUserName'] ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('index.php/staff/stafflogout'); ?>">Log
                                Out</a></li>
                    </ul>
                    </li>
        </div>
    </div>
</nav>