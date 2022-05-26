<?php

class DBBroker
{
    public $hostName = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "parfimerija";
    public $connection;

    function __construct()
    {
        $this->connection = new mysqli($this->hostName, $this->username, $this->password, $this->dbName);
    }
}
