<?php



use Illuminate\Support\Facades\Route;



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



// Route::get('/', function () {

//     return view('welcome');

// });

Route::get('/clear-cache', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    return redirect()->to('/');
});



Route::get('registration', [App\Http\Controllers\AuthenticationController::class, 'registration'])->name('landing');

Route::get('login/{provider}', [App\Http\Controllers\AuthenticationController::class, 'redirectToProvider']);

Route::get('login/{provider}/callback', [App\Http\Controllers\AuthenticationController::class, 'handleProviderCallback']);

Route::post('signup/{provider}', [App\Http\Controllers\AuthenticationController::class, 'signup']);

Route::get('logout', [App\Http\Controllers\AuthenticationController::class, 'logout']);







Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/team', [App\Http\Controllers\IndexController::class, 'team']);

Route::get('/mission', [App\Http\Controllers\IndexController::class, 'mission']);

Route::get('/vision', [App\Http\Controllers\IndexController::class, 'vision']);

Route::get('/faq', [App\Http\Controllers\IndexController::class, 'faq']);

Route::get('/research', [App\Http\Controllers\IndexController::class, 'research']);

Route::get('/sponsor', [App\Http\Controllers\IndexController::class, 'sponsor'])->name('sponsor');

Route::get('/sponsor/{id}/details', [App\Http\Controllers\IndexController::class, 'sponsorDetails']);

Route::get('/send-gifts', [App\Http\Controllers\IndexController::class, 'sendGifts']);

Route::get('/dashboard', [App\Http\Controllers\IndexController::class, 'dashboard'])->name('dashboard');

Route::get('/work', [App\Http\Controllers\IndexController::class, 'work']);

Route::get('/program', [App\Http\Controllers\IndexController::class, 'program']);

Route::post('/user/update', [App\Http\Controllers\IndexController::class, 'userUpdate']);

Route::post('/password/update', [App\Http\Controllers\IndexController::class, 'passwordUpdate']);







Route::post('/volunteer/store', [App\Http\Controllers\VolunteerController::class, 'store']);

Route::get('/volunteer-create', [App\Http\Controllers\VolunteerController::class, 'create']);





Route::post('/contact/store', [App\Http\Controllers\ContactController::class, 'store']);

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);



Route::post('/idea/store', [App\Http\Controllers\IdeaController::class, 'store']);

Route::get('/idea', [App\Http\Controllers\IdeaController::class, 'index']);



Route::get('/donate', [App\Http\Controllers\DonateController::class, 'donate'])->name('donate');

Route::get('/initial', [App\Http\Controllers\DonateController::class, 'initial'])->name('initial');

Route::post('/donate/store', [App\Http\Controllers\DonateController::class, 'store']);

Route::post('/processCheckout', [App\Http\Controllers\DonateController::class, 'processCheckout']);

Route::get('/checkout', [App\Http\Controllers\DonateController::class, 'checkout']);



Route::get('/cart', [App\Http\Controllers\SponsorController::class, 'cart'])->name('cart');;

Route::post('/processSponsorCheckout', [App\Http\Controllers\SponsorController::class, 'processSponsorCheckout']);

Route::get('/sponsorCheckout', [App\Http\Controllers\SponsorController::class, 'sponsorCheckout']);

Route::post('/sponsorDonate/store', [App\Http\Controllers\SponsorController::class, 'sponsorStore']);



Route::get('/cloth', [App\Http\Controllers\ClothController::class, 'index']);

Route::post('/cloth/store', [App\Http\Controllers\ClothController::class, 'store']);



Route::get('/success', [App\Http\Controllers\SuccessStoryController::class, 'index']);

Route::get('/success/{id}/details', [App\Http\Controllers\SuccessStoryController::class, 'successStoryDetails']);



Route::get('/gift', [App\Http\Controllers\GiftController::class, 'index']);



Route::get('/zakat', [App\Http\Controllers\ZakatController::class, 'index']);

Route::post('/processZakatCheckout', [App\Http\Controllers\ZakatController::class, 'processZakatCheckout']);

Route::get('/zakatCheckout', [App\Http\Controllers\ZakatController::class, 'zakatCheckout']);

Route::post('/zakat/store', [App\Http\Controllers\ZakatController::class, 'store']);







//Auth::routes();

