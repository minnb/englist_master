<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use DB;
use App\Models\Product;
class ProductController extends Controller
{
 	public function __construct()
    {
        $this->middleware('auth');
    }


    public function list()
    {
        $data = Product::get();
    	return view('admin.product.list',compact('data'));
    }
    
    public function create()
    {
    	return view('admin.product.create');
    }

    public function post_create(Request $request)
    {
    	try
        {
            DB::beginTransaction();
            $product = new Product();
            $product->name = trim($request->name);
            $product->desc = trim($request->description);
            $product->content = trim($request->content);
            $product->uom = $request->uom;
            $product->unit_price = $request->unit_price;
            $product->sales = $request->duration;
            $product->options = "{}";
            $product->blocked = $request->blocked == 'on' ? 0 : 1;
            $product->user_id = Auth::User()->id;

            if($request->file('fileImage') && $request->hasFile('fileImage'))
            {
                $file = $request->file('fileImage');
                $destinationPath = path_storage('product');
                if(isset($file)){
                    $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                    $file->move($destinationPath, $file_name);
                    $product->image = $destinationPath.'/'.$file_name;
                }
            }
            else
            {
                $product->image = "";
            }

            $product->save();
            DB::commit();
            return redirect()->route('get.dashboard.product.list')->with(['flash_message'=>'Created success']);
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
            $data = Product::find($id);
            return view('admin.product.edit', compact('data', 'id'));
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
            $product = Product::find($id);
            $product->name = trim($request->name);
            $product->desc = trim($request->description);
            $product->content = trim($request->content);
            $product->uom = $request->uom;
            $product->unit_price = $request->unit_price;
            $product->sales = $request->duration;
            $product->options = "{}";
            $product->blocked = $request->blocked == 'on' ? 0 : 1;
            $product->user_id = Auth::User()->id;

            if($request->file('fileImage') && $request->hasFile('fileImage'))
            {
                $file = $request->file('fileImage');
                $destinationPath = path_storage('product');
                $old_img = $data->image;
                if(isset($file)){
                    $file_name = time().randomString().'.'.$file->getClientOriginalExtension();
                    $file->move($destinationPath, $file_name);
                    $product->image = $destinationPath.'/'.$file_name;
                    if(isset($old_img))
                    {
                        delete_image_no_path($old_img);
                    }
                }
            }

            $product->save();
            DB::commit();
            return redirect()->route('get.dashboard.product.list')->with(['flash_message'=>'Created success']);
        }
        catch (\Exception $e) 
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage())->withInput($request->input());
        }
    }
}