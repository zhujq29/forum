<?php

DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'thomas');
DEFINE('DB_PASSWORD', 'abc123');
DEFINE('DB_NAME', 'thomas');


$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		or die('Could not connet to MySQL: '.mysqli_connect_error());


?>