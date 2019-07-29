<?php

class Register extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->message = "";
        $this->view->type = 0;//0 -> error, 1-> success, 2-> warning
        $this->view->title = "";
        $this->view->register = true;
    }

    public function render()
    {
        $this->view->render('register/index');
    }

    function register_user()
    {
        if (isset($_POST['inputNames']) && isset($_POST['inputLastname']) && isset($_POST['inputTypeDocument']) && isset($_POST['inputDocument'])
            && isset($_POST['inputExpeditionDate']) && isset($_POST['inputBirthdate']) && isset($_POST['inputInstitute']) && isset($_POST['inputCareer'])) {
            $names = $_POST['inputNames'];
            $lastnames = $_POST['inputLastname'];
            $typedocument = $_POST['inputTypeDocument'];
            $document = $_POST['inputDocument'];
            $expeditionDate = $_POST['inputExpeditionDate'];
            $birthdate = $_POST['inputBirthdate'];
            $institute = $_POST['inputInstitute'];
            $career = $_POST['inputCareer'];
            if ($this->model->insert($names, $lastnames, $typedocument, $document, $expeditionDate, $birthdate, $institute, $career)) {
                $title = "Registro exitoso.";
                $message = "Los datos se han registrado correctamente, puede verlos en el listado";
                $type = 1;
            } else {
                $title = "No se pudo registrar.";
                $message = "No se ha podido registrar la informacion de la inscripcion.";
                $type = 0;
            }
        } else {
            $title = "Algo salio mal";
            $message = "Comprueba que todos tus datos en los campos estan completos.";
            $type = 0;
        }
        $this->view->message = $message;
        $this->view->title = $title;
        $this->view->type = $type;
        $this->render();
    }
}