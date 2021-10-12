<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::paginate(5);
        return view('backend.categories.list',compact('categories'));
    }
    public function create()
    {
        return view('backend.categories.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $categories=new Category();
        $categories->name = $request->input("name");
        $categories->description = $request->input('description');
        $categories->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit', compact('category'));
    }

    public function update(request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input("name");
        $category->description = $request->input("description");
        $category->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('categories.index');
    }
    public function destroy($id){
        $category = Product::find($id);
        $category->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('categories.index');
    }
}
