<?php

namespace App\Http\Controllers\Backend;

use App\Http\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\BlogCard;
use Illuminate\Http\Request;

class BlogCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_card = BlogCard::paginate(10);
        // dd($blog_card);
        return view('backend.blog_card.index', compact('blog_card'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog_card.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg',
        ]);

    

        $blog_card = new BlogCard();
        $blog_card->title = $request->title;
        $blog_card->description = $request->description;

        

    
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);

            $blog_card->image='images/' . $imageName; 
            
        }
    
        $blog_card->save();

            return redirect()->route('blog_card.index')
            ->with('alert-type', 'success')
            ->with('message', 'Blog card created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog_card = BlogCard::findOrFail($id);
    
        return view('backend.blog_card.edit', compact('blog_card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp'
        ]);
        
        $blog_card = BlogCard::findOrFail($id);
        $blog_card->title = $request->title;
        $blog_card->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $blog_card->image = $filename;
        }

        $blog_card->save();


        return redirect()->route('blog_card.index')
        ->with('alert-type', 'success')
        ->with('message', 'Blog card created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog_card = BlogCard::findOrFail($id);

        if (file_exists(public_path('images' . $blog_card->image))) {
            unlink(public_path('images' . $blog_card->image));
        }

        $blog_card->delete();
        return redirect()->back()->with('success', 'Blog card deleted successfully.');
    }
}
