<?php

	// Turn off warnings because of malformed HTML
	error_reporting(E_ERROR);

	// Iterate through all books
	for ($book=1; $book<7; $book++) {

		// Open raw file from http://www.hs-augsburg.de/~harsch/Chronologia/Lsante01/Lucretius/luc_rer1.html
		$latin_file_name = './raw/latin' . $book . '.html';
		$latin_file = file_get_contents($latin_file_name);

		// Replace &nbsp; character before DOM parsing
		$latin_file = str_replace('&nbsp;', '@nbsp;', $latin_file);
		$latin_file = str_replace('&euml;', '@euml;', $latin_file);
		$latin_file = str_replace('&lt;', '@lt;', $latin_file);
		$latin_file = str_replace('&gt;', '@gt;', $latin_file);

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

				$latin_passage = str_replace('@euml;', '&euml;', $latin_passage);
				$latin_passage = str_replace('@lt;', '&lt;', $latin_passage);
				$latin_passage = str_replace('@lt;', '&gt;', $latin_passage);

				$latin_passage .= $lines->item($i)->nodeValue . "\n";
			}

			if (trim($latin_passage)) {
				$latin_passages[] = trim($latin_passage);
			}

		}

		$latin_json = json_encode($latin_passages);

		$latin_json_file = fopen('./json/latin' . $book . '.json', 'w');
		fwrite($latin_json_file, $latin_json);
		fclose($latin_json_file);

	}

?>