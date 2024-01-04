<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes Frontend Related
|--------------------------------------------------------------------------
*/


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index')->name('/');

//Route::get('search-result', 'HomeController@searchResult')->name('search-result');

//Who we are?
Route::get('who-we-are', 'HomeController@about')->name('who-we-are');
Route::get('mission-vision', 'HomeController@missionVision')->name('mission-vision');
Route::get('member-list/{param}', 'HomeController@allMembers')->name('member-list');
Route::get('member-profile/{id}', 'HomeController@singleMemberProfile')->name('member-profile');
//volunteer (frontend+backend)
Route::resource('volunteer','VolunteerController');
Route::get('chairmans-message', function () {
    $content = view('frontend.pages.chairmans_message');
    return view('frontend.home_master')->with('home_content',$content);
})->name('chairmans-message');
Route::get('secretary-message', function () {
    $content = view('frontend.pages.secretary_message');
    return view('frontend.home_master')->with('home_content',$content);
})->name('secretary-message');
Route::get('ceos-message', function () {
    $content = view('frontend.pages.ceos_message');
    return view('frontend.home_master')->with('home_content',$content);
})->name('ceos-message');
Route::get('cc-message', function () {
    $content = view('frontend.pages.cc_message');
    return view('frontend.home_master')->with('home_content',$content);
})->name('cc-message');


//What we do?
Route::get('education', 'HomeController@education')->name('education');
Route::get('health', 'HomeController@health')->name('health');
Route::get('training', 'HomeController@training')->name('training');
//Training related => IT Training
Route::get('digital-marketing', 'TrainingController@digitalMarketing')->name('digital-marketing');
Route::get('graphics-design', 'TrainingController@graphicsDesign')->name('graphics-design');
Route::get('web-design-development', 'TrainingController@webDesignDevelopment')->name('web-design-development');
Route::get('mobile-app-development', 'TrainingController@mobileAppDevelopment')->name('mobile-app-development');
Route::get('professional-short-course', 'TrainingController@professionalShortCourse')->name('professional-short-course');
Route::get('programming', 'TrainingController@programming')->name('programming');
Route::get('telecommunication', 'TrainingController@telecommunication')->name('telecommunication');
Route::get('ecommerce-solution', 'TrainingController@ecommerceSolution')->name('ecommerce-solution');
Route::get('industrial-attachment', 'TrainingController@industrialAttachment')->name('industrial-attachment');
//Training related => Network Solution
Route::get('cisco', 'TrainingController@cisco')->name('cisco');
Route::get('ccna-collaboration', 'TrainingController@ccnaCollaboration')->name('ccna-collaboration');
Route::get('ccna-routing-and-switching', 'TrainingController@ccnaRoutingAndSwitching')->name('ccna-routing-and-switching');
Route::get('ccnp-routing-and-switching', 'TrainingController@ccnpRoutingAndSwitching')->name('ccnp-routing-and-switching');
Route::get('mcsa-2016-server', 'TrainingController@mcsa2016Server')->name('mcsa-2016-server');
Route::get('mikrotik', 'TrainingController@mikrotik')->name('mikrotik');
Route::get('a-network', 'TrainingController@aNetwork')->name('a-network');
Route::get('freelancer', 'TrainingController@freelancer')->name('freelancer');
Route::get('pksf', 'TrainingController@pksf')->name('pksf');


//Contact us
Route::get('contact-us', 'HomeController@contactUs')->name('contact-us');

//projects
Route::get('completed-projects', 'HomeController@completedProjects')->name('completed-projects');
Route::get('running-projects', 'HomeController@runningProjects')->name('running-projects');
Route::get('future-projects', 'HomeController@futureProjects')->name('future-projects');
Route::get('project-details/{id}', 'HomeController@singleProject')->name('project-details');

//events
Route::get('all-events', 'HomeController@allEvents')->name('all-events');
Route::get('event-details/{id}', 'HomeController@singleEvent')->name('event-details');

//News
Route::get('all-news', 'HomeController@allNews')->name('all-news');
Route::get('news-details/{id}', 'HomeController@singleNews')->name('news-details');


//Notice
Route::get('all-notice', 'HomeController@allNotice')->name('all-notice');
Route::get('notice-details/{id}', 'HomeController@singleNotice')->name('notice-details');


