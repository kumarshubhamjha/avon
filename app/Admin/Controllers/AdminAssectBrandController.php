<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\AssectBrandCategory;
use App\Admin\Models\AssectBrand;


class AdminAssectBrandController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = AssectBrand::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("asset.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("asset.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                   
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.assetBrand.asset');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('asset.storeUpdate');
        if($id != null && $id != ''){
            $data = AssectBrand::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.assetBrand.assetaddEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.assetBrand.assetaddEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        if($request->file('pdf'))
        {
          $filenameWithExt = $request->file('pdf')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('pdf')->getClientOriginalExtension();

        $fileNameToStore = $filename.'-'.time().'.'.$extension;

        $path = $request->file('pdf')->storeAs('file', $fileNameToStore);
        
      
        
        $data = request()->all();
        $dataOrigin = request()->all();
        $dataInsert = [
            'image'    => $data['image'],
            'title'    => $data['title'],
            'pdf'      => $fileNameToStore,
            'category' =>$data['category'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        
        }else{
            $data = request()->all();
            $dataInsert = [
            'image'    => $data['image'],
            'title'    => $data['title'],
            'category' =>$data['category'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        }
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = AssectBrand::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('asset')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = AssectBrand::create($dataInsert);
            return redirect()->route('asset')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        AssectBrand::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('asset')->with('success', sc_language_render('action.delete_success'));
    }
    
    
    
    
    // Blog category
    
    public function assetcategory(Request $request)
    {
          if ($request->ajax()) 
          {
            $data = AssectBrandCategory::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row)
                    {
                        $btn = '<a href="'.sc_route_admin("assetcategory.addEditassetCategory",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("assetcategory.addEditassetCategory",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                   
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('s-cart-admin::'.'screen.assetBrand.assetcategory');
        
    }
    
    public function addEditCategory(Request $request, $id = null)
    {
         $url_action = sc_route_admin('assetcategory.categorystoreUpdate');
        if($id != null && $id != '')
        {
            $data = AssectBrandCategory::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.assetBrand.categoryaddEdit',compact('url_action','data'));
        }
        else
        {
            return view('s-cart-admin::'.'screen.assetBrand.categoryaddEdit',compact('url_action'));
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
            $banner = AssectBrandCategory::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('assetcategory')->with('success', sc_language_render('action.edit_success'));
        }
        else
        {
            $banner = AssectBrandCategory::create($dataInsert);
            return redirect()->route('assetcategory')->with('success', sc_language_render('action.create_success'));
        }
    }
    
    public function categorydelete($id)
    {
        AssectBrandCategory::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('assetcategory')->with('success', sc_language_render('action.delete_success'));
    }
    
    
    
    
}