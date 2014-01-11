<?php 

	// Turn off warnings because of malformed HTML
	error_reporting(E_ERROR);

	// Open raw file from http://www.hs-augsburg.de/~harsch/Chronologia/Lsante01/Lucretius/luc_rer1.html
	$latin_file_name = "./raw/latin1.html";
	$latin_file = file_get_contents($latin_file_name);

	// Replace &nbsp; character before DOM parsing
	$latin_file = str_replace('&nbsp;', '@nbsp;', $latin_file);

	// Break into raw passages
	$latin_passages_raw = explode('<h3>@nbsp;</h3>', $latin_file);

	// Format passages in plain text
	$latin_passages = array();
	foreach ($latin_passages_raw as $latin_passage_raw) {

		$latin_passage = "";

		// Open as DOM and parse for lines
		$DOM = new DOMDocument;
		$DOM->loadHTML($latin_passage_raw);
		$lines = $DOM->getElementsByTagName('h3');

		for ($i = 0; $i < $lines->length; $i++) {
			$latin_line = trim($lines->item($i)->nodeValue);
			$latin_passage .= $lines->item($i)->nodeValue . "\n";
		}

		$latin_passages[] = trim($latin_passage);

	}

	print_r($latin_passages);

?>