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
		<link rel="stylesheet" href="assets/css/boilerplate-layout.css?x=<?php echo Time();?>">
		<link rel="stylesheet" href="assets/css/pages/customer-service.css?x=<?php echo Time();?>">
		<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>


		<!--[if lt IE 9]>
			<link rel="stylesheet" href="assets/css/ie.css">
		<![endif]-->

	</head>
	<body class="page-customer-service">
		<div id="beta" style="width:200px;position:fixed;z-index:99999;"><img src="/assets/img/beta.png" ></div>
		<div class="preload"></div>

		<?php include_once('__includes/inc.nav.php'); ?>


		<div  id="main" class="main">
			<div class="container">

				<section class="hero">
					<div class="img-holder">
						<img src="assets/img/pages/customer-service/hero-1-image.jpg"/>
					</div>
					<header class="hero-title">
						<span class="hero-ribbon"></span>
						<span class="pre-text">committed to exceptional</span>
						<h1>customer service</h1>
					</header>
				</section><!-- //hero -->



					<div class="hero-img-thumbs">
						<ul class="clearfix">

						<?php for ($i = 1; $i<5; $i++) : ?>
							<?php $first = $i == 1 ? 'first' : ''; ?>
							<?php $last = $i == 4 ? 'last' : ''; ?>
							<li class="<?php echo $last;?> <?php echo $first ?>">
								<img src="assets/img/pages/customer-service/hero-<?php echo $i?>-thumb.jpg" />
							</li>


						<?php endfor ; ?>


						</ul>
					</div>

				<div class="content-row">
					<div class="row callout-wrapper">
						<div class="span6 callout">
							<div class="inner-callout">
								<blockquote>With a mission to consistently provide quality apartment homes in a respectful environment delivered by a team of people who care, Aimco strives to be the best owner and operator of apartment communities. The team delivers on this promise each day, responding to the needs of residents, and creating moments that matter &ndash; exceptional service beyond expectations.
								</blockquote>
							</div>
						</div>

						<div class="span6 article-wrapper">
							<h5>A Healthy</h5>
							<article class="article">
								<h1>Home</h1>
								<p>
									From the moment residents arrive at an Aimco apartment community, they can expect a high quality, healthy living environment. Nearly 70 percent of Aimco'’'s market-rate properties are now smoke-free. Fitness centers, with state-of-the-art cardio equipment, weights, and swimming pools appeal to residents looking for convenient, onsite, workout opportunities. By installing durable, easy- to-maintain, and allergen free materials such as simulated wood flooring — now in 16,600 apartment homes — Aimco has further enhanced the day-to-day living experience for residents. And with 184 pet-friendly apartment communities, Aimco adds another reason for residents to feel at home.
								</p>
							</article>

							<h5>Serving Residents 24/7</h5>
							<article class="article">
								<p>
									Understanding that time is at a premium for residents, Aimco offers an exclusive resident portal where customers can complete business transactions on their own timetable. Customers can view their accounts, pay rent, and set up automatic payments online and on their schedule. Renewing a lease and submitting and tracking service requests are other functions just a few keyboard clicks away, 24/7. The Aimco community teams seek opportunities to go above and beyond to solve problems and provide outstanding customer service. Aimco measures resident satisfaction on an ongoing basis through a series of surveys. Aimco consistently receives favorable ratings in the areas of apartment home cleanliness and responsiveness of the maintenance team. Survey results are shared with each member of the Operations Team, with the goals of continuous improvement and exceeding expectations.
								</p>
							</article>
						</div>
					</div>
				</div>
				
				<div class="content-row last-t">
					<div class="row">
						<div class="span6">
							<article class="testimonial  clearfix">
								<h2>There For You</h2>
								<p>
									"I wanted to personally acknowledge you and thank you for the way you have handled my daughter's rental process. You have exceeded our expectations and it's very comforting for a parent to know that the building is being managed by such a caring and thoughtful team. We appreciate all that you do to make her apartment feel like a home."
								</p>
								<span class="user">&ndash; Parent of a Resident at The Sterling Apartment Homes, Philadelphia</span>
							</article>
							<article class="testimonial  clearfix">
								<p>
									"You, along with your staff, have been doing a terrific job taking care of the building and most especially the residents. I can honestly say that of all the management teams I have had the opportunity to meet in the past, yours is the most professional, hardworking, thoughtful and consistent. You all work as a team and this I would say is the most important thing you could offer to your residents."</p>
								<span class="user">&ndash; From a Resident of Ravensworth Towers, Annandale, Virginia</span>
							</article>
						</div>
					</div> 
				</div>

<!-- 
				<div class="testimonials">
					<article class="testimonial first clearfix">
						<h2>There For You</h2>
						<p>
							"I wanted to personally acknowledge you and thank you for the way you have handled my daughter's rental process. You have exceeded our expectations and it's very comforting for a parent to know that the building is being managed by such a caring and thoughtful team. We appreciate all that you do to make her apartment feel like a home."
						</p>
						<span class="user">&ndash; Parent of a Resident at The Sterling Apartment Homes, Philadelphia</span>
					</article>
					<article class="testimonial second clearfix">
						<p>
							"You, along with your staff, have been doing a terrific job taking care of the building and most especially the residents. I can honestly say that of all the management teams I have had the opportunity to meet in the past, yours is the most professional, hardworking, thoughtful and consistent. You all work as a team and this I would say is the most important thing you could offer to your residents."</p>
						<span class="user">&ndash; From a Resident of Ravensworth Towers, Annandale, Virginia</span>
					</article>

				</div> -->



			</div>
		</div>



		<?php include_once('__includes/inc.footer.php');?>







		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="assets/js/vendor/jquery-ui-1.8.23.custom.min.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.media.js"></script>
		<script src="assets/js/main.js?x=1363629962"></script>
		<script>
			$('.hero-img-thumbs img').click(function(){
				$('.hero .img-holder img').attr('src',$(this).attr('src').replace('thumb','image'));
				return false;
			});
		</script>

	</body>
</html>
