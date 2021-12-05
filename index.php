
<?php
include_once('app/Config/Constants.php');
include_once('app/Views/Layout/header.php');


include 'Router.php';

$request = $_SERVER['REQUEST_URI']; 
$router = new Router($request);
$router->get('/tracktik/', 'app/Views/home');


include_once('app/Views/Layout/footer.php');
?>
