<?php

include 'PDFMerger.php';

$pdf = new PDFMerger;

$methods = array(
	'file',
	'browser',
	'download',
	'string'
);

$pages = $_POST['pages[]'];
var_dump($pages);
/**



$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4')
	->addPDF('samplepdfs/two.pdf', '1-2')
	->addPDF('samplepdfs/three.pdf', 'all')
	->merge('download', 'samplepdfs/TEST2.pdf');

	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
	**/
