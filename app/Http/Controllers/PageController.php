<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'text_content' => 'required|string',
            'image_url' => 'nullable|string',
        ]);

        // Create a new page
        $page = Page::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Add content blocks (text and image)
        $page->addContentBlock('text', $request->text_content);
        if ($request->image_url) {
            $page->addContentBlock('image', $request->image_url);
        }

        return redirect()->back()->with('success', 'Page and content blocks created successfully!');
    }
    public function index()
    {
        $pages = Page::with('contentBlocks')->get(); // Eager load content blocks
        return view('pages.index', compact('pages'));
    }

}
