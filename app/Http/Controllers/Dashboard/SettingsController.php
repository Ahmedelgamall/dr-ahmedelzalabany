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
        
        $data = $request->except(['logo','about_image','why_us_image','home_banner_image','steps_image','contact_image','appointment_image','pages_background_image','faqs_image']);
        $setting = Setting::first();
        
        if ($request->has('logo')) {
            $image = upload_image($request, 'logo', 170, 107, 'settings');
            $data['logo'] = $image;
        }

        if ($request->has('about_image')) {
            $image = upload_image($request, 'about_image', 570, 500, 'settings');
            $data['about_image'] = $image;
        }

        if ($request->has('why_us_image')) {
            $image = upload_image($request, 'why_us_image', 876, 1328, 'settings');
            $data['why_us_image'] = $image;
        }

        if ($request->has('home_banner_image')) {
            $image = upload_image($request, 'home_banner_image', 955, 775, 'settings');
            $data['home_banner_image'] = $image;
        }

        if ($request->has('steps_image')) {
            $image = upload_image($request, 'steps_image', 497, 600, 'settings');
            $data['steps_image'] = $image;
        }

        if ($request->has('appointment_image')) { 
            $image = upload_image($request, 'appointment_image', 750 , 877, 'settings');
            $data['appointment_image'] = $image;
        }

        if ($request->has('contact_image')) { 
            $image = upload_image($request, 'contact_image', 605, 927, 'settings');
            $data['contact_image'] = $image;
        }


        if ($request->has('pages_background_image')) { 
            $image = upload_image($request, 'pages_background_image', 1920, 278, 'settings');
            $data['pages_background_image'] = $image;
        }

        if ($request->has('faqs_image')) { 
            $image = upload_image($request, 'faqs_image', 570, 635, 'settings');
            $data['faqs_image'] = $image;
        }
        
        
        
         
        $setting->update($data);
        return redirect()->to(route('settings.index'))->with('success',getTranslatedWords('edited successfully'));
    }
}
