<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illness;

class ProfilController extends Controller
{
    public function index()
    {
        $illness = Illness::all();
        return view('profil', compact('illness'));
    }
}
