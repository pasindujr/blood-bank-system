<nav id="nav-bar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('index.php') ?>">
            <img src="<?php echo base_url('assests/img/blood.png'); ?>" alt="" width="80" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php#facts') ?>"">Why give blood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php#who-can-give-blood') ?>">Who can give blood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('index.php#donation-process') ?>">The donation process</a>
                </li>

            </ul>
            <form class="d-flex">
                <a class="btn btn-outline-success" href="<?php echo base_url('index.php/home/login') ?>">
                    Log in
                </a>
            </form>

        </div>
    </div>
</nav>