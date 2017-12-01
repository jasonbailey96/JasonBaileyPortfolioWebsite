<link rel="stylesheet" href="../css/main.css" type="text/css">
<?php
$dirname = "images-3/"; /* change to relevant directory */
$exclude = array (".", "..");
$files = scandir($dirname);
$files = array_diff($files, $exclude);
if (!empty($files))
{
	foreach ($files as $file)
print "<div class='inline-block icon'>
		<a href='$dirname/$file'>
		<img src='$dirname/$file'>
		<p class='filetext'>$file</p>
		</a>
		<form action='php/image_delete-3.php' method='POST'>
<input type='hidden' name='Name' value='$file'>
<input type='submit' value='Delete'>
</form>
</div>";	
}
else
{
	echo "There are no files in directory";
}

?>