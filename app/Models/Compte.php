<?php

namespace App\Models;

use App\Models\Compte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte extends Model
{
    use HasFactory;
    public $fillable = ['first_name', 'last_name', 'email', 'phone', 'date', 'heure'];
}
