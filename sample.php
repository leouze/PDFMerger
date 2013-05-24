<?php
require_once('PDFMerger.php');
$pdf = new PDFMerger;
$pdf->addPDF('samplepdfs/one.pdf', '1,3,4')
	->addPDF('samplepdfs/two.pdf', '1-2')
	->merge('file', 'samplepdfs/asd.pdf');
if($pdf == true)	
	echo "Merge has been completed";
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
?>