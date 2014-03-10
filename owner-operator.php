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
		<link rel="stylesheet" href="assets/css/pages/owner-operator.css">
		<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>


		<!--[if lt IE 9]>
			<link rel="stylesheet" href="assets/css/ie.css">
		<![endif]-->

	</head>
	<body class="page-owner-operator">
	<div id="beta" style="width:200px;position:fixed;z-index:99999;"><img src="/assets/img/beta.png" alt='chart' ></div>
		<?php include_once('__includes/inc.nav.php'); ?>


		<div  id="main" class="main">
			<div class="container">

				<section class="hero">
					<header class="hero-title">
						<span class="hero-ribbon"></span>
						<span class="pre-text">Being the Best</span>
						<h1>Owner &amp; Operator</h1>
					</header>

					<section class="slider-wrapper">

						<div class="tabbable tabs-left clearfix">
						  <ul class="nav nav-tabs pull-left">
							<li class="active">
								<a href="#lincoln-place" data-toggle="tab">
									<span class="title">Lincoln Place</span>
									<span class="details">
										Aimco’s multi-year redevelopment at Lincoln Place in Venice, CA made progress in 2013, delivering 204 renovated apartment homes that combine mid-20th century features with contemporary amenities.
										<span class="inline_anchor" onclick="window.location = 'http://www.snl.com/irweblinkx/file.aspx?IID=103180&FID=14725951';">Read More &raquo;</span>
									</span>
								</a>
							</li>
							<li >
								<a href="#preserve-at-marin" data-toggle="tab">
									<span class="title">Preserve at marin</span>
									<span class="details">
										The $50 million renovation of Preserve at Marin is taking shape and is welcoming new residents to its 126 luxury apartment homes in the Town of Corte Madera, CA. 
										<span class="inline_anchor" onclick="window.location = 'http://www.snl.com/irweblinkx/file.aspx?IID=103180&FID=15566388';">Read More &raquo;</span>
									</span>
								</a>
							</li>
							<li >
								<a href="#pacific-bay-vistas" data-toggle="tab">
									<span class="title">Pacific Bay Vistas</span>
									<span class="details">
										Aimco, San Bruno, CA Mayor Jim Ruane and City officials celebrated the $121 million redevelopment of Pacific Bay Vistas with a ribbon cutting in 2013.
									</span>
								</a>
							</li>
							<li >
								<a href="#canal" data-toggle="tab">
									<span class="title">One Canal</span>
									<span class="details">
										In 2013 Aimco broke ground for the development of One Canal, a $190 million, 12-story building, which will help revitalize Boston’s historic Bulfinch Triangle neighborhood. Aimco was joined by Boston Mayor Thomas M. Menino and Massachusetts Department of Transportation CEO and Secretary Richard Davey for the occasion.
										<span class="inline_anchor" onclick="window.location = 'http://www.snl.com/irweblinkx/file.aspx?IID=103180&FID=20037809';">Read More &raquo;</span>
									</span>
								</a>
							</li>
							<li >
								<a href="#elm-creek" data-toggle="tab">
									<span class="title">Elm Creek</span>
									<span class="details">
										Elmhurst city officials joined Aimco for the official opening of 28 two- and three-bedroom luxury townhomes adjacent to Aimco’s Elm Creek Apartments, and just 17 miles from downtown Chicago.
										<span class="inline_anchor" onclick="window.location = 'http://elmhurst.patch.com/groups/announcements/p/grand-opening-of-luxury-townhomes-adjacent-to-elm-creek-apartments';">Read More &raquo;</span>
									</span>
								</a>
							</li>
						  </ul>
							<div class="tab-content">
								<div class="tab-pane active" id="lincoln-place">
									<section class="image-holder">
										<div class="large-image-holder">
											<img src="assets/img/pages/owner-operator/lincoln-place-1-image.jpg" alt='image'/>
										</div>
										<div class="thumbnail-image-holder">
											<ul class="clearfix">
												<?php for ($i =1 ; $i < 5; $i++) : ?>
												<li><img src="assets/img/pages/owner-operator/lincoln-place-<?php echo $i?>-thumb.jpg" alt='thumbnail image'/></li>
											<?php endfor; ?>
											</ul>
										</div>
									</section>
								</div>
								<div class="tab-pane" id="preserve-at-marin">
									<section class="image-holder">
										<div class="large-image-holder">
											<img src="assets/img/pages/owner-operator/preserve-1-image.jpg" alt='thumbnail image'/>
										</div>
										<div class="thumbnail-image-holder">
											<ul class="clearfix">
												<?php for ($i =1 ; $i < 4; $i++) : ?>
												<li><img src="assets/img/pages/owner-operator/preserve-<?php echo $i?>-thumb.jpg" alt='thumbnail image'/></li>
											<?php endfor; ?>
											</ul>
										</div>
									</section>
								</div>
								<div class="tab-pane" id="pacific-bay-vistas">
									<section class="image-holder">
										<div class="large-image-holder">
											<img src="assets/img/pages/owner-operator/pbv-1-image.jpg" alt='thumbnail image'/>
										</div>
										<div class="thumbnail-image-holder">
											<ul class="clearfix">
												<?php for ($i =1 ; $i < 5; $i++) : ?>
												<li><img src="assets/img/pages/owner-operator/pbv-<?php echo $i?>-thumb.jpg" alt='thumbnail image'/></li>
											<?php endfor; ?>
											</ul>
										</div>
									</section>
								 </div>
								<div class="tab-pane" id="canal">
									<section class="image-holder">
										<div class="large-image-holder">
											<img src="assets/img/pages/owner-operator/canal-1-image.jpg" alt='thumbnail image'/>
										</div>
										<div class="thumbnail-image-holder">
											<ul class="clearfix">
												<?php for ($i =1 ; $i < 2; $i++) : ?>
												<li><img src="assets/img/pages/owner-operator/canal-<?php echo $i?>-thumb.jpg" alt='thumbnail image'/></li>
											<?php endfor; ?>
												<li class="fancybox-media">
													<a href="http://www.youtube.com/embed/0Pn4AZ040gQ" id="canalvid">
													<img style="width:91px;height:58px;" src="assets/img/pages/owner-operator/canal-2-thumb.jpg" alt='thumbnail image'/>
													</a>
												</li>
												<!-- <li>
													<a href="#oneCanal" role="button" class="btn" data-toggle="modal">
														<img style="width:91px;height:58px;" src="assets/img/pages/owner-operator/canal-2-thumb.jpg" alt='thumbnail image'/>
													</a>
												</li> -->
											</ul>
										</div>
									</section>
								 </div>
								 <div class="tab-pane" id="elm-creek">
									<section class="image-holder">
										<div class="large-image-holder">
											<img src="assets/img/pages/owner-operator/elm-creek-1-image.jpg" alt='thumbnail image'/>
										</div>
										<div class="thumbnail-image-holder">
											<ul class="clearfix">
												<?php for ($i =1 ; $i < 3; $i++) : ?>
												<li><img src="assets/img/pages/owner-operator/elm-creek-<?php echo $i?>-thumb.jpg" alt='thumbnail image'/></li>
											<?php endfor; ?>
												<li class="fancybox-media">
													<a href="http://www.youtube.com/embed/x2Dr6diNbWQ" id="elmvid">
														<img style="width:91px;height:58px;" src="assets/img/pages/owner-operator/elm-creek-3-thumb.jpg" alt='thumbnail image'/>
													</a>
												</li>
												<!-- <li>
													<a href="#elmCreek" role="button" class="btn" data-toggle="modal">
														<img style="width:91px;height:58px;" src="assets/img/pages/owner-operator/elm-creek-3-thumb.jpg" alt='thumbnail image'/>
													</a>
												</li> -->

											</ul>
										</div>
									</section>
								 </div>
							</div>
						</div><!-- //tabbable-->

					</section>


				</section><!-- //hero -->   



				<div class="content-row clearfix">
					<div class="content">
						<div class="callout">
							<p class="inner-callout">
								Aimco delivers on its commitment to be the best owner and operator in the industry by providing and maintaining high quality apartment homes, revitalizing neighborhoods, and stimulating economic development in communities across the country.
							</p>
						</div>

						<article class="article">
							<h1>Providing Housing and Jobs</h1>
							<p>
								Aimco’s vigorous redevelopment program continued to gain momentum and produce excitingresults in 2013. Nearly doubling the capital investments in its properties, Aimco completed several key redevelopment projects, meeting housing demands and creating jobs.
							</p>
						</article>

						<article class="article">
							<h1>Investing in California</h1>
							<p>
								In San Bruno, CA, Aimco was joined by City officials for the grand opening of Pacific Bay Vistas, a $121 million project bringing 308 upscale apartment homes to the Bay Area, and employing more than 300 area construction workers.
							</p>

							<p>
								An ideal location with views of the San Francisco Bay and the Pacific Ocean, the property also affords residents easy access to the region’s job centers and transportation systems.
							</p>

							<p>
								With the strong support of local government, business and labor leaders in Los Angeles, Aimco made significant progress on its multi-phase, $140 million redevelopment of Lincoln Place Apartments in Venice, CA. Listed on the National Register of Historic Places, the 35-acre site will include 45 buildings with 696 remodeled apartment homes and add 99 new apartment homes and amenities creating 700 jobs in the process.
							</p>
						</article>

						<article class="article">
							<h1>New Opportunity in Chicago</h1>
							<p>
								In the thriving Chicago suburb of Elmhurst, Aimco completed new construction of 28 townhomes offering well-appointed living spaces and upscale services and features. Elm Creek Townhomes is located amidst natural beauty, yet close to employment centers and services.
							</p>
						</article>

						<article class="article">
							<h1>Revitalizing a Boston Neighborhood</h1>
							<p>
								In the City of Boston, Aimco is investing in a new, $190 million construction project providing a unique opportunity to add value to the community and the company. Upon completion of construction by a leading local developer, Aimco will own and operate 310 apartment homes at One Canal, a property near the Boston Garden and North End that will help revitalize the City’s Bulfinch Triangle neighborhood, and serve as the northern anchor of the transformative Rose Kennedy Greenway project.
							</p>
						</article>

						<article class="article">
							<h1>Progress across the Country</h1>
							<p>
								Additional renovation projects that moved forward this year were Aimco's Preserve at Marin, a major redevelopment of 126 apartment homes in the Town of Corte Madera, CA, upgrades to 2900 on First in Seattle, and remodeling of Park Towne Place in Philadelphia, which received a historic designation from the Pennsylvania Historical and Museum Commission.
							</p>

						</article>

						<article class="article">
							<h1>Adding Value to the Portfolio</h1>
							<p>
								Aimco identifies opportunities for strategic investments in new properties that have the greatest potential to add value to its portfolio. Last year, the company acquired Ocean House on Prospect, a superbly situated property just two blocks from the ocean in La Jolla, CA, Park and 12th Apartments,a well-located, newly-built property in Midtown Atlanta on Piedmont Park, and Charlesbank Residences, a 44-apartment home community overlooking the Charles River in Watertown, MA. These selective acquisitions are in attractive, high-performing areas with expectations for solid revenue growth.
							</p>

						</article>

						<article class="article">
							<h1>Maintaining Quality</h1>
							<p>
								Aimco reinvests capital to ensure that its properties are comfortable and well-maintained living environments while utilizing sustainable management practices. In 2013, Aimco invested $168 million for capital improvements such as updating kitchens and bathrooms, revitalizing common areas, and enhancing exterior landscaping. With a dedicated energy conservation team, Aimco continues to seek opportunities to achieve greater efficiencies and preserve natural resources. Aimco has introduced lighting, HVAC and irrigation systems that yield positive environmental and economic results.
							</p>

						</article>

						<article class="article">
							<h1>A Strong Pipeline for Redevelopment</h1>
							<p>
								Aimco maintains a deep pipeline of redevelopment projects, well-located in thriving markets. New renovation projects will soon launch in Philadelphia, Seattle, and Southern California. By redeveloping and repurposing existing buildings in excellent locations, Aimco realizes healthy returns for shareholders while preserving local infrastructure, and providing attractive, high quality apartment homes for residents across the country.
							</p>

						</article>
					</div>

					 <aside class="aside">
						<img src="assets/img/pages/owner-operator/aside-chart.png" alt='chart' />
					</aside>

				</div>



			</div>
		</div>


