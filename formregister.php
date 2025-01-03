<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register form</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .container-form {
     content: center;
     justify: center;
     margin-left: 360px;
     margin-top: 100px;
      background: transparent;
      backdrop-filter: blur(15px);
      border-radius: 20px;
      border: 2px solid rgba(255, 255, 255, .5);
      width : 400px;
      height : 400px;
    }
    body {
      overflow: hidden;
      padding-top: 50px; /* Adjust this value to move content up */
      background: linear-gradient(rgba(1,2,15,0.1),rgba(1,2,15,0.1)),url('image/2f4020ef-9b66-4ac7-9c16-5d91187b752e.webp');
      background-size: cover;
    }

    
    .acc{
        margin-left: 19px;
    }
    .btn-3d:active{
        margin-left: 2px;
        margin-right: 7px;
        transition : all 0.2s ease;
    }
 
  </style>
</head>
<body>
  <div class="container">
    
    
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
      <form class="form1login" action="prosesregister.php" method="POST">
        <div class="mysterylogin">
          <h5 style="font-family: times new roman; margin-left: 60px; margin-bottom: 20px; color: black; border: white; -webkit-text-stroke: 1.4px black">
          <br> <br> <img src="image/icons8-login-64.png" alt="kuncilogo" width="40px" style="margin-left: 40px"> Mystery Register
          </h5>
        </div>
        <div class="row mb-3" style="margin-left: 40px">
          <label for="username" class="col-sm-2 col-form-label" style="margin-left: 30px; color: black; -webkit-text-stroke: 0.8px black">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" style="margin-left: 20px; width: 250px" autofocus placeholder="Fill the username">
            
          </div>
        </div>
        <div class="row mb-3"  style="margin-left: 40px">
          <label for="password" class="col-sm-2 col-form-label" style="margin-left: 30px; color: black; -webkit-text-stroke: 0.8px black">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" style="margin-left: 23px; width: 250px" autofocus placeholder="Fill the password">
            <br>
          </div>
        </div>
        <button type="submit" class="btn btn-dark btn-3d" name="submit" style="margin-left: 140px; width: 130px; border-radius: 5px">Submit</button>
        <br> <br>
       
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
