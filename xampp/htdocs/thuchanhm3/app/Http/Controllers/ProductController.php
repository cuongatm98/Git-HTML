<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::paginate(5);
        return view('backend.products.list',compact('products'));
    }
    public function create()
    {
        $categories=Category::all();
        return view('backend.products.create',compact('categories'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {


        $products = new Product();
        $products->name = $request->input("name");
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $products->image = $path;
        }
        $products->price = $request->input('price');
        $products->category_id=$request->input('category_id');
        $products->save();
        session::flash('success', 'Tạo mới thành công');
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.products.edit', compact('product'));
    }

    public function update(request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->input("name");
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $currentImg = $product->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $product->image = $path;
        }
        $product->save();
        Session::flash('success', 'Cập nhật thành công');
        //tao moi xong quay ve trang danh sach task
        return redirect()->route('products.index');
    }
    public function destroy($id){
        $product = Product::find($id);
        $image = $product->image;

        //delete image

        if ($image) {
            Storage::delete('/public/' . $image);
        }

        $product->delete();
        Session::flash('success','Xóa thành công');
        return redirect()->route('products.index');
    }

    public function getSearch(Request $request)
    {
        $products = Product::with('category')
            ->where('name','LIKE',"%$request->value%")
            ->paginate(5);
        return view('backend.products.search',compact('products'));
    }

}
