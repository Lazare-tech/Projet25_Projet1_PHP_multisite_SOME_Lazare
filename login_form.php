<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <link href="bootstrap/product.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">



  <title>Login</title>
</head>

<body>
<?php include("navbar.php");?>
  <!-- Section: Design Block -->
  <section class="container pt-5">

    <div class="card border-0 ">
      <div class="row justify-content-center">
        
        <div class="col-lg-5">
          <div class="card-body py-5 ">

            <form action="login.php" method="post">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="Adress" />
                <label class="form-label" for="form2Example1">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="Mot_de_passe" />
                <label class="form-label" for="form2Example2">Password</label>
              </div>

              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <!-- <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label> -->
                  </div>
                </div>

                <div class="col">
                  <!-- Simple link -->
                  <a href="#!">Forgot password?</a>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">LogIn</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  <?php include("footer.php");?>
</body>

</html>