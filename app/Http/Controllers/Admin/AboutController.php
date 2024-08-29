<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use DB;
use App\Models\Pages;

class AboutController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
        $data = Pages::where('name','about')->first();
    	return view('admin.page.about',compact('data'));
    }

    public function choose()
    {
        $data = Pages::where('name','choose')->first();
        return view('admin.page.choose',compact('data'));
    }

    public function post_about(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = Pages::where('name','about')->first();
                if($data != null && $data->count() > 0)
                {
                    $data->c1 = trim($request->c1);
                    $data->c2 = trim($request->c2);
                    $data->c3 = trim($request->c3);
                    $data->c4 = trim($request->c4);
                    $data->c5 = trim($request->c5);
                    $data->c6 = trim($request->c6);
                    $data->c7 = trim($request->c7);
                    $data->c8 = trim($request->c8);
                    $data->c9 = trim($request->c9);
                    $data->c10 = trim($request->c10);
                    $data->user_id = Auth::User()->id;
                    if ($request->file('fileImage') && $request->hasFile('fileImage'))
                    {
                        $file = $request->file('fileImage');
                        $old_img = $data->image;
                        $destinationPath = path_storage('about');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->image = $destinationPath.'/'.$file_name;
                            if(isset($old_img)){
                                delete_image_no_path($old_img);
                            }
                        }
                    }
                    $data->save();
                }
                else
                {
                    $page = new Pages();
                    $page->c1 = trim($request->c1);
                    $page->c2 = trim($request->c2);
                    $page->c3 = trim($request->c3);
                    $page->c4 = trim($request->c4);
                    $page->c5 = trim($request->c5);
                    $page->c6 = trim($request->c6);
                    $page->c7 = trim($request->c7);
                    $page->c8 = trim($request->c8);
                    $page->c9 = trim($request->c9);
                    $page->c10 = trim($request->c10);
                    $page->name = 'about';
                    $page->options = "{}";
                    $page->blocked = 0; 
                    $page->user_id = Auth::User()->id;

                    if($request->file('fileImage') && $request->hasFile('fileImage'))
                    {
                        $file = $request->file('fileImage');
                        $destinationPath = path_storage('about');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $page->image = $destinationPath.'/'.$file_name;
                        }
                    }
                    else
                    {
                        $page->image = "";
                    }
                    $page->save();

                }                          
            DB::commit();
            return redirect()->route('get.dashboard.page.about')->with(['flash_message'=>'Lưu dữ liệu thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
    
    public function post_choose(Request $request)
    {
        try{
            DB::beginTransaction();
                $data = Pages::where('name','choose')->first();
                if($data != null && $data->count() > 0)
                {
                    $data->c1 = trim($request->c1);
                    $data->c2 = trim($request->c2);
                    $data->c3 = trim($request->c3);
                    if ($request->file('fileImage') && $request->hasFile('fileImage'))
                    {
                        $file = $request->file('fileImage');
                        $old_img = $data->image;
                        $destinationPath = path_storage('choose');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $data->image = $destinationPath.'/'.$file_name;
                            if(isset($old_img)){
                                delete_image_no_path($old_img);
                            }
                        }
                    }
                    $data->save();
                }
                else
                {
                    $page = new Pages();
                    $page->c1 = trim($request->c1);
                    $page->c2 = trim($request->c2);
                    $page->c3 = trim($request->c3);
                    $page->name = 'choose';
                    $page->options = "{}";
                    $page->blocked = 0; 
                    $page->user_id = 1;

                    if( $request->file('fileImage') && $request->hasFile('fileImage'))
                    {
                        $file = $request->file('fileImage');
                        $destinationPath = path_storage('choose');
                        if(isset($file)){
                            $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                            $file->move($destinationPath, $file_name);
                            $page->image = $destinationPath.'/'.$file_name;
                        }
                    }
                    else
                    {
                        $page->image = "";
                    }
                    $page->save();

                }                          
            DB::commit();
            return redirect()->route('get.dashboard.page.choose')->with(['flash_message'=>'Lưu dữ liệu thành công']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}
