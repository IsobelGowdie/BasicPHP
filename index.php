<?php
require_once 'config.php';
require_once 'app\controllers\MainController.php';

$controller = new MainController();

echo '<a href="index.php?action=users">View Users</a><br>';
echo '<a href="index.php?action=advertisements">View Advertisements</a>';

if (isset($_GET['action']) && $_GET['action'] == 'users') {
    $controller->users();
} elseif (isset($_GET['action']) && $_GET['action'] == 'advertisements') {
    $controller->advertisements();
}
?>