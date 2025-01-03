<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Web</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .container-form {
      background: transparent;
      backdrop-filter: blur(15px);
      border-radius: 20px;
      border: 2px solid rgba(255, 255, 255, .5);
    }
    .navbar {
      -webkit-text-stroke: 2px dark;
         background: white;
    }
    .container-fluid{
        background: white;
    }
    
   
    .container {
      overflow: hidden;
      
    }
    body {
      overflow: hidden;
      padding-top: 50px; /* Adjust this value to move content up */
      background: url('../image/2f4020ef-9b66-4ac7-9c16-5d91187b752e.webp');
      background-size: cover;
    }
    .container-form {
      margin-top: 100px; /* Adjust this value if you need more space at the top */
    }
    .acc{
        margin-left: 19px;
    }
    .btn-3d:active{
        margin-left: 2px;
        margin-right: 7px;
        transition : all 0.2s ease;
    }
    .offcanvas{
        color : black;
        font-weight: bold;
        font-size: 18px;
        font-family : times new roman;

    }
    .offcanvas-header{
        background: white;
    }
  
    .offcanvas-header h5{
      
        -webkit-text-stroke: 2px dark;
      font-weight : bold;
      font-size : 15px;
    } 
    .offcanvas-body{
        background: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <nav class="navbar fixed-top">
      <div class="container-fluid" style="margin: 13px">
        <a class="navbar-brand" href="#" style="font-weight: bold; font-family: times new roman">
          <img src="../image/Utoronto_coa.svg.png" width="50px" alt="logo">UNIVERSITY OF TORONTO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" style="font-family: times new roman; font-size: 100%" id="offcanvasNavbarLabel">
              <img src="../image/Utoronto_coa.svg.png" width="90px" alt="logo" style="font-size: 15px">UNIVERSITY OF TORONTO
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../web.php">Homepage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../login.php">Mystery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login2.php">Mystery 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../research.php">Research</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../news.php">News</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Education
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Undergraduate</a></li>
                  <li><a class="dropdown-item" href="#">Master</a></li>
                  <li><a class="dropdown-item" href="#">Doctor</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Organization</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    
    <?php 
      if(isset($_GET['pesan'])) {
        if($_GET['pesan'] == "gagal") {
          echo "Login gagal! Email dan password salah!";
        } else if($_GET['pesan'] == "logout") {
          echo "Anda telah berhasil logout";
        } else if($_GET['pesan'] == "belum_login") {
          echo "Anda harus login untuk mengakses halaman";
        }
      }
    ?>
    
    <div class="container-form">
      <form class="form1login" action="proseslogin2.php" method="POST">
        <div class="mysterylogin">
          <h5 style="font-family: times new roman; margin-left: 60px; margin-bottom: 20px; color: black; border: white; -webkit-text-stroke: 1.4px black">
            <img src="../image/icons8-login-64.png" alt="kuncilogo" width="40px"> Mystery 2 Login
          </h5>
        </div>
        <div class="row mb-3">
          <label for="username" class="col-sm-2 col-form-label" style="margin-left: 30px; color: black; -webkit-text-stroke: 0.8px black">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" style="margin-left: 20px; width: 250px" autofocus placeholder="Fill the username">
            
          </div>
        </div>
        <div class="row mb-3">
          <label for="password" class="col-sm-2 col-form-label" style="margin-left: 30px; color: black; -webkit-text-stroke: 0.8px black">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" style="margin-left: 23px; width: 250px" autofocus placeholder="Fill the password">
            <br>
          </div>
        </div>
        <button type="submit" class="btn btn-dark btn-3d" name="submit" style="margin-left: 80px; width: 120px; border-radius: 5px">Log in</button>
        <br> <br>
       
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
