<?php
require 'vendor/autoload.php';
require 'app/models/Model.php';
require 'app/views/View.php';
   
    class Controller
   {
    public function index()
    {
        $message = (new Model())->getText();
        return (new View($message))->render();
    }
   }