<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Illness;
use App\Models\User;

class ProfilController extends Controller
{
    public function index()
    {
        $illness = Illness::all();
        return view('profil', compact('illness'));
    }

    public function store(Request $request)
    {
        $illness = new Illness;
        $illness->User = $request->User;
        $illness->id = $request->id;
        $illness->bolest = $request->bolest;
        $illness->tretman = $request->tretman;
        $illness->datum = $request->datum;
        $illness->save();
        return view('profil');
    }
}
