<div id="sidebar">
    <?php if (is_page('contact-us')) : ?>
        <div id="contact-form">
            <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="74" title="Contact Form"]');
            }
            ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
            <section class="shadow">
                <div class="sidebar-top"></div>
                <div class="sidebar-bottom"><h2>Endocrinologist</h2>
                <p>Helping the El Paso Community Lead<br />
                    Better Lives Through Excellent Care</p>
                <a href="<?= SITEURL ?>/contact-us/">
                    <button class="btn btn-outline">SCHEDULE AN APPOINTMENT</button>
                </a></div>
            </section>

            <section>
                <div class="sidebar-top-dark">
                    <p>Our clinic provides<br />
                    patients in the El Paso area with<br /> the following diagnosis:</p>
                </div>
                <div class="services-box sidebar-bottom-dark">
                    <ul class="flex-row">
                        <li><a href="<?=SITEURL?>/hyperthyroidism-treatment-el-paso/">Hyper Thyroidism</a></li>
                        <li><a href="<?=SITEURL?>/transgender-doctor-el-paso">Transgender</a></li>
                        <li><a href="<?=SITEURL?>/osteoporosis-doctor-el-paso">Osteoporosis</a></li>
                        <li><a href="<?=SITEURL?>/thyroid-doctor-el-paso">Thyroid Diseases</a></li>
                        <li><a href="<?=SITEURL?>/obesity-treatment-el-paso">Obesity Management</a></li>
                        <li><a href="<?=SITEURL?>/adrenal-fatigue">Adrenal Fatigue</a></li>
                    </ul>
                </div>
            </section>
    <?php endif; ?>
</div>
