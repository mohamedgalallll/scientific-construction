<?php

namespace App\Http\Controllers\Admin\categories;

use App\Http\Controllers\Controller;
use App\Model\MainCategory;
use DataTables;
use Illuminate\Http\Request;

class MainCategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories_show', ['only' => 'index', 'show']);
        $this->middleware('permission:categories_add', ['only' => 'store', 'create']);
        $this->middleware('permission:categories_edit', ['only' => 'edit', 'update']);
        $this->middleware('permission:categories_delete', ['only' => 'destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()){
            $items = MainCategory::latest()->get();
            return DataTables::of($items)->make(true);
        }
        return view('admin.categories.index');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'sometimes|nullable|string',
            'keyword' => 'sometimes|nullable|string',
        ]);
        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);
        $mainCategory =  MainCategory::create($data);
        $request->hasFile('image') ?  $mainCategory->addMediaFromRequest('image')->toMediaCollection('images') : '' ;
        return redirect('admin/categories')->with('success', trans('web.categoryHaveBeenCreatedSuccessfully'));
    }

    public function edit($id)
    {
        $item = MainCategory::findorfail($id);
        return view('admin.categories.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = MainCategory::findorfail($id);
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'sometimes|nullable|string',
            'keyword' => 'sometimes|nullable|string',
        ]);
        $image = $request->validate([
            'image' => 'sometimes|nullable|image',
        ]);
        $request->hasFile('image') ? $item->addMedia($request->image)->toMediaCollection('images') : '';
        $item->update($data);
        return redirect('admin/categories')->with('success',trans('web.categoryHaveBeenUpdatedSuccessfully'));
    }

    public function destroy($id)
    {
        $item = MainCategory::findorfail($id)->delete();
        if (MainCategory::find($id)){
            return response()->json(false,404);
        }else{
            return response()->json(true,202);
        }
    }
}
