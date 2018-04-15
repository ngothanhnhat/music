<?php
if($_SERVER['HTTP_HOST'] == 'localhost')
	$base_url ="http://localhost/music";
else
	$base_url = $_SERVER['HTTP_HOST'];

define("BASE_URL", $base_url);

?>