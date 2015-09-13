<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\UserProfile;

class Hello{
  public function hello() {
    return view('hello', ['chestnut'=> 'Chestnut']);
  }
}
