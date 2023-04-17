<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\Brand;


class AdminBrandController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = Brand::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("brand.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("brand.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                    ->addColumn('logo', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('logo', $row['logo'] ?? '')) .'">';
                        return $image;
                    })
                    ->rawColumns(['action','image','logo'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.brand.brand');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('brand.storeUpdate');
        if($id != null && $id != ''){
            $data = Brand::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.brand.addEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.brand.addEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
            'image'    => $data['image'],
            'content'    => $data['content'],
             'logo'    => $data['logo'],
              'web_link'    => $data['web_link'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = Brand::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('brand')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = Brand::create($dataInsert);
            return redirect()->route('brand')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        Brand::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('brand')->with('success', sc_language_render('action.delete_success'));
    }
}