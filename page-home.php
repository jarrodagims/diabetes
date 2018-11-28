<?php
	/*
		Template Name: Home	
	*/
	get_header(); ?>

<section id="home-module-1">
    <a class="navbar-brand visible-xs visible-sm" href='<?php echo get_site_url(); ?>'><img
    src="<?= IMGURL; ?>logo.png"
    alt="<?php echo get_bloginfo(
        'description'
    ); ?>" /></a>
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
                            <?php get_template_part('template-parts/icons/icon', '1'); ?>
                        </div>
                        <div class="flex-col">
                            <a href="">
                                <h3><span class="arrow">Diabetes Management</span> <span class="type">Type 1 | Type 2</span></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6">
                    <div class="flex-row">
                        <div class="flex-col">
                            <?php get_template_part('template-parts/icons/icon', '2'); ?>
                        </div>
                        <div class="flex-col">
                            <a href="">
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
        <img src="<?=THEMEURL?>/img/bg-woman-mobile.jpg" class="visible-xs visible-sm" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="accordion-btn" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><h2>Best Patient Centered Clinic in El Paso</h2></div>
                    <div id="collapseExample" class="accord collapse">

                        <ul>
                            <li class="fas fa-check"><span>Best Patient-Centered Clinic in El Paso</span></li>
                            <li class="fas fa-check">
                                <span>Dr. Ifeoma Egbuonu is a Highly Reviewed Endocrinologist</span></li>
                            <li class="fas fa-check"><span>Being Local is Important to Us — We Strive to Give Back to This Wonderful Community</span>
                            </li>
                            <li class="fas fa-check"><span>We’re Passionate About Our Practice!</span></li>
                            <li class="fas fa-check">
                                <span>Our Medical Center is Located on the East Side of Town</span></li>
                            <li class="fas fa-check"><span>We Value Patient Reviews, Please Leave Us One Today</span>
                            </li>
                            <li class="fas fa-check"><span>Our Office is Attentive to Your Needs, You’ll Always Be Attended To With Fast and Friendly Service!</span>
                            </li>
                            <li class="fas fa-check"><span>We Specialize in the Diagnosis of Thyroid Cancer</span></li>
                            <li class="fas fa-check"><span>We Operate by Appointment Only; Please Schedule Your Consultation Today</span>
                            </li>
                            <li class="fas fa-check"><span>Our Transgender Medicine Specialist is One of the Few in the El Paso Area</span>
                            </li>
                            <li class="fas fa-check"><span>Diabetes is a Treatable Disease — It’s Important to Seek Care Early On</span>
                            </li>
                            <li class="fas fa-check"><span>Our Endocrinologist and Diabetes Doctor Provides Thorough Evaluations and Will Recommend Proper Treatments</span>
                            </li>
                        </ul>
                    </div>
                    <div class="extra-padding"><h3>Diabetes &amp; Endocrinology Specialists of El Paso Focuses on Your Unique Needs</h3>
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
                        <ul>
                            <li class="fas fa-check"><a href=""><span>Diabetes (Type 1 and Type 2)</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Hyperthyroidism</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Hypothyroidism</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Hypogonadism</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Thyroid Nodules</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Thyroid Cancer</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Pituitary Tumors</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Adrenal Glands Disorder</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Adrenal Fatigue</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Osteoporosis</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Polycystic Ovarian Syndrome</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Transgender Medicine</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Calcium Disorders</span></a></li>
                            <li class="fas fa-check"><a href=""><span>Obesity</span></a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-xs-12 col-md-6 flex-col">
                    <div class="services-box">
                        <div>
                            <h2>Other Services</h2>
                            <ul>
                                <li><a href="#">Hyper Thyroidism</a></li>
                                <li><a href="#">Transgender</a></li>
                                <li><a href="#">Osteoporosis</a></li>
                                <li><a href="#">Thyroid Diseases</a></li>
                                <li><a href="#">Obesity Management</a></li>
                                <li><a href="#">Adrenal Fatigue</a></li>
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
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<span>Contact us Today!</span>
                <?php $sm = new SocialMedia(array('facebook', 'twitter'));
                $sm->setSize('md');
                $sm->showNetworkButtons();
                $sm->setColorType('singleColor');
                ?>
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
				<div class="box"><h2>As a patient of Diabetes &amp; Endocrinology Specialists of El Paso.</h2>
				<p>You can expect to receive the best of care available in the Southwest.</p></div>
			</div>
			<div class="col-xs-12 col-md-6 flex-col">
				<h3>When you come to us a new patient, we’ll first evaluate your medical records.</h3>
				<p>This will allow our endocrinologist and diabetes doctor to better assess your history of any former illnesses and how it relates to your present health. Following your evaluation, Dr. Egbuonu will give you a treatment plan, all based on your needs. Our personalized approach is designed to give you the results needed to achieve optimum health as well as your goals for a happier, more successful life.</p>
			</div>
		</div>
	</div>
</section>
<section id="home-module-7">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?> text-center">
				<div class="extra-padding"><h2>Receive Personalized Care by Contacting Us Today</h2>
				<p>To schedule your consultation, simply give us a call today. Our friendly office manager will help answer all of your questions. Please note, we work on an appointment-only basis so that you can receive prompt, courteous, and dedicated service. We look forward to meeting you!</p></div>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>