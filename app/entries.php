<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entries extends Model
{
  protected $primarykey='id';
  protected $fillable=[
    'barber',
    'barber_id',
    'service',
    'service_id',
    'price'
  ];
}
