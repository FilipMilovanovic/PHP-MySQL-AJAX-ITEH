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
    ?>

    <form method="post" id="novi-form">

        <div class="mb-2">
            <label class="form-label">Model: </label>
            <input type="text" class="form-control" name="model">
        </div>

        <div class="mb-2">
            <label class="form-label">Proizvođač</label>
            <select class="form-select" name="proizvodjac">
                <?php

                $DBBroker = new DBBroker();
                $sql = "select * from proizvodjac";
                $data = $DBBroker->connection->query($sql);

                while ($row = mysqli_fetch_assoc($data)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['naziv']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-2">
            <label class="form-label">Zapremina: </label>
            <input type="text" class="form-control" name="zapremina">
        </div>

        <div class="mb-2">
            <label class="form-label">Tip: </label>
            <select class="form-select" name="tip">
                <?php

                $sql2 = "select * from tip";
                $data2 = $DBBroker->connection->query($sql2);

                while ($row = mysqli_fetch_assoc($data2)) {
                ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['naziv']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-2">
            <label class="form-label">Cena: </label>
            <input type="text" class="form-control" name="cena">
        </div>

        <button type="submit" name="button-save" class="btn btn-dark">Unesi parfem u bazu</button>

        <?php
        if (isset($_POST['button-save'])) {
            $DBBroker->dodajParfem($_POST['model'], $_POST['proizvodjac'], $_POST['zapremina'], $_POST['tip'], $_POST['cena']);
            header('Location: ../index.php');
        }
        ?>
    </form>

</body>

</html>