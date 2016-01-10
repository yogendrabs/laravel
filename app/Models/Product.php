<?php

namespace App\Models;

use \Eloquent;

class Product extends Eloquent
{
    protected $fillable = [
        'name',
        'description',
        'price'];
}