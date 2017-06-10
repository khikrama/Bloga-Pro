<?php
global $xlt_option;
?>
<!--Header Top -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact">
                    <span>Have any question? </span>
                    <span class="phone"><i class="fa fa-phone"></i>+1 1578 8554</span>
                    <span class="email"><i class="fa fa-envelope-o"></i>info@yourdomain.com</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <?php include ('header-parts/social.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Section -->
<header class="header-area <?php //echo $xlt_option['sticky_header'] ? 'navbar-fixed-top' : 'no-navbar-fixed'; ?>">
    <div class="container">
        <div class="menu">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
                            <span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'bloga' ); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-brand">

                            <?php if($xlt_option['xl_logo_on_off']) : ?>
                                <a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $xlt_option['xl_logo']['url']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
                            <?php else: ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php endif; ?>
                        </div><!--/.navbar-brand-->

                    </div><!-- /.navbar-header -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menu-collapse">

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container' 	 => '',
                                'items_wrap' 	 => '<ul class="nav navbar-nav navbar-right sm sm-blue main-menu">%3$s</ul>',
                                'depth'      	 => 3,
                                'fallback_cb'     => 'bloga_default_menu',
                            )
                        );
                        ?>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav><!-- /.navbar -->
        </div><!-- /.menu -->
    </div><!-- /.container -->
</header><!-- /.header-area -->