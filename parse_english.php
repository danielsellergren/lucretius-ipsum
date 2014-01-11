<?php 

	// Iterate through all books
	for ($book=1; $book<7; $book++) {

		// Open raw files separated from http://www.gutenberg.org/files/785/785-h/785-h.htm
		$english_file_name = './raw/english' . $book . '.html';
		$english_file = file_get_contents($english_file_name);

		$english_file_stripped = strip_tags($english_file, '<h2>');

		$english_sections = explode('<h2>', $english_file_stripped);

		$english_passages = array();
		foreach ($english_sections as $english_section) {
			$english_section_stripped = trim(implode("\n", array_slice(explode("\n", $english_section), 8)));

			$english_section_passages = explode("\n\n", $english_section_stripped);

			foreach ($english_section_passages as $english_section_passage) {
				if (trim($english_section_passage) !== "") {
					$english_passages[] = str_replace('    ', '', trim($english_section_passage));
				}
			}

		}

		$english_json = json_encode($english_passages);

		$english_json_file = fopen('./json/english' . $book . '.json', 'w');
		fwrite($english_json_file, $english_json);
		fclose($english_json_file);

	}

?>