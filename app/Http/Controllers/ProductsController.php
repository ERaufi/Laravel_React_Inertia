<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsRequest;
use App\Http\Requests\ProductsUpdateRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $query = Products::select('id', 'name', 'image', 'buyingPrice', 'sellingPrice');
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('buyingPrice')) {
            $query->where('buyingPrice', 'like', '%' . $request->buyingPrice . '%');
        }

        if ($request->has('sellingPrice')) {
            $query->where('sellingPrice', 'like', '%' . $request->sellingPrice . '%');
        }


        $products = $query->paginate(10);




        return inertia('Products/Index', [
            'products' => $products,
        ]);
    }

    public function create(ProductsRequest $request)
    {
        $product = new Products();
        $product->name = $request->name;
        $product->buyingPrice = $request->buyingPrice;
        $product->sellingPrice = $request->sellingPrice;
        $imagePath = $request->file('image')->store('productsImages', 'public');
        $product->image = $imagePath;
        $product->save();

        return redirect('dashboard')->with(['success' => 'Product Added successfully.']);
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);

        return inertia('Products/Edit', compact('product'));
    }

    public function update(ProductsUpdateRequest $request)
    {
        $item = Products::where('id', $request->id)->first();
        $item->name = $request->name;
        $item->buyingPrice = $request->buyingPrice;
        $item->sellingPrice = $request->sellingPrice;

        if ($request->has('image') && $request->image != null) {
            $imagePath = $request->file('image')->store('productsImages', 'public');
            $item->image = $imagePath;
        }

        $item->update();

        return redirect('products')->with(['success' => 'Product Added successfully.']);
    }

    public function show($id)
    {
        $product = Products::where('id', $id)->first();

        return inertia('Products/Show', [
            'product' => $product
        ]);
    }

    public function delete($id)
    {
        Products::where('id', $id)->delete();

        return redirect('products')->with(['success' => 'Product Deleted successfully.']);
    }
}
