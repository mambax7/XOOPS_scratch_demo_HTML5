<?php 
	if (isset($_GET['filename']) 
		&& $str = addslashes(htmlspecialchars($_GET['filename'])))  {
		header("Content-Type:application/octet-stream");
		header('Content-Disposition: attachment; filename="'.$str.'"');
		header('Accept-Ranges: bytes');
		readfile('sb2-js/examples/'.$str);
	}
?>