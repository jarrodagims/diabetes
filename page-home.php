<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>

<section id="home-module-1">
    <div class="brand-header visible-xs visible-sm">
        <a class="navbar-brand visible-xs" href='<?php echo get_site_url(); ?>'><img
                    src="<?= IMGURL; ?>logo.png"
                    alt="<?php echo get_bloginfo(
                        'description'
                    ); ?>" /></a>
    </div>
    <img class="visible-xs visible-sm" src="<?=THEMEURL?>/img/bg-hero-mobile.jpg" alt="" />
    <div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
                <div class="jumbotron">
                    <div class="jumbo-content">
                        <h1>Endocrinologist
                            <span>Helping the El Paso Community Lead<br />Better Lives Through Excellent Care</span></h1>

                        <a href="<?= SITEURL ?>/contact-us/">
                            <button class="btn btn-outline">SCHEDULE AN APPOINTMENT</button>
                        </a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</section>
<section id="home-module-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-6 text-right">
                    <div class="flex-row">
                        <div class="flex-col">
                            <a href="<?= SITEURL ?>/diabetes-management-el-paso/"><?php get_template_part('template-parts/icons/icon', '1'); ?></a>
                        </div>
                        <div class="flex-col">
                            <a href="<?= SITEURL ?>/diabetes-management-el-paso/">
                                <h3><span class="arrow"><span>Diabetes Management</span> <span class="type">Type 1&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Type 2</span></span></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6">
                    <div class="flex-row">
                        <div class="flex-col">
                            <a href="<?= SITEURL ?>/diabetes-symptoms/"><?php get_template_part('template-parts/icons/icon', '2'); ?></a>
                        </div>
                        <div class="flex-col">
                            <a href="<?= SITEURL ?>/diabetes-symptoms/">
                                <h3><span class="arrow">Diabetes Symptoms</span></h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="flex-order">
    <section id="home-module-3">
        <div class="extra-padding"><img src="<?=THEMEURL?>/img/bg-woman-mobile.jpg" class="visible-xs visible-sm" alt="" /></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="accordion-btn" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><h2><span>Best Patient Centered Clinic in El Paso</span></h2></div>
                    <div id="collapseExample" class="accord collapse">
                        <ul>
                            <li><span>Best Patient-Centered Clinic in El Paso</span></li>
                            <li>
                                <span>Dr. Ifeoma Egbuonu is a Highly Reviewed Endocrinologist</span></li>
                            <li><span><strong>Being Local is Important to Us</strong> — We Strive to Give Back to This Wonderful Community</span>
                            </li>
                            <li><span>We’re Passionate About Our Practice!</span></li>
                            <li>
                                <span>Our Medical Center is Located on the East Side of Town</span></li>
                            <li><span>We Value Patient Reviews, Please Leave Us One Today</span>
                            </li>
                            <li><span>Our Office is Attentive to Your Needs, You’ll Always Be Attended To With Fast and Friendly Service!</span>
                            </li>
                            <li><span>We Specialize in the Diagnosis of Thyroid Cancer</span></li>
                            <li><span><strong>We Operate by Appointment Only</strong>; Please Schedule Your Consultation Today</span>
                            </li>
                            <li><span>Our Transgender Medicine Specialist is One of the Few in the El Paso Area</span>
                            </li>
                            <li><span><strong>Diabetes is a Treatable Disease</strong> — It’s Important to Seek Care Early On</span>
                            </li>
                            <li><span>Our Endocrinologist and Diabetes Doctor Provides Thorough Evaluations and Will Recommend Proper Treatments</span>
                            </li>
                        </ul>
                    </div>
                    <div class="extra-padding"><h3>Diabetes &amp; Endocrinology Specialists of <span class="br-md">El Paso Focuses on Your Unique Needs</span></h3>
                    <p>We are experts in diabetes and thyroid conditions as well as transgender medicine. Our team is dedicated to diagnosing and providing the best form of treatment based on your specific condition. As an endocrinologist and diabetes doctor, Dr. Dr. Egbuonu has devoted her education and practice to the latest forms of medical care in these two areas.</p></div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="<?=THEMEURL?>/img/bg-woman.jpg" class="shadow hidden-xs hidden-sm" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section id="home-module-4">
        <div class="container">
            <div class="row flex-row">
                <div class="col-xs-12 col-md-6 flex-col">
                    <div class="accordion-btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample"><h2>Our clinic provides<br />
                            patients in the El Paso area<br /> with the following diagnosis:</h2></div>
                    <div id="collapse2" class="accord collapse">

                        <div class="columns">
                            <div class="column">
                                <ul>
                                    <li><span>Diabetes (Type 1 and Type 2)</span></li>
                                    <li><span>Hyperthyroidism</span></li>
                                    <li><span>Hypothyroidism</span></li>
                                    <li><span>Hypogonadism</span></li>
                                    <li><span>Thyroid Nodules</span></li>
                                    <li><span>Thyroid Cancer</span></li>
                                    <li><span>Pituitary Tumors</span></li>
                                </ul>
                            </div>
                            <div class="column">
                                <ul>
                                    <li><span>Adrenal Glands Disorder</span></li>
                                    <li><span>Adrenal Fatigue</span></li>
                                    <li><span>Osteoporosis</span></li>
                                    <li><span>Polycystic Ovarian Syndrome</span></li>
                                    <li><span>Transgender Medicine</span></li>
                                    <li><span>Calcium Disorders</span></li>
                                    <li><span>Obesity</span></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xs-12 col-md-6 flex-col">
                    <div class="services-box">
                        <div>
                            <h2>Other Services</h2>
                            <ul>
                                <li><a href="<?=SITEURL?>/hyperthyroidism-treatment-el-paso/">Hyperthyroidism</a></li>
                                <li><a href="<?=SITEURL?>/transgender-doctor-el-paso">Transgender</a></li>
                                <li><a href="<?=SITEURL?>/osteoporosis-doctor-el-paso">Osteoporosis</a></li>
                                <li><a href="<?=SITEURL?>/thyroid-doctor-el-paso">Thyroid Diseases</a></li>
                                <li><a href="<?=SITEURL?>/obesity-treatment-el-paso">Obesity Management</a></li>
                                <li><a href="<?=SITEURL?>/adrenal-fatigue">Adrenal Fatigue</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section id="home-module-5">
	<div class="container">
		<div class="row flex-row">
			<div class="col-xs-12 col-md-6 flex-col">
                <div class="flex-row">
                    <div class="flex-col">
                        <span>Contact us Today!</span>
                    </div>
                    <div class="flex-col">
                        <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                        $sm->setSize('md');
                        $sm->showNetworkButtons();
                        $sm->setColorType('singleColor');
                        ?>
                    </div>
                </div>
			</div>
			<div class="col-xs-12 col-md-6">
				<h2>What Can I Expect as a Patient?</h2>
			</div>
		</div>
	</div>
