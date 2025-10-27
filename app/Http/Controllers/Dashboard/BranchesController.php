<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Branch;
use Illuminate\Support\Facades\Hash;


class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cando:list branches')->only('index');
        $this->middleware('cando:add branch')->only(['store']);
        $this->middleware('cando:edit branch')->only(['update']);
        $this->middleware('cando:delete branch')->only('destroy');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Branch::all();
            return Datatables::of($query)
                ->editColumn('id', function ($query) {
                    return $query->id;
                })
                ->editColumn('name', function ($query) {
                    return $query->name;
                })

                ->editColumn('address', function ($query) {
                    return $query->address;
                })


                ->addColumn('action', function ($query) {

                    if (auth()->user()->can('edit branch')) {
                        $edit = ' <a class="dropdown-item" href="' . route('branches.edit', $query->id) . '""
                        ><i class="bx bx-edit-alt me-1"></i>' . getTranslatedWords('edit') . '</a
                      >';
                    } else {
                        $edit = '';
                    }

                  

                    if (auth()->user()->can('delete branch')) {
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
                })->rawColumns(['action'])
                ->make(true);
        }

        return view('dashboard.branches.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.branches.create');
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
            'image' => 'required|image|max:2024',
            'location_url'=>'required|url'
        ]);

        validate_trans($request, [
            ['name', 'required'],
            ['address', 'required'],
        ]);
        $data = $request->except(['image']);
        if ($request->image != '') {
            $image = upload_image($request, 'image', 600, 506, 'settings');
            $data['image'] = $image;
        }
        $row = Branch::create($data);

        return redirect()->to(route('branches.index'))->with('success', getTranslatedWords('created successfully'));

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
        $row = Branch::findOrFail($id);
        return view('dashboard.branches.edit')->with(compact('row'));
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
            'image' => 'nullable|image|max:2024',
            'location_url'=>'required|url'
        ]);

        validate_trans($request, [
            ['name', 'required'],
            ['address', 'required'],
        ]);
        $data = $request->except(['image']);
        if ($request->image != '') {
            $image = upload_image($request, 'image', 600, 506, 'settings');
            $data['image'] = $image;
        }

        $row = Branch::findOrFail($id);
        $row->update($data);

        return redirect()->to(route('branches.index'))->with('success', getTranslatedWords('edited successfully'));
    }

    public function destroy($id)
    {
        $row = Branch::findOrFail($id);
        $row->delete();
        return redirect()->to(route('branches.index'))->with('success', getTranslatedWords('deleted successfully'));

    }
}
