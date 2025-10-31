<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;
use Str;


class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cando:list blogs')->only(['index']);
        $this->middleware('cando:add blog')->only(['create','store']);
        $this->middleware('cando:edit blog')->only(['edit','update']);
        $this->middleware('cando:delete blog')->only(['destroy']);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            
            $query = Blog::all();
            return Datatables::of($query)
                ->editColumn('id', function ($query) {
                    return $query->id;
                })
                ->editColumn('title', function ($query) {
                    return $query->title;
                })

                ->addColumn('image', function ($query) {
                    $image=route('file_show', [$query->image, 'settings']);
                    return '<img src="'.$image.'" class="img-fluid">';
                })


                ->addColumn('action', function ($query) {

                    if (auth()->user()->can('edit blog')) {
                        $edit = ' <a class="dropdown-item" href="' . route('blogs.edit', $query->id) . '""
                        ><i class="bx bx-edit-alt me-1"></i>' . getTranslatedWords('edit') . '</a
                      >';
                    } else {
                        $edit = '';
                    }

                  

                    if (auth()->user()->can('delete blog')) {
                        $delete =
                        '<a class="dropdown-item delete_modal" data-id="' . $query->id . '" href="javascript:void(0);"
                        data-bs-toggle="modal" data-bs-target="#delete"
                        ><i class="bx bx-trash me-1"></i> ' . getTranslatedWords('delete') . '</a
                      >';

                    } else {
                        $delete = '';
                    }

                    




                    


                    $actioinView = '<div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">' . $edit . $delete . '</div></div>';


                    return $actioinView;
                })->rawColumns(['action','image'])
                ->make(true);
        }

        return view('dashboard.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$request->validate([
            'image' => 'required|image|max:2024'
        ]);

        validate_trans($request, [
            ['title', 'required'],
            ['body', 'required'],
        ]);
        $data = $request->except(['image']);*/

        $request->validate([
            'image' => 'required|image|max:2024',
            'language'=>'required',
            'title'=>'required',
            'body'=>'required'
        ]);

        /*validate_trans($request, [
            ['title', 'required'],
            ['body', 'required'],
        ]);*/
        $data = $request->except(['image','title','body','meta_keywords','meta_description']);
        if ($request->image != '') {
            $image = upload_image($request, 'image', 1920, 1280, 'settings');
            $data['image'] = $image;
        }
        /*$data['slug:ar']=Str::slug($data['title:ar']);
        $data['slug:en']=Str::slug($data['title:en']);
        $arabic='meta_keywords:ar';
        $data['meta_keywords:ar']=implode(',', $request->$arabic);
        $english='meta_keywords:en';
        $data['meta_keywords:en']=implode(',', $request->$english);*/

        $data['title:'.$request->language]=$request->title;
        $data['slug:'.$request->language]=Str::slug($request->title);
        $data['body:'.$request->language]=$request->body;
        $data['meta_description:'.$request->language]=$request->meta_description;
        $data['meta_keywords:'.$request->language]=implode(',', $request->meta_keywords);

        $row = Blog::create($data);

        return redirect()->to(route('blogs.index'))->with('success', getTranslatedWords('created successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Blog::findOrFail($id);
        return view('dashboard.blogs.edit')->with(compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$request->validate([
            'image' => 'nullable|image|max:2024'
        ]);

        validate_trans($request, [
            ['title', 'required'],
            ['body', 'required'],
        ]);
        $data = $request->except(['image']);*/

        $request->validate([
            'image' => 'nullable|image|max:2024',
            'language'=>'required',
            'title'=>'required',
            'body'=>'required'
        ]);
        $data = $request->except(['image','title','body','meta_keywords','meta_description']);
        if ($request->image != '') {
            $image = upload_image($request, 'image', 1920, 1280, 'settings');
            $data['image'] = $image;
        }
        /*$data['slug:ar']=Str::slug($data['title:ar']);
        $data['slug:en']=Str::slug($data['title:en']);
        $arabic='meta_keywords:ar';
        $data['meta_keywords:ar']=implode(',', $request->$arabic);
        $english='meta_keywords:en';
        $data['meta_keywords:en']=implode(',', $request->$english);*/

        $data['title:'.$request->language]=$request->title;
        $data['slug:'.$request->language]=Str::slug($request->title);
        $data['body:'.$request->language]=$request->body;
        $data['meta_description:'.$request->language]=$request->meta_description;
        $data['meta_keywords:'.$request->language]=implode(',', $request->meta_keywords);


        $row = Blog::findOrFail($id);
        $row->update($data);

        return redirect()->to(route('blogs.index'))->with('success', getTranslatedWords('edited successfully'));
    }

    public function destroy($id)
    {
        $row = Blog::findOrFail($id);
        $row->delete();
        return redirect()->to(route('blogs.index'))->with('success', getTranslatedWords('deleted successfully'));

    }
}
