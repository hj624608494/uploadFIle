<?php
if ($_FILES["upfile"]["error"] > 0)
  {
  echo "Error: " . $_FILES["upfile"]["error"];
  }
else
  {
  echo "Upload: " . $_FILES["upfile"]["name"];
  echo "Type: " . $_FILES["upfile"]["type"];
  echo "Size: " . ($_FILES["upfile"]["size"] / 1024) . " Kb";
  echo "Stored in: " . $_FILES["upfile"]["tmp_name"];
  }
?>