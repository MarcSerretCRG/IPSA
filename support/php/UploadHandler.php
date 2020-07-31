<?php
	// change basePath to the absolute path to the 'support' folder
	// e.g. $basePath = "/home/username/public_html/support/";
	$basePath = "/data/web_admin/ipsa/support/";
	$filename = $_FILES['file']['name'];
	$meta = $_POST;
	$destination = $basePath . $meta['targetPath'] . $filename;
	move_uploaded_file( $_FILES['file']['tmp_name'], $destination );
	
	echo json_encode($_FILES);
?>
