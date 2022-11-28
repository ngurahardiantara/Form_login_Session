<!doctype html>
<html lang="en">
  <head>

  <link rel="stylesheet" href="style.css">

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     


    <title>Form Login</title>
  </head>
  <body>
  <div class="container">
        <div class="card login-form">             
            <div class="card-body">
              <h2 class="card-title text-center">Form Login</h2>
              <h6 class="card-subtitle text-muted mb-5 fw-bold text-center">Please login to use this site!</h6>

              <form action="act_login.php" method="POST">
                <?=$message?>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Username*</label>
                  <div class="input-group">
                    <div class="input-grup-text"><i class='bx bxs-user bx-md'></i></div>
                     <input name="username" type="username" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Your username...">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <div class="input-group">
                    <div class="input-grup-text"><i class='bx bxs-lock bx-md'></i></div>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Min 8 character">
                  </div>
                  
                </div>

                <div class="d-grid mt-5">
                    <button name="login" type="submit" class="btn btn-success btn-login btn-lg">Login</button>
                </div>
              </form>
            </div>
          </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>