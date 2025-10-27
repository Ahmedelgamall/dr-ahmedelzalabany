<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Faq;
use Illuminate\Support\Facades\Hash;


class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cando:list faqs')->only('index');
        $this->middleware('cando:add faq')->only(['store']);
        $this->middleware('cando:edit faq')->only(['update']);
        $this->middleware('cando:delete faq')->only('destroy');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Faq::all();
            return Datatables::of($query)
                ->editColumn('id', function ($query) {
                    return $query->id;
                })
                ->editColumn('question', function ($query) {
                   
                    return $query->question;
                })


                ->addColumn('action', function ($query) {


                    if (auth()->user()->can('edit faq')) {
                        $edit = ' <a class="dropdown-item" href="' . route('faqs.edit', $query->id) . '""
                        ><i class="bx bx-edit-alt me-1"></i>' . getTranslatedWords('edit') . '</a
                      >';

                    } else {
                        $edit = '';
                    }

                  

                    if (auth()->user()->can('delete faq')) {
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

        return view('dashboard.faqs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        validate_trans($request, [
            ['question', 'required'],
            ['answer', 'required']
        ]);

        
        $data = $request->all();
        
        $row = Faq::create($data);

        return redirect()->to(route('faqs.index'))->with('success', getTranslatedWords('created successfully'));

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
        $row = Faq::findOrFail($id);
        return view('dashboard.faqs.edit')->with(compact('row'));
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

        validate_trans($request, [
            ['question', 'required'],
            ['answer', 'required']
        ]);


        
        $data = $request->all();
        

        $row = Faq::findOrFail($id);
        $row->update($data);

        return redirect()->to(route('faqs.index'))->with('success', getTranslatedWords('edited successfully'));
    }

    public function destroy($id)
    {
        $row = Faq::findOrFail($id);
        $row->delete();
        return redirect()->to(route('faqs.index'))->with('success', getTranslatedWords('deleted successfully'));

    }
}
