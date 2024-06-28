<?php

namespace App\Core;

use App\controllers\PageController;

class Core {
    public static function run() {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $controller = new PageController();
            $controller->redirectTo($page);
        } else {
            header('Location: index.php?page=home');
            exit();
        }
    }
}