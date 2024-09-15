<?php
session_start();
require_once('functions.php');
if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
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
    <title>Hello, world!</title>
    <script src="https://kit.fontawesome.com/0b7d52a410.js"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Marek</td>
                            <td>Scania</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jan</td>
                            <td>Renault</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Michał</td>
                            <td>MAN</td>
                        </tr>
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
                        <tr>
                            <th scope="col">1</th>
                            <th scope="col">Scania</th>
                            <th scope="col"><button class="btn btn-danger" onClick='(function(){
                            location.href = "delete/delete_truck.php?id=4"
                            })()'>X</button></th>
                        </tr>
                        <tr>
                            <th scope="col">2</th>
                            <th scope="col">Renault</th>
                            <th scope="col"><button class="btn btn-danger">X</button></th>
                        </tr>
                        <tr>
                            <th scope="col">3</th>
                            <th scope="col">MAN</th>
                            <th scope="col"><button class="btn btn-danger">X</button></th>
                        </tr>
                    </tbody>
                </table>
                <form action="trucks.php" enctype="multipart/form-data" method="POST" class="text-white d-flex justify-content-between align-items-center">
                        <div id="forms">
                            <p>Nazwa: <input type="text" name="truck" id="truck" class="form-control mb-3 col-8"
                            placeholder="Nazwa" required>
                            </p>
                            <p>
                            <textarea name="description" id="description" cols="30" rows="3" placeholder="Opis" ></textarea>
                           </p>
                           <p>
                            Zdjęcie: <input type="file" name="photo_truck" id="photo_truck" required>
                            </p>
                            <div class="mt-3">
                            Kierowca: <select name="driver" id="driver">
                                <option value="">Kierowca</option>
                                <option value="1">Jan</option>
                                <option value="2">Tomasz</option>
                                <option value="3">Michał</option>
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
                        <tr>
                            <th scope="row">1</th>
                            <th scope="col">Marek</th>
                            <td scope="col"><button class="btn btn-danger">X</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <th scope="col">Jan</th>
                            <th scope="col"><button class="btn btn-danger">X</button></th>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th scope="col">Michał</th>
                            <th scope="col"><button class="btn btn-danger" onClick="(function(){
                            location.href = 'delete/delete_driver.php?id=4'
                            })()">X</button></th>
                        </tr>
                    </tbody>
                </table>
                <form action="drivers.php" enctype="multipart/form-data" method="POST" class="text-white d-flex justify-content-between align-items-center">
                        <div id="forms">
                            <p>
                            Imię: <input type="text" name="driver" id="driver" 
                            placeholder="Imię" required>
                            </p>
                            <p>
                            <textarea name="description" id="description" cols="30" rows="3" placeholder="Opis" ></textarea>
                            </p>
                            <p>
                            Zdjęcie: <input type="file" name="photo_driver"  id="photo_driver" reguired>
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