<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LUKAS LLARBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <Center>
    <h1> LUKAS LLARBI</h1> 
</center>

<br><br><br>
<div class="container">
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Celular</th>
            <th scope="col">Tipo de juegos</th>
            <th scope="col">Numero de mesa</th>
            <th scope="col">Productos</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>3546654612</td>
            <td><button class="btn btn-outline-danger"><a href="<?php echo e(url('index')); ?>"> Opciones</a></button></td>
            <td><button class="btn btn-outline-danger">Numero de mesa</button></td>
            <td><button class="btn btn-outline-danger">Productos</button>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>3654213547</td>
            <td><button class="btn btn-outline-danger">Opciones</button></td>
            <td><button class="btn btn-outline-danger">Numero de mesa</button>
            <td><button class="btn btn-outline-danger">Productos</button>
        </td>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>3657847479</td>
            <td><button class="btn btn-outline-danger">Opciones</button></td>
            <td><button class="btn btn-outline-danger">Numero de mesa</button></td>
            <td><button class="btn btn-outline-danger">Productos</button>
            

        </tr>
        </tbody>
    </table>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Insertar un Usuario
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insertar Usuarios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>Ingrese su Nombre:</p>
                        

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Digite su nombre</label>
                        </div>
                        <p>Celular:</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Digite su número de celular</label>
                        </div>
                        <p>Tipo de juegos:</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Digite el juego deseado</label>
                        </div>
                        <p>Numero de  mesa:</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Digite el número de mesa</label>
                        </div>
                        <p>Productos:</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Digite el producto deseado</label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
</html>
