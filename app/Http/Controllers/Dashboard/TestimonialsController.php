<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Testimonial;
use Str;


class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cando:list testimonials')->only('index');
        $this->middleware('cando:add testimonial')->only(['store']);
        $this->middleware('cando:edit testimonial')->only(['update']);
        $this->middleware('cando:delete testimonial')->only('destroy');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Testimonial::all();
            return Datatables::of($query)
                ->editColumn('id', function ($query) {
                    return $query->id;
                })
                /*->editColumn('name', function ($query) {
                    return $query->name;
                })

                ->editColumn('opinion', function ($query) {
                    return Str::words($query->opinion,25,'..');
                })*/
                ->addColumn('image', function ($query) {
                    return '<img class="img-fluid" src="'.route('file_show',[$query->image,'settings']).'">';
                })


                ->addColumn('action', function ($query) {

                    if (auth()->user()->can('edit testimonial')) {
                        $edit = ' <a class="dropdown-item" href="' . route('testimonials.edit', $query->id) . '""
                        ><i class="bx bx-edit-alt me-1"></i>' . getTranslatedWords('edit') . '</a
                      >';
                    } else {
                        $edit = '';
                    }

                  

                    if (auth()->user()->can('delete testimonial')) {
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

        return view('dashboard.testimonials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2024'
        ]);

        /*validate_trans($request, [
            ['name', 'required'],
            ['opinion', 'required'],
        ]);*/
        $data = $request->except(['image']);
        if ($request->image != '') {
            $image = upload_image($request, 'image', 650, 650, 'settings');
            $data['image'] = $image;
        }
        $row = Testimonial::create($data);

        return redirect()->to(route('testimonials.index'))->with('success', getTranslatedWords('created successfully'));

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
        $row = Testimonial::findOrFail($id);
        return view('dashboard.testimonials.edit')->with(compact('row'));
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
        $request->validate([
            'image' => 'nullable|image|max:2024'
        ]);

        /*validate_trans($request, [
            ['name', 'required']
        ]);*/
        $data = $request->except(['image']);
        if ($request->image != '') {
            $image = upload_image($request, 'image', 650, 650, 'settings');
            $data['image'] = $image;
        }

        $row = Testimonial::findOrFail($id);
        $row->update($data);

        return redirect()->to(route('testimonials.index'))->with('success', getTranslatedWords('edited successfully'));
    }

    public function destroy($id)
    {
        $row = Testimonial::findOrFail($id);
        $row->delete();
        return redirect()->to(route('testimonials.index'))->with('success', getTranslatedWords('deleted successfully'));

    }
}