//photo gallery
Route::get('photo-gallery-albums', 'HomeController@photoGallery')->name('photo-gallery-albums');
Route::get('photo-gallery-album/{id}', 'HomeController@singlePhotoAlbum')->name('photo-gallery-album');

//video gallery
Route::get('video-gallery-albums', function () {

    $content = view('frontend.pages.under_maintanence');

    return view('frontend.home_master')
        ->with('home_content',$content);
})->name('video-gallery-albums');

//Blog
Route::get('blog', function () {

    $content = view('frontend.pages.under_maintanence');

    return view('frontend.home_master')
        ->with('home_content',$content);
})->name('blog');


//Sitemap
Route::get('sitemap', function () {
    $content = view('frontend.pages.sitemap');
    return view('frontend.home_master')->with('home_content',$content);
})->name('sitemap');

//Donation (frontend+backend)
Route::resource('donation','DonationController');



/*
|--------------------------------------------------------------------------
| Web Routes Backend Related
|--------------------------------------------------------------------------
*/

//admin login authentication
Route::get('/admin-panel', 'LoginController@index');
Route::post('/admin-panel-login', 'LoginController@adminLogin')->name('admin-panel-login');
Route::get('/dashboard', 'SuperLoginController@index');
Route::get('/logout', 'SuperLoginController@logout');

//Admin
Route::resource('admins','AdminController')->names([
    'index' => 'manage-admin',
    'create' => 'add-admin',
    'store' => 'save-admin',
    'show' => 'view-admin',
    'edit' => 'edit-admin',
    'update' => 'update-admin',
    'destroy' => 'delete-admin'
])->parameters([
    'admins' => 'id'
]);
Route::get('admin-status-change/{id}','AdminController@statusActiveInactive')->name('admin-status-change');
//Route::get('admin-list','AdminController@getDatatable')->name('admin-list');


//slider section
Route::resource('slider','SliderController')->names([
    'index' => 'manage-slider',
    'create' => 'add-slider',
    'store' => 'save-slider',
    'show' => 'view-slider',
    'edit' => 'edit-slider',
    'update' => 'update-slider',
    'destroy' => 'delete-slider'
])->parameters([
    'slider' => 'id'
]);
Route::get('slider-status-change/{id}','SliderController@statusActiveInactive')->name('slider-status-change');


//pages section
Route::resource('pages','PageController')->names([
    'index' => 'manage-pages',
    'create' => 'add-pages',
    'store' => 'save-pages',
    'show' => 'view-pages',
    'edit' => 'edit-pages',
    'update' => 'update-pages',
    'destroy' => 'delete-pages'
])->parameters([
    'pages' => 'id'
]);
Route::get('pages-status-change/{id}','PageController@statusActiveInactive')->name('pages-status-change');

//Site Info section
Route::get('site-info','SiteInfoController@show')->name('site-info');
Route::put('update-site-info/{id}','SiteInfoController@update')->name('update-site-info');

//Projects section
Route::resource('projects','ProjectController');
Route::get('projects-status-change/{id}','ProjectController@statusActiveInactive')->name('projects-status-change');

//Events section
Route::resource('events','EventController');
Route::get('events-status-change/{id}','EventController@statusActiveInactive')->name('events-status-change');

//News section
Route::resource('news','NewsController');
Route::get('news-status-change/{id}','NewsController@statusActiveInactive')->name('news-status-change');

//Notice section
Route::resource('notice','NoticeController');
Route::get('notice-status-change/{id}','NoticeController@statusActiveInactive')->name('notice-status-change');

//Image Gallery section
Route::resource('photo-gallery','ImgGalleryController');
Route::get('photo-gallery-status-change/{id}','ImgGalleryController@statusActiveInactive')->name('photo-gallery-status-change');
Route::delete('delete-single-photo/{id}','ImgGalleryController@deleteSinglePhoto')->name('delete-single-photo');

//Member section
Route::resource('member','MemberController');
Route::get('member-status-change/{id}','MemberController@statusActiveInactive')->name('member-status-change');

//Our concern section
Route::resource('our-concerns','OurConcernsController');
Route::get('our-concerns-status-change/{id}','OurConcernsController@statusActiveInactive')->name('our-concerns-status-change');
