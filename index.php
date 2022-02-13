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
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item input-group">
                            <a class="nav-link"><img src="resource/img/Vector.png" alt=""></a>
                            <select class="form-select" onchange="set_language()" name="ln" id="language">
                                <option value="en" <?php echo $en_selected; ?>> English</option>
                                <option value="th" <?php echo $th_selected; ?>> ไทย</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="home_content">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h1><?php echo $homeContent[$ln]['title'] ?></h1>
                        <p class="hero-description"><?php echo $homeContent[$ln]['description'] ?></p>
                    </div>
                    <div class="col-8">
                        <img class="img-fluid" src="resource/img/Group%20810.png" alt="hero">
                    </div>
                </div>
            </div>
        </div>

        <!-- start customer section-->
        <section class="customer-section">
            <div class="container-fluid">
                <div class="d-flex flex-column justify-content-center">
                    <h2><?php echo $customerContent[$ln]['h2'] ?></h2>
                    <h3><?php echo $customerContent[$ln]['h3'] ?></h3>
                </div>
                <img src="./resource/img/Group%20786.png" alt="Customers" class="img-fluid">
            </div>
        </section>

        <!-- start mission section-->
        <section class="mission-section" id="service">
            <div class="container">
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
        <section class="fluid-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <img src="resource/img/undraw_creative_woman_re_u5tk%201.png" alt="fluid">
                    </div>
                    <div class="col box1">
                        <h2><?php echo $fluidContent[$ln]['title'] ?></h2>
                        <p><?php echo $fluidContent[$ln]['description'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- start realtime section-->
        <section class="realtime-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col box1">
                        <h2><?php echo $realtimeContent[$ln]['title'] ?></h2>
                        <p><?php echo $realtimeContent[$ln]['description'] ?></p>
                    </div>
                    <div class="col-3">
                        <img src="resource/img/undraw_conversation_re_c26v%201.png" alt="realtime" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- start platform section-->
        <section class="fluid_platform-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col span_1_of_3 ">
                        <img src="resource/img/undraw_co-working_re_w93t%201.png" alt="fluid" class="img-fluid">
                    </div>
                    <div class="col span_1_of_3 box1">
                        <h2><?php echo $platformContent[$ln]['title'] ?></h2>
                        <p><?php echo $platformContent[$ln]['description'] ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- start holistic section-->
        <section class="holistic-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 box1">
                        <h2><?php echo $holisticContent[$ln]['title'] ?></h2>
                        <p><?php echo $holisticContent[$ln]['description'] ?></p>
                    </div>
                    <div class="col-4 ms-auto">
                        <img src="resource/img/undraw_programming_re_kg9v%201.png" alt="realtime">
                    </div>
                </div>
            </div>
        </section>

        <!-- start success section-->
        <section class="success-section" id="success">
            <div class="container-fluid">
                <div class="d-flex flex-column">
                    <div class="text-center">
                        <h2><?php echo $successContent[$ln]['title'] ?></h2>
                    </div>
                    <div class="text-center">
                        <h3 class="display-3"><?php echo $successContent[$ln]['display3'] ?></h3>
                    </div>
                    <div class="text-center">
                        <h4 class="display-6"><?php echo $successContent[$ln]['display6'] ?></h4>
                    </div>
                    <div class="row flex-container">
                        <div class="col column mission">
                            <img src="resource/img/Group%207021.png" alt="" class="services-icon">
                            <h2><?php echo $successContent[$ln]['mission']['title'] ?></h2>
                            <p><?php echo $successContent[$ln]['mission']['description'] ?></p>
                        </div>
                        <div class="col mission column">
                            <img src="resource/img/Group%207022.png" alt="">
                            <h2><?php echo $successContent[$ln]['mission1']['title'] ?></h2>
                            <p><?php echo $successContent[$ln]['mission1']['description'] ?></p>
                        </div>
                        <div class="col mission column">
                            <img src="resource/img/Group%207023.png" alt="">
                            <h2><?php echo $successContent[$ln]['mission2']['title'] ?></h2>
                            <p><?php echo $successContent[$ln]['mission2']['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start team section-->
        <section class="team-section" id="team">
            <div class="container-fluid">
                <div class="heading text-center">
                    <h3 class="display-3"><?php echo $teamContent[$ln]['title'] ?></h3>
                </div>
                <div class="box2">
                    <div class="box3">
                        <span class="coma first">“</span>
                        <?php echo $teamContent[$ln]['description'] ?>
                        <span class="coma last">”</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- start hiring section-->
        <section class="hiring-section">
            <div class="container-fluid">
                <div class="heading text-center mb-5">
                    <h2 class="display-2"><?php echo $hiringContent[$ln]['heading']['display1'] ?></h2>
                    <h3 class="display-6"><?php echo $hiringContent[$ln]['heading']['display2'] ?></h3>
                </div>
            </div>
            <div class="container">
                <div class="row row-cols-8 justify-content-center mx-auto">
                    <div class="col text-center">
                        <img src="resource/img/Group%204393.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img1'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Path%205322.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img2'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Group%207025.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img3'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Group%204392.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img4'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Group%204391.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img5'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Group%207024.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img6'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Group%207026.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img7'] ?></p>
                    </div>
                    <div class="col text-center">
                        <img src="resource/img/Group%204390.png" alt="">
                        <p class="mt-3"><?php echo $hiringContent[$ln]['description']['img8'] ?></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row row-cols-2 justify-content-center">
                    <div class="col">
                        <div class="box bg-primary">
                            <div class="heading-box bg-white">
                                <h5><?php echo $hiringContent[$ln]['box1']['heading-box']['title'] ?></h5>
                                <h6><?php echo $hiringContent[$ln]['box1']['heading-box']['description'] ?></h6>
                            </div>
                            <div class="img-box">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="col-1">
                                        <div class="rust text-center">
                                            <img src="resource/img/Group%207027.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box1']['img-box']['img1'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="node text-center">
                                            <img src="resource/img/Group%207028.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box1']['img-box']['img2'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="docker text-center">
                                            <img src="resource/img/Group%207027.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box1']['img-box']['img3'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="kubernetes text-center">
                                            <img src="resource/img/Group%207030.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box1']['img-box']['img4'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="java text-center">
                                            <img src="resource/img/Group%207031.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box1']['img-box']['img5'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box bg-primary">
                            <div class="heading-box bg-white">
                                <h5><?php echo $hiringContent[$ln]['box2']['heading-box']['title'] ?></h5>
                                <h6><?php echo $hiringContent[$ln]['box2']['heading-box']['description'] ?></h6>
                            </div>
                            <div class="img-box">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="col-1">
                                        <div class="web text-center">
                                            <img src="resource/img/Group%207032.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box2']['img-box']['img1'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="web1 text-center">
                                            <img src="resource/img/Group%207033.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box2']['img-box']['img2'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="flutter text-center">
                                            <img src="resource/img/Group%207034.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box2']['img-box']['img3'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="ionic text-center">
                                            <img src="resource/img/Group%207035.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box2']['img-box']['img4'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="angular text-center">
                                            <img src="resource/img/Group%207036.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box2']['img-box']['img5'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box bg-primary">
                            <div class="heading-box bg-white">
                                <h5><?php echo $hiringContent[$ln]['box3']['heading-box']['title'] ?></h5>
                                <h6><?php echo $hiringContent[$ln]['box3']['heading-box']['description'] ?></h6>
                            </div>
                            <div class="img-box">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="col-1">
                                        <div class="python text-center">
                                            <img src="resource/img/Group%207037.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img1'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="shell text-center">
                                            <img src="resource/img/Group%207038.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img2'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="markdown text-center">
                                            <img src="resource/img/Group%207039.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img3'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="prometheus text-center">
                                            <img src="resource/img/Group%207040.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img4'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="grafana text-center">
                                            <img src="resource/img/Group%207041.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img5'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="ansible text-center">
                                            <img src="resource/img/Group%207042.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img6'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="gitlab text-center">
                                            <img src="resource/img/Group%207043.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img7'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="jenkin text-center">
                                            <img src="resource/img/Group%207044.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box3']['img-box']['img8'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box bg-primary">
                            <div class="heading-box bg-white">
                                <h5><?php echo $hiringContent[$ln]['box4']['heading-box']['title'] ?></h5>
                                <h6><?php echo $hiringContent[$ln]['box4']['heading-box']['description'] ?></h6>
                            </div>
                            <div class="img-box">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="col-1">
                                        <div class="cypress text-center">
                                            <img src="resource/img/Group%207045.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box4']['img-box']['img1'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="robot text-center">
                                            <img src="resource/img/Group%207046.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box4']['img-box']['img2'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="markdown text-center">
                                            <img src="resource/img/Group%207039.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box4']['img-box']['img3'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="excel text-center">
                                            <img src="resource/img/Group%207050.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box4']['img-box']['img4'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box bg-primary">
                            <div class="heading-box bg-white">
                                <h5><?php echo $hiringContent[$ln]['box5']['heading-box']['title'] ?></h5>
                                <h6><?php echo $hiringContent[$ln]['box5']['heading-box']['description'] ?></h6>
                            </div>
                            <div class="img-box">
                                <div class="d-flex flex-row justify-content-start">
                                    <div class="col-1">
                                        <div class="excel text-center">
                                            <img src="resource/img/Group%207050.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box5']['img-box']['img1'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="markdown text-center">
                                            <img src="resource/img/Group%207051.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box5']['img-box']['img2'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="tableau text-center">
                                            <img src="resource/img/Group%207052.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box5']['img-box']['img3'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="power text-center">
                                            <img src="resource/img/Group%207053.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box5']['img-box']['img4'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="sql text-center">
                                            <img src="resource/img/Group%207054.png" alt="" class="img-fluid mb-2">
                                            <p><?php echo $hiringContent[$ln]['box5']['img-box']['img5'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-5">
                    <div class="col-6">
                        <div class="contact-box border-end">
                            <h5><?php echo $contactBox[$ln]['heading'] ?></h5>
                            <h7><?php echo $contactBox[$ln]['description'] ?></h7>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="contact-box border-end">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-start align-items-start bg-transparent">
                                    <img src="resource/img/Group%207055.png" alt="" class="me-3 img-fluid">
                                    <p><?php echo $contactBox[$ln]['address'] ?></p>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-start align-items-center bg-transparent">
                                    <img src="resource/img/Group%207056.png" alt="" class="me-3 img-fluid">
                                    <p><?php echo $contactBox[$ln]['phone'] ?></p>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-start align-items-center bg-transparent">
                                    <img src="resource/img/Group%207057.png" alt="" class="me-3 img-fluid">
                                    <p><?php echo $contactBox[$ln]['mail'] ?></p>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-start align-items-center bg-transparent">
                                    <img src="resource/img/Group%207058.png" alt="" class="me-3 img-fluid">
                                    <p><?php echo $contactBox[$ln]['line'] ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="contact-box">
                            <img src="resource/img/QR%20Code.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start speech section-->
        <section class="speech-section container-fluid">
            <figure>
                <blockquote cite="http://original-url.here">
                    <p>
                        <span class="colon">“</span>
                        At Giinos, We perceive team & customer <span class="speech"> holistic values</span> by achiving <br>missions together, We humbly stand behind great success of our <br>customers. But we are agressive & hungry to learn more, fail more,.<br> <span class="speech">To creatively build huge huge things for our community.</span>
                        <span class="colon">”</span>
                    </p>
                </blockquote>
                <figcaption class="text-end border-top mt-5 pt-3">
                    <img src="resource/img/Group%207018.png" alt="">
                </figcaption>
            </figure>
        </section>

        <!-- start contact section-->
        <section class="contact-section container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-6">
                        <img src="resource/img/Group%20764.png" alt="Map" class="img-fluid rounded-start py-5">
                    </div>
                    <div class="col-6">
                        <div class="card-body form py-5">
                            <h1 class="card-title text-start">Contact us</h1>
                            <h8 class="card-subtitle text-start mb-4 pb-1">Email us to discuss investment, PR or any other question.</h8>
                            <h3 class="card-subtitle text-center message-status"></h3>
                            <form id="contactForm" class="mt-4" action="contact.php" method="post"><!-- action="sendEmail.php" method="post" -->
                                <div class="form-floating mb-4">
                                    <input type="text" id="name" placeholder="Your Name" class="form-control form-control-lg" name="name" pattern=[A-Z\sa-z]{3,20} required>
                                    <label for="name">Your Name <span class="text-danger">*</span></label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" id="company" placeholder="Company Name" class="form-control form-control-lg" name="company">
                                    <label for="company">Company Name </label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" id="email" placeholder="Email Address" class="form-control form-control-lg" name="email" required>
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="text" id="number" placeholder="Contact Number" class="form-control form-control-lg" name="number">
                                    <label for="number">Phone Number <span class="text-danger">*</span></label>
                                </div>
                                <div class="mb-4">
                                    <select id="subject" class="form-select form-select-lg" name="subject">
                                        <option value="">Select Softwear...</option>
                                        <option value="software1">Software1</option>
                                        <option value="software2">software2</option>
                                        <option value="software3">software3</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-4">
                                    <textarea id="message" placeholder="Type Messages" class="form-control" name="message" style="min-height:200px" required></textarea>
                                    <label for="message">Your Message here... <span class="text-danger">*</span></label>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" onclick="sendEmail()" class="btn btn-primary btn-lg">Submit</button><!-- onclick="sendEmail()" value="Send An Email" -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start footer section-->
        <section class="footer-section" style="background:#610BEF; color: white; ">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="resource/img/Group%20499.png" alt="" class="img-fluid footer-logo" style="margin-left: -2.5rem !important;">
                    </div>
                    <div class="col">
                        <ul class="nav justify-content-end" style="padding-top:3rem;">
                            <li class="nav-item">
                                <a href="#home" class="nav-link px-2 text-white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#service" class="nav-link px-2 text-white">What we do</a>
                            </li>
                            <li class="nav-item">
                                <a href="#success" class="nav-link px-2 text-white">Success Story</a>
                            </li>
                            <li class="nav-item">
                                <a href="#team" class="nav-link px-2 text-white">Team and Culture</a>
                            </li>
                            <li class="nav-item">
                                <a href="#hire" class="nav-link px-2 text-white">🔥We’re hiring</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link px-2 text-white">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="my-5">
                <p class="text-center text-white">copyright &copy; 2022 <i class="fa fa-heart text-danger"></i> by Giinoss</p>
            </div>
        </section>



        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js" charset="utf-8"></script>

        <script type="text/javascript">
            function set_language() {
                var language=jQuery('#language').val();
                // window.location.href='http://giinos.com/?ln='+language;
                window.location.href='http://localhost/giinos/?ln='+language;
            }

            // PHPMailer sendEmail
            function sendEmail() {
                var name = $("#name");
                var company = $("#company");
                var email = $("#email");
                var number = $("#number");
                var subject = $("#subject");
                var message = $("#message");

                if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(message)) {
                    $.ajax({
                        url: 'sendEmail.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            name: name.val(),
                            company: company.val(),
                            email: email.val(),
                            number: number.val(),
                            subject: subject.val(),
                            message: message.val(),
                        }, success: function (response) {
                            $('#contactForm')[0].reset();
                            $('.message-status').text("Message sent Successfully.");
                        }
                    });
                }
            }

            function isNotEmpty(caller) {
                if (caller.val() == "") {
                    caller.css('border', '1px solid red');
                } else {
                    caller.css('border', '');
                    return true;
                }
            }
        </script>
    </body>
</html>
