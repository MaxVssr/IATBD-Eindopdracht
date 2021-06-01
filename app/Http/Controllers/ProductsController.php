<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Exception;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ProductsController extends Controller
{
    public function index() {
        return view('products.index', [
            'products' => Product::all()
        ]);
    }

    public function show($id){
        return view('products.show', [
            'products' => Product::find($id),
            'reviews' => Product::find($id)->allReviews,
        ]);
    }

    public function create() {
        return view('products.create', [
            'category_of_products' => \App\Models\CategoryOfProducts::all(),
        ]);
    }

    public function store(Request $request, \App\Models\Product $products) {
        $products->name = $request->input('name');
        $products->owner_email = $email = $request->user()['email'];
        $products->category = $request->input('category');
        $products->description = $request->input('description');
        $path = $request->file('image')->store('public/images');
        $products->image = $path;

        try {
            $products->save();
            return redirect('/redirect-create');
        }
        catch(Exception $e) {
            return redirect('/products/create');
        }
    }

    public function lend(Request $request) {
        $email = $request->user()['email'];
        $date = Carbon::now()->addDays(14)->format('d-m-Y');
        $id = $request->input('id');
        DB::update('UPDATE products SET lender_email = ?, return_date = ?, status = "Niet beschikbaar" WHERE id = ?', [$email, $date, $id]);

        return redirect('/lend-redirect');
    }

    public function returning(Request $request) {
        $id = $request->input('id');
        DB::update('UPDATE products SET status = "Moet terug geaccepteerd worden" WHERE id = ?', [$id]);

        return redirect('redirect-returning');
    }

    public function returned(Request $request) {
        $id = $request->input('id');
        DB::update('UPDATE products SET lender_email = NULL, return_date = NULL, status = "Beschikbaar" WHERE id = ?', [$id]);

        return redirect('redirect-returned');
    }
}
