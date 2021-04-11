<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=deneme.doc");
header("Pragma: no-cache");
header("Expires: 0"); 

$content = "Hello Word ! "; 

echo $content;
?>
