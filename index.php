<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'section/translate.php';
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.ico" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo _("Home"); ?> - <?php echo _("HackWithPeople"); ?></title>

    <?php
        include_once 'section/includes_header.php';
    ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<div id="wrapper">
    <?php
    include_once 'section/header.php';
    ?>

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-content paddingbot-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                            <h2 class="h-ultra"><?php echo _("Assistive Technologies to the Rescue"); ?></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                            <h4 class="h-light"><?php echo _("Imminent Challenges"); ?></h4>
                        </div>
                        <div class="well well-trans">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <ul class="lead-list">
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list">
									<strong><?php echo _("The Aging of People"); ?></strong><br />
                                            <?php echo _("We shall prepare ourselves with politics of active aging <br/> that could improve the lives of the families."); ?></span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list">
									<strong><?php echo _("Degenerative Diseases");?></strong><br />
                                            <?php echo _("47.6 million of people are suffering dementia, <br> and there are 7.7 million new cases each year.");?></span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list">
									<strong><?php echo _("Disabilities");?></strong><br />
                                            <?php echo _("10% of the world population is born with some <br/> kind of disability."); ?></span></li>
                                </ul>
                                <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                    <!--						<a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>-->
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="embed-responsive embed-responsive-4by3">
<!--                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iV_LJNS2-LM"></iframe>-->
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/258775180?autoplay=1&loop=1&autopause=0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-md-4">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("The Aging of People"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("Europe is approaching to a demographic change."); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-list-alt fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Degenerative Diseases"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("On a worldwide level, 47.6 million of people are suffering dementia,"); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-4">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Disabilities"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("The 10% of the world population is born with some kind of disability."); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="boxes" class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
<!--                            <i class="fa fa-check fa-2x circled bg-skin"></i>-->
                            <h4 class="h-bold"><?php echo _("Assistive Technologies to the Rescue"); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-justify">
                            <p>
                                <?php echo _("Scientific advancements have a slow advance when it comes to neurodegenerative diseases,"); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-justify">
                            <p>
                                <?php echo _("These technologies consist of the integration of eletrocnic elements in our daily environment,"); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <div>
                                <img src="images/img-head-wand.jpg"
                                     alt="Quadriplegic using head wand, image by Joseph Lorenzo Hall"
                                     title="Quadriplegic using head wand, image by Joseph Lorenzo Hall"
                                     class="img_responsive"/>
                                <img src="images/img-gyrogearglove.jpg"
                                     alt="GyroGlove by GyroGear group, a device for counter parkinson-caused hand trmors"
                                     title="GyroGlove by GyroGear group, a device for counter parkinson-caused hand trmors"
                                     class="img_responsive"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <div>
                                <img src="images/img-parkinsons-wearable-test.jpg"
                                     alt="Intel and the Michael J. Fox Foundation are using big data, cloud computing and wearable technologies to monitor Parkinson’s patients."
                                     title="Intel and the Michael J. Fox Foundation are using big data, cloud computing and wearable technologies to monitor Parkinson’s patients."
                                     class="img_responsive"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="boxes" class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
