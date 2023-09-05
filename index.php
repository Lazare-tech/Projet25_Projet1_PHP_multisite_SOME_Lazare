<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <link href="bootstrap/product.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <title>Page d'acceuill</title>
</head>

<body>
  <?php 
  include("navbar.php"); ?>
    <!-- <div class="container-fluid"> -->
    <div id="intro-example" class="p-5 text-center bg-image" >
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white mt-5">
                    <h1 class="mb-5 coaching">COACHING</h1>
                    <h2 class="mb-4 card-title coach_quotidien">Des coachs à tes côtés au quotidien</h2>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h3 class="display-4 font-weight-normal">SOCIAL SPORT</h3>
            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts
                with this example based on Apple's marketing pages.</p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <h2 class="text-center">Pour etre en forme,nous avons ce quil faut</h2>
        </div>
    </div>
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="">
                <h2 class="display-5">Cyclisme en salle</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="row">
                <div class="card">
                    <img src="images/m1.jpg" class="card-img-top" alt="...">

                </div>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="">
                <h2 class="display-">Salle de sport revolutionnaire</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            <div class="row pt-2">
                <div class="card">
                    <img src="images/m3.jpg" class="card-img-top salle_sport_revolutionnaire" alt="salle de sport revolutionnaire" >

                </div>
            </div>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="">
                <h2 class="display-5">Salle de yoga</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>

            <div class="row">
                <div class="card">
                    <img src="images/une-belle-salle-d-activites_1656599545.jpg" class="card-img-top salle_sport_yoga" alt="salle de sport yoga">

                </div>
            </div>
        </div>
        <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="">
                <h2 class="display-5">Espace aquatique</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>

            <div class="row">
                <div class="card">
                    <img src="images/espaceAquatique.webp" class="card-img-top  salle_sport_aquatique" alt="salle de sport aquatique">

                </div>
            </div>
        </div>
    </div>
    <section class="container p-5 pri">
        <div class="row">
            <h5 class="pricing text-center">FORMULES</h5>
            <h1 class=" text-center formule_choice card-title"> Choisissez votre formule!!!! </h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card premium " style="height: 30rem;">
                    <!-- <img src="images/meal-1.jpg" alt="une image ici"> -->
                    <div class="card-body" style="height: 30rem;">
                        <h5 class="card-title text-center starter">PREMIUM</h5>
                        <h1 class="prix text-center"><span class="dolar">$</span>399</h1>
                        <h6 class="text-center text-muted">par mois avec reduction au premier mois</h6>
                        <br><br>
                        <p>
                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                            <span class="ii">Salle de sport principal</span><br>
                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                            <span class="ii">Coaching individuel</span> <br>
                            <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                        </p>
                        <div class="">
                            <button class="btn btn-dark">Je m'abonne</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pt-2">
                <div class="card  complete" style="height: 30rem;">
                    <!-- <img src="images/meal-1.jpg" alt="une image ici"> -->
                    <div class="card-body">

                        <h5 class="card-title text-center ">COMPLETE</h5>
                        <h1 class="prix text-center pt-2"><span class="dolar">$</span>649</h1>
                        <h6 class="text-center text-muted">per month. That's just $13 per meal!</h6>
                        <br><br>
                        <p>

                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                            <span class="ii">Salle de sport principal</span><br>
                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                            <span class="ii">Coaching individuel</span> <br>
                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                            <span class="ii">Acces salle de yoga</span> <br>
                            <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                            <span class="ii iii">Acces a la piscine</span> <br>
                        </p>
                        
                        <div class="">
                            <button class="btn btn-dark">Je m'abonne</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
    <div class="row">
        <h3 class="card-title text-center">Nos avantages PRIME</h3>
    </div>
        <div class="row p-4">
            <div class="col-lg-3 text-center">
                <i class="fas fa-umbrella-beach fa-3x"></i>
                <div class="card-body">
                    <h3 class="card-title">Pause vacances</h3>
                    <p class="card-text">
                        30 jours de suspension/an
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <i class="fas fa-user-friends fa-3x"></i>

                <div class="card-body">
                    <h3 class="card-title">Parrainage</h3>
                    <p class="card-text">
                        1 mois offert / parrainage
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <i class="fas fa-users fa-3x"></i>

                <div class="card-body">
                    <h4 class="card-title">Sport de groupe</h4>
                    <p class="card-text">
                        en illimité
                        
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <i class="fas fa-running fa-4x "></i>

                <div class="card-body">
                    <h4 class="card-title">Expertise en solo</h4>
                    <p class="card-text">
                        1 session en one-to-one

                        avec le coach de ton choix
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <h1 class="card-title text-center">Notre equipe</h1>
        </div>
    </section>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
            
            <div class="row">
                <div class="card coach"  style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img src="images/t1.jpg" class="card-img-top equipe" alt="coach body builder">

                </div>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
           
            <div class="row">
                <div class="card coach"  style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img src="images/t4.jpg" class="card-img-top equipe" alt="coach natation">

                </div>
            </div>
        </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
          
            <div class="row">
                <div class="card coach"  style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img src="images/t3.jpg" class="card-img-top equipe" alt="coach body builder">

                </div>
            </div>
        </div>
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 py-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
            </div>
           
            <div class="row">
                <div class="card coach"  style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <img src="images/t5.jpg" class="card-img-top equipe" alt="coach de yoga">

                </div>
            </div>
        </div>
    </div>

   <?php include("footer.php")?>


    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/holder.min.js"></script>
    <script src="javascriptindex.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>