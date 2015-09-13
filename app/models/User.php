<?php namespace App\Models;

use Nut;

class User extends Nut
{
  public static function create($table)
  {
    $table->increment('id');
    $table->string('user_name', 32);
    $table->string('email');
    $table->string('password', 64);
    $table->timeStamp();
    $table->unique('user_name', 'email');
    $table->incrementIndex(10001);
  }
}
