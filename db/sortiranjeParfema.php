      <?php

      include('DBBroker.php');

      $sort = $_POST['sort'];
      $sql = "select p.id, p.model, pro.naziv as pnaziv, p.zapremina, tip.naziv as tipnaziv, p.cena from parfem p join proizvodjac pro ON p.proizvodjac_id=pro.id join tip on p.tip_id=tip.id order by p.cena " . $sort;
      $DBBroker = new DBBroker();
      $data = $DBBroker->connection->query($sql);

      while ($row = mysqli_fetch_assoc($data)) {
      ?>
        <tr>
          <td><?php echo $row['model']; ?></td>
          <td><?php echo $row['pnaziv'];  ?></td>
          <td><?php echo $row['zapremina'];  ?></td>
          <td><?php echo $row['tipnaziv'];  ?></td>
          <td><?php echo $row['cena'];  ?>,00 RSD</td>
          <td><button type="button" class="btn btn-info" value="<?php echo $row['id']; ?>" id="button-delete">Obriši</button></td>
          <td><a href="forms/izmeniParfem.php?id_parfem_edit=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary" id="button-edit">Izmeni</button></a></td>
        </tr>
      <?php } ?>