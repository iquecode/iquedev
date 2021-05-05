<?php

$composerLoader = require '../vendor/autoload.php';
$composerLoader->register();
use PHPMailer\PHPMailer\PHPMailer;

$supportLoader = new SupportLoader;
$supportLoader->register();

class SupportLoader
{
    public function register()
    {
        spl_autoload_register( [ $this, 'loadClass'] );
    }
    public static function loadClass($class)
    {
        if (file_exists("Source/{$class}.php")) {
            require_once "Source/{$class}.php";
            return true;
        }
    }
}
