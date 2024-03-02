<?php
require './vendor/autoload.php';
use Pecee\SimpleRouter\SimpleRouter;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/config");
$dotenv->load();

SimpleRouter::get("/", [Php\SimplePhpCrud\Core\Web::class, 'index']);

SimpleRouter::start();