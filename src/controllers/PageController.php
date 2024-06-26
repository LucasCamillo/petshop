<?php

namespace App\controllers;

class PageController {
    public function redirectTo($page) {
        $validPages = ['home', 'about', 'contact', 'team', 'login', 'gallery', 'registration', 'appointments' ];

        if (in_array($page, $validPages)) {
            include __DIR__ . '/../views/' . $page . '.php';
        } else {
            include __DIR__ . '/../views/home.php';
        }
    }
}