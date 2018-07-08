<?php
namespace Controller;

class Controller {

    public function __construct(){}
    public function __call($name, $arguments)
    {
        return view('errors::404');
    }
}
