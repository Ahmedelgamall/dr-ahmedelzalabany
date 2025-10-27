<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;


use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\Dashboard\LanguagesController;
use App\Http\Controllers\Dashboard\AdminsController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\TestimonialsController;
use App\Http\Controllers\Dashboard\FaqsController;
use App\Http\Controllers\Dashboard\StepsController;
use App\Http\Controllers\Dashboard\BranchesController;
use App\Http\Controllers\Dashboard\AppointmentsController;
use App\Http\Controllers\Dashboard\ContactsController;
use App\Http\Controllers\Dashboard\BlogsController;
use App\Http\Controllers\Dashboard\ContractsController;
use App\Http\Controllers\Dashboard\PackagesController;
use App\Http\Controllers\Dashboard\WhyUsController;
use App\Http\Controllers\Dashboard\RolesController;

use App\Http\Controllers\Front\HomeController;
/*use App\Models\Blog;
use App\Models\Faq;
use App\Models\Service;*/

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /*\App\Models\User::create([
        'email'=>'admin@gmail.com',
        'name'=>'admin',
        'password'=>\Hash::make(123456)
    ]);
    \App\Models\Setting::create();*/
    return view('welcome');
});
Route::get('show_file/{filename}/{path}', function ($filename, $path) {
    return show_file($filename, $path);
})->name('file_show');

Route::get('download_file/{filename}/{path}', function ($filename, $path) {
    return download_file($filename, $path);
})->name('download_file');

Route::get('test',function(){
    /*$first = Service::orderBy('id')->first();

    Service::where('id', '!=', $first->id)->delete();
    $first = Faq::orderBy('id')->first();

    Faq::where('id', '!=', $first->id)->delete();

    $first = Blog::orderBy('id')->first();

    Blog::where('id', '!=', $first->id)->delete();
  
    for($i=0;$i<10;$i++){
        $service=Service::with('translations')->first();
        $new = $service->replicate();
        //$new->title=$service->title.$i;
        $new->save();

        foreach ($service->translations as $translation) {
            $newTranslation = $translation->replicate();
            $newTranslation->service_id = $new->id; // Update foreign key to new model ID
            $newTranslation->title.=$i;
            $newTranslation->save();
        }

        $faq=Faq::with('translations')->first();
        $new = $faq->replicate();
        $new->save();

        foreach ($faq->translations as $translation) {
            $newTranslation = $translation->replicate();
            $newTranslation->faq_id = $new->id; // Update foreign key to new model ID
            $newTranslation->question.=$i;
            $newTranslation->save();
        }

        $blog=Blog::with('translations')->first();
        $new = $blog->replicate();
        
        $new->save();

        foreach ($blog->translations as $translation) {
            $newTranslation = $translation->replicate();
            $newTranslation->blog_id = $new->id; // Update foreign key to new model ID
            $newTranslation->title.=$i;
            $newTranslation->slug.=$i;
            $newTranslation->save();
        }
        
        
    }*/
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Auth::routes();
    Route::get('admin',function(){
        if(auth()->check()){
            return redirect(route('dashboard'));
        }

        return redirect(route('login'));
        
    });
    Route::get('/',[HomeController::class, 'home'])->name('home');
    Route::get('about-us',[HomeController::class, 'about'])->name('about-us');
    Route::get('contact-us',[HomeController::class, 'contact'])->name('contact-us');
    Route::post('send-contact',[HomeController::class, 'send_contact'])->name('send-contact');
    Route::get('services-show',[HomeController::class, 'services'])->name('services');
    Route::get('contracts-show',[HomeController::class, 'contracts'])->name('contractsFront');
    Route::get('blog-details/{slug}',[HomeController::class, 'blog_details'])->name('blog-details');
    Route::get('blog',[HomeController::class, 'blog'])->name('blog');
    Route::get('appointment',[HomeController::class, 'appointment'])->name('appointment');
    Route::post('request-appointment',[HomeController::class, 'request_appointment'])->name('request-appointment');
    Route::get('service/{id}',[HomeController::class, 'service'])->name('service');
    Route::get('show-packages',[HomeController::class, 'packages'])->name('show-packages');
    Route::group(['middleware' => ['adminmw']], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('settings', SettingsController::class);
        
        Route::post('update_languages_phrases', [LanguagesController::class, 'update_languages_phrases']);
        Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
        Route::post('profile', [DashboardController::class, 'updateProfile'])->name('updateProfile');
        Route::resource('admins', AdminsController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('steps', StepsController::class);
        Route::resource('faqs', FaqsController::class);
        Route::resource('testimonials', TestimonialsController::class);
        Route::resource('branches', BranchesController::class);
        Route::resource('appointments', AppointmentsController::class);
        Route::resource('contacts', ContactsController::class);
        Route::resource('contracts', ContractsController::class);
        Route::resource('blogs', BlogsController::class);
        Route::resource('packages', PackagesController::class); 
        Route::resource('why-us', WhyUsController::class); 
        Route::resource('roles', RolesController::class);
        Route::get('get_permissions', [RolesController::class, 'get_permissions']);
        Route::post('show_permissions', [RolesController::class, 'show_permissions']);
        Route::get('get_permissions_per_monitor', [RolesController::class, 'get_permissions_per_monitor']);
    
    });
});


