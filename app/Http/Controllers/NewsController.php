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
        return redirect('add-news-form')->with('status', 'News Form Data Has Been inserted');
    }
    public function delete($id){
        $news = News::find($id);
        $news->delete();
        return redirect('home');
    }
    public function editform($id)
    {
        $news = News::find($id);
        return view('edit-news', compact('news'));
    }
    public function edit(Request $request){
        $news = News::all();
        
        if($news->id === $request->id){
            $news->title = $request->title;
            $news->description = $request->description;
            $news->save();
        }
        return redirect('home');
    }
}