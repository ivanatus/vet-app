<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\narudzba;
class preglediController extends Controller
{
    public function index()
    {
        return view('pregledi');
    }
    public function store(Request $request)
    {
        $narudzba = new narudzba;
        $narudzba->pacijent = $request->pacijent;
        $narudzba->vrijeme = $request->vrijeme;
        $narudzba->save();
        return redirect('pregledi')->with('status', 'Vaša narudžba je zabilježena');
    }
}