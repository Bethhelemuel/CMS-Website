<?php 


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// define('SITE_ROOT', '/XAMPP/htdocs/gallery/');


defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', 'admin/includes/');

defined('IMAGES_PATH') ? null : define('IMAGES_PATH', 'admin/images/');

require_once("functions.php");
require_once("config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("comment.php");
require_once("session.php");
require_once("paginate.php");


 ?>