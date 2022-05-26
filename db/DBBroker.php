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

    function azurirajParfem($id, $model, $proizvodjac_id, $zapremina, $tip_id, $cena)
    {
        $sql = "update parfem set model='" . $model . "', proizvodjac_id='" . $proizvodjac_id . "', zapremina='" . $zapremina . "', tip_id='" . $tip_id . "', cena='" . $cena . "' where id=" . $id;
        $this->connection->query($sql);
    }
}
