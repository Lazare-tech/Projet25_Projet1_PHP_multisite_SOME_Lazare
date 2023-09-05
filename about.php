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
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href="bootstrap/product.css" rel="stylesheet">

    <title>Page d'acceuill</title>
</head>

<body>
    <?php 
  include("navbar.php"); ?>
    <div id="intro-about" class="p-5 text-center bg-image">
        <div class="mask">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white mt-5">
                    <h1 class="mb-5 coaching">COACHING</h1>
                    <h2 class="mb-4 card-title coach_quotidien">Des coachs à tes côtés au quotidien</h2>

                </div>
            </div>
        </div>
    </div>
    <section class="container pt-5">
        <div class="row">
            <h2 class="card-title">Le coaching chez lorem</h2>
            <div class="col-lg-12">
                <div class="card-text tex">
                    Aute mollit ex quis mollit duis velit ullamco ut veniam nulla. Culpa laborum pariatur consectetur in
                    fugiat Lorem excepteur et non cillum eu. Non consectetur amet enim esse est ad dolore nisi quis ex
                    Lorem id officia.

                    Sunt nisi aliqua sunt minim esse consectetur enim aute ad aute. Excepteur fugiat nostrud irure
                    deserunt in Lorem aliquip sint laborum id cupidatat voluptate eiusmod minim. Officia ipsum commodo
                    cillum ipsum qui ea culpa duis. Velit commodo pariatur mollit eu. Enim laboris culpa reprehenderit
                    ipsum irure ullamco dolor esse.

                </div>
            </div>
            <div class="col-lg-12">
                <h3 class="card-title" style="color:green">Nos coachs te guident pour tes premiers pas en salle</h3>
                <div class="card-text tex">
                    Tu n'as jamais mis les pieds dans une salle de sport ? Sois tranquille, nos coachs sont là pour toi.
                    En plus de leur accompagnement en club, tu peux les solliciter quand tu le souhaites pour qu'ils
                    élaborent ton programme sportif personnalisé. Notre équipe réalisera alors un premier bilan sur ta
                    forme physique. Tu recevras ensuite ton programme d'entraînement adapté et personnalisé en fonction
                    de ton défie ou de ton objectif. <br>

                    Que tu cherches à gagner du muscle, à améliorer ton cardio, ou simplement à reprendre le sport, nos
                    équipes ont plus d'un tour dans leurs sacs pour te faire transpirer et progresser !
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                <img src="images/coachS.jpg" alt="coach" class="coachS">
                </div>
            </div>
        </div>
    </section> -->
    <section class="container pt-5">
        <div class="row">
            <h3 class="card-title">Envie de casser la routine et te motiver ?</h3>
        </div>
        <div class="row pt-1">
            <div class="col-lg-5">
                <div class="card-text">
                    Cupidatat sit qui reprehenderit id duis veniam et eiusmod commodo deserunt ea aliquip ea in.
                    Sunt tempor aliqua nostrud m sint minim eu ut minim cillum aliquip enim proident cupidatat. Ex enim
                    non cupidatat duis est dolor. Proident ad cupidatat commodo tempor veniam dolor et nulla incididunt
                    do elit. Tempor sunt esse deserunt eu dolore sit Lorem laboris amet ullamco dolor veniam cillum. Eu
                    sint do nostrud laborum fugiat nisi enim ad laborum dolor ipsum aute aliqua labore.


                </div>

            </div>
            <div class="col-lg-6">
                <img src="images/gens-qui-cou125.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="container pt-5">
        <div class="row">
            <h3 class="card-title text-center">Si tu cherches des équipes coaching fun et motivantes, n'attends plus et teste nos salles de sport !</h3>
        </div>
    </section>
    <div id="intro-f" class="p-5 text-left bg-image">
        <div class="mask">
            <div class="d-flex  align-items-center h-100">
                <div class="text-white text-uppercase mt-5 bloc-text">
                    <h1 class="mb-4 card-title seance">
                    Ta première séance offerte !
                    </h1>

                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>
</body>

</html>