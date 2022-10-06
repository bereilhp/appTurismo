<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function databaseCreation()
    {
        $servername="localhost";
        $user="root";
        $pass="";

        $conn = new PDO('mysql:host='.$servername, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE madwayTest";
        $conn->exec($sql);
    }

    public function databaseDrop(){
    }
}
