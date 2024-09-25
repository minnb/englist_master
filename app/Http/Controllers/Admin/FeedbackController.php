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
    	return view('admin.feedback.create');
    }

    public function post_create(Request $request)
    {
    	try
        {
            DB::beginTransaction();
            $data = new Feedback();
            $data->name = trim($request->name);
            $data->position = trim($request->position);
            $data->content = trim($request->content);
            $data->star = $request->star;
            $data->options = "{}";
            $data->blocked = $request->blocked == 'on' ? 0 : 1;
            $data->user_id = Auth::User()->id;

            if($request->file('fileImage') && $request->hasFile('fileImage'))
            {
                $file = $request->file('fileImage');
                $destinationPath = path_storage('avata');
                if(isset($file)){
                    $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                    $file->move($destinationPath, $file_name);
                    $data->thumbnail = $destinationPath.'/'.$file_name;
                }
            }
            else
            {
                $data->thumbnail = "";
            }

            $data->save();
            DB::commit();
            return redirect()->route('get.dashboard.feedback.list')->with(['flash_message'=>'Add feedback success']);
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
            return view('admin.feedback.edit', compact('data', 'id'));
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
            $data = Feedback::find($id);
            $data->name = trim($request->name);
            $data->position = trim($request->position);
            $data->content = trim($request->content);
            $data->star = $request->star;
            $data->options = "{}";
            $data->blocked = $request->blocked == 'on' ? 0 : 1;
            $data->user_id = Auth::User()->id;

            if($request->file('fileImage') && $request->hasFile('fileImage'))
            {
                $file = $request->file('fileImage');
                $destinationPath = path_storage('avata');
                $old_img = $data->thumbnail;
                if(isset($file)){
                    $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                    $file->move($destinationPath, $file_name);
                    $data->thumbnail = $destinationPath.'/'.$file_name;
                    if(isset($old_img))
                    {
                        delete_image_no_path($old_img);
                    }
                }
            }

            $data->save();
            DB::commit();
            return redirect()->route('get.dashboard.feedback.list')->with(['flash_message'=>'Add feedback success']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}