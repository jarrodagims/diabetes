    <div id="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13564.618441970673!2d-106.40024!3d31.793536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8ef377214c06e38!2sA+D+Roofing!5e0!3m2!1sen!2sus!4v1543275676790" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                        <div><span class="title">Contact</span>
                            <p>6455 Hiller Suite 10, El Paso, Texas 79925<br />
                                <strong>Call Us Today!</strong> <?php printPhone(); ?></p>
                        </div>
                    </div>
                    <div class="hours-footer">
                        <div>
                            <span class="title">HOURS</span>
                            <p>Monday - Friday: <strong>7:00am - 7:00pm</strong><br />
                                Saturday -  Sunday: <strong>Closed</strong></p>
                        </div>
                    </div>

                    <div class="button-footer">
                        <img src="<?=IMGURL?>better-business.png" alt="Better Business Bureau" />
                    </div></div>
                </div>
            </div>
    </div>
</section>
<section class="footer-nav ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="flex-row">
                    <div class="flex-col hidden-xs hidden-sm">
                        <?php echo non_responsive_bs_menu('footer'); ?>
                    </div>
                    <div class="flex-col">
                        <a href=""><button class="btn btn-outline">SCHEDULE AN APPOINTMENT</button></a>

                        <div class="visible-xs visible-sm"><?php $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('sm');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?></div>
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