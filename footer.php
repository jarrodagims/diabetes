    <div id="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13566.061259947093!2d-106.266695!3d31.783703!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e7443af539703d%3A0xf521c96b5f088c4e!2s2270+Joe+Battle+Blvd+Suite+O%2C+El+Paso%2C+TX+79938!5e0!3m2!1sen!2sus!4v1543612076797" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
<section id="footer">
    <div class="container">
            <div class="flex-row row">
                <div class="col-xs-12 flex-col">
                    <div class="footer-blocks">
                        <div class="logo-footer">
                            <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                                        src="<?= IMGURL; ?>logo.png"
                                        alt="<?php echo get_bloginfo(
                                            'description'
                                        ); ?>"/></a>
                        </div>


                        <div class="contact-footer phone-footer">
                        <div><span class="title">Address</span>
                            <p>2270 Joe Battle Blvd Suite O<br />
                                El Paso, TX 79938<br />
                                <strong>By appointment only</strong><br />
                                <a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><?php printPhone(); ?></a></p>
                        </div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">Office HOURS</span>
                            <p>Monday - Friday:<br />
                                <strong>8:00am - 5:00pm</strong><br />
                                Saturday - Sunday:<br />
                                <strong>Closed</strong></p>

                            <div class="visible-xs visible-sm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                            $sm->setSize('sm');
                            $sm->showNetworkButtons();
                            $sm->setColorType('singleColor');
                            ?></div>
                        </div>
                    </div>

                    <div class="button-footer hidden-xs hidden-sm">
                        <a href="<?= SITEURL ?>/contact-us/">
                            <button class="btn btn-outline">SCHEDULE AN APPOINTMENT</button>
                        </a>
                    </div></div>
                </div>
            </div>
    </div>
</section>
<section class="footer-nav hidden-xs hidden-sm ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="flex-row">
                    <div class="flex-col hidden-xs hidden-sm">
                        <?php echo non_responsive_bs_menu('footer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sub-footer">
    <div class="container">
        <div class="flex-row row">
            <div class="flex-col hidden-xs hidden-xm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('sm');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?></div>
            <div class="flex-col">
                <div>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | All Rights Reserved</div>
            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
</body>
</html>