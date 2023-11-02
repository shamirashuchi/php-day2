<?php


namespace App\classes;


class Welcome
{
 public $message;
 public function  __construct()
 {
     $this->message = 'Welcome PHP';
 }

 public function index()
 {
     echo $this->message;
 }
}