</section>
<section id="home-module-6">
	<div class="container">
		<div class="row flex-row">
			<div class="col-xs-12 col-md-6 flex-col">
                <img class="visible-xs visible-sm" src="<?=IMGURL?>/bg-diag2-mobile.jpg" alt="">
				<div class="box"><h2>As a patient of Diabetes &amp; Endocrinology Specialists of El Paso, you can expect to receive the best of care available in the Southwest.</h2></div>
			</div>
			<div class="col-xs-12 col-md-6 flex-col">
				<div class="extra-padding"><h3>When you come to us a new patient, we’ll first <span class="br-md">evaluate your medical records.</span></h3>
				<p>This will allow our endocrinologist and diabetes doctor to better assess your history of any former illnesses and how it relates to your present health. Following your evaluation, Dr. Egbuonu will give you a treatment plan, all based on your needs. Our personalized approach is designed to give you the results needed to achieve optimum health as well as your goals for a happier, more successful life.</p></div>
			</div>
		</div>
	</div>
</section>
<section id="home-module-7">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?> text-center">
				<div class="extra-padding"><h2>Receive Personalized Care by Contacting Us Today</h2>
				<p>To schedule your consultation, simply give us a call today. Our friendly office manager will help <span class="br-md">answer all of your questions. Please note, we work on an appointment-only basis so that you <span class="br-md">can receive prompt, courteous, and dedicated service. We look forward to meeting you!</span></span></p></div>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>