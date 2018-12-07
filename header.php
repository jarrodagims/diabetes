<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KPCS894');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

        <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPCS894"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if (is_front_page()) : ?>
<div class="landing-bg"><?php endif; ?>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->

    <div class="flex-order">
        <div class="top-header">
            <div class="container">
                <div class="row ">
                    <div class="v-align">
                        <div class="col-xs-12 navbar-button text-center">
                            <a class="navbar-brand hidden-xs" href='<?php echo get_site_url(); ?>'><img
                                        src="<?= IMGURL; ?>logo.png"
                                        alt="<?php echo get_bloginfo(
                                            'description'
                                        ); ?>" height="137" /></a>
                            <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
                            <ul class="nav navbar-nav navbar-right social-media sm">
                                <li class="menu-item">
                                    <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                                    $sm->setSize('sm');
                                    $sm->showNetworkButtons();
                                    $sm->setColorType('singleColor');
                                    $sm->setListType('listUnstyled');
                                    ?>
                                </li>
                                <li class="menu-item directions"><a
                                            href="<?php echo get_site_url() ?>/contact-us"><span>2270 Joe Battle Blvd Suite O El Paso, TX 79938</span></a></li>
                                <li class="menu-item contact visible-xs"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>">
                                        <button class="btn-primary btn">Call Now</button></a></li>
                                <li class="menu-item contact hidden-xs"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><span><?php printPhone(); ?></span></a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if(!is_front_page()) : ?>
    <div class="top-banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                        if(have_posts() && is_page()) {
                        while(have_posts()) {
                        the_post();
                            echo get_the_title();
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

