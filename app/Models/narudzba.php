<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class narudzba extends Model
{
    use HasFactory;
    protected $table = 'narudzbas';
    protected $fillable = ['id','pacijent','vrijeme'];
}
