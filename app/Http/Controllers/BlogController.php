<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'publishedDate' => 'required|date',
            'details' => 'required|string|max:5000',
        ]);

        Blog::create($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($blog)
    {
        $blog = Blog::findOrFail($blog);
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($blog)
{
    $blog = Blog::findOrFail($blog);
    return view('admin.blogs.edit', compact('blog'));
}


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $blog)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'publishedDate' => 'required|date',
        'details' => 'required|string',
    ]);

    $blog = Blog::findOrFail($blog);
    $blog->update($validatedData);

    return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
   public function destroy($blog)
{
    $blog = Blog::findOrFail($blog);
    $blog->delete();
    return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
}

}
