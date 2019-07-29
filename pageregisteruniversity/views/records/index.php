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
<?php require 'views/header.php' ?>
<!-- Page Content -->
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="mt-5 col-lg-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">T.D</th>
                    <th scope="col">Instituto</th>
                    <th scope="col">Carrera Elegida</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once 'models/studentmodel.php';
                foreach ($this->data as $row) {
                    $student = new Student();
                    $student = $row;
                    ?>
                    <tr>
                        <td><?php echo $student->names; ?></td>
                        <td><?php echo $student->lastnames; ?></td>
                        <th scope="row"><?php echo $student->identify; ?></th>
                        <td><?php echo $student->typedocument; ?></td>
                        <td><?php echo $student->institute; ?></td>
                        <td><?php echo $student->career; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo constant('URL'); ?>public/vendor/jquery/jquery.slim.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>