<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Politica;
use App\Models\Product;
use App\Models\Termino;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::first();
        $products = Product::limit(3)->get();
        return view('home', compact('products', 'company'));
    }

    public function contact()
    {
        $company = Company::first();
        return view('contact', compact('company'));
    }

    public function programacion()
    {
        $company = Company::first();
        return view('programacion', compact('company'));
    }

    public function terminos()
    {
        $company = Company::first();
        $terminos = Termino::first();
        return view('terminos', compact('company', 'terminos'));
    }

    public function politicas()
    {
        $company = Company::first();
        $politicas = Politica::first();
        return view('politicas', compact('company', 'politicas'));
    }
}
