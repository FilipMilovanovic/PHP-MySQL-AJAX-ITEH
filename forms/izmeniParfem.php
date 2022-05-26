<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet tehnologije - PHP - MySQL - AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php
    include('../db/DBBroker.php');

    $DBBroker = new DBBroker();
    $sql = "select * from parfem where id=" . $_GET['id_parfem_edit'];
    $data = $DBBroker->connection->query($sql);
    $parfem = mysqli_fetch_assoc($data);

    ?>

    <form method="post" id="edit-form">

        <div class="mb-2">
            <label class="form-label">Model: </label>
            <input type="text" class="form-control" name="model" value="<?php echo $parfem['model']; ?>">
        </div>

        <div class="mb-2">
            <label class="form-label">Proizvođač</label>
            <select class="form-select" name="proizvodjac">
                <?php

                $DBBroker = new DBBroker();
                $sql2 = "select * from proizvodjac";
                $data2 = $DBBroker->connection->query($sql2);

                while ($row = mysqli_fetch_assoc($data2)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['naziv']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-2">
            <label class="form-label">Zapremina: </label>
            <input type="text" class="form-control" name="zapremina" value="<?php echo $parfem['zapremina']; ?>">
        </div>

        <div class="mb-2">
            <label class="form-label">Tip: </label>
            <select class="form-select" name="tip">
                <?php

                $sql3 = "select * from tip";
                $data3 = $DBBroker->connection->query($sql3);

                while ($row = mysqli_fetch_assoc($data3)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['naziv']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-2">
            <label class="form-label">Cena: </label>
            <input type="text" class="form-control" name="cena" value="<?php echo $parfem['cena']; ?>">
        </div>

        <button type="submit" name="button-edit" class="btn btn-dark">Unesi izmene u bazu</button>

        <?php
        if (isset($_POST['button-edit'])) {
            $DBBroker->azurirajParfem($_GET['id_parfem_edit'], $_POST['model'], $_POST['proizvodjac'], $_POST['zapremina'], $_POST['tip'], $_POST['cena']);
            header('Location: ../index.php');
        }
        ?>
    </form>

</body>

</html>