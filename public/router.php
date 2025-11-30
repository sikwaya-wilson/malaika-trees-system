<?php
$page = $_GET['page'] ?? 'dashboard';

switch ($page) {

    case 'login':
        require_once "../views/auth/login.php";
        break;

    case 'trees':
        require_once "../views/trees/list.php";
        break;

    case 'trees_create':
        require_once "../views/trees/add.php";
        break;

    default:
        require_once "../views/dashboard.php";
        break;
}

