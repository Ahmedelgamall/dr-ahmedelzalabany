<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Customer;
use App\Models\Product;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Models\Contact;
use App\Models\Contract;
use App\Models\Service;
use Str;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;

//use Socialite;



class HomeController extends Controller
{
    public function __construct()
    {
        SEOMeta::setCanonical(url()->current());
        OpenGraph::setUrl(url()->current());
        TwitterCard::setSite(route('home'));
        JsonLd::addImage(route('file_show', [settings('logo'), 'settings']));
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::twitter()->setSite(route('home'));
        SEOTools::jsonLd()->addImage(route('file_show', [settings('logo'), 'settings']));
    }
    public function home()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('home'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('home'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('home'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('home'));
        JsonLd::setDescription(settings('meta_description'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('home'));
        SEOTools::setDescription(settings('meta_description'));
       
        return view('front.home');
    }

    public function about()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('about us'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('about us'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('about us'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('about us'));
        JsonLd::setDescription(settings('meta_description'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('about us'));
        SEOTools::setDescription(settings('meta_description'));
        return view('front.about');
    }

    public function contracts()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('contracts'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('contracts'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('contracts'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('contracts'));
        JsonLd::setDescription(settings('meta_description'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('contracts'));
        SEOTools::setDescription(settings('meta_description'));
        return view('front.contracts');
    }

    public function services()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('services'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('services'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('services'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('services'));
        JsonLd::setDescription(settings('meta_description'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('services'));
        SEOTools::setDescription(settings('meta_description'));
        return view('front.services');
    }


    public function service($id)
    {
        $service=Service::findOrFail($id);
        SEOMeta::setTitle(settings('system_name').' - '.$service->title);
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.$service->title);
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.$service->title);
        

        JsonLd::setTitle(settings('system_name').' - '.$service->title);
        JsonLd::setDescription(Str::words($service->description,50));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.$service->title);
        SEOTools::setDescription(Str::words($service->description,50));
        return view('front.service',compact('service'));
    }

    

    public function blog(Request $request)
    {
        if($request->search!=''){
            $posts = Blog::where('language',app()->getLocale())->where('title','like','%'.$request->search.'%')->latest()->paginate(15);
            //$posts=Blog::whereTranslationLike('title','%'.$request->search.'%')->latest()->paginate(15);
        }
        else {
            $posts=Blog::where('language',app()->getLocale())->latest()->paginate(15);
        }
        
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('blog'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('blog'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('blog'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('blog'));
        JsonLd::setDescription(settings('system_name').' '.getTranslatedWords('blog'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('blog'));
        SEOTools::setDescription(settings('system_name').' '.getTranslatedWords('blog'));
        return view('front.posts',compact('posts'));
    }

    public function blog_details($slug)
    {
        $post=Blog::whereTranslation('slug',$slug)->firstOrFail();
        SEOMeta::setTitle(settings('system_name').' - '.$post->title);
        SEOMeta::setDescription($post->meta_description);
        SEOMeta::addMeta('keywords',$post->meta_keywords);
       
        OpenGraph::setTitle(settings('system_name').' - '.$post->title);
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.$post->title);
        

        JsonLd::setTitle(settings('system_name').' - '.$post->title);
        JsonLd::setDescription($post->meta_description);
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.$post->title);
        SEOTools::setDescription($post->meta_description);
        return view('front.post',compact('post'));
    }

    public function appointment()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('request appointment'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('request appointment'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('request appointment'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('request appointment'));
        JsonLd::setDescription(settings('meta_description'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('request appointment'));
        SEOTools::setDescription(settings('meta_description'));
        return view('front.appointment');
    }

    public function packages()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('packages'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('packages'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('packages'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('packages'));
        JsonLd::setDescription(settings('meta_description'));
        


        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('packages'));
        SEOTools::setDescription(settings('meta_description'));
        return view('front.packages');
    }


    
     

    public function request_appointment(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'date' => 'required|date',
            'radians_type' => 'required',
            'time' => 'required',
            'branch_id'=>'required'
        ]);		

        //dd(Carbon::createFromFormat('d-m-Y', $request->date)->format('Y-m-d'));

        $appointment=Appointment::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'type'=>$request->radians_type,
            'date'=>Carbon::createFromFormat('d-m-Y', $request->date)->format('Y-m-d'),
            'time'=>$request->time,
            'notes'=>$request->notes,
            'branch_id'=>$request->branch_id
        ]);

        return redirect()->back()->with(['success' => getTranslatedWords('your request sent successfuly we will be in contact with you as soon as possible to confirm your appointment')]);
        

       
    }
    


    public function contact()
    {
        SEOMeta::setTitle(settings('system_name').' - '.getTranslatedWords('contact us'));
        SEOMeta::setDescription(settings('meta_description'));
       
        OpenGraph::setTitle(settings('system_name').' - '.getTranslatedWords('contact us'));
       
        //OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle(settings('system_name').' - '.getTranslatedWords('contact us'));
        

        JsonLd::setTitle(settings('system_name').' - '.getTranslatedWords('contact us'));
        JsonLd::setDescription(settings('meta_description'));
        

        // OR

        SEOTools::setTitle(settings('system_name').' - '.getTranslatedWords('contact us'));
        SEOTools::setDescription(settings('meta_description'));
        return view('front.contact');
    }

    public function send_contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required'
        ]);
        
        $row=Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ]);

        /*foreach (User::whereHas('roles', function ($q) {
            $q->whereHas('permissions', function ($q2) {
                $q2->where('name', 'list contacts');
            });
        })->get() as $u) {
            $message=[];
            $message['ar']=getTranslatedWordsTranslatedByCode('new contact message number','ar').' '.$row->id;
            $message['en']=getTranslatedWordsTranslatedByCode('new contact message number','en').' '.$row->id;
            $u->notify(new AdminNotification($message));
        }*/

        return redirect()->back()->with(['success' => getTranslatedWords('your message sent successfuly we will be in contact with you as soon as possible')]);

    }
    
    
    

}
