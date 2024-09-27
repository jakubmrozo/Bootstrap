<?php
session_start();
require_once('functions.php');
if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    die('No access avalible!');
}
?>

<!doctype html>
</body>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/0b7d52a410.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex bg-dark justify-content-right p-3">

                <a class="ml-auto btn btn-secondary p-1" href="logout.php">Wyloguj</a>

            </div>
            <h1 class="text-center col-12 bg-dark text-white p-4">Panel Administracyjny</h1>

        </div>
    </div>
    <div class="container mt-5 pb-4">
        <h4 class="text-center mt-3 mb-3 p-4">Kierowcy i ich ciężarówki</h1>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Kierowca</th>
                            <th scope="col">Ciężarówka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // $rows = generate_table('trucks');
                        $rows = generate_dashboard();

                        for ($i = 0; $i < count($rows); $i++) {
                            echo "<tr>";
                            echo "<th scope='row'>" . ($i + 1) . "</th>";
                            echo "<td>" . $rows[$i]['driver'] . "</td>";
                            echo "<td>" . $rows[$i]['truck'] . "</td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>

            </div>
    </div>
    <div class="container-fluid bg-dark pt-4">
        <div class="row text-white">
            <div class="col-6 p-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Ciężarówka</th>
                            <th scope="col">Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rows = generate_table('trucks');

                        for ($i = 0; $i < count($rows); $i++) {
                            echo "<tr>";
                            echo "<th scope='col'>" . ($i + 1) . "</th>";
                            echo "<td>" . $rows[$i]['name'] . "</td>";
                            echo "<td> <button class='btn btn-danger' onclick='(function(){
                                        location.href = \"delete/delete_truck.php?id=" . $rows[$i]['id'] . "\"})()'>X</button>";
                            echo "</tr>";
                        }
                        ?>


                    </tbody>
                </table>
                <form action="trucks.php" enctype="multipart/form-data" method="POST" class="text-white d-flex justify-content-between align-items-center">
                    <div id="forms">
                        <p>Nazwa: <input type="text" name="truck" id="truck" class="form-control mb-3 col-8"
                                placeholder="Nazwa" required>
                        </p>
                        <p>
                            <textarea name="description" id="description" cols="30" rows="3" placeholder="Opis"></textarea>
                        </p>
                        <p>
                            Zdjęcie: <input type="file" name="photo_truck" id="photo_truck" required>
                        </p>
                        <div class="mt-3">
                            Kierowca: <select name="driver" id="driver">
                                <option value="">Kierowca</option>

                                <?php
                                $rows = generate_table('drivers');

                                for ($i = 0; $i < count($rows); $i++) {
                                    echo "<option value=\"" . $rows[$i]['id'] . "\">" . $rows[$i]['name'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success">DODAJ</button>
                </form>
            </div>
            <div class="col-6 p-5">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Kierowcy</th>
                            <th scope="col">Usuń</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rows = generate_table('drivers');

                        for ($i = 0; $i < count($rows); $i++) {
                            echo "<tr>";
                            echo "<th scope='col'>" . ($i + 1) . "</th>";
                            echo "<td>" . $rows[$i]['name'] . "</td>";
                            echo "<td> <button class='btn btn-danger' onclick='(function(){
                                        location.href = \"delete/delete_driver.php?id=" . $rows[$i]['id'] . "\"})()'>X</button>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <form action="drivers.php" enctype="multipart/form-data" method="POST" class="text-white d-flex justify-content-between align-items-center">
                    <div id="forms">
                        <p>
                            Imię: <input type="text" name="driver" id="driver"
                                placeholder="Imię" required>
                        </p>
                        <p>
                            <textarea name="description" id="description" cols="30" rows="3" placeholder="Opis"></textarea>
                        </p>
                        <p>
                            Zdjęcie: <input type="file" name="photo_driver" id="photo_driver" reguired>
                        </p>

                    </div>
                    <button class="btn btn-success">DODAJ</button>
                </form>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>