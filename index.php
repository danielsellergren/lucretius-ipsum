<!DOCTYPE html>
<html>
<head>
	<title>Lucretius Ipsum</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script src="lucretius.js"></script>
	<link type="text/css" rel="stylesheet" href="lucretius.css" />
</head>
<body>
	<div id="container">
		<header>
			<h1>Lucretius Ipsum</h1>
			<h2>Latin/English filler text generator using <em><a href="http://en.wikipedia.org/wiki/De_rerum_natura">De rerum natura</a></em> by Lucretius</h2>
		</header>
		<section id="ipsum">
			<textarea></textarea>
			<input type="radio" name="language" class="language" id="latin" checked="checked" />
			<label>Latin</label>
			<input type="radio" name="language" class="language" id="english" />
			<label>English</label>
			<button id="generate">Generate</button>
		</section>
		<footer>
			<span id="provided-by">Text provided by <a href="http://www.thelatinlibrary.com/lucretius/lucretius1.shtml">The Latin Library</a> and <a href="http://www.gutenberg.org/files/785/785-h/785-h.htm">Project Gutenberg</a></span>
			<span id="credit">Code by <a href="http://danielsellergren.com">Daniel Sellergren</a> | <a href="https://github.com/danielsellergren/lucretius-ipsum">Source Code</a></span>
		</footer>
	</div>
</body>
</html>