<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\PostApprovalController;
use App\Http\Controllers\enquiryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\budgetController;
use App\Http\Controllers\locationController;

use App\Models\Location;
use App\Models\Budget;


  
Route::get('/', function () {
    $dataLocation = Location::all();
    $dataBudget = Budget::all();
    return view('Home', compact('dataLocation', 'dataBudget'));
});
Route::get('/ProjectSale', [AdminPostController::class, 'ProjectSale'])->name('ProjectSale');
Route::get('/ProjectSaleFilter', [AdminPostController::class, 'ProjectSaleFilter'])->name('ProjectSaleFilter');
Route::get('/ProjectSaleDetails/{id}', [AdminPostController::class, 'ProjectSaleDetails'])->name('ProjectSaleDetails');

Route::post('/enquirySubmit', [enquiryController::class, 'enquirySubmit'])->name('enquirySubmit');
Route::post('/contactSubmit', [enquiryController::class, 'contactSubmit'])->name('contactSubmit');

Route::get('unauthorized', function () {
    return view('DBHomesComman/page-misc-not-authorized');
})->name('unauthorized');

Route::get('/404', function () {
    return view('DBHomesComman/page-misc-error');
})->name('404');
  
Auth::routes();

// User
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/post', [PostApprovalController::class, 'post'])->name('post');
    Route::post('/postcreate', [PostApprovalController::class, 'postcreate'])->name('postcreate');

    Route::get('/postlist', [PostApprovalController::class, 'postlist'])->name('postlist');
    Route::get('/post/edit/{id}', [PostApprovalController::class, 'postedit'])->name('postedit');
    Route::post('/post/update/{id}', [PostApprovalController::class, 'postUpdate'])->name('postUpdate');
    Route::get('/postlist/delete/{id}', [PostApprovalController::class, 'destroy'])->name('post.destroy');

    Route::get('/approvedpostlist', [PostApprovalController::class, 'approved'])->name('approved');
    Route::get('/approvedpostedit/{id}', [PostApprovalController::class, 'approvededit'])->name('approvededit');
    Route::post('/approvedpostupdate/{id}', [PostApprovalController::class, 'approvedUpdate'])->name('Post.approvedUpdate');
    Route::get('/approvedpostlist/delete/{id}', [PostApprovalController::class, 'destroyApproved'])->name('post.destroyApproved');
    
    Route::get('/enquiry', [enquiryController::class, 'index'])->name('enquiry');
    Route::get('/enquiry/delete/{id}', [enquiryController::class, 'destroy'])->name('enquiry.destroy');
    Route::get('/enquiry/edit/{id}', [enquiryController::class, 'edit'])->name('enquiry.edit');
    Route::post('/enquiry/update/{id}', [enquiryController::class, 'update'])->name('enquiry.update');

    Route::get('/contact', [contactController::class, 'index'])->name('contact');
    Route::get('/contact/delete', [contactController::class, 'contactdestroy'])->name('contact.destroy');
    Route::get('/contact/edit/{id}', [contactController::class, 'edit'])->name('contact.edit');
    Route::post('/contact/update/{id}', [contactController::class, 'update'])->name('contact.update');

});

// Admin

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/postPending', [PostApprovalController::class, 'postPending'])->name('postPending');
    Route::get('/admin/approvedPost/{approvalId}', [PostApprovalController::class, 'approvedPost'])->name('approvedPost');
    Route::get('/admin/postPending/delete/{id}', [PostApprovalController::class, 'postPendingDelete'])->name('postPending.delete');
    Route::get('/admin/postPending/edit/{id}', [PostApprovalController::class, 'postPendingEdit'])->name('postPending.edit');
    Route::get('/admin/postPending/update/{id}', [PostApprovalController::class, 'postPendingUpdate'])->name('postPending.update');

    Route::get('/admin/post', [AdminPostController::class, 'index'])->name('admin.post');
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'adminPostDelete'])->name('admin.post.delete');
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'adminPostEdit'])->name('admin.edit.delete');
    Route::post('/admin/post/update/{id}', [AdminPostController::class, 'adminPostUpdate'])->name('admin.post.update');

    
    Route::get('/admin/user', [AdminUserController::class, 'adminUser'])->name('admin.user');
    Route::get('/admin/user/delete/{id}', [AdminUserController::class, 'adminUserDestroy'])->name('admin.user.destroy');
    Route::get('/admin/user/edit/{id}', [AdminUserController::class, 'adminUserEdit'])->name('admin.user.edit');
    Route::post('/admin/user/update/{id}', [AdminUserController::class, 'adminUserUpdate'])->name('admin.user.update');

    Route::get('/admin/location', [locationController::class, 'adminLocation'])->name('admin.location');
    Route::get('/admin/location/delete/{id}', [locationController::class, 'adminLocationDelete'])->name('admin.location.delete');
    Route::post('/admin/location/submit', [locationController::class, 'adminLocationSubmit'])->name('admin.location.submit');

    Route::get('/admin/budget', [budgetController::class, 'adminBudget'])->name('admin.budget');
    Route::get('/admin/budget/delete/{id}', [budgetController::class, 'adminBudgetDelete'])->name('admin.budget.delete');
    Route::post('/admin/budget/submit', [budgetController::class, 'adminBudgetSubmit'])->name('admin.budget.submit');

    Route::get('/admin/enquiry', [enquiryController::class, 'enquiry'])->name('enquiry');
    Route::get('/admin/enquiry/delete/{id}', [enquiryController::class, 'adminEnquiryDelete'])->name('admin.enquiry.delete');
    Route::get('/admin/enquiry/edit/{id}', [enquiryController::class, 'adminEnquiryEdit'])->name('admin.enquiry.edit');
    Route::post('/admin/enquiry/update/{id}', [contactController::class, 'adminContactUpdate'])->name('admin.enquiry.update');

    Route::get('/admin/contact', [contactController::class, 'contact'])->name('admin.contact');
    Route::get('/admin/contact/delete/{id}', [contactController::class, 'adminContactDelete'])->name('admin.contact.delete');
    Route::get('/admin/contact/edit/{id}', [contactController::class, 'adminContactEdit'])->name('admin.contact.edit');
    Route::post('/admin/contact/update/{id}', [contactController::class, 'adminContactUpdate'])->name('admin.contact.update');
});