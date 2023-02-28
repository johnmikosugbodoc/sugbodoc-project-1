<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <!--BOOTSTRAP CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>

<!--BOOTSTRAP NAVBAR-->
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand text-success-emphasis" href="<?php echo base_url();?>home">SugboDoc</a>
    <button class="navbar-toggler text-bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo base_url();?>login_controller/register">Register</a>
        </li>
        <?php if($this -> session -> userdata('logged_in')):?>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>projects_controller">Projects</a>
        </li>
      </ul>
      <?php endif;?>
      <!--IF USER LOGGEDIN THEN SHOW LOGOUT BUTTON-->
      <?php if($this -> session -> userdata('logged_in')):?>
      <ul class="navbar-nav navbar-right">
        <li class="nav-item">
        <a class="nav-link text-danger" href="<?php echo base_url();?>login_controller/logout">Logout</a>
        </li>
      </ul>
      <?php endif;?>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-3">
    <?php  
        $this -> load -> view('users/signin_view');
    ?>
    </div>
    <div class="col-9">
    <?php  
        $this -> load -> view($main_view);
    ?>
    </div>
  </div>
</div>
</body>
</html>