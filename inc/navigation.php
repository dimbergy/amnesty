<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#page-top">
                <i class="fa fa-play-circle" style="visibility: hidden"></i> <img class="logo" src="img/logo.png" alt="logo" width="100" /> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#about">Who we are</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">What we do</a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="page-scroll"><a href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#mission">Our mission</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= $root ?>discrimination">Discrimination</a></li>
                        <li><a href="<?= $root ?>torture">Torture</a></li>
                        <li><a href="<?= $root ?>sexualrights">Sexual rights</a></li>
                        <li><a href="<?= $root ?>dignity">Living in dignity</a></li>
                    </ul>



                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">When we were born</a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="page-scroll"><a href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#history">Our Past & Present</a></li>
                        <li class="divider"></li>
                        <li class="page-scroll"><a href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#history1">Our history</a></li>

                    </ul>
                </li>

                <li class="page-scroll">
                    <a href="<?= isset($page['home']) && $page['home'] ? '' : $root ?>#contact">Contact us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>