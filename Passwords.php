<?php

require_once 'ConnectionFactory.php';

class Passwords
{

    public function getPasswords()
    {
        $query = "SELECT * FROM `password`";

        $result = mysqli_query(ConnectionFactory::getConnection(), $query);

        $passwordList = mysqli_fetch_all($result);

        return $passwordList;
    }

    public function addPasswords()
    {
        if (isset($_POST)) {

            $login = $_POST['login'];

            $password = $_POST['password'];

            $folder = $_POST['folder'];

            $request = "INSERT INTO `password` (`id`, `login`, `password`, `folder`) "
                . "VALUES (NULL, '$login', '$password', '$folder')";

            mysqli_query(ConnectionFactory::getConnection(), $request);
        }
        header('Location:/');
    }
}
