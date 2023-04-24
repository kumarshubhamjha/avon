<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\Press;
use App\Admin\Models\PressCategory;


class AdminPressController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = Press::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("press.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("press.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                   
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.press.press');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('press.storeUpdate');
        if($id != null && $id != ''){
            $data = Press::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.press.addEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.press.addEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
            'image'    => $data['image'],
            'title'    => $data['title'],
            'keyword'    => $data['keyword'],
            'date'    => $data['date'],
            'category'    => $data['category'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = Press::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('press')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = Press::create($dataInsert);
            return redirect()->route('press')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        Press::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('press')->with('success', sc_language_render('action.delete_success'));
    }
    
    
    
     // Press category
    
    public function presscategory(Request $request)
    {
          if ($request->ajax()) {
          
            $data = PressCategory::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("presscategory.addEditCategory",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("presscategory.categorydelete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                   
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.press.presscategory');
        
    }
    
    
    
    public function addEditCategory(Request $request, $id = null)
    {
        
         $url_action = sc_route_admin('presscategory.categorystoreUpdate');
        if($id != null && $id != ''){
            $data = PressCategory::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.press.categoryaddEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.press.categoryaddEdit',compact('url_action'));
        }
    }
    
    
    
      public function categorystoreUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
             'title'    => $data['title'],
              'keyword'    => $data['keyword'],
              'image'    => $data['image'],
              'date'    => $data['date'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = PressCategory::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('presscategory')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = PressCategory::create($dataInsert);
            return redirect()->route('presscategory')->with('success', sc_language_render('action.create_success'));
        }
    }
    
    
    public function categorydelete($id)
    {
        PressCategory::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('presscategory')->with('success', sc_language_render('action.delete_success'));
    }
    
}