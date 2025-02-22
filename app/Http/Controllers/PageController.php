<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function products($slug) {
        return view('products', compact('slug'));
    }

    public function user($id, $name) {
        return view('user', compact('id', 'name'));
    }

    public function sales() {
        return view('sales');
    }
}
