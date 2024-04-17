<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PortfolioEntryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileimgController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', [DataController::class, 'grabVisitor'])->name('login');
Route::post('submit-login', [UserController::class, 'login'])->name('submit-login');

Route::middleware('auth')->group(function () {

    // Middleware Grouping
    Route::get('/', [DataController::class, 'getHomeData'])->name('home');
    Route::get('blog/{slug}', [DataController::class, 'getBlogData']);
    Route::get('get-testimonials', [TestimonialController::class, 'getTestimonials']);

    Route::middleware('admin')->group(function () {

        Route::post('submit-notification', [NotificationController::class, 'submitNotification'])->name('submit-notification');
        Route::get('admin', [AdminController::class, 'getAdminData'])->name('admin-panel');
        Route::post('submit-portfolio-entry', [PortfolioEntryController::class, 'submitPortfolioEntry'])->name('submit-portfolio-entry');
        Route::post('submit-post', [PostController::class, 'submitPost'])->name('submit-post');
        Route::post('create-user', [CreateUserController::class, 'createUser'])->name('create-user');
        Route::post('update-image', [ProfileimgController::class, 'updateImage'])->name('update-image');

        Route::get('phpinfo', function () {
            return view('phpinfo');
        });

    });
    // Middleware Grouping

});

// !!Remove below routes after collection!!
Route::get('reference', function () {
    return view('reference-form');
});

Route::post('submit-reference', [ReferenceController::class, 'submitReference'])->name('submit-reference');


Route::get('testimonial', function () {
    return view('testimonial-form');
});

Route::post('submit-testimonial', [TestimonialController::class, 'submitTestimonial'])->name('submit-testimonial');

Route::get('submission-success', function () {
    return view('submission-success');
})->name('submission-success');
// !!Remove above routes after collection!!



// Route::get('generate', function (){
//     \Illuminate\Support\Facades\Artisan::call('storage:link');
//     echo 'ok';
// });








