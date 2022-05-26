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

    function dodajParfem($model, $proizvodjac_id, $zapremina, $tip_id, $cena)
    {
        $sql = "insert into parfem (model, proizvodjac_id, zapremina, tip_id, cena) values ('$model', '$proizvodjac_id', '$zapremina', '$tip_id', '$cena')";
        $this->connection->query($sql);
    }
}
