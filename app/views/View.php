<?php
require 'vendor/autoload.php';
   class View
   {
       private $message;
       
       public function __construct($message) {
           $this->message = $message;
       }
       
       public function render()
       {
           echo $this->message;
       }
       
   }