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
                    <img class="hero_img img-fluid" src="resource/img/Group%20810.png" alt="hero">
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
                <img src="./resource/img/Group%20786.png" alt="Customers" class="img-fluid">
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

        <!-- start holistic section-->
        <section class="holistic-section container-fluid">
            <div class="row">
                <div class="col-4 box1">
                    <h2>Holistic Value, value for everyone.</h2>
                    <p>At Giinos, we love word “Holistic”. It’s always guides you to see big picture, as a whole picture, long term and specially it’s “empty yourself.”. This let you start thinking for everyone and leave yourself for the last.<br>We apply same philosophy into our platform & solutions. “Maxinmizing value for everyone who get involved with”. Insights could not be trust by top management if frontline users could not see the importance of every single click they do.<br> Our ecosystem is not only for focus on application for users, but we also focus for supporting tools, operational assisting applications like system alerts that keep 24/7 operations run smoothly.</p>
                </div>
                <div class="col-4 ms-auto">
                    <img src="resource/img/undraw_programming_re_kg9v%201.png" alt="realtime">
                </div>
            </div>
        </section>

        <!-- start success section-->
        <section class="success-section container-fluid" id="success">
            <div class="d-flex flex-column">
                <div class="row1 text-center">
                    <h2>customer stories</h2>
                </div>
                <div class="row2 text-center">
                    <h3 class="display-3">Some of our success stories</h3>
                </div>
                <div class="row3 text-center">
                    <h4 class="display-6">Building a good customer experience does not happen by <br>accident. It happens by maximizing holistic values.</h4>
                </div>
                <div class="row flex-container">
                    <div class="col column mission">
                        <img src="resource/img/Group%207021.png" alt="" class="services-icon">
                        <h2>The success of workflow leaning and quick responding process flow adaptation during COVID-19 threat.
                        </h2>
                        <p> By applying our solutions, CCIT has lean processes and increase a lot flexibilities on patient flow management that let CCIT handle thier situation very well during tough time of COVID-19 in Thailand. One of the main components of this story is “Workflow-Centric Med Delivery Solution” that let all related departments work seamlessly together to help patient get thier medicines during lockdown period with ability to track delivery status & process in realtime. But not only that, CCIT goes beyond in-hospital patient flow management only. They also bring in tele-consultation via mobile application which is one of our ecosystem solution to take care of patient who meet the conditions that be able to do tele-consultation to avoid to come over to hospital during COVID-10 situation. And we believe this will be one of a new normal way of seeing doctor very soon in the coming future. </p>
                    </div>
                    <div class="col mission column">
                        <img src="resource/img/Group%207022.png" alt="">
                        <h2>Minimize patient overcrowning by applying insights from Holistic Patient Flow Management Solution. </h2>
                        <p> With almost 40 services areas in the hospital and around 1,800 - 2,500 paitent visits per day force us to lay down workflows for each services area uniquly in order to capture data & how patient flows in each area. Yes, it’s so tough for us to figure out all 40 workflow in deep details of clinical domain. With our healthcare export who working so hard with platform team. We come up with the most sophisticated healthcare workflow that is able to capture very details of movement inside hospital. And the result is now NRH, they are able see where to improve overcrown issues in some area by using our analytic insights effectively. The bautiful things is now they have baseline statistics and every staffs have “Adapt-to-change Awareness” in thier mind by just 6 months after using our solutions.</p>
                    </div>
                    <div class="col mission column">
                        <img src="resource/img/Group%207023.png" alt="">
                        <h2>The Biggest Holistic Patient Flow Management Solution in North East of Thailand.</h2>
                        <p>“3,500-4,500 patient visits per day”, It’s scarely figures for us. We carefully dicussed & design solution with frontline users, mid-management and top-management staffs since the start of project to make sure that we can delivery “holistic values” to everyone as much as we could. We integrated our solution with their robotic medicine system to maximize value on both staff and patient side in pharmacy services area. Top management started using our realtime insights delivery mobile appliation since day one and keep looking ahead to process improvement inside such a visionary organization.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- start team section-->
        <section class="team-section container-fluid" id="team">
            <div class="heading text-center">
                <h3 class="display-3">Team & Culture</h3>
            </div>
            <div class="box2">
                <div class="box4">
                    <div class="box3">
                        <span class="coma">“</span>
                        <strong>At Giinos, we apply these principles to every aspect of working together… <br></strong>
                        <strong>TRUST</strong>:We trust each other, we assign and leave the task to you. So, you will be pushed to the max at certain point…don’t forget to “trust yourself” as well.<br>
                        <strong>OPEN</strong>: We communicate, raise concerns, asking for support openly here at Giinos. By having “maximizing holistic value” mindsets, so we “open” for that things... <br>
                        <strong>EMPATHY</strong>: we empathize with our customers, platform we built, and everyone in team.
                        So, whatever challenges we faced with these fundamental principles let us achive it always.
                        <span class="coma">”</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- start hiring section-->
        <section class="hiring-section container-fluid">
            <div class="heading text-center mb-5">
                <h2 class="display-2">We’re hiring !</h2>
                <h3 class="display-6">We are looking for talented people to team up with us to reach bigger goals.</h3>
            </div>
            <div class="row row-cols-8 justify-content-around my-5">
                <div class="col text-center">
                    <img src="resource/img/Group%204393.png" alt="">
                    <p class="mt-3">Team spirit of working</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Path%205322.png" alt="">
                    <p class="mt-3">Collaboration Communication Skills</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Group%207025.png" alt="">
                    <p class="mt-3">Rise concerns & ready for comments</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Group%204392.png" alt="">
                    <p class="mt-3">Apply knowledge</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Group%204391.png" alt="">
                    <p class="mt-3">Be Creative</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Group%207024.png" alt="">
                    <p class="mt-3">Self-learner</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Group%207026.png" alt="">
                    <p class="mt-3">Concepts of UX</p>
                </div>
                <div class="col text-center">
                    <img src="resource/img/Group%204390.png" alt="">
                    <p class="mt-3">Good English Skills </p>
                </div>
            </div>
            <div class="row row-cols-2 justify-content-center">
                <div class="col">
                    <div class="box mb-4 py-3 bg-primary">
                        <div class="heading-box bg-white">
                            <h5><span class="hiring">Backend</span> Platform Software<br> Engineer</h5>
                            <h6>The most challenging for this position is building platform base on our visions and business requirements together. They have to identify platform architecture characteristics, such as performance, security, scalability,
                                etc., that should take into account on particular module they’re working on. Not only that, in order to maximize holistic value, they have to make sure that on support side such as frontline technical staff, implementation
                                team or operation team also are able to do thier own jobs very well via platform support tools that Backend Platform Software Engineer has provided.
                                <br><br></h6>
                        </div>
                        <div class="img-box">
                            <div class=" d-flex flex-row justify-content-start">
                                <div class="col-2">
                                    <div class="rust text-center">
                                        <img src="resource/img/Group%207027.png" alt="" class="img-fluid mb-2">
                                        <p>Rust</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="node text-center">
                                        <img src="resource/img/Group%207028.png" alt="" class="img-fluid mb-2">
                                        <p>Node JS</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="docker text-center">
                                        <img src="resource/img/Group%207027.png" alt="" class="img-fluid mb-2">
                                        <p>Docker</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="kubernetes text-center">
                                        <img src="resource/img/Group%207030.png" alt="" class="img-fluid mb-2">
                                        <p>Kubernetes</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="java text-center">
                                        <img src="resource/img/Group%207031.png" alt="" class="img-fluid mb-2">
                                        <p>Java Springboot</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box mb-4 py-3 bg-primary">
                        <div class="heading-box bg-white">
                            <h5><span class="Frontend">Frontend</span> Platform Software <br>Engineer</h5>
                            <h6>To build platform to support “fluid” process flow characteristics. Frontend platform software engineer need to design and see beyond what customer want. Ability to make system configurable is main responsibility for this
                                role. UX/UI skills are essential here in order to maximize holistic value to whom who interacts with the platform. Web application or mobile application we built is main channel to delivery such a huge value to
                                everyone…including our team<br><br><br></h6>
                        </div>
                        <div class="img-box">
                            <div class=" d-flex flex-row justify-content-start">
                                <div class="col-2">
                                    <div class="web text-center">
                                        <img src="resource/img/Group%207032.png" alt="" class="img-fluid mb-2">
                                        <p>Web Assembly</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="web1 text-center">
                                        <img src="resource/img/Group%207033.png" alt="" class="img-fluid mb-2">
                                        <p>Web Component</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="flutter text-center">
                                        <img src="resource/img/Group%207034.png" alt="" class="img-fluid mb-2">
                                        <p>Flutter</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="ionic text-center">
                                        <img src="resource/img/Group%207035.png" alt="" class="img-fluid mb-2">
                                        <p>Ionic Framework</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="angular text-center">
                                        <img src="resource/img/Group%207036.png" alt="" class="img-fluid mb-2">
                                        <p>Angular</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box mb-4 py-3 bg-primary">
                        <div class="heading-box bg-white">
                            <h5>Platform <span class="sre">DevOps & SRE</span></h5>
                            <h6>Keeping the system up & running smoothly is basic responsibility of this role. But keeping things “fluid” and able to delivery “holistic value” is the most fun and challenging parts for this position. We combinded Dev/Ops
                                and SRE (Site Reliability Enginerr) with our core philosophy to make sure that “Platform Ops & Site Reliability Engineer” is one of our main component to really make “fluid process flow platform” emering in front of our
                                customers...<br>
                                They will start from provisioning infrastructure from the ground up, working with platform engineer on deployment process by applying automation tools, keeping monitor platform using sophistiated tools and care tacker
                                mindsets to fullfill the missions.<br><br></h6>
                        </div>
                        <div class="img-box">
                            <div class=" d-flex flex-row justify-content-start">
                                <div class="col">
                                    <div class="python text-center">
                                        <img src="resource/img/Group%207037.png" alt="" class="img-fluid mb-2">
                                        <p>Python</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="shell text-center">
                                        <img src="resource/img/Group%207038.png" alt="" class="img-fluid mb-2">
                                        <p>Shell scripting</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="markdown text-center">
                                        <img src="resource/img/Group%207039.png" alt="" class="img-fluid mb-2">
                                        <p>Markdown</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="prometheus text-center">
                                        <img src="resource/img/Group%207040.png" alt="" class="img-fluid mb-2">
                                        <p>Prometheus</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="grafana text-center">
                                        <img src="resource/img/Group%207041.png" alt="" class="img-fluid mb-2">
                                        <p>Grafana</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="ansible text-center">
                                        <img src="resource/img/Group%207042.png" alt="" class="img-fluid mb-2">
                                        <p>Ansible</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="gitlab text-center">
                                        <img src="resource/img/Group%207043.png" alt="" class="img-fluid mb-2">
                                        <p>Gitlab CI/CD</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="jenkin text-center">
                                        <img src="resource/img/Group%207044.png" alt="" class="img-fluid mb-2">
                                        <p>Jenkin</p>
                                    </div>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box mb-4 py-3 bg-primary">
                        <div class="heading-box bg-white">
                            <h5>Solution <span class="qa">QA & Implementationr</span></h5>
                            <h6>Each customer has thier own context to plug our solution into. This is very crucial steps cause we have to make sure what we delivery is really work and “holistic value” have been truely spreading among cusomer’s
                                organization. Solution QA & Implementation is our spearhead who make things happen at site. They work closely with frontline users, manager or even management at some certain pont of solution implementation in order to
                                blend in new solution into users daily life. Sometime they have to re-configuration, re-testing and training users again and again. We will allow this to happen cause our goal is to achive “delivery truely holistic
                                value”...<br><br></h6>
                        </div>
                        <div class="img-box">
                            <div class=" d-flex flex-row justify-content-start">
                                <div class="col">
                                    <div class="cypress text-center">
                                        <img src="resource/img/Group%207045.png" alt="" class="img-fluid mb-2">
                                        <p>Cypress</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="robot text-center">
                                        <img src="resource/img/Group%207046.png" alt="" class="img-fluid mb-2">
                                        <p>Robot framework</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="markdown text-center">
                                        <img src="resource/img/Group%207039.png" alt="" class="img-fluid mb-2">
                                        <p>Markdown</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="excel text-center">
                                        <img src="resource/img/Group%207050.png" alt="" class="img-fluid mb-2">
                                        <p>Excel</p>
                                    </div>
                                </div>
                                <div class="col-6"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box mb-4 py-3 bg-primary">
                        <div class="heading-box bg-white">
                            <h5>Holistic Value Data Analytics & <span class="Insights"><br>Insights Delivery</span></h5>
                            <h6>Keeping the system up & running smoothly is basic responsibility of this role. But keeping things “fluid” and able to delivery “holistic value” is the most fun and challenging parts for this position. We combinded Dev/Ops
                                and SRE (Site Reliability Enginerr) with our core philosophy to make sure that “Platform Ops & Site Reliability Engineer” is one of our main component to really make “fluid process flow platform” emering in front of our
                                customers...<br>
                                They will start from provisioning infrastructure from the ground up, working with platform engineer on deployment process by applying automation tools, keeping monitor platform using sophistiated tools and care tacker
                                mindsets to fullfill the missions.</h6>
                        </div>
                        <div class="img-box">
                            <div class=" d-flex flex-row justify-content-start">
                                <div class="col">
                                    <div class="excel text-center">
                                        <img src="resource/img/Group%207050.png" alt="" class="img-fluid mb-2">
                                        <p>Excel</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="markdown text-center">
                                        <img src="resource/img/Group%207051.png" alt="" class="img-fluid mb-2">
                                        <p>Markdown</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="tableau text-center">
                                        <img src="resource/img/Group%207052.png" alt="" class="img-fluid mb-2">
                                        <p>Tableau</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="power text-center">
                                        <img src="resource/img/Group%207053.png" alt="" class="img-fluid mb-2">
                                        <p>power BI</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="sql text-center">
                                        <img src="resource/img/Group%207054.png" alt="" class="img-fluid mb-2">
                                        <p>SQL</p>
                                    </div>
                                </div>
                                <div class="col-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="box border-end">
                        <h5>Contact us at</h5>
                        <h6>If you are interested in working with our team, you can contact us at the address listed on your right hand side. <br>We sincerely hope that you will grow with us in the future, </h6>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box border-end">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-start align-items-start bg-transparent">
                                <img src="resource/img/Group%207055.png" alt="" class="me-3 img-fluid">
                                <p>327/1 Soi Ladprao 26, Chomphon Subdistrict Chatuchak District, Bangkok 10900</p>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-start align-items-center bg-transparent">
                                <img src="resource/img/Group%207056.png" alt="" class="me-3 img-fluid">
                                <p>02-077-6114</p>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-start align-items-center bg-transparent">
                                <img src="resource/img/Group%207057.png" alt="" class="me-3 img-fluid">
                                <p>developers@giinos.com</p>
                            </li>
                            <li class="list-group-item border-0 d-flex justify-content-start align-items-center bg-transparent">
                                <img src="resource/img/Group%207058.png" alt="" class="me-3 img-fluid">
                                <p>@giinos-career</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="box">
                        <img src="resource/img/QR%20Code.png" alt="">
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
                            <h3 class="card-subtitle text-start mb-4 pb-1">Email us to discuss investment, PR or any other question.</h3>
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
