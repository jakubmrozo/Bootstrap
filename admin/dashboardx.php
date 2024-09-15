

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
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
                            <th scope="row">1</th>
                            <td>Scania</td>
                            <td><button class="btn btn-danger" onclick="location.href=delete_truck?">X</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Renault</td>
                            <td><button class="btn btn-danger">X</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>MAN</td>
                            <td><button class="btn btn-danger" onclick="(function(){
                            location.href = 'delete/delete_truck.php?id'
})">X</button></td>
                        </tr>
                    </tbody>
                </table>
                <form action="trucks.php" enctype="multipart/form-data" method="POST" class="text-white d-flex justify-content-between align-items-center">
                        <div class="forms">
                            Nazwa: <input type="text" name="nick" id="inputNickOrEmail" class="form-control mb-3 col-8"
                            placeholder="Nazwa" required>
                            Zdjęcie: <input type="file" name="photo" class="form-control" id="photo" required>
                            <div class="mt-3">
                            Kierowca: <select name="kierowca" class="form-control" id="">
                                <option value="" disabled>Kierowca</option>
                                <option value="Tomasz" >Tomasz</option>
                                <option value="an" >Jan</option>
                                <option value="Michal">Michał</option>
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
                            <td>Marek</td>
                            <td><button class="btn btn-danger">X</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jan</td>
                            <td><button class="btn btn-danger">X</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Michał</td>
                            <td><button class="btn btn-danger" onclick="(function(){
                            location.href = 'delete/delete_driver.php'
})">X</button></td>
                        </tr>
                    </tbody>
                </table>
                <form action="drivers.php" enctype="multipart/form-data" method="POST" class="text-white d-flex justify-content-between align-items-center">
                        <div id="forms">
                            Imię: <input type="text" name="nick" id="inputNickOrEmail" class="form-control mb-3 col-8"
                            placeholder="Imię" required>
                            Zdjęcie: <input type="file" name="" class="form-control" id="">
                            <div class="mt-3">
                           
                            </div>
                        </div>
                    <button class="btn btn-success">DODAJ</button>
                </form>
            </div>

        </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
