<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;

class PostController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
    	return view('admin.index');
    }


}
