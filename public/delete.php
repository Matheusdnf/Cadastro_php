<?php
require '../config/database.php';
require '../src/User.php';

$user = new User($pdo);
$user->delete($_GET['id']);

header("Location: index.php");
exit;