<!-- Modal box contents -->

<!-- <div id="elmCreek" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:590px;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Elm Creek Opening</h3>
  </div>
  <div class="modal-body">
    <iframe width="560" height="315" src="//www.youtube.com/embed/x2Dr6diNbWQ" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
<div id="oneCanal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:590px;">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Elm Creek Opening</h3>
  </div>
  <div class="modal-body">
    <iframe width="560" height="315" src="//www.youtube.com/embed/0Pn4AZ040gQ" frameborder="0" allowfullscreen></iframe>
  </div>
</div>
 -->


		<?php include_once('__includes/inc.footer.php');?>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="assets/js/vendor/jquery-ui-1.8.23.custom.min.js"></script>
		<script src="assets/js/vendor/bootstrap.min.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.js"></script>
		<script src="assets/js/vendor/jquery.fancybox.media.js"></script>
		<script src="assets/js/main.js"></script>
		<script type="text/javascript">


			$(function(){

				// $("#elmvid, #canalvid").fancybox({
				// 		'aspectRatio'       : true,
				// 		'padding'           : 0,
				// 		'autoScale'         : false,
				// 		'transitionIn'      : 'none',
				// 		'transitionOut'     : 'none',
				// 		'helpers' 					: {media : {} },
				// 		beforeLoad					: function(){alert("beforeLoad fired...");}
				// 	});


				// $("#elmvid, #canalvid").click(function(){
				// 	alert("Caught the click...");
				// 	$(this).fancybox({
				// 		'aspectRatio'       : true,
				// 		'padding'           : 0,
				// 		'autoScale'         : false,
				// 		'transitionIn'      : 'none',
				// 		'transitionOut'     : 'none',
				// 		'helpers' 					: {media : {} },
				// 		beforeLoad					: function(){alert("beforeLoad fired...");}
				// 	});
				// });

				$('.thumbnail-image-holder li:not(.fancybox-media) img').click(function(){
					$(this).closest('section').find('.large-image-holder img').attr('src', $(this).attr('src').replace('thumb','image'));
					return false;
				});

			});
		</script>
	</body>
</html>
