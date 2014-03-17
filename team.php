<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>AIMCO </title>

		<link rel="stylesheet" href="assets/css/normalize.css">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/fancybox.css">
		<link rel="stylesheet" href="assets/css/boilerplate-layout.css">
		<link rel="stylesheet" href="assets/css/pages/team.css">
		<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>


		<!--[if lt IE 9]>
			<link rel="stylesheet" href="assets/css/ie.css">
		<![endif]-->

	</head>
	<body class="page-team">
		<?php include_once('__includes/inc.nav.php'); ?>


		<div  id="main" class="main">
			<div class="container">

				<section class="hero">
					<div class="img-holder">
						<img src="assets/img/pages/team/hero-1-image.jpg"/>
					</div>
					<header class="hero-title">
						<span class="hero-ribbon"></span>
						<span class="pre-text">Inspired By A</span>
						<h1>Talented Team</h1>
					</header>
					<div class="caption">
						<span class="caption-caret"></span>
						<p>
							Aimco's collaborative, performance-oriented culture engages teammates and fosters strong results.<br /> &nbsp;
						</p>
					</div>
				</section><!-- //hero -->   

				<div class="hero-img-thumbs">
					 <ul class="clearfix">

						<?php for ($i = 1; $i<8; $i++) : ?>
							<?php $first = $i == 1 ? 'first' : ''; ?>
							<?php $last = $i == 4 ? 'video fancybox-media' : '';  ?>
							<?php  /* $video_url = $i == 4 ? 'assets/videos/Priscilla_Gonzales.swf' : '';   */ ?>
							<?php  $video_url = $i == 4 ? 'http://www.youtube.com/embed/BjCHJ-T2hsA' : '';  ?>
							<li class="<?php echo $last;?> <?php echo $first ?>">
								<a href="<?php echo $video_url; ?>">
									<img src="assets/img/pages/team/hero-<?php echo $i?>-thumb.jpg" />
								</a>
							</li>
						<?php endfor ; ?>

						</ul>
						<a class="prev" id="rotate_items_prev" href="#" style="display: block;"><span>prev</span></a>
						<a class="next" id="rotate_items_next" href="#" style="display: block;"><span>next</span></a>
				</div>




				<div class="action-img">
					<img src="assets/img/pages/team/vision.jpg"/>
					<a  href="/assets/pdfs/AC Week National Release 2012.pdf" class="events">Events Link</a>
				</div>

				<div class="content-row">
					<div class="row">
						<div class="span6 article-wrapper">
							<h5>Promoting</h5>
							<article class="article">
								<h1>Team Culture</h1>
								<p>
									The women and men who build their careers at Aimco embrace the values of integrity, respect, collaboration, customer focus, and performance — creating an environment of success and producing positive results for our residents, shareholders and communities.
								</p>
								<p>
									The introduction and adoption of Aimco’s cultural pillars was a significant highlight of 2013. Developed by more than one-hundred team members from across the country, the building blocks of living with gusto, taking ownership, valuing relationships, creating moments that matter, and driving innovation and change, shape and motivate the daily interactions of the Aimco team.
								</p>
								
							</article>
						</div>

						<div class="span6 article-wrapper">
							<h5>Creating a</h5>
							<article class="article">
								<h1>Career Path</h1>
								<p>
									Aimco's performance culture recognizes and supports team members along their career path by promoting from within and offering a myriad of job training opportunities. Aimco cultivates internal talent and places a premium on helping team members identify the job that best matches their skills. In 2013, nearly 70 percent of open management positions were filled from within, a testament to Aimco's strong bench, and the potential for internal mobility. To help team members achieve success, and prepare for greater job responsibilities, Aimco offers extensive training: this past year, team members completed 30,000 online learnings, classroom trainings, and webinars, including more than 550 leadership training sessions.
								</p>
							</article>
						</div>
					</div>
				</div>


				<div class="row clearfix">
					<div class="span4">
						<img src="assets/img/pages/team/denverpost.png" />
					</div>

					<div class="span7 pull-right article-wrapper">
						<h5>Recognized for </h5>
						<article class="article">
							<h1>Excellence</h1>
							<p>
								Aimco earned a Top Workplace designation from The Denver Post in 2013, benchmarked against other companies. In a comprehensive survey of team members, the company received high marks for workplace culture, leadership, community involvement and promoting a healthy work/life balance. <a href="http://www.denverpost.com/topworkplaces/ci_22970667/giving-back-community">Read more</a></p>
						<article>
					</div>
				</div>

			</div>
		</div>



		<?php include_once('__includes/inc.footer.php');?>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="assets/js/vendor/jquery-ui-1.8.23.custom.min.js"></script>
		<script src="assets/js/vendor/jquery.carousel.min.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.media.js"></script>
		<script src="assets/js/main.js"></script>
		<script type="text/javascript">

			$(function(){
			  $('.video > a').fancybox({
					'aspectRatio'       : true,
					'padding'           : 0,
					'autoScale'         : false,
					'transitionIn'      : 'none',
					'transitionOut'     : 'none',
					'helpers' 					: {media : {} }
				});


				$('.hero-img-thumbs li:not(.video) img').click(function(){
					$('.hero .img-holder img').attr('src',$(this).attr('src').replace('thumb','image'));
					return false;
				});

				$(".hero-img-thumbs ul").carouFredSel({
					items               : 5,
					direction           : "left",
					width               : 940,
					height              : 'variable',
					align               : 'center',
					scroll : {
						items           : 1,
						easing          : "linear",
						duration        : 500,
						pauseOnHover    : true
					},
					prev    : { 
						button  : "#rotate_items_prev",
						key     : "left"
					},
					next    : { 
						button  : "#rotate_items_next",
						key     : "right"
					}             
				});

			});
		</script>
	</body>
</html>
