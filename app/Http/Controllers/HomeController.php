<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coureses = Product::where('blocked', 0)->get();
        return view('index', compact('coureses'));
    }

    public function coureses()
    {
        return view('coureses');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog');
    }

}
