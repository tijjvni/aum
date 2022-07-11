<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function refreshInputs(Request $request)
    {
        $request->image = null;
        $request->title = null;
        $request->content = '';
        $request->slug = '';
        $request->published_at = null;
        $request->category = null;
    }
    public function index()
    {
        $news = News::orderBy('published_at', 'desc')->paginate(24);
        return view('news.index', compact(['news']));
    }
    public function create()
    {
        $news = News::latest()->paginate(24);
        return view('news.create', compact(['news']));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required',
            'published_at' => 'required|date|before_or_equal:today',
            'content' => 'nullable|min:30|max:50000000',
            'slug' => 'nullable',
        ]);
        $data['slug'] = Str::slug($request->input('title'));
        $news = News::create(
            $data
        );
        $done = $news->addMediaFromRequest('image')
            ->toMediaCollection('news');
        return redirect()->back()->with('success', 'Blog added successfully');
    }
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'nullable',
            'published_at' => 'required|date|before_or_equal:today',
            'content' => 'nullable|min:30|max:50000000',
            'slug' => 'nullable',
        ]);
        $data['slug'] = Str::slug($request->input('title'));
        $done = $news->update($data);
        if ($request->image) {
            $news->addMediaFromRequest('image')
                ->toMediaCollection('news');
        }

        return redirect()->route('news.show', $news->slug)->with('success', 'Blog updated successfully');
    }
    public function destroy(News $news)
    {
        $done = $news->delete();
        if ($done) {
            return redirect()->back()->with('success', 'News successfully Deleted');
        }
    }
}