<!--                            <i class="fa fa-user-md fa-2x circled bg-skin"></i>-->
                            <h4 class="h-bold"><?php echo _("These technologies are short-term assistances, but they are not the perfect solution"); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Too much expensive development"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("A product starts as an idea that is prototyped in a laboratory."); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-user-md fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Involving people is not easy"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("Many projects fail because they do not propose an interesting solution for those who will use it."); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-hospital-o fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Lack of customization"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("Every person is unique."); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-list-alt fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Technologies are not ready yet"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("The trials are slow because reliability must be guaranteed."); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: boxes -->

    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3><?php echo _("What do we propose?"); ?></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p><?php echo _("We want that every person who has knowledge can contribute."); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p><?php echo _("To reduce the costs. So the lack of many resources do not involve an obstacle.");?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p><?php echo _("To break with the limitations. To talk about what does not exist yet and how we want it to be."); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p><?php echo _("To systematize the development and to standardize a responsible experimentation in assistive technologies."); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3><?php echo _("We do not use magic, but engineering"); ?></h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="well well-trans">
                                                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                                                        <ul class="lead-list">
                                                            <li>
                                                                <span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("We can use 3D simulators of the problems and solve the problem firstly in the computer."); ?></span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("We are starting, but we have cases that demonstrate the idea."); ?></span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("A free and open technology that all people can use. If you are not good at technology, you can also participate sending us your comments of the simulations with CAMAssistant."); ?></span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("If you have technological skills, you can contribute modelling or developing solutions."); ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="callaction" class="home-section paddingtop-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="callaction bg-gray">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="cta-text">
                                        <h3><?php echo _("Ways to contribute"); ?></h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="well well-trans">
                                                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                                                        <ul class="lead-list">
                                                            <li>
                                                                <span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("Helping with comments about the simulations that we have, giving your opinion about the solutions and problems that we have collected. We use CAMAssistant tool to do that. The cases of use can be seen and directly provide comments. Profile: professional/interested person."); ?></span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("Creating 3D models with our tools. We use "); ?> <a href="http://grasia.fdi.ucm.es/aide" target="_blank" ><?php echo _("the AIDE tool to do that."); ?></a> <?php echo _("The models will be available online, so they can be downloaded by those who are interested. New models will can also be uploaded. Profile: technological skills are required."); ?></span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("Collaborating in multidisciplinary teams while modelling. We will set up meetings to co-create solutions or analyzing problems in a collaborative way. Profile: professional/interested person."); ?></span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list"><?php echo _("Suggesting new solutions for other people. We use"); ?> <a href="http://grasia.fdi.ucm.es/aide" target="_blank" ><?php echo _("the AIDE tool"); ?></a> <?php echo _("to do that. We have simple examples and tutorials to begin. Profile: technological skills are required."); ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">
        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo _("Modeling the problems");?></a>
                                        <div class="mark"><?php echo _("Step:"); ?>
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p><?php echo _("Among professionals and specialists recreate in computer simulations the situations described by patients. The patient's behavior is modeled in an ideal scenario and then each action is altered according to the disability.");?></p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c1.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#"><?php echo _("Open Participation");?></a>
                                        <span><?php echo _("Professionals, caregivers, others"); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo _("Comment the results");?></a>
                                        <div class="mark"><?php echo _("Step:");?>
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p><?php echo _("Communication is channeled through a web application that will allow different stakeholders to add comments on the simulations."); ?></p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c2.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#"><?php echo _("Comment the simulation"); ?></a>
                                        <span><?php echo _("Web CAMAssistant");?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo _("Define the solution"); ?></a>
                                        <div class="mark"><?php echo _("Step:"); ?>
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p><?php echo _("They save costs by creating computer prototypes. Its performance compares with that expected by professionals. The result is transferred in video form so that it is checked iteratively."); ?></p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c3.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#"><?php echo _("Development of prototypes in the computer"); ?></a>
                                        <span><?php echo _("IA, Sensors, Interfaces"); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo _("Comment the results"); ?></a>
                                        <div class="mark"><?php echo _("Step:"); ?>
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p><?php echo _("The result is commented again to determine if what the technologists have defined fits in with what was expected."); ?></p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c2.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#"><?php echo _("Comment the simulation"); ?></a>
                                        <span><?php echo _("Web CAMAssistant"); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo _("Build the solution"); ?></a>
                                        <div class="mark"><?php echo _("Step:"); ?>
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p><?php echo _("Once you define what you want to build, you use low cost technology to create prototypes that can be tested by volunteers. Unlike other approaches, up to this point of the solution physical resources have not been reversed.");?> </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c5.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#"><?php echo _("Physical prototyping"); ?></a>
                                        <span><?php echo _("HAR, SmartWatch"); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#"><?php echo _("Patient testing"); ?></a>
                                        <div class="mark"><?php echo _("Step:"); ?>
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star"></span>
                                            </span>
                                        </div>
                                        <p><?php echo _("It is possible to test the prototypes in patients with the limitations analyzed.") ;?></p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-ned-horton.jpg" alt="" class="person img-circle-less" alt="Image By Ned horton" title="Image By Ned Horton"/>
                                        <a title="" href="#"><?php echo _("Test on end users");?></a>
                                        <span><?php echo _("Medical or professional analysis"); ?></span>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Section: testimonial -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <h4 class="h-bold"><?php echo _("Finished Developments"); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("A fall detector");?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("It was developed by students and the technology that was used served to facilitate the initial prototype of the solution. All the documentation that reports the required elements is available, so a similar product can be created.");?>
                            </p>
                        </div>
                        <div class="box text-center">
                            <img src="images/cajacaidas.png" class="img_responsive"/>
                            <img src="images/probandocaja.jpg" class="img_responsive"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Prototypes of situation recognizers");?></h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                <?php echo _("A basic gesture recognizer (its evolution is in process to be patented) and a fall detector in big facilities. Developed using simulations and produce with open hardware. It won the award for");?> <a href="http://www.paams.net/" target="_blank" data-i18n="home.content_7_2_link_1"><?php echo _("IBM en la conferencia PAAMS 2016");?></a>.
                            </p>
                        </div>
                        <div class="box text-center">
                            <img src="images/img-grants-2016-1.jpg" class="img_responsive"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <h4 class="h-bold"><?php echo _("Some developments in progress"); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Crowd tracker"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p><?php echo _("With the information of the traffic of people in a specific point of a building, we try to know the amount of people that there are in the rest of the building without invading their privacy."); ?>
                            </p>
                        </div>
                        <div class="box text-center">
                            <img src="images/img-flujo-multitudes-2.png" class="img_responsive"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("Monitor of repeated or forgotten activities"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p><?php echo _("Based on technology to recognize activities, we want to develop a system that learn the costumes of the patient and that identifies when an activity has been done, has not been done or is half done."); ?>
                            </p>
                        </div>
                        <div class="box text-center">
                            <img src="images/img-olv-object.png" class="img_responsive"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <h4 class="h-bold">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-center">
                            <i class="fa fa-check fa-2x circled bg-skin"></i>
                            <h4 class="h-bold"><?php echo _("TV remote control that accepts mild tremor"); ?></h4>
                        </div>
                        <div class="box text-justify">
                            <p><?php echo _("Describing how a TV remote control that accepts user's mild tremor would be."); ?>
                            </p>
                        </div>
                        <div class="box text-center">
                            <img src="images/img-parkinson-watching-tv.png" class="img_responsive"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                            <div class="box text-center">
                                <div class="cta-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
        <div class="row">
            <div class="col-sm-12 col-md-12">
            </div>
        </div>
    </section>

    <?php
    include_once 'section/footer.php';
    ?>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php
include_once 'section/includes_footer.php';
?>

</body>

</html>
