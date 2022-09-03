<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\narudzba;
class preglediController extends Controller
{
    public function index()
    {
        $pregled = narudzba::all();
        return view('pregledi', compact('pregled'));
    }
    public function store(Request $request)
    {
        $narudzba = new narudzba;
        $narudzba->pacijent = $request->pacijent;
        $narudzba->vrijeme = $request->vrijeme;
        $narudzba->save();
        return redirect('pregledi')->with('status', 'Vaša narudžba je zabilježena');
    }
    public function delete($id){
        $narudzba = narudzba::find($id);
        $narudzba->delete();
        return redirect('pregledi');
    }
}