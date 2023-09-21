<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table='students';
    protected $primarykey='id';
    protected $fillable=['name', 'email','place'];
    use HasFactory;
}
