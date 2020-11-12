<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use  HasFactory;
    protected $fillable=['name','class', 'line', 'price','created_at','updated_at'];
}
