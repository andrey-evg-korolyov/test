<?php

ini_set('display_errors', 1); // Отображение ошибок при разработке проекта;
error_reporting(E_ALL);

require_once 'Passwords.php';
$passwords = new Passwords();

if (isset($_POST)) {

    $passwords->addPasswords($_POST);
}
