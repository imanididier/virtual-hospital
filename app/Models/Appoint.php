<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoint extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'date', 'number', 'message', 'doctor', 'status', 'user_id'];
}
