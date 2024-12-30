<?php

use App\Models\post;
use App\Models\User;
use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;



use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\editorLiveController;
use App\Http\Controllers\backend\userController;
use App\Http\Controllers\frontend\FeedController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\JobPostManageController;
use App\Http\Controllers\profile\reportController;
use App\Http\Controllers\LoginWithSocialController;
use App\Http\Controllers\frontend\DetailsController;
use App\Http\Controllers\frontend\jobpostcontroller;
use App\Http\Controllers\frontend\categoryController;
use App\Http\Controllers\frontend\comment_controller;
use App\Http\Controllers\vendor\postManageController;
use App\Http\Controllers\frontend\subcategoryController;


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

Route::get('/auth/redirect/github', function () {
    return Socialite::driver('github')->redirect();
});


Route::get('/auth/callback/github', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::where('github_id', $githubUser->id)->first();
    if($user != null){
        $user->upload_id = uploads($githubUser->avatar,  $user->upload_id, 'general', 'url');
    }else{
        $user =new  User;
        $user->github_id = $githubUser->id;
        $user->password = Hash::make($githubUser->nickname. $githubUser->name);
        $user->upload_id = uploads($githubUser->avatar, null, 'general', 'url');
        if($githubUser->email != null){
            $user->email = $githubUser->email;
        }
        $user->name = $githubUser->name;
        $user->username = $githubUser->nickname.time();
    }
    $user->github_token = $githubUser->token;
    $user->github_refresh_token = $githubUser->refreshToken;
    $user->save();



    Auth::login($user);

    return redirect('/');
});



Route::get('/auth/callback/google/', function () {

    $request_data =  $_GET;


    $user = User::where('email', $request_data['email'])->first();
    if($user != null){
        $user->upload_id = uploads($request_data['image'],  $user->upload_id, 'general', 'url');
    }else{
        $user =new  User;
        $user->google_id = $request_data['id'];
        $user->password = Hash::make($request_data['name']);
        $user->upload_id = uploads($request_data['image'], null, 'general', 'url');
        $user->email = $request_data['email'] ?? '';
        $user->name = $request_data['name'];
        $user->username = Str::slug($request_data['name']) . time();

    }
    $user->save();



    Auth::login($user);
    return 'success';
});



Route::get('/', [FeedController::class, 'index'])->name('home');

// Homepage Frontend Homepage
Route::get('/category', [HomeController::class, 'index'])->name('home.category');


Route::get('/feed_load_data_posst', [FeedController::class, 'feed_load'])->name('feed_load_data_post');

// End Homepage Frontend Homepage


// Post & Category View
Route::get('category/{slug?}', [categoryController::class, 'index'])->name('category.index');

Route::get('category/{slug?}/subcategory/{subcategory?}', [subcategoryController::class, 'index'])->name('subcategory.index');
Route::get('subcategory/{id?}/{slug?}', [subcategoryController::class, 'index_subcategory'])->name('subcategory_by_id.index');


Route::get('category/{slug?}/subcategory/{subcategory?}/{post?}', [DetailsController::class, 'index'])->name('post.index');
Route::get('post/{slug}', [DetailsController::class, 'single_items'])->name('post.single');
// End Homepage Frontend Homepage


// ajax quick_services
Route::get('category_by_subcategory/{category_id}', [subcategoryController::class, 'category_by_subcategory'])->name('category_by_subcategory');
// end ajax quick services


// comment
Route::post('comment', [comment_controller::class, 'store'])->name('comment.post');
Route::get('comment', [comment_controller::class, 'index'])->name('comment.index');
Route::get('comment/update', [comment_controller::class, 'update'])->name('comment.update');



// SET AJAX Method Set
Route::get('/post_method_set', function(){
    return view('components.backend.post_method');
})->name('post_method_set');

Route::get('/put_method_set', function(){
    return view('components.backend.put_method');
})->name('put_method_set');

Route::get('/delete_method_set', function(){
    return view('components.backend.delete_method');
})->name('delete_method_set');
// END SET AJAX Method Set


// Authentic Routes
Auth::routes();
// End Authentic Routes


// Post Filter
Route::get('/search', [HomeController::class,'get_data_search'])->name('search_data');
// End Post Filter


//job post details
Route::prefix('job')
    ->name('job.')
    ->middleware('web')
    ->group(function() {
        Route::get('/{slug}', [jobpostcontroller::class, 'index'])->name('index');
});



Route::prefix('helpdesk')
    ->name('helpdesk.')
    ->group(function () {
        Route::get('/create', [reportController::class, 'helpdesk_create'])->name('create');
        Route::post('/store', [reportController::class, 'store'])->name('store');
    });

Route::prefix('postreport')
    ->name('postreport.')
    ->group(function () {
        Route::post('/store', [reportController::class, 'postreportstore'])->name('store');
    });




Route::get('subscribe', [userController::class, 'subscribe'])->name('user.subscribe');

