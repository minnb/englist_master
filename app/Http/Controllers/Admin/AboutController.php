<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;

class AboutController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
    	return view('admin.page.about');
    }
    public function post_about()
    {

    }

}
