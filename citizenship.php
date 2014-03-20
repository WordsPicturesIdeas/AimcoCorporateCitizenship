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
		<link rel="stylesheet" href="assets/css/pages/citizenship.css">
		<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>


		<!--[if lt IE 9]>
			<link rel="stylesheet" href="assets/css/ie.css">
		<![endif]-->

	</head>
	<body class="page-citizenship">
		<div class="preload"></div>

		<?php include_once('__includes/inc.nav.php'); ?>


		<div  id="main" class="main">
			<div class="container">

				<section class="hero">
					<div class="img-holder">
						<img src="assets/img/pages/citizenship/hero-1.jpg" alt="citizenship image"/>
					</div>
					<header class="hero-title">
						<span class="hero-ribbon"></span>
						<span class="pre-text">Outstanding Corporate</span>
						<h1>citizenship</h1>
					</header>
				</section><!-- //hero -->


				<div class="row clearfix">
					<div class="articles">
						<article class="article">
							<h1>Meeting Community Needs</h1>
							<p>
								From Miami to Los Angeles, the Aimco team welcomes opportunities to contribute to the success of local initiatives that support economic development and community well-being. In Miami Beach, Aimco demonstrated its support for the City’s goal of providing a public promenade to showcase the beauty of Biscayne Bay. Aimco stepped forward to construct a 1/3 mile section of the Baywalk, adjacent to the Flamingo South Beach Apartments. The new section provides citizens with greater connectivity around the Bay and offers Aimco residents access to nearby South Beach amenities and services.
							</p>
							<p>
								In Los Angeles, Aimco continues its strong partnership with area business leaders and elected officials through its involvement in the Los Angeles Business Council. Aimco serves annually as a sponsor of the Mayor’s Housing, Transportation and Jobs Summit. The company also presents the annual Aimco Housing Impact Award, this year given to California Secretary of Housing and Community Development Anna Caballero in honor of her role in promoting housing and economic sustainability.
							</p>
						</article>
					</div>

					<div class="aside">
						<article class="article sanctuary-video video">
							<a href="assets/videos/Thank_you_AIMCO.swf">
								<img src="assets/img/pages/citizenship/aside-img-1.jpg"/>
							</a>
							<div class="caption">
								<p>
									Miami Beach Commissioner Michael Gongora, City Manager Jimmy L. Morales, and Aimco Senior Vice President Patti Shwayder walk along a new, 1/ 3 mile stretch of the Baywalk constructed by Aimco adjacent to The Flamingo South Beach Apartments. The project signifies a new partnership between Aimco and the City to connect South Beach residents to city attractions and amenities.
									<a href="http://www.snl.com/irweblinkx/file.aspx?IID=103180&FID=17082879" style="border-bottom:none;">Read More</a>&raquo;
								</p>
							</div>
						</article>
					</div>
				</div>


				<div class="row clearfix">
					<div class="articles">
						<article class="article">
							<h1>Supporting Good Works</h1>
							<p>
								The annual Aimco Cares Charity golf classic marked its 10th anniversary in 2013, and the results were worth celebrating. Through the generosity of its sponsors, the tournament exceeded its goal, raising $560,000 for philanthropic causes. Benefiting from the proceeds were the Tragedy Assistance Program for Survivors, Project Sanctuary, and the Aimco Opportunity Scholarship which provides scholarships for students in affordable housing and is administered by the National Leased Housing Association's
							</p>
						</article>

						<article class="article">
							<h1>Aimco Cares</h1>
							<p>
								Aimco lives its value of giving back through its philanthropic program, Aimco Cares. Every Aimco team member receives 10 paid hours of time each year to volunteer in the community. Aimco Cares teams across the country get involved in a broad spectrum of projects to benefit local non-profits. Whether building trails in a local park, serving meals at a shelter, working at a local food bank, or uplifting the spirits of children undergoing medical treatment, team members give of themselves in ways meaningful to them while improving communities. During two, team-designated, national weeks of community service and throughout 2013, team members participated in 133 separate Aimco Cares events.
							</p>
						</article>

						<article class="article">
						
							<section class="meta clearfix">
								<div class="images">
									<div class="image-holder">
										<img src="assets/img/pages/citizenship/ms-1-image.jpg"/>
									</div>
										<?php $captions = array(
											1 => 'Food Bank: The Food Bank of the Rockies welcomes the hard work of Aimco volunteers who sort and pack food donations in its warehouse.',
											2 => 'MS Bike Race – RIDING FOR A CURE: Under the leadership of Patti Fielding, Aimco\'s Executive Vice President of Debt and Treasury, Aimco partners each year with the MS Society of Colorado and Wyoming. The MS 150 benefits individuals living with the life-altering disease. Since 2008, nearly 200 Aimco team members have completed the 150-mile course, and raised close to $214,000.',
											3 => 'Philadelphia: Aimco Philadelphia team members partnered with leaders of the University City District to clean a vacant lot and help improve the appearance of a local neighborhood.',
											4 => 'Tennyson Center: Team members volunteered at the Tennyson Center for abused and neglected children during one of two national Aimco Cares Community Service Weeks.',
											5 => 'Ronald McDonald House: The Ronald McDonald House holds a special place in the hearts of Aimco team members who volunteer regularly to prepare and serve meals to families dealing with serious medical issues.'
										);
										?>
									<p class="image-caption">
										   <?php echo $captions[1] ?>
									</p>

									<ul class="image-thumbnails clearfix">

										<?php for ($i=1; $i<6; $i++) : ?>

										<li>
											<a href="">
												<img src="assets/img/pages/citizenship/ms-<?php echo $i?>-thumb.jpg" alt="<?php echo $captions[$i] ?>"/>
											</a>
										</li>

										<?php endfor; ?>
									</ul>

								</div>
							</section>
						</article>



					</div>

					<div class="aside">
						<article class="article">
							<img src="assets/img/pages/citizenship/aside-img-2.jpg"/>
							<div class="caption blue">
								<p>
									The Aimco D.C. team presents a check to TAPS for $160,000 in proceeds from the Aimco Cares Charity Golf Classic. Aimco cherishes its partnerships with military organizations that support our country's men and women in uniform, and their families. With this year's contribution, Aimco has donated well over $600,000 to Tragedy Assistance Program for Survivors in the last six years.
								</p>
							</div>
						</article>

						<article class="article">
							<img src="assets/img/pages/citizenship/aside-img-3.jpg"/>
							<div class="caption blue">
								<h2>Aimco Cares Opportunity Fund: Scholarships for Students in Affordable Housing</h2>
								<p>
									<strong>Aisha Farooq</strong><br />Studying business and pre-med at the -University of Mary Washington in Fredericksburg, Virginia
								</p>
								<p>
									<strong>Alicia Rodriquez</strong><br />Earning a degree in sociology with a social work minor at Texas State University
								</p>
								<p>
									<strong>Yu-Xi Chen</strong><br />A recent Aimco resident majoring in electrical engineering at the University of Maryland
								</p>
							</div>
						</article>

					</div>
				</div>

			</div>
		</div>



		<?php include_once('__includes/inc.footer.php');?>







		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="assets/js/vendor/jquery-ui-1.8.23.custom.min.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.media.js"></script>
		<script src="assets/js/main.js?x=1363629962"></script>
		<script type="text/javascript">


			$(function(){
			  $('.video a').fancybox({
					'width'             : 600,
					'height'            : 400,
					'aspectRatio'       : true,
					'padding'           : 0,
					'autoScale'         : false,
					'transitionIn'      : 'none',
					'transitionOut'     : 'none'
				});


				$('.image-thumbnails li img').click(function(){
					$('.meta .image-holder img').attr('src', $(this).attr('src').replace('thumb','image'));
					$('.meta .image-caption').html($(this).attr('alt'));
					return false;
				});

			});
		</script>

	</body>
</html>
