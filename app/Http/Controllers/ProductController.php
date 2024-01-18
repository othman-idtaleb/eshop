<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
    $listeProduits = Product::get()->all();
    $titre = "Liste des produits";
    return view("products.index", compact('listeProduits', 'titre'));
    } 

    //


    public function create()
    {
    return view('products.create');
    }
    public function store(Request $request)
    {
    $produit = new Product();
    $produit->name = $request->name;
    $produit->detail = $request->detail;
    //dd($produit);
    $produit->save();
    return redirect()->route('products.index');
    }

    //


    public function edit(Product $product)
    {
    return view('products.update', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
    $product->name = $request->name;
    $product->detail = $request->detail;
    $product->save();
    return redirect()->route('products.index');
    }


    //


    public function destroy(Product $product)
    {
    $product->delete();
    return redirect()->route('products.index');
    }



}
