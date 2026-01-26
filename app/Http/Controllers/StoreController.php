<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Company;
use App\Models\Product;
use App\Models\Taxonomy;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // public function index(Request $request)
    // {
    //     $query = Product::query();

    //     if ($request->price) {
    //         $query->where('price', '<=', $request->price);
    //     }

    //     if ($request->brand) {
    //         $query->where('brand_id', $request->brand);
    //     }

    //     if ($request->category) {
    //         $query->where('taxonomy_id', $request->category);
    //     }

    //     return view('store.index', [
    //         'products' => $query->paginate(12),
    //         'brands' => Brand::all(),
    //         'categories' => Taxonomy::all(),
    //         'company' => Company::first()
    //     ]);
    // }

    public function index(Request $request)
    {
        $query = Product::query();

        // 🔎 BUSCADOR POR NOMBRE
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // 💰 FILTRO POR PRECIO
        if ($request->price) {
            $query->where('price', '<=', $request->price);
        }

        // 🏷️ FILTRO POR MARCA
        if ($request->brand) {
            $query->where('brand_id', $request->brand);
        }

        // 📂 FILTRO POR CATEGORIA
        if ($request->category) {
            $query->where('taxonomy_id', $request->category);
        }

        return view('store.index', [
            'products' => $query->paginate(12)->withQueryString(),
            'brands' => Brand::all(),
            'categories' => Taxonomy::all(),
            'company' => Company::first()
        ]);
    }


    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('shop.show', compact('product'));
    }

}
