<?php

use Albet\JwtAuth\SessionManager;

require_once __DIR__ . '/../vendor/autoload.php';

if (!isset($_GET['url']) || $_GET['url'] == 'login') {
    SessionManager::login();
} else if ($_GET['url'] == 'home') {
    SessionManager::displayIndex();
}
