<?php 

require_once 'Config/database.php';
require_once 'Models/db.php';

if(!isset($_GET["Controller"])) $_GET["Controller"] = constant("DEFAULT_CONTROLLER");
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

$Controller_path = 'Controller/'.$_GET["Controller"].'.php';

/* Check if controller exists */
if(!file_exists($Controller_path)) $Controllers_path = 'Controller/'.constant("DEFAULT_CONTROLLER").'.php';

/* Load controller */
require_once $Controller_path;
$ControllerName = $_GET["Controller"].'Controller';
$Controller = new $ControllerName();


/* Load views */
require_once 'Views/template/header.php';
require_once 'Views/'.$Controller->Views.'.php';
require_once 'Views/template/footer.php';

?>