//One User and guest Post create
Route::prefix('user-post')
        ->middleware('web')
        ->name('user-post.')
        ->group(function() {
            Route::get('/post', [postManageController::class, 'create'])->name('post.create');
            Route::post('/post', [postManageController::class, 'store'])->name('post.store');
            Route::get('/post/{post}/edit', [postManageController::class, 'edit'])->name('post.edit');
            Route::put('/post/{post}', [postManageController::class, 'update'])->name('post.update');
            Route::get('/post/{post}', [postManageController::class, 'show'])->name('post.show');
            Route::get('/post/comment/{id}', [postManageController::class, 'comment'])->name('post.comment');
});
//End One User and guest Post create



//One User and guest Job Post create
Route::prefix('user-job-post')
        ->middleware('web')
        ->name('user-job-post.')
        ->group(function() {
            Route::get('/job-apply/{id}', [JobPostManageController::class, 'apply'])->name('job-post.apply');
            Route::post('/job-apply', [JobPostManageController::class, 'apply_store'])->name('job-post.apply_store');
            Route::get('/holderSelected/{id}', [JobPostManageController::class, 'holderSelected'])->name('job-post.holderSelected');
            Route::get('/cv/{name}', [JobPostManageController::class, 'cvshow'])->name('job-post.cv');



            Route::get('/job-post', [JobPostManageController::class, 'create'])->name('job-post.create');
            Route::post('/job-post', [JobPostManageController::class, 'store'])->name('job-post.store');
            Route::get('/job-post/{post}/edit', [JobPostManageController::class, 'edit'])->name('job-post.edit');
            Route::put('/job-post/{post}', [JobPostManageController::class, 'update'])->name('job-post.update');
            Route::get('/job-post/{post}', [JobPostManageController::class, 'show'])->name('job-post.show');
            Route::get('/job-post/comment/{id}', [JobPostManageController::class, 'comment'])->name('job-post.comment');
});
//End One User and guest Job Post create




// clear
Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    toastr()->success('Successfully cleared', 'Congrats');
    return back();
});




// command access
Route::get('/migrate', function(){
    Artisan::call('migrate');
    toastr()->success('Successfully migrated', 'Congrats');
    return back();
});


Route::get('/migrate/seed', function(){
    $db_seeder = new DatabaseSeeder;
    $db_seeder->run();
    toastr()->success('Successfully seed', 'Congrats');
    return back();
});



Route::get('/route_list', function(){
    Artisan::call('route:list');
    toastr()->success('Successfully get route', 'Congrats');
    $data = Artisan::output();
    dd($data);
    return back();
});
// end command access





// Sitemap
Route::get('/sitemap', function () {
    $sitemap = Sitemap::create(config('app.url'))
    ->add(Url::create('/'));
    $sitemap = Sitemap::create(config('app.url'))
    ->add(Url::create('/category'));
    // ->add(Url::create(''))

    category::all()->each(function (category $category) use ($sitemap) {
        $sitemap->add(Url::create("category/{$category->slug}")
        ->setLastModificationDate($category->updated_at));

        subcategory::where('category_id', $category->id)->get()->each(function ($subcategory) use ($sitemap , $category) {
            $sitemap->add(Url::create("category/{$category->slug}/subcategory/{$subcategory->slug}")
            ->setLastModificationDate($subcategory->updated_at));
            $sitemap->add(Url::create("subcategory/{$subcategory->id}/{$subcategory->slug}")
            ->setLastModificationDate($subcategory->updated_at));


            Post::where('subcategory_id', $subcategory->id)->where('category_id', $category->id)->get()->each(function (Post $post) use ($sitemap, $category, $subcategory) {
                $sitemap->add(Url::create("category/{$category->slug}/subcategory/{$subcategory->slug}/{$post->slug}")
                ->setLastModificationDate($post->updated_at));
            });
        });
    });

    Post::all()->each(function (Post $post) use ($sitemap) {
        $sitemap->add(Url::create("post/{$post->slug}")
        ->setLastModificationDate($post->updated_at));
    });

    User::all()->each(function ($user_item) use ($sitemap) {
           $sitemap->add(Url::create("users/{$user_item->username}")
             ->setLastModificationDate($user_item->updated_at));
           $sitemap->add(Url::create("users/{$user_item->username}/comment")
             ->setLastModificationDate($user_item->updated_at));
           $sitemap->add(Url::create("users/{$user_item->username}/vote")
             ->setLastModificationDate($user_item->updated_at));
           $sitemap->add(Url::create("users/{$user_item->username}/post")
             ->setLastModificationDate($user_item->updated_at));

             Post::where('user_id', $user_item->id)->get()->each(function (Post $post) use ($sitemap, $user_item) {
                $sitemap->add(Url::create("users/{$user_item->username}/post/{$post->slug}")
                ->setLastModificationDate($post->updated_at));
            });

    });
    $sitemap->writeToFile(public_path('../sitemap.xml'));

    toastr()->success('Successfully Sitemap Generated!', 'Congrats');
    return back();



});
// End Sitemap








Route::get('editor', [editorLiveController::class, 'index'])->name('editor.index');
Route::get('editor/source', [editorLiveController::class, 'source'])->name('editor.source');
Route::get('editor/output', [editorLiveController::class, 'output'])->name('editor.output');


