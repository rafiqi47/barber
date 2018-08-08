<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facilities extends Model
{
  protected $primarykey='id';
  protected $fillable=[
    'name',
    'price',
    ];
}
