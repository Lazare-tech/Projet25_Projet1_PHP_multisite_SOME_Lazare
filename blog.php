<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href="bootstrap/product.css" rel="stylesheet">

    <title>Blog </title>
</head>

<body>
    <?php 
  include("navbar.php"); ?>
    <section class="container-fluid bg-secondary">
        <div class="row">
        <div class="col-lg-5 ">
            </div>
        </div>

        <div class="row justify-content-sm-center">
            <!-- <div class="BLOG">
                <div class="card-text ">
                    <h3 class="text-white card-title">Blog</h3>
                    <span class="text-white card-tile">
                        Nos actus,conseils,astuces & Interviews
                    </span>
                </div>
            </div> -->
            <div class="flex-container">
                <div class="flex-item-left text-white bl">Blog</div>
                <div class="flex-item-right text-white actus"> Nos actus,conseils,astuces & Interviews
                </div>
              </div>
            <div class="col-md-4 col-xs-12 blog-btn">
                <h5 class="sujet">Choisis le sujet qui te passionne!!!</h5>
                <button type="button" class="btn actu mb-2 ">Actu</button>
                <button type="button" class="btn conseils_nutrition">conseils de nutririon</button>
                <button type="button" class="btn bien-etre">Bien etre</button>
                <button type="button" class="btn conseils_fitness">conseils de fitness</button>
                <button type="button" class="btn interview">Interviews</button>
                <button type="button" class="btn motivation">Motivation</button>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12 blog-img">
                <div class="card border-0">
                    <img src="images/femme-smartphone.avif" alt="">
                    <div class="card-text">
                        lEnim anim laboris id amet duis nisi deserunt aliquip aliquip nulla et fugiat. Est sint ea reprehenderit sint anim commodo ad deserunt. Ipsum nostrud veniam ipsum id proident elit cupidatat veniam qui.

Ut duis tempor consectetur velit cupidatat nisi nostrud qui voluptate aliqua in velit cupidatat voluptate. Nisi aliqua eiusmod consequat id quis. Ex tempor ullamco fugiat elit ea excepteur. Mollit do proident mollit eu incididunt sit deserunt proident elit ex duis eiusmod ipsum. Veniam est ea do aliqua elit tempor eu eu irure mollit aliqua. Irure ad id velit eu qui laboris ea tempor irure deserunt fugiat.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container card-conseil">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/danger-sucre.avif" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary btn-sm align-items-end">Conseils Nutrition</button>
                        <h5 class="card-title">Nos conseils pour reduire sa consommation de sucre</h5>

                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/differences-entre-yoga-et-pilates_0.png" class="card-img-top"
                        alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-info btn-sm conseils_fitness">Conseils Fitnes</button>

                        <h5 class="card-title">Les differences entre Yoga et Pilates</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/istockphoto-1185840330-612x612.jpg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary btn-sm align-items-end">Conseils Nutrition</button>

                        <h5 class="card-title">Comment differencier la faim pyschologique de la vrai faim?</h5>
                    </div>
                </div>
            </div>
         
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/Sans titre.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-success btn-md align-items-end">Bien etre</button>

                        <h5 class="card-title">Comment soulager les jambes lourdes?</h5>

                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/dormir.jpeg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-success btn-md align-items-end">Bien etre</button>

                        <h5 class="card-title">Notre routine/nos conseils pour bien dormir</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/pates-feculents.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary btn-sm align-items-end">Conseils Nutrition</button>

                        <h5 class="card-title">Top 5 des idees recues sur l'alimentation</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/une-recente-etude-conduite-par-la-direction-generale-de-la-concurrence-de-la-consommation-et-de-la-repression-des-fraudes-(dgccrf)-a-etabli-que-60-des-produits-vendus-en-ligne-etaient-hors-des-clous-parce-qu-ils-presentent-des-allegations-sante-ou-nu.jpg"
                        class="card-img-top" alt="Hollywood Sign on The Hill" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary btn-sm align-items-end">Conseils Nutrition</button>

                        <h5 class="card-title">Choisir sa cure de complements alimentaire en fonction des saisons</h5>

                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/AdobeStock_120880791.jpeg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-info btn-sm conseils_fitness">Conseils Fitnes</button>

                        <h5 class="card-title">Tout savoir sur le joy workout</h5>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card h-100">
                    <img src="images/difference-entre-surgele-et-frais.jpeg" class="card-img-top"
                        alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary btn-sm align-items-end">Conseils Nutrition</button>

                        <h5 class="card-title">La difference entre les legumes frais, en conserve et surgeles</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include("footer.php");?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script> -->
</body>

</html>