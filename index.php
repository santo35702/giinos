<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-xcompatible" content="IE-edge">
        <title>GIINOS-Software Intelligence</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
        <!-- Font-Awesome Free CSS -->
        <link rel="stylesheet" href="node_modules/fontawesome-free/css/all.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">What we do</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#success">Success Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team and Culture</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hire">🔥We’re hiring</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
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
                                <option value="bn"> বাংলা</option>
                                <option value="en"> English</option>
                                <option value="th"> ไทย</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <h1>Intelligent <span class="fluid">Fluid</span> <br> Process Flow <br>Management <br> Platform</h1>
                    <p class="hero-description">for maximizing <br> <span class="hero-p"> holistic values</span></p>
                </div>
                <div class="col-8">
                    <img class="hero_img img-fluid" src="resource/img/Group_810.png" alt="hero">
                </div>
            </div>
        </div>

        <!-- start customer section-->
        <section class="customer-section container-fluid">
            <div class="d-flex flex-column">
                <div class="visually-hidden">
                    <h2>Some of Our Great Customers</h2>
                </div>
                <div class="visually-hidden">
                    <h3>Some of the companies we have worked with</h3>
                </div>
            </div>
            <div class="">
                <img src="./resource/img/Group_786.png" alt="Customers" class="img-fluid">
            </div>

        </section>



        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js" charset="utf-8"></script>
    </body>
</html>
