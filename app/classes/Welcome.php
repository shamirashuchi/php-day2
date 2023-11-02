<?php


namespace App\classes;

//composer dump-autoload
class Welcome
{
 public $message;//property
 public function  __construct()
 {
     $this->message = 'Welcome PHP';//this own class object
 }

 public function index()
 {
     echo $this->message;
 }
}