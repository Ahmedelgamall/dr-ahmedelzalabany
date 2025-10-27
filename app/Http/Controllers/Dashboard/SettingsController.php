<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Setting;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('cando:edit settings')->only(['index','update']);
    }

    public function index()
    {
        $setting = Setting::first();
        return view('dashboard.settings.index')->with(compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            //'system_name'=>'required',
            'email'=>'required|email',
            'phone' => 'required|numeric',
            //'whatsapp' => 'nullable|numeric',
            'logo' => 'nullable|image|max:2024',
            'about_us_image' => 'nullable|image|max:2024',
            'category_cover' => 'nullable|image|max:2024',
            'home_cover' => 'nullable|image|max:2024',
        ]);

        validate_trans($request, [
            ['system_name','required'],
        ]);
        
        $data = $request->except(['logo','about_image','why_us_image','home_banner_image','steps_image','contact_image','appointment_image','pages_background_image']);
        $setting = Setting::first();
        
        if ($request->has('logo')) {
            $image = upload_image($request, 'logo', 293, 81, 'settings');
            $data['logo'] = $image;
        }

        if ($request->has('about_image')) {
            $image = upload_image($request, 'about_image', 650, 650, 'settings');
            $data['about_image'] = $image;
        }

        if ($request->has('why_us_image')) {
            $image = upload_image($request, 'why_us_image', 876, 1328, 'settings');
            $data['why_us_image'] = $image;
        }

        if ($request->has('home_banner_image')) {
            $image = upload_image($request, 'home_banner_image', 1920, 1280, 'settings');
            $data['home_banner_image'] = $image;
        }

        if ($request->has('steps_image')) {
            $image = upload_image($request, 'steps_image', 1920, 1280, 'settings');
            $data['steps_image'] = $image;
        }

        if ($request->has('appointment_image')) { 
            $image = upload_image($request, 'appointment_image', 1920, 1280, 'settings');
            $data['appointment_image'] = $image;
        }

        if ($request->has('contact_image')) { 
            $image = upload_image($request, 'contact_image', 453, 650, 'settings');
            $data['contact_image'] = $image;
        }


        if ($request->has('pages_background_image')) { 
            $image = upload_image($request, 'pages_background_image', 1920, 1280, 'settings');
            $data['pages_background_image'] = $image;
        }

        
        
         
        $setting->update($data);
        return redirect()->to(route('settings.index'))->with('success',getTranslatedWords('edited successfully'));
    }
}
