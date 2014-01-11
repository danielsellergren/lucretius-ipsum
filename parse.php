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

	// print_r($latin_passages);

	// Open raw file from http://www.gutenberg.org/files/785/785-h/785-h.htm
	$english_file_name = "./raw/english1_clean.html";
	$english_file = file_get_contents($english_file_name);

	$english_file_stripped = strip_tags($english_file, '<h2>');

	$english_sections = explode('<h2>', $english_file_stripped);

	$english_passages = array();
	foreach ($english_sections as $english_section) {
		$english_section_stripped = trim(implode("\n", array_slice(explode("\n", $english_section), 4)));

		$english_section_passages = explode("\n\n", $english_section_stripped);

		foreach ($english_section_passages as $english_section_passage) {
			if (trim($english_section_passage) !== "") {
				$english_passages[] = str_replace('    ', '', trim($english_section_passage));
			}
		}



		// $english_passages[] = trim($english_section_stripped);
	}

	print_r($english_passages);

?>