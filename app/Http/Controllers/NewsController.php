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
}