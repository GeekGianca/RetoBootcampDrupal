<?php
class Records extends Controller{
    public function __construct()
    {
        parent::__construct();
        $this->view->records = true;
        $this->view->data = [];
    }

    public function render()
    {
        $data = $this->model->students_records();
        $this->view->data = $data;
        $this->view->render('records/index');
    }
}