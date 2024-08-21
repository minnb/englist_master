<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;

class LoginController extends Controller
{
 	public function __construct()
    {
        //$this->middleware('auth');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // If successful, redirect them to their intended location
            return redirect()->intended('/dashboard');
        }

        // If unsuccessful, redirect back with an error message
        return redirect()->back()->withErrors([
            'email' => 'Incorrect email or password.',
        ]);
    }

}
