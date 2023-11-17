<?php

class ConnectionFactory
{

    private static $_instance;

    private $connect;

    private function __construct()
    {
        $hostname = "localhost";
        $database = "test";
        $username = "root";
        $password = "root";

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $this->connect = mysqli_connect($hostname, $username, $password, $database);

        if (mysqli_connect_error()) {

            throw new Exception(mysqli_connect_error(), 1);
        }
    }

    public static function getConnection()
    {
        if (!self::$_instance) {

            self::$_instance = new self;
        }
        return self::$_instance->connect;
    }
}
