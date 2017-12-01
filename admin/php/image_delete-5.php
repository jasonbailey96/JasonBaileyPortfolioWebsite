<?php
$dirname="../images-5"; /* change to relevant directory */
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
header ('Location: ../imagemanagement-5.php');
?>