<?php
    include 'language.php';

    // Mail Function
    $status = '';
    $name = '';
    $company = '';
    $email = '';
    $phone = '';
    $subject = '';
    $message = '';

    function clean_text($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    if (isset($_POST["submit"])) {
        if (empty($_POST["name"])) {
            $status .= '<div class="alert alert-danger">Please Enter your Name</div>';
        } else {
            $name = clean_text($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $status .= '<div class="alert alert-danger">Only letters and space allowed</div>';
            }
        }
        if (empty($_POST["email"])) {
            $status .= '<div class="alert alert-danger">Please Enter your Email</div>';
        } else {
            $email = clean_text($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $status .= '<p class="alert alert-danger">Invalid email format</p>';
            }
        }

        if (empty($_POST["subject"])) {
            $status .= '<div class="alert alert-danger">Please Select Subject</div>';
        } else {
            $subject = clean_text($_POST["subject"]);
        }

        if (empty($_POST["message"])) {
            $status .= '<div class="alert alert-danger">Message is required</div>';
        } else {
            $message = clean_text($_POST["message"]);
        }

        if ($status == '') {
            require 'vendor/PHPMailer/PHPMailer.php';
            require 'vendor/PHPMailer/SMTP.php';
            require 'vendor/PHPMailer/Exception.php';

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";

            $mail->Username = "santo35702@gmail.com";
            $mail->Password = "Your Password here...";

            // Sender Settings
            $mail->From = $_POST["email"];
            $mail->FromName = $_POST["name"];
            $mail->addAddress("santo35702@gmail.com", "Name");
            $mail->addCC($_POST["email"], $_POST["name"]);
            $mail->WordWrap = 50;
            $mail->IsHTML(true);
            $mail->Subject = $_POST["subject"];
            $mail->Body = $_POST["message"];
            if ($mail->send()) {
                $status = '<div class="alert alert-success">Thank you for contacting us</div>';
            } else {
                $status = '<div class="alert alert-danger">Mail sent error. Try again.</div>';
            }

            $name = '';
            $email = '';
            $subject = '';
            $message = '';
        }
    }
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
        <link rel="stylesheet" href="responsive.css">
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
                    <form class="d-flex">
                        <div class="input-group xs-input-group">
                            <label class="input-group-text" for="">
                                <img src="resource/img/Vector.png" alt="">
                            </label>
                            <select class="form-select" onchange="set_language()" name="ln" id="language">
                                <option value="en" <?php echo $en_selected; ?>> English</option>
                                <option value="th" <?php echo $th_selected; ?>> ไทย</option>
                            </select>
                        </div>
                    </form>
                    <!-- <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item input-group">
                            <a class="nav-link"><img src="resource/img/Vector.png" alt=""></a>
                            <select class="form-select" onchange="set_language()" name="ln" id="language">
                                <option value="en" <?php // echo $en_selected; ?>> English</option>
                                <option value="th" <?php // echo $th_selected; ?>> ไทย</option>
                            </select>
                        </li>
                    </ul> -->
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



        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js" charset="utf-8"></script>

        <script type="text/javascript">
            function set_language() {
                var language=jQuery('#language').val();
                // window.location.href='http://giinos.com/?ln='+language;
                window.location.href='http://localhost/giinos/?ln='+language;
                // window.location.href='https://giinos.ajuuhost.com/?ln='+language;
            }
        </script>
    </body>
</html>
