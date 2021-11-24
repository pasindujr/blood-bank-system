<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?php echo base_url('index.php') ?>">
    <img src="<?php echo base_url('assests/img/blood.png'); ?>" width="40" height="20" alt=""/>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="<?php echo base_url('index.php/staff/registerdonor') ?>">
        Register Donors
      </a>

      <a class="navbar-item">
        Edit Donors
      </a>

      <a class="navbar-item">
        View Donors
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Hello Pasindu
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            Account
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Log Out</strong>
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>