<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturer';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'pfno', 'faculty', 'address', 'mobile'];
    use HasFactory;
}
