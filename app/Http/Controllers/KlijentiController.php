<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klijenti;

class KlijentiController extends Controller
{
    public function index()
    {
        $klijenti = Klijenti::all();
        return view('klijenti', compact('klijenti'));
    }

    public function delete($id){
        $klijent = Klijenti::find($id);
        $klijent->delete();
        return redirect('klijenti');
    }
}
