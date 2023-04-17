<?php

namespace App\Admin\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;
use App\Admin\Models\Blog;
use App\Admin\Models\BlogCategory;


class AdminBlogController extends BaseController
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
          
            $data = Blog::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.sc_route_admin("blog.addEdit",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("blog.delete",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->addColumn('image', function($row){
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                   
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        return view('s-cart-admin::'.'screen.blog.blog');
    }

    public function addEdit(Request $request, $id = null)
    {
        $url_action = sc_route_admin('blog.storeUpdate');
        if($id != null && $id != ''){
            $data = Blog::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.blog.addEdit',compact('url_action','data'));
        }else{
            return view('s-cart-admin::'.'screen.blog.addEdit',compact('url_action'));
        }
        
    }

    public function storeUpdate(Request $request)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $dataInsert = [
            'image'    => $data['image'],
            'content'  => $data['content'],
            'title'    => $data['title'],
            'description'   => $data['description'],
            'keyword'  => $data['keyword'],
            'url'      => $data['url'],
            'date'     => $data['date'],
            'reading_time'=>$data['reading_time'],
            'category' =>$data['category'],
            'status'   => empty($data['status']) ? 0 : 1,
            'sort'     => (int) $data['sort'],
        ];
        if($request->has('id') && ($data['id'] != null) && ($data['id'] != '')){
            $banner = Blog::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('blog')->with('success', sc_language_render('action.edit_success'));
        }else{
            $banner = Blog::create($dataInsert);
            return redirect()->route('blog')->with('success', sc_language_render('action.create_success'));
        }
    }

    public function delete($id)
    {
        Blog::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('blog')->with('success', sc_language_render('action.delete_success'));
    }
    
    
    
    
    // Blog category
    
    public function blogcategory(Request $request)
    {
          if ($request->ajax()) 
          {
            $data = BlogCategory::where('status','!=', 2)->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row)
                    {
                        $btn = '<a href="'.sc_route_admin("blogcategory.addEditCategory",$row["id"]).'"class="edit btn btn-primary btn-sm">Edit</a>'.
                               '<a href="'.sc_route_admin("blogcategory.addEditCategory",$row["id"]).'"class="edit btn btn-danger btn-sm">Delete</a>';
                        return $btn;
                    })
                    ->addColumn('image', function($row)
                    {
                        $image = '<img width="50px" height="50px" src="'. sc_file(old('image', $row['image'] ?? '')) .'">';
                        return $image;
                    })
                    ->rawColumns(['action','image'])
                    ->make(true);
        }
        
        return view('s-cart-admin::'.'screen.blog.blogcategory');
        
    }
    
    public function addEditCategory(Request $request, $id = null)
    {
         $url_action = sc_route_admin('blogcategory.categorystoreUpdate');
        if($id != null && $id != '')
        {
            $data = BlogCategory::where('id',$id)->first();
            return view('s-cart-admin::'.'screen.blog.categoryaddEdit',compact('url_action','data'));
        }
        else
        {
            return view('s-cart-admin::'.'screen.blog.categoryaddEdit',compact('url_action'));
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
            $banner = BlogCategory::where('id',$data['id'])->update($dataInsert);
            return redirect()->route('blogcategory')->with('success', sc_language_render('action.edit_success'));
        }
        else
        {
            $banner = BlogCategory::create($dataInsert);
            return redirect()->route('blogcategory')->with('success', sc_language_render('action.create_success'));
        }
    }
    
    public function categorydelete($id)
    {
        BlogCategory::where('id',$id)->update(['status'=> 2]);
        return redirect()->route('blogcategory')->with('success', sc_language_render('action.delete_success'));
    }
    
    
    
    
}