<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\ProductTestimonial;
use SCart\Core\Admin\Models\AdminProduct;
use SCart\Core\Front\Models\ShopProductDescription;


class AdminProductTestimonialController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = ProductTestimonial::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("producttestimonial.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("producttestimonial.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action','image'])
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.producttestimonial.producttestimonial');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('producttestimonial.storeUpdate');
        $products = AdminProduct::all();
        //echo '<pre>';print_r($products);die;
        if($id != null && $id != ''){
            $data = ProductTestimonial::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.producttestimonial.addEdit',compact('url_action','data', 'products'));
        }else{
            return view('s-cart-admin::'.'screen.producttestimonial.addEdit',compact('url_action', 'products'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
           
           
            'author'    => $data['author'],
              'location'    => $data['location'],
              'productid'    => $data['productid'],
              'title'    => $data['title'],
              'rating'    => $data['rating'],
              'review'    => $data['review'],
              'image'    => $data['image'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = ProductTestimonial::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('producttestimonial')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = ProductTestimonial::create($dataInsert);
            return redirect()->route('producttestimonial')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        ProductTestimonial::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('producttestimonial')->with('success', sc_language_render('action.delete_success'));
    }
}