<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
  protected $primarykey='id';
  protected $fillable=[
  'name',
  'phonenumber',
  'email'
    ];
}
