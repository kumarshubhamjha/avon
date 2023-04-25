<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\ProductBenefit;


class AdminProductBenefitController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = ProductBenefit::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("productbenefits.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("productbenefits.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action','image'])
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.productbenefit.productbenefit');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('productbenefits.storeUpdate');
        if($id != null && $id != ''){
            $data = ProductBenefit::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.productbenefit.addEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.productbenefit.addEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
           
           
            'title'    => $data['title'],
              'image'    => $data['image'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = ProductBenefit::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('productbenefits')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = ProductBenefit::create($dataInsert);
            return redirect()->route('productbenefits')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        ProductBenefit::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('productbenefits')->with('success', sc_language_render('action.delete_success'));
    }
}