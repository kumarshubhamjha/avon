<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\Offer;


class AdminOfferController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = Offer::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("offer.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("offer.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.offer.offer');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('offer.storeUpdate');
        if($id != null && $id != ''){
            $data = Offer::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.offer.addEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.offer.addEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
           
           
            'title'    => $data['title'],
              'desp'    => $data['desp'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = Offer::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('offer')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = Offer::create($dataInsert);
            return redirect()->route('offer')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        Offer::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('offer')->with('success', sc_language_render('action.delete_success'));
    }
}