<?php
namespace App\Controllers;

class Hello{
  public function hello() {
    return view('hello', ['chestnut'=> 'Chestnut']);
  }
}
