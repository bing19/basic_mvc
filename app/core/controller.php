<?php

class Controller {

    function __construct() {

    }


    public function model($model) {
        require_once '../app/models/' . ucfirst($model) . '.php';
        return new $model();
    }
}
