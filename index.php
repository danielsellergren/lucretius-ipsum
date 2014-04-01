<!DOCTYPE html>
<html>
<head>
	<title>Lucretius Ipsum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script src="lucretius.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="lucretius.css" />
</head>
<body>
	<div id="container">
		<img src="img/lucretius_fade2.jpg" alt="Lucretius" />
		<header>
			<h1>Lucretius Ipsum</h1>
		</header>
		<section id="ipsum">
			<textarea></textarea>
			<button id="generate">Generate</button>
			<input type="radio" name="language" class="language" id="latin" checked="checked" />
			<label for="latin">Latin</label>
			<input type="radio" name="language" class="language" id="english" />
			<label for="english">English</label>
		</section>
		<footer>
			<p>Latin/English filler text generator using <em><a href="http://en.wikipedia.org/wiki/De_rerum_natura">De rerum natura</a></em> by Lucretius</p>
			<span id="provided-by">Text provided by <a href="http://www.hs-augsburg.de/~harsch/Chronologia/Lsante01/Lucretius/luc_rer0.html">Bibliotheca Augustana</a> and <a href="http://www.gutenberg.org/files/785/785-h/785-h.htm">Project Gutenberg</a></span>
			<span id="credit">Code by <a href="http://danielsellergren.com">Daniel Sellergren</a> | <a href="https://github.com/danielsellergren/lucretius-ipsum">Source</a></span>
		</footer>
	</div>
</body>
</html>