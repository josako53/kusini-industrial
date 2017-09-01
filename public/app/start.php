<?php

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT.'/views');
define('BASE_URL', 'http://localhost/corporate');


//database configuration
$host 		= 'localhost';
$username 	= 'root';
$password 	= '';
$dbname 	= 'corporate';


try {
	$db = new PDO('mysql:host='.$host.'; dbname='.$dbname, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
	die('Please, Try again later!');
}
 
