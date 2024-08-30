<?php

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

# define constants like a way between directoryes
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

# code
require APP_PATH . 'app.php';
$isNegative = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num = $_POST['number'];
    $data = numTo2DArray($_POST['number'], $isNegative);
}



require VIEWS_PATH . 'view.php';

?>