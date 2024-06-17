<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <style>
    .dropdown:hover .dropdown-menu {
      display: block;
    }
    .icon-large {
      font-size: 1.4rem;
    }

    .nav-span{
        font-size: 1.2rem;
        font-family: verdana;
        opacity: 0.8;
        color: white;
    }
    
    .icon-news{
      font-size: 1.4rem;
      color: white;
      opacity: 0.6;
    }
    a{
    font-size: 1.3rem;
    text-decoration: none;
    font-family: verdana;
    opacity: 0.6;
    color: white;
  }

    .cr-news:hover{
      a{
        opacity: 1;
      }
      .icon-news{
        opacity: 1;
      }
    }
  </style>
</head>
<body>
    <?php
    session_start();
    $user = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;
    ?>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow" style="background-color: cornflowerblue;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <span class="nav-span ms-5">
        <?php
          $currentFile = basename($_SERVER['PHP_SELF']);
          if ($currentFile === 'index.php') {
            echo '<i class="bi bi-globe"></i> HOME';
          } elseif ($currentFile === 'dashboard.php'){
            echo '<i class="bi bi-globe"></i> DASHBOARD';
          } elseif ($currentFile === 'create.php'){
            echo '<i class="bi bi-globe"></i> CREATE NEWS';
          } elseif ($currentFile === 'edit.php'){
            echo '<i class="bi bi-globe"></i> EDIT NEWS';
          }
          ?>
        </span>
        <ul class="navbar-nav ms-auto me-5">
          <?php if (!$user): ?>
            <li class="nav-item">
            <a class="nav-link" href="Login/login.php" style="font-size: 1.3rem;"><i class="bi bi-door-open me-2 "></i>Register</a> 
            </li>
          <?php elseif ($currentFile === 'create.php'): ?>
           <!-- search start -->
<div class="container-fluid">
    <form class="d-flex mt-2 me-2" role="search" action="index.php" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Cari berita..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
</div>
<!-- search end -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person icon-large"></i><span class="span-user ms-1 fw-normal" style="font-size: 1.3rem; text-transform: capitalize;"><?php echo $user['username']; ?></span>
              </a>
              <ul class="dropdown-menu mt-2" style="background-color: rgba(100, 148, 237, 0.5);">
                <li><a class="dropdown-item" href="../index.php"><i class="bi bi-house me-1"></i>Home</a></li>
                <li><a class="dropdown-item" href="Dashboard/dashboard.php"><i class="bi bi-person me-1"></i>Profile</a></li>
                <hr>
                <li><a class="dropdown-item" href="../Login/logout.php"><i class="bi bi-box-arrow-right me-1"></i>Logout</a></li>
              </ul>
          </li>
          <?php elseif ($currentFile === 'dashboard.php'): ?>
           <!-- search start -->
<div class="container-fluid">
    <form class="d-flex mt-2 me-2" role="search" action="index.php" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Cari berita..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
</div>
<!-- search end -->

            <li class="nav-item mt-2 me-3 cr-news"><i class="bi bi-newspaper me-2 icon-news"></i><a href="create.php">Create</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person icon-large"></i><span class="span-user ms-1 fw-normal" style="font-size: 1.3rem; text-transform: capitalize;"><?php echo $user['username']; ?></span>
              </a>
              <ul class="dropdown-menu mt-2" style="background-color: rgba(100, 148, 237, 0.5);">
                <li><a class="dropdown-item" href="../index.php"><i class="bi bi-house me-1"></i>Home</a></li>
                <li><a class="dropdown-item" href="Dashboard/dashboard.php"><i class="bi bi-person me-1"></i>Profile</a></li>
                <hr>
                <li><a class="dropdown-item" href="../Login/logout.php"><i class="bi bi-box-arrow-right me-1"></i>Logout</a></li>
              </ul>
            </li>
          <?php else: ?>
          <!-- search start -->
<div class="container-fluid">
    <form class="d-flex mt-2 me-2" role="search" action="index.php" method="GET">
        <input class="form-control me-2" type="search" name="search" placeholder="Cari berita..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
</div>
<!-- search end -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person icon-large"></i><span class="span-user ms-1 fw-normal" style="font-size: 1.3rem; text-transform: capitalize;"><?php echo $user['username']; ?></span>
              </a>
              <ul class="dropdown-menu mt-2" style="background-color: rgba(100, 148, 237, 0.5);">
                <li><a class="dropdown-item" href="../index.php"><i class="bi bi-house me-1"></i>Home</a></li>
                <li><a class="dropdown-item" href="Dashboard/dashboard.php"><i class="bi bi-person me-1"></i>Profile</a></li>
                <hr>
                <li><a class="dropdown-item" href="Login/logout.php"><i class="bi bi-box-arrow-right me-1"></i>Logout</a></li>
              </ul>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
