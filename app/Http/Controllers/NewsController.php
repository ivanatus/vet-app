<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index()
    {
        return view('add-news-form');
    }
    public function store(Request $request)
    {
        $news = new News;
        $news->title = $request->title;
        $news->description = $request->description;
        $news->save();
        return redirect('add-news-form')->with('status', 'Dodana je novost na početnu stranicu');
    }
    public function delete($id){
        $news = News::find($id);
        $news->delete();
        return redirect('home');
    }
    public function edit($id)
    {
        $news = News::find($id);
        return view('edit-news', compact('news'));
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $news = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;

        $news->save();
        return redirect('home');
    }
}