<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registro de inscripcion Universitario</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<!-- Navigation -->
<?php require 'views/header.php'?>
<!-- Page Content -->
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-lg-8">
            <h1 class="mt-5 text-center">Formulario de inscripcion</h1>
            <?php
            if (!empty($this->message)) {
                if ($this->type == 0) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong><?php echo $this->title; ?></strong> <?php echo $this->message; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                } else if ($this->type == 1) {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?php echo $this->title; ?></strong> <?php echo $this->message; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                }
            }
            ?>
            <form action="<?php echo constant('URL'); ?>register/register_user" method="POST">
                <div class="row">
                    <div class="col">
                        <label for="inputNames">Nombres</label>
                        <input type="text" id="inputNames" name="inputNames" class="form-control" placeholder="Nombres" required>
                    </div>
                    <div class="col">
                        <label for="inputLastname">Apellidos</label>
                        <input type="text" id="inputLastname" name="inputLastname" class="form-control" placeholder="Apellidos" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="inputTypeDocument">Numero de documento</label>
                        <select class="form-control" id="inputTypeDocument" name="inputTypeDocument" required>
                            <option disabled>Seleccione una opcion.</option>
                            <option>Tarjeta de identidad</option>
                            <option>Contraseña</option>
                            <option>Cedula de ciudadania</option>
                            <option>Pasaporte extranjero</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="inputDocument">Numero de documento</label>
                        <input type="text" id="inputDocument" name="inputDocument" class="form-control" placeholder="Numero de documento" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="inputExpeditionDate">Fecha de expedicion del documento</label>
                        <input type="date" class="form-control" id="inputExpeditionDate" name="inputExpeditionDate" placeholder="Fecha de expedicion del documento" required>
                    </div>
                    <div class="col">
                        <label for="inputBirthdate">Fecha de nacimiento</label>
                        <input type="date" id="inputBirthdate" name="inputBirthdate" class="form-control" placeholder="Fecha de nacimiento" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="inputInstitute">Escuela donde obtuvo el grado.</label>
                        <input type="text" class="form-control" id="inputInstitute" name="inputInstitute" placeholder="Nombre de la institucion" required>
                    </div>
                    <div class="col">
                        <label for="inputCareer">Carrera</label>
                        <select class="form-control" id="inputCareer" name="inputCareer" required>
                            <option disabled>Seleccione una opcion.</option>
                            <option>Ingenieria Industrial</option>
                            <option>Ingenieria Civil</option>
                            <option>Ingenieria De Sistemas</option>
                            <option>Ingenieria De Software</option>
                            <option>Ingenieria Mecanica</option>
                            <option>Lic. En Español con Enfasis en Ingles</option>
                            <option>Lic. En Ciencias Naturales</option>
                            <option>Lic. En Educacion Infantil</option>
                            <option>Administracion en Salud</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row d-flex justify-content-center">
                    <div class="col align-content-center">
                        <button type="reset" class="btn btn-sm btn-block btn-danger">Cancelar</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-sm btn-block btn-success">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo constant('URL'); ?>public/vendor/jquery/jquery.slim.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

