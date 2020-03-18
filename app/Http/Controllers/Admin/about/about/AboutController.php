<?php

namespace App\Http\Controllers\Admin\about\about;
use App\Http\Controllers\Controller;
use App\Model\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories_edit', ['only' => 'edit', 'update']);
    }

    public function index()
    {
        $item = About::first();
        return view('admin.about.about.edit', compact('item'));
    }
    public function update(Request $request)
    {
        $item = About::first();
        $data = $request->validate([
            'name' => 'required|string',
            'excerpt' => 'required|string',
            'description' => 'required|string',
        ]);
        $item->update($data);
        return redirect()->back()->with('success', 'تم تحديث ماذا عنا');
    }
}
