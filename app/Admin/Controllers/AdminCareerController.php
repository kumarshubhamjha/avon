<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\Career;
use App\Admin\Models\CareerCategory;


class AdminCareerController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = Career::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("career.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("career.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                   
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.career.career');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('career.storeUpdate');
        if($id != null && $id != ''){
            $data = Career::where('id',$id)->first();
            
            return view('s-cart-admin::'.'screen.career.addEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.career.addEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
       
        $dataInsert = [
            'name'    => $data['name'],
            'exp'    => $data['exp'],
            'location'    => $data['location'],
            'role'    => $data['role'],
            'qualification'    => $data['qualification'],
            'category'    => $data['category'],
            'date'=>$data['date'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = Career::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('career')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = Career::create($dataInsert);
            return redirect()->route('career')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        Career::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('career')->with('success', sc_language_render('action.delete_success'));
    }
    
    
    
    
    
    
    
    
    
    
    
     // Career category
    
    public function careercategory(Request $request)
    {
          if ($request->ajax()) 
          {
            $data = CareerCategory::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row)
                    {
                        $btn = '<a href="'.sc_route_admin("careercategory.addEditCategory",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("careercategory.addEditCategory",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                   
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('s-cart-admin::'.'screen.career.careercategory');
        
    }
    
    public function addEditCategory(Request $request, $id = null)
    {
         $url_action = sc_route_admin('careercategory.categorystoreUpdate');
        if($id != null && $id != '')
        {
            $data = BlogCategory::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.career.categoryaddEdit',compact('url_action','data'));
        }
        else
        {
            return view('s-cart-admin::'.'screen.career.categoryaddEdit',compact('url_action'));
        }
    }
    
      public function categorystoreUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $dataInsert = [
            'title'    => $data['title'],
            'keyword'  => $data['keyword'],
            'date'     => $data['date'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != ''))
        {
            $banner = CareerCategory::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('careercategory')->with('success', sc_language_render('action.edit_success'));
        }
        else
        {
            $banner = CareerCategory::create($dataInsert);
            return redirect()->route('careercategory')->with('success', sc_language_render('action.create_success'));
        }
    }
    
    public function categorydelete($id)
    {
        CareerCategory::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('careercategory')->with('success', sc_language_render('action.delete_success'));
    }
}