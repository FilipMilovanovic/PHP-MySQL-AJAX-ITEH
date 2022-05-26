<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet tehnologije - PHP - MySQL - AJAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1 class="text-center mt-3">Parfimerija - Parfait</h1>

    <a href="forms/noviParfem.php"><button type="button" class="btn btn-dark" id="button-novi">Novi parfem</button></a>

    <table class="table table-bordered table-striped border border-dark border-3 mt-3" id="tbl-parfemi">
        <thead class="table-primary border border-dark border-3">
            <tr>
                <th>Model</th>
                <th>Proizvođač</th>
                <th>Zapremina</th>
                <th>Tip</th>
                <th>Cena</th>
            </tr>
        </thead>

        <tbody class="border border-dark border-3" id="tabela-body-parfemi">

        </tbody>

    </table>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>