Auth::routes(['register' => false, 'reset' => true, 'confirm' => false, 'verify' => false]);



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {



    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');



    Route::get('/user', [App\Http\Controllers\AuthenticationController::class, 'show']);



    Route::get('/volunteer', [App\Http\Controllers\VolunteerController::class, 'show']);



    Route::get('/idea', [App\Http\Controllers\IdeaController::class, 'show']);



    Route::get('/cloth', [App\Http\Controllers\ClothController::class, 'show']);



    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show']);



    Route::get('/faq', [App\Http\Controllers\FaqController::class, 'show']);

    Route::get('/faq/create', [App\Http\Controllers\FaqController::class, 'create']);

    Route::post('/faq/store', [App\Http\Controllers\FaqController::class, 'store']);

    Route::get('/faq/{id}/edit', [App\Http\Controllers\FaqController::class, 'edit']);

    Route::post('/faq/{id}/update', [App\Http\Controllers\FaqController::class, 'update']);



    Route::get('/cause', [App\Http\Controllers\CauseController::class, 'show']);

    Route::get('/cause/create', [App\Http\Controllers\CauseController::class, 'create']);

    Route::post('/cause/store', [App\Http\Controllers\CauseController::class, 'store']);

    Route::get('/cause/{id}/edit', [App\Http\Controllers\CauseController::class, 'edit']);

    Route::post('/cause/{id}/update', [App\Http\Controllers\CauseController::class, 'update']);

    Route::get('/cause/{id}/delete', [App\Http\Controllers\CauseController::class, 'delete']);



    Route::get('/donate', [App\Http\Controllers\DonateController::class, 'show']);

    Route::get('/donate/create', [App\Http\Controllers\DonateController::class, 'create']);

    Route::post('/donate/store', [App\Http\Controllers\DonateController::class, 'manualStore']);

    Route::get('/sponsor-donate', [App\Http\Controllers\DonateController::class, 'sponsorDonateShow']);

    Route::get('/sponsor-donate/{id}/details', [App\Http\Controllers\DonateController::class, 'sponsorDonateDetails']);



    Route::get('/sponsor', [App\Http\Controllers\SponsorController::class, 'show']);

    Route::get('/sponsor/create', [App\Http\Controllers\SponsorController::class, 'create']);

    Route::post('/sponsor/store', [App\Http\Controllers\SponsorController::class, 'store']);

    Route::get('/sponsor/{id}/edit', [App\Http\Controllers\SponsorController::class, 'edit']);

    Route::post('/sponsor/{id}/update', [App\Http\Controllers\SponsorController::class, 'update']);

    Route::get('/sponsor/{id}/delete', [App\Http\Controllers\SponsorController::class, 'delete']);

    Route::get('/sponsor/list/order', [App\Http\Controllers\SponsorController::class, 'order']);

    Route::get('/sponsor/list/sort', [App\Http\Controllers\SponsorController::class, 'sort']);



    Route::get('/zakat', [App\Http\Controllers\ZakatController::class, 'show']);



    Route::get('/program', [App\Http\Controllers\ProgramController::class, 'show']);

    Route::get('/program/create', [App\Http\Controllers\ProgramController::class, 'create']);

    Route::post('/program/store', [App\Http\Controllers\ProgramController::class, 'store']);

    Route::get('/program/{id}/edit', [App\Http\Controllers\ProgramController::class, 'edit']);

    Route::post('/program/{id}/update', [App\Http\Controllers\ProgramController::class, 'update']);



    Route::get('/success', [App\Http\Controllers\SuccessStoryController::class, 'show']);

    Route::get('/success/create', [App\Http\Controllers\SuccessStoryController::class, 'create']);

    Route::post('/success/store', [App\Http\Controllers\SuccessStoryController::class, 'store']);

    Route::get('/success/{id}/edit', [App\Http\Controllers\SuccessStoryController::class, 'edit']);

    Route::post('/success/{id}/update', [App\Http\Controllers\SuccessStoryController::class, 'update']);

    Route::get('/success/{id}/delete', [App\Http\Controllers\SuccessStoryController::class, 'delete']);



    Route::get('/gift', [App\Http\Controllers\GiftController::class, 'show']);

    Route::get('/gift/create', [App\Http\Controllers\GiftController::class, 'create']);

    Route::post('/gift/store', [App\Http\Controllers\GiftController::class, 'store']);

    Route::get('/gift/{id}/edit', [App\Http\Controllers\GiftController::class, 'edit']);

    Route::post('/gift/{id}/update', [App\Http\Controllers\GiftController::class, 'update']);
    
    Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "All cache cleared";
});

});