Route::get('create_permissions', function () {

    # services permissions

     Permission::create(['guard_name' => 'web', 'name' => 'list services', 'permission_group' => 'settings', 'permission_monitor' => 'services']);
     Permission::create(['guard_name' => 'web', 'name' => 'add service', 'permission_group' => 'settings', 'permission_monitor' => 'services']);
     Permission::create(['guard_name' => 'web', 'name' => 'edit service', 'permission_group' => 'settings', 'permission_monitor' => 'services']);
     Permission::create(['guard_name' => 'web', 'name' => 'delete service', 'permission_group' => 'settings', 'permission_monitor' => 'services']);

    # branches permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list branches', 'permission_group' => 'settings', 'permission_monitor' => 'branches']);
    Permission::create(['guard_name' => 'web', 'name' => 'add branch', 'permission_group' => 'settings', 'permission_monitor' => 'branches']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit branch', 'permission_group' => 'settings', 'permission_monitor' => 'branches']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete branch', 'permission_group' => 'settings', 'permission_monitor' => 'branches']);
     

    # steps permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list steps', 'permission_group' => 'settings', 'permission_monitor' => 'steps']);
    Permission::create(['guard_name' => 'web', 'name' => 'add step', 'permission_group' => 'settings', 'permission_monitor' => 'steps']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit step', 'permission_group' => 'settings', 'permission_monitor' => 'steps']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete step', 'permission_group' => 'settings', 'permission_monitor' => 'steps']);

    # faqs permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list faqs', 'permission_group' => 'settings', 'permission_monitor' => 'faqs']);
    Permission::create(['guard_name' => 'web', 'name' => 'add faq', 'permission_group' => 'settings', 'permission_monitor' => 'faqs']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit faq', 'permission_group' => 'settings', 'permission_monitor' => 'faqs']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete faq', 'permission_group' => 'settings', 'permission_monitor' => 'faqs']);
    

    # testimonials permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list testimonials', 'permission_group' => 'settings', 'permission_monitor' => 'testimonials']);
    Permission::create(['guard_name' => 'web', 'name' => 'add testimonial', 'permission_group' => 'settings', 'permission_monitor' => 'testimonials']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit testimonial', 'permission_group' => 'settings', 'permission_monitor' => 'testimonials']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete testimonial', 'permission_group' => 'settings', 'permission_monitor' => 'testimonials']);

    # contracts permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list contracts', 'permission_group' => 'settings', 'permission_monitor' => 'contracts']);
    Permission::create(['guard_name' => 'web', 'name' => 'add contract', 'permission_group' => 'settings', 'permission_monitor' => 'contracts']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit contract', 'permission_group' => 'settings', 'permission_monitor' => 'contracts']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete contract', 'permission_group' => 'settings', 'permission_monitor' => 'contracts']);


    # packages permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list packages', 'permission_group' => 'settings', 'permission_monitor' => 'packages']);
    Permission::create(['guard_name' => 'web', 'name' => 'add package', 'permission_group' => 'settings', 'permission_monitor' => 'packages']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit package', 'permission_group' => 'settings','permission_monitor' => 'packages']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete package', 'permission_group' => 'settings', 'permission_monitor' => 'packages']);


    # why choose us permissions

    Permission::create(['guard_name' => 'web', 'name' => 'list why choose us', 'permission_group' => 'settings', 'permission_monitor' => 'why choose us']);
    Permission::create(['guard_name' => 'web', 'name' => 'add why choose us', 'permission_group' => 'settings', 'permission_monitor' => 'why choose us']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit why choose us', 'permission_group' => 'settings', 'permission_monitor' => 'why choose us']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete why choose us', 'permission_group' => 'settings', 'permission_monitor' => 'why choose us']);


   # settings permissions
     Permission::create(['guard_name' => 'web', 'name' => 'edit settings', 'permission_group' => 'settings', 'permission_monitor' => 'settings']);

    # admins permissions
    Permission::create(['guard_name' => 'web', 'name' => 'list admins', 'permission_group' => 'admins and roles', 'permission_monitor' => 'admins']);
    Permission::create(['guard_name' => 'web', 'name' => 'add admin', 'permission_group' => 'admins and roles', 'permission_monitor' => 'admins']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit admin', 'permission_group' => 'admins and roles', 'permission_monitor' => 'admins']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete admin', 'permission_group' => 'admins and roles', 'permission_monitor' => 'admins']);

    # roles permissions
    Permission::create(['guard_name' => 'web', 'name' => 'list roles', 'permission_group' => 'admins and roles', 'permission_monitor' => 'roles']);
    Permission::create(['guard_name' => 'web', 'name' => 'add role', 'permission_group' => 'admins and roles', 'permission_monitor' => 'roles']);
    Permission::create(['guard_name' => 'web', 'name' => 'edit role', 'permission_group' => 'admins and roles', 'permission_monitor' => 'roles']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete role', 'permission_group' => 'admins and roles', 'permission_monitor' => 'roles']);

    # appointments permissions
     Permission::create(['guard_name' => 'web', 'name' => 'list appointments', 'permission_group' => 'customers services', 'permission_monitor' => 'appointments']);
     Permission::create(['guard_name' => 'web', 'name' => 'delete appointment', 'permission_group' => 'customers services', 'permission_monitor' => 'appointments']);

    # contacts permissions
    Permission::create(['guard_name' => 'web', 'name' => 'list contacts', 'permission_group' => 'customers services', 'permission_monitor' => 'contacts']);
    Permission::create(['guard_name' => 'web', 'name' => 'delete contact', 'permission_group' => 'customers services', 'permission_monitor' => 'contacts']);
 
     # blogs permissions
     Permission::create(['guard_name' => 'web', 'name' => 'list blogs', 'permission_group' => 'blogs', 'permission_monitor' => 'blogs']);
     Permission::create(['guard_name' => 'web', 'name' => 'add blog', 'permission_group' => 'blogs', 'permission_monitor' => 'blogs']);
     Permission::create(['guard_name' => 'web', 'name' => 'edit blog', 'permission_group' => 'blogs', 'permission_monitor' => 'blogs']);
     Permission::create(['guard_name' => 'web', 'name' => 'delete blog', 'permission_group' => 'blogs', 'permission_monitor' => 'blogs']);

    
      
 });

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
