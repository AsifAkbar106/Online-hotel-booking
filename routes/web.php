<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Front\TermsController;
use App\Http\Controllers\Front\PrivacyController;
use App\Http\Controllers\Front\RoomController;
use App\Http\Controllers\Front\BookingController;


use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminAmenityController;
use App\Http\Controllers\Admin\AdminRoomController;


use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerProfileController;


/*front */
Route::get('/',[HomeController::class,'index'])->name('home'); 
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/terms-and-conditions',[TermsController::class,'index'])->name('terms_and_conditions'); 
Route::get('/photo-gallery',[PhotoController::class,'index'])->name('photo_gallery'); 
Route::get('/faq',[FaqController::class,'index'])->name('faq');
Route::get('/privacy-policy',[PrivacyController::class,'index'])->name('privacy_policy');  
Route::get('/room/{id}',[RoomController::class,'single_room'])->name('room_detail');
Route::get('/room',[RoomController::class,'index'])->name('room');
Route::post('/booking/submit', [BookingController::class, 'cart_submit'])->name('cart_submit');
Route::get('/cart', [BookingController::class, 'cart_view'])->name('cart');
Route::get('/cart/delete/{id}', [BookingController::class, 'cart_delete'])->name('cart_delete');
Route::get('/checkout', [BookingController::class, 'checkout'])->name('checkout');
Route::post('/payment', [BookingController::class, 'payment'])->name('payment');
Route::get('/payment/paypal/{price}', [BookingController::class, 'paypal'])->name('paypal');



    

/* Admin */

Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login'); 
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout'); 
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
/* Customer */
Route::get('/customer/login', [CustomerAuthController::class, 'login'])->name('customer_login');
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer_logout');
Route::post('/customer/login-submit', [CustomerAuthController::class, 'login_submit'])->name('customer_login_submit'); 
Route::get('/customer/signup', [CustomerAuthController::class, 'signup'])->name('customer_signup');
Route::post('/customer/signup-submit', [CustomerAuthController::class, 'signup_submit'])->name('customer_signup_submit');
Route::get('/signup-verify/{email}/{token}', [CustomerAuthController::class, 'signup_verify'])->name('customer_signup_verify');
Route::get('/customer/forget-password', [CustomerAuthController::class, 'forget_password'])->name('customer_forget_password');
Route::post('/customer/forget-password-submit', [CustomerAuthController::class, 'forget_password_submit'])->name('customer_forget_password_submit');
Route::get('/customer/reset-password/{token}/{email}', [CustomerAuthController::class, 'reset_password'])->name('customer_reset_password');
Route::post('/customer/reset-password-submit', [CustomerAuthController::class, 'reset_password_submit'])->name('customer_reset_password_submit');

/* Customer Middleware */
Route::group(['middleware' => ['customer:customer']], function (){
    Route::get('/customer/home', [CustomerHomeController::class, 'index'])->name('customer_home'); 
    Route::get('/customer/edit-profile', [CustomerProfileController::class, 'index'])->name('customer_profile');
    Route::post('/customer/edit-profile-submit', [CustomerProfileController::class, 'profile_submit'])->name('customer_profile_submit');
});

/*Admin Middleware */
Route::group(['middleware' => ['admin:admin']], function (){


    Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');
    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home'); 
    Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile');

    /*Slides */
    Route::get('/admin/slide/view', [AdminSlideController::class, 'index'])->name('admin_slide_view');
    
    Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin_slide_add');
    
    Route::post('/admin/slide/store', [AdminSlideController::class, 'store'])->name('admin_slide_store');
    
    Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin_slide_edit');
    
    Route::post('/admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin_slide_update');
    Route::get('/admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin_slide_delete');
    
    /*feature */
    
    Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin_feature_view');
    
    Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin_feature_add');
    
    Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin_feature_store');
    
    Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit');
    
    Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin_feature_update');
    Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin_feature_delete');
    
    /* Photo */
    Route::get('/admin/photo/view', [AdminPhotoController::class, 'index'])->name('admin_photo_view');
    
    Route::get('/admin/photo/add', [AdminPhotoController::class, 'add'])->name('admin_photo_add');
    
    Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin_photo_store');
    
    Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin_photo_edit');
    
    Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin_photo_update');
    Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin_photo_delete');
    
    /*FAQ */
    Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin_faq_view');
    
    Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin_faq_add');
    
    Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store');
    
    Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit');
    
    Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update');
    Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete');
    
    /* cart,checkout,signin,signup */
    
    Route::get('/admin/page/cart', [AdminPageController::class, 'cart'])->name('admin_page_cart');
    
    Route::post('/admin/page/cart/update', [AdminPageController::class, 'cart_update'])->name('admin_page_cart_update');
    
    
    
    Route::get('/admin/page/checkout', [AdminPageController::class, 'checkout'])->name('admin_page_checkout');
    
    Route::post('/admin/page/checkout/update', [AdminPageController::class, 'checkout_update'])->name('admin_page_checkout_update');
    
    
    Route::get('/admin/page/payment', [AdminPageController::class, 'payment'])->name('admin_page_payment');
    
    Route::post('/admin/page/payment/update', [AdminPageController::class, 'payment_update'])->name('admin_page_payment_update');
    
    Route::get('/admin/page/signup', [AdminPageController::class, 'signup'])->name('admin_page_signup');
    
    Route::post('/admin/page/signup/update', [AdminPageController::class, 'signup_update'])->name('admin_page_signup_update');
    
    Route::get('/admin/page/signin', [AdminPageController::class, 'signin'])->name('admin_page_signin');
    
    Route::post('/admin/page/signin/update', [AdminPageController::class, 'signin_update'])->name('admin_page_signin_update');
    
    
    /* Amenity */
    
    Route::get('/admin/amenity/view', [AdminAmenityController::class, 'index'])->name('admin_amenity_view');
    
    Route::get('/admin/amenity/add', [AdminAmenityController::class, 'add'])->name('admin_amenity_add');
    
    Route::post('/admin/amenity/store', [AdminAmenityController::class, 'store'])->name('admin_amenity_store');
    
    Route::get('/admin/amenity/edit/{id}', [AdminAmenityController::class, 'edit'])->name('admin_amenity_edit');
    
    Route::post('/admin/amenity/update/{id}', [AdminAmenityController::class, 'update'])->name('admin_amenity_update');
    Route::get('/admin/amenity/delete/{id}', [AdminAmenityController::class, 'delete'])->name('admin_amenity_delete');
    
    /*Rooms */
    
    Route::get('/admin/room/view', [AdminRoomController::class, 'index'])->name('admin_room_view');
    Route::get('/admin/room/add', [AdminRoomController::class, 'add'])->name('admin_room_add');
    Route::post('/admin/room/store', [AdminRoomController::class, 'store'])->name('admin_room_store');
    Route::get('/admin/room/edit/{id}', [AdminRoomController::class, 'edit'])->name('admin_room_edit');
    Route::post('/admin/room/update/{id}', [AdminRoomController::class, 'update'])->name('admin_room_update');
    Route::get('/admin/room/delete/{id}', [AdminRoomController::class, 'delete'])->name('admin_room_delete');
    Route::get('/admin/room/gallery/{id}', [AdminRoomController::class, 'gallery'])->name('admin_room_gallery');
    Route::post('/admin/room/gallery/store/{id}', [AdminRoomController::class, 'gallery_store'])->name('admin_room_gallery_store');
    Route::get('/admin/room/gallery/delete/{id}', [AdminRoomController::class, 'gallery_delete'])->name('admin_room_gallery_delete');
    
    


}); 
    
