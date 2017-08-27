<!--
********************************************************
                            CABECERA
********************************************************
-->
<header>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-left"></p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <p class="bold text-right"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img class="logo-title" src="img/logo.png" alt="" height="50" />
                </a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><?php echo _("Home"); ?></a></li>
                    <li><a href="about.php"><?php echo _("About"); ?></a></li>
                    <li><a href="practical_case.php"><?php echo _("Practical Cases"); ?></a></li>
                    <li><a href="licence.php"><?php echo _("Licence"); ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right"><?php echo _("Language"); ?></span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="?lang=en_GB"><?php echo _("English");?>&nbsp;<img src="images/img_uk_b.png"    width="22" height="22"/> </a></li>
                            <li><a href="?lang=es_ES"><?php echo _("Spanish");?>&nbsp;<img src="images/img_spain_a.png" width="22" height="22"/></a></li>
                            <!--li><a href="index-video.html">Home video</a></li-->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>