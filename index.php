<?php
if (isset($_POST['pages']) AND count($_POST['pages'])>0) : 

	// DAMN THIS SCRIPT IS OLD! HIDE THE ERRORS, HIDE THE WOMEN AND CHILDREN!!!!
	//error_reporting(0);
	//@ini_set('display_errors', 0);

	include_once '__includes/pdfmerger/PDFMerger.php';

	$pdf = new PDFMerger;
	$pages_dl_string = implode(',', $_POST['pages']);
	
	$pages_name_string = implode('-', $_POST['pages']);
	$pdf_folder = 'assets/pdfs/';
	$pdf_filename = 'AIMCO-custom-report-pages-'.$pages_name_string.'.pdf';

	$methods = array(
		'file',
		'browser',
		'download',
		'string'
	);

	$pdf->addPDF('assets/pdfs/AIMCO_Report2013.pdf', $pages_dl_string )
		->merge('download', $pdf_folder.$pdf_filename);
endif;
?>

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
        <link rel="stylesheet" href="assets/css/scroll.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/boilerplate-layout.css">
        <link rel="stylesheet" href="assets/css/pages/homepage.css">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="assets/css/ie.css">
        <![endif]-->

    </head>
    <body>
        <div class="preload"></div>

    	<?php include_once('__includes/inc.nav.php'); ?>

    	
		<div id="tile-container">

				<div class="tile-group grp-1 clearfix">

					<div class="tile-block tile-1-a slide-up">
						<a href="citizenship.php" class="tile-overlay teal">
							<div class="details">
								<span class="pre_heading">Outstanding Corporate</span>
								<span class="sub_heading">CITIZENSHIP <i class="icon-right-circled"></i></span>
								<span class="sub_text">Aimco embraces corporate citizenship by engaging in community partnerships, working with elected officials, and giving back to those in need through team volunteer projects nationwide.</span>
							</div>
						</a>
						<div class="tile-backdrop">
							<img src="assets/img/1-a.png"/>
						</div>
					</div>

					<div class="tile-block tile-1-b">
						<img src="assets/img/1-b.png"/>
					</div>

				</div>

				<div class="tile-group grp-2 clearfix">

					<div class="tile-block tile-2-a">

							<img src="assets/img/2-a.png"/>

					</div>

					<div class="tile-block tile-2-b slide-up">
						<a href="team.php" class="tile-overlay aqua">
							<div class="details">
								<span class="pre_heading">Inspired by a</span>
								<span class="sub_heading">Talented Team<i class="icon-right-circled"></i></span>
								<span class="sub_text">The Aimco team exemplifies professionalism, collaboration and dedication to outstanding customer service.</span>

							</div>
						</a>
						<div class="tile-backdrop">
							<img src="assets/img/2-b.png"/>
						</div>
					</div>

					<div class="tile-block tile-2-c slide-up">
						<a href="owner-operator.php" class="tile-overlay orange">
							<div class="details">
								<span class="pre_heading">Being the Best</span>
								<span class="sub_heading">Owner &amp; Operator<i class="icon-right-circled"></i></span>
								<span class="sub_text">Aimco provides quality apartment homes, revitalizes neighborhoods, and stimulates economic development in cities across the country.</span>

							</div>
						</a>
						<div class="tile-backdrop">
							<img src="assets/img/2-c.png"/>
						</div>
					</div>

					<div class="tile-block tile-2-d slide-up">

						<a href="customer-service.php" class="tile-overlay green">
							<div class="details">
								<span class="pre_heading">Commited to exceptional</span>
								<span class="sub_heading">Customer Service <i class="icon-right-circled"></i></span>
								<span class="sub_text">Residents who live in Aimco apartments receive prompt, professional and individualized service to make them feel at home.</span>
							</div>
						</a>
						<div class="tile-backdrop">
							<img src="assets/img/2-d.png"/>
						</div>
					</div>

					<div class="tile-block tile-2-e">
						<img src="assets/img/2-e.png"/>
					</div>

					<div class="tile-block tile-2-f slide-up">
						<a href="vision.php" class="tile-overlay brown">
							<div class="details">
								<span class="pre_heading"></span>
								<span class="sub_heading">Our Vision <i class="icon-right-circled"></i></span>
								<span class="sub_text">Aimco’s vision is to be the best owner and operator of apartment communities, inspired by a talented team committed to exceptional customer service, strong financial performance, and outstanding corporate citizenship. </span>

							</div>
						</a>
						<div class="tile-backdrop">


							<img src="assets/img/2-f.jpg" />
						</div>
					</div>


				</div>

				<div class="tile-group grp-3 clearfix">

					<div class="tile-block tile-3-a slide-up">
						<a href="financial.php" class="tile-overlay gold">
							<div class="details">
								<span class="pre_heading">Strong Financial</span>
								<span class="sub_heading">Performance <i class="icon-right-circled"></i></span>
								<span class="sub_text">With a strong leadership team and a commitment to good governance, Aimco delivers excellent value to its shareholders.</span>

							</div>
						</a>
						<div class="tile-backdrop">
							<img src="assets/img/3-a.jpg"/>
						</div>
					</div>

					<div class="tile-block tile-3-b">
						<img src="assets/img/3-b.png"/>
					</div>

				</div>
			
				<?php //$colors = array('orange', 'green', 'teal', 'aqua', 'gold'); ?>
				<?php //$pre_headings = array('Inspired', 'Best Ever of', 'Committed to', 'Outstanding Corporate')?>
				<?php //$headings = array('Customer Service', 'Best Owner', 'Talented Team', 'redevelopment'); ?>
				<?php //$images = array('sports', 'city', 'people', 'nature', 'food', 'nightlife', 'cats', 'food', 'abstract', 'people', 'technics', 'business'); ?>
				<?php //for ($i = 0; $i < 12; $i++) : ?>
					<?php //$color = $colors[array_rand($colors)]; ?>
					<?php //$heading = $headings[array_rand($headings)];?>
					<?php //$image = $images[array_rand($images)]; ?>
					<?php //$pre_heading = $pre_headings[array_rand($pre_headings)];?>
					<!--<div class="tile-block slide-up">
						<a href="#" class="tile-overlay <?php echo $color?>">
							<div class="details">
								<span class="pre_heading"><?php echo $pre_heading?></span>
								<span class="sub_heading"> <?php echo $heading ?> <i class="icon-right-circled"></i></span>
								<span class="sub_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Erat enim Polemonis. Sedulo, inquam, faciam. Minime vero istorum quidem, inquit. Apparet statim, quae sint officia, quae actiones. Est, ut dicis, inquam.</span>
								<hr />
							</div>
						</a>
						<div class="tile-backdrop">
							<img src="http://lorempixel.com/418/448/<?php echo $image?>/"/>
						</div>
					</div>-->
				
				<?php //endfor; ?>
				
				<!--<div class="scroll-btn" style="display: block; width: 100%; clear: both; position: fixed; top: 600px">
					<div class="btns" style="display: block; margin: 0 auto; width: 400px;">
						<button class="scroll-btn" id="scroll-left">&laquo;</button>
						<button class="scroll-btn" id="scroll-right">&raquo;</button>
					</div>
				</div>-->

		</div>

		<aside class="container">
			<div class="action container">
				<h1>BRINGING OUR VISION HOME</h1>
				<p><em>Aimco Corporate Citizenship Report 2013</em></p>
				<p class="instr">	Download -or- Build a custom report by selecting a specific section below:</p>
				<section class="build-report clearfix">
					<div class="download-report col1">
						<p><a class="btn btn-success" href="assets/pdfs/AIMCO_Report2013.pdf">Download FULL Report</a></p>
					</div>
					<div class="col2">
						<p><span class="label label-warning">OR</span></p>
					</div>
					<div class="col3">
						<div class="form">
							<form action="" method="post">
								  <fieldset>
									<?php $sections = array(
										'1' => 'Cover',
										'2,3' => 'Our Vision',
										'4,5,6,7' => 'To be the Best Owner &amp; Operator',
										'8,9' => 'Inspired by a Talented Team',
										'10,11' => 'Aimco Cares',
										'12,13' => 'Committed to Exceptional Customer Service',
										'14,15,16,17' => 'Strong Financial Performance',
										'18,19' => 'Outstanding Corporate Citizenship',
										'20' => 'Back Page'
									)?>
								<?php foreach ($sections as $k => $v): ?>
								<label class="checkbox inline" style="display: block; margin-left: 10px">
								  <input type="checkbox" name="pages[]" value="<?php echo $k?>"> <?php echo $v?>
								</label>
								<?php endforeach ; ?>
							</fieldset>
							<input class="btn" type="submit" value="Build It" />
							</form>
						</div>
					</div>
				</section>
			</div>
		</aside>


		<?php include_once('__includes/inc.footer.php');?>





        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script src="assets/js/vendor/jquery-ui-1.8.23.custom.min.js"></script>
				<script src="assets/js/vendor/jquery.mousewheel.min.js" type="text/javascript"></script>
				<script src="assets/js/vendor/jquery.kinetic.js" type="text/javascript"></script>	
				<script src="assets/js/vendor/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
        <script src="assets/js/vendor/tiler.js?x=1363629962"></script>
        <script src="assets/js/main.js?x=1363629962"></script>
        <script type="text/javascript">
        $(function() {
			var tiles, total_tiles, center_tile;
			
		    $('.hover').bind('touchstart touchend', function(e) {
		        e.preventDefault();
		        $(this).toggleClass('hover_effect');
		    });
			
			tiles = $('.tile-group');
			total_tiles = tiles.length;
			center_tile = Math.floor(total_tiles/2);
			
			tiles.each(function(i,obj){
				$(obj).attr('id', 'tile'+i+'');
			});
			
			
			$('.slide-up').tiler({
				animation	:	'slide'
			});
			
			$('#tile-container').smoothDivScroll({
				//mousewheelScrolling		: 'allDirections', 
				startAtElementId		: 'tile' + center_tile,
				touchScrolling			: true,
			});

		});
		</script>

    </body>
</html>
