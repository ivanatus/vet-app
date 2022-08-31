<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novosti extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['id','title','description','	created_at'];
}