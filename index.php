<?php
    include 'language.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-xcompatible" content="IE-edge">
        <title><?php echo $title[$ln] ?></title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
        <!-- Font-Awesome Free CSS -->
        <link rel="stylesheet" href="node_modules/fontawesome-free/css/all.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="resource/img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><?php echo $navbar[$ln][0] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service"><?php echo $navbar[$ln][1] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#success"><?php echo $navbar[$ln][2] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team"><?php echo $navbar[$ln][3] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hire">🔥<?php echo $navbar[$ln][4] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"><?php echo $navbar[$ln][5] ?></a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </form> -->
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-4">
                        <li class="nav-item input-group">
                            <a class="nav-link"><img src="resource/img/Vector.png" alt=""></a>
                            <select class="form-select" onchange="set_language()" name="ln" id="language">
                                <option value="bn" <?php echo $bn_selected; ?>> বাংলা</option>
                                <option value="en" <?php echo $en_selected; ?>> English</option>
                                <option value="th" <?php echo $th_selected; ?>> ไทย</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <h1><?php echo $homeContent[$ln]['title'] ?></h1>
                    <p class="hero-description"><?php echo $homeContent[$ln]['description'] ?></p>
                </div>
                <div class="col-8">
                    <img class="hero_img img-fluid" src="resource/img/Group_810.png" alt="hero">
                </div>
            </div>
        </div>

        <!-- start customer section-->
        <section class="customer-section container-fluid py-5">
            <div class="d-flex flex-column justify-content-center pt-3">
                <div class="text-center">
                    <h2><?php echo $customerContent[$ln]['h2'] ?></h2>
                </div>
                <div class="text-center">
                    <h3><?php echo $customerContent[$ln]['h3'] ?></h3>
                </div>
            </div>
            <div class="pb-3">
                <img src="./resource/img/Group_786.png" alt="Customers" class="img-fluid">
            </div>
        </section>
        <!-- start mission section-->
        <section class="mission-section container-fluid" id="service">
            <div class="flex-container mx-auto">
                <div class="row">
                    <div class="col">
                        <div class="col1">
                            <h2><?php echo $missionContent[$ln]['mission']['title'] ?></h2>
                            <h5 class="little-description"><?php echo $missionContent[$ln]['mission']['description'] ?></h5>
                        </div>
                    </div>
                    <div class="col mission">
                        <img src="resource/img/d.png" alt="" class="services-icon">
                        <h3><?php echo $missionContent[$ln]['customer']['title'] ?></h3>
                        <p><?php echo $missionContent[$ln]['customer']['description'] ?></p>
                    </div>
                    <div class="col mission">
                        <img src="resource/img/Group%207071.png" alt="" class="services-icon">
                        <h3><?php echo $missionContent[$ln]['team']['title'] ?></h3>
                        <p><?php echo $missionContent[$ln]['team']['description'] ?></p>
                    </div>
                    <div class="col mission">
                        <img src="resource/img/hand.png" alt="" class="services-icon">
                        <h3><?php echo $missionContent[$ln]['other']['title'] ?></h3>
                        <p><?php echo $missionContent[$ln]['other']['description'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- start fluid section-->
        <section class="fluid-section container-fluid py-5">
            <div class="row">
                <div class="col">
                    <img src="resource/img/undraw_creative_woman_re_u5tk%201.png" alt="fluid">
                </div>
                <div class="col box1">
                    <h2><?php echo $fluidContent[$ln]['title'] ?></h2>
                    <p><?php echo $fluidContent[$ln]['description'] ?></p>
                </div>
            </div>
        </section>

        <!-- start realtime section-->
        <section class="realtime-section container-fluid py-5">
            <div class="row">
                <div class="col box1">
                    <h2><?php echo $realtimeContent[$ln]['title'] ?></h2>
                    <p><?php echo $realtimeContent[$ln]['description'] ?></p>
                </div>
                <div class="col-3">
                    <img src="resource/img/undraw_conversation_re_c26v%201.png" alt="realtime" class="img-fluid">
                </div>
            </div>
        </section>

        <!-- start platform section-->
        <section class="fluid_platform-section container-fluid">
            <div class="row">
                <div class="col span_1_of_3 ">
                    <img src="resource/img/undraw_co-working_re_w93t%201.png" alt="fluid" class="img-fluid">
                </div>
                <div class="col span_1_of_3 box1">
                    <h2><?php echo $platformContent[$ln]['title'] ?></h2>
                    <p><?php echo $platformContent[$ln]['description'] ?></p>
                </div>
            </div>
        </section>



        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js" charset="utf-8"></script>

        <script type="text/javascript">
            function set_language() {
                var language=jQuery('#language').val();
                window.location.href='http://giinos.com/?ln='+language;
                // window.location.href='http://giinos.com/?ln='+language;
            }
        </script>
    </body>
</html>
