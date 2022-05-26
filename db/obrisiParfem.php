 <?php

   include('../db/DBBroker.php');

   $DBBroker = new DBBroker();
   $sql = "delete from parfem where id=" . $_POST['parfem_id'];
   $DBBroker->connection->query($sql);
