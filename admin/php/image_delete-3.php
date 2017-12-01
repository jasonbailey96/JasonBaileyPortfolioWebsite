<?php
$dirname="../images-3"; /* change to relevant directory */
$name=$_POST['Name'];
$file = $dirname."/".$name;
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {
  echo ("Deleted $file");
  }
header ('Location: ../imagemanagement-3.php');
?>