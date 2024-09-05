<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use DB;
use App\Models\Feedback;
class FeedbackController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $data = Feedback::get();
    	return view('admin.feedback.list',compact('data'));
    }
    public function create()
    {
    	return view('admin.feeback.create');
    }

    public function post_create(Request $request)
    {
    	try
        {
            DB::beginTransaction();

            DB::commit();
            return redirect()->route('get.dashboard.feeback.list')->with(['flash_message'=>'Created success']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }

    public function edit($id)
    {
        try
        {
            $data = Feedback::find($id);
            return view('admin.feeback.edit', compact('data', 'id'));
        }
        catch (\Exception $e) 
        {
            return back()->withErrors($e->getMessage());
        }
    }

    public function post_edit(Request $request, $id)
    {
    	try
        {
            DB::beginTransaction();

            DB::commit();
            return redirect()->route('get.dashboard.feeback.list')->with(['flash_message'=>'Created success']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}