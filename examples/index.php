<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Mengkonversi gambar menjadi ASCII Art</title>
	<meta name="description" value="Mengkonversi file gambar menjadi ascii art" />
	<meta charset="utf-8" />
	<style>body{background:#000;color:#fff;margin:0;padding:0;font-size:11px}</style>
</head>
<body>
<form action="process.php" method="post" target="result">
	<p>	<label for="url">URL to your image:</label>
		<input type="text" name="url" id="url" size="50" value="http://lh6.ggpht.com/_g-hFelGKzWg/S2e00nggiGI/AAAAAAAAAEc/4RYxbKwRf6s/s288/luna-maya.jpg"/>
		<input type="submit" value="convert"/>
		<em>Url cann't contain spaces. Max. 300x300 pixel image.</em>
	</p>
</form>
<iframe name="result" id="result" width="100%" height="600px" frameborder="0" scrolling="auto" 
src="process.php"></iframe>
</body>
</html>