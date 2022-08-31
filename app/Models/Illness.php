<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    use HasFactory;
    protected $table = 'illnesses';
    protected $fillable = ['User','id','bolest','tretman','datum'];
}