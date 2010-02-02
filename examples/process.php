<?php
$ascii = '';
if ($_POST) {
	if ($image = file_get_contents($_POST['url'])) {
		// start processing
		include_once '../image2ascii.php';
		$ascii = image2ascii($image);
	}
}
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Mengkonversi gambar menjadi ASCII Art</title>
	<meta name="description" value="Mengkonversi file gambar menjadi ascii art" />
	<meta charset="utf-8" />
	<style>
		/* let's do the magic */
		body{line-height:.25em;background:#fff;}
		body,b{margin:0;padding:0}
		b{font-size:10px}
	</style>
</head>
<body>
<?php echo $ascii;?>
</body>
</html>