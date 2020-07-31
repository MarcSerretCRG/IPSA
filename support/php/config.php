<?php
	$host = 'localhost';
	$db   = 'ipsa';
	$username = 'proteo';
	$password = 'my5q1_pr';
	$charset = 'utf8';
	
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
	$opt = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
			PDO::ATTR_EMULATE_PREPARES   => false
	];
	$pdo = new PDO($dsn, $username, $password, $opt);
	$supportFolder = "/data/web_admin/ipsa/support/";
	$basePath = $supportFolder . "Upload Folder/";
	$downloadPath = $supportFolder . "Download Folder/";
	$relativeZipPath = "support/Download Folder/";
?>
