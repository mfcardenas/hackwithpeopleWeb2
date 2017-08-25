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

    <title><?php echo _("Home"); ?> <?php echo _("HackWithPeople"); ?></title>

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
                                            <?php echo _("47.6 millions of people are suffering dementia, <br> and there are 7.7 millions of new cases each year.");?></span></li>
                                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list">
									<strong><?php echo _("Disabilities");?></strong><br />
                                            <?php echo _("The 10% of the world population is born with some <br/> kind of disability."); ?></span></li>
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
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/230922515"></iframe>
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
                                <?php echo _("On a worldwide level, 47.6 millions of people are suffering dementia,"); ?>
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
                                Scientific advancements have a slow advance when it comes to neurodegenerative diseases, especially because of the erratic funding in basic research. Assistive technologies are not a solution, but they can improve the quality of life of those who suffer from an illness and to better integrate people with some kind of disability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box text-justify">
                            <p>
                                These technologies consist of the integration of eletrocnic elements in our daily environment, so they alow us to complement or to mantain our quality of life. We could wear these elements on our bodies or in our clothes (wearables), they could also be elements of mechanical assistance such as robots and elevators.
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
                                                <p>We want that every person who has knowledge can contribute.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p>To reduce the costs. So the lack of many resources do not involve an obstacle.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p>To break with the limitations. To talk about what does not exist yet and how we want it to be.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                                            <div class="cta-text">
                                                <p>To systematize the development and to standardize a responsible experimentation in assistive technologies.</p>
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
                                        <h3>We do not use magic, but engineering</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="well well-trans">
                                                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                                                        <ul class="lead-list">
                                                            <li>
                                                                <span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">We can use 3D simulators of the problems and solve the problem firstly in the computer.</span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">We are starting, but we have cases that demonstrate the idea.</span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">A free and open technology that all people can use. If you are not good at technology, you can also participate sending us your comments of the simulations with CAMAssistant.</span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">If you have technological skills, you can contribute modelling or developing solutions.</span>
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
                                        <h3>Ways to contribute</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="well well-trans">
                                                    <div class="wow fadeInRight" data-wow-delay="0.1s">
                                                        <ul class="lead-list">
                                                            <li>
                                                                <span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">Helping with comments about the simulations that we have, giving your opinion about the solutions and problems that we have collected. We use CAMAssistant tool to do that. The cases of use can be seen and directly provide comments. Profile: professional/interested person.</span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">Creating 3D models with our tools. We use the AIDE tool to do that. The models will be available online, so they can be downloaded by those who are interested. New models will can also be uploaded. Profile: technological skills are required.</span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">Collaborating in multidisciplinary teams while modelling. We will set up meetings to co-create solutions or analyzing problems in a collaborative way. Profile: professional/interested person.</span>
                                                            </li>
                                                            <li><span class="fa fa-check fa-2x icon-success"></span>
                                                                <span class="list">Suggesting new solutions for other people. We use the AIDE tool to do that. We have simple examples and tutorials to begin. Profile: technological skills are required.</span>
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
                                        <a title="" href="#">Modelando los problemas</a>
                                        <div class="mark">Step:
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p>Entre profesionales y especialistas se recrear en simulariones de ordenador las situaciones que describen los pacientes. Se modela el comportamiento del paciente en un escenario ideal y luego cada acción se altera según la discapacidad.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c1.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#">Participación abierta</a>
                                        <span>Profesionales, cuidadores, otros</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Comenta los resultados</a>
                                        <div class="mark">Step:
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p>La comunicación se canaliza mediante una aplicación web que permitirá a los diferentes interesados, añadir comentarios sobre las simulaciones.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c2.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#">Comentar la simulación</a>
                                        <span>Web CAMAssistant</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Definir la solución</a>
                                        <div class="mark">Step:
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p>Se ahorran costes creando prototipos en ordenador. Su funcionamiento se compara con el esperado por los profesionales. El resultado se traslada en forma de video para que se compruebe iterativamente.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c3.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#">Desarrollo de prototipos en el ordenador</a>
                                        <span>IA, Sensores, Interfaces</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Comenta los resultados</a>
                                        <div class="mark">Step:
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star-empty"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p>El resultado se vuelve a comentar para determinar si lo que han definido los tecnólogos encaja con lo esperado. <br/>De esta forma, es posible la cooperación entre profesionales y usuarios para determinar que se va por el buen camino.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c2.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#">Comentar la simulación</a>
                                        <span>Web CAMAssistant</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Construir la solución</a>
                                        <div class="mark">Step:
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star-empty"></span>
                                            </span>
                                        </div>
                                        <p>Una vez que definido lo que se quiere construir, se usa tecnología de bajo coste para crear prototipos que puedan ser probados por voluntarios.
                                            A diferencia de otros enfoques, hasta este punto de la solución no se han invertido recursos físicos. </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-carrousel-c5.png" alt="" class="person img-circle-less" />
                                        <a title="" href="#">Prototipado físico</a>
                                        <span>HAR, SmartWatch</span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Pruebas en pacientes</a>
                                        <div class="mark">Start:
                                            <span class="rating-input">
                                                <span data-value="0" class="glyphicon glyphicon-star"></span>
                                                <span data-value="1" class="glyphicon glyphicon-star"></span>
                                                <span data-value="2" class="glyphicon glyphicon-star"></span>
                                                <span data-value="3" class="glyphicon glyphicon-star"></span>
                                                <span data-value="4" class="glyphicon glyphicon-star"></span>
                                                <span data-value="5" class="glyphicon glyphicon-star"></span>
                                            </span>
                                        </div>
                                        <p>Es posible probar los prototipos en pacientes con las limitaciones analizadas.<br/>Si se encuentran errores o incosistencia, tras el bajo de coste de fabricación, aún es posible volver atras y repetir las fases de estudio.</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel text-light">
                                        <img src="images/img-ned-horton.jpg" alt="" class="person img-circle-less" alt="Image By Ned horton" title="Image By Ned Horton"/>
                                        <a title="" href="#">Test en usuarios finales</a>
                                        <span>Análisis médico o profesional</span>
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
                            <h4 class="h-bold">Finished Developments</h4>
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
                            <h4 class="h-bold">A fall detector</h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                It was developed by students and the technology that was used served to facilitate the initial prototype of the solution. All the documentation that reports the required elements is available, so a similar product can be created.
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
                            <h4 class="h-bold">Prototypes of situation recognizers</h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                A basic gesture recognizer (its evolution is in process to be patented) and a fall detector in big facilities. Developed using simulations and produce with open hardware. It won the award for <a href="http://www.paams.net/" target="_blank" data-i18n="home.content_7_2_link_1">IBM en la conferencia PAAMS 2016</a>.
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
                            <h4 class="h-bold">Some developments in progress</h4>
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
                            <h4 class="h-bold">Crowd tracker</h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                With the information of the traffic of people in a specific point of a building, we try to know the amount of people that there are in the rest of the building without invading their privacy.
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
                            <h4 class="h-bold">Monitor of repeated or forgotten activities</h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                Based on technology to recognize activities, we want to develop a system that learn the costumes of the patient and that identifies when an activity has been done, has not been done or is half done.
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
                            <h4 class="h-bold">TV remote control that accepts mild tremor</h4>
                        </div>
                        <div class="box text-justify">
                            <p>
                                Describing how a TV remote control that accepts user's mild tremor would be.
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
