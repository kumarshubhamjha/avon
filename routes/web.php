<?php

use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\AdminBrandController;
use App\Admin\Controllers\AdminAboutController;
use App\Http\Controllers\AboutController;

use App\Admin\Controllers\AdminSqureController;
use App\Http\Controllers\AvonSquareController;

use App\Admin\Controllers\AdminBlogController;
use App\Admin\Controllers\AdminPressController;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PressController;
use App\Admin\Controllers\AdminTermsConditionController;
use App\Admin\Controllers\AdminShippingDeliveryController;
use App\Admin\Controllers\AdminReturnsRefundController;
use App\Admin\Controllers\AdminProductPricingPolicyController;
use App\Admin\Controllers\AdminWarrantyController;

use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\CareerController;
use App\Admin\Controllers\AdminCareerController;
use App\Http\Controllers\BrandController;
use App\Admin\Controllers\AdminAssectBrandController;

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

Route::group([
    'prefix' => SC_ADMIN_PREFIX,
    'middleware' => SC_ADMIN_MIDDLEWARE,
],function () {
    Route::get('brand', [AdminBrandController::class,'index'])->name('brand');
    Route::get('brand/add-edit', [AdminBrandController::class,'addEdit'])->name('brand.addEdit');
    Route::get('brand/add-edit/{id}', [AdminBrandController::class,'addEdit'])->name('brand.addEdit');
    Route::post('brand/store-update', [AdminBrandController::class,'storeUpdate'])->name('brand.storeUpdate');
    Route::get('brand/delete/{id}', [AdminBrandController::class,'delete'])->name('brand.delete');
    
    
    
    
    //blog
     Route::get('blog', [AdminBlogController::class,'index'])->name('blog');
    Route::get('blog/add-edit', [AdminBlogController::class,'addEdit'])->name('blog.addEdit');
    Route::get('blog/add-edit/{id}', [AdminBlogController::class,'addEdit'])->name('blog.addEdit');
    Route::post('blog/store-update', [AdminBlogController::class,'storeUpdate'])->name('blog.storeUpdate');
    Route::get('blog/delete/{id}', [AdminBlogController::class,'delete'])->name('blog.delete');
    
    
    
    //blog category
     Route::get('blogcategory', [AdminBlogController::class,'blogcategory'])->name('blogcategory');
    Route::get('blogcategory/add-edit', [AdminBlogController::class,'addEditCategory'])->name('blogcategory.addEditCategory');
    Route::get('blogcategory/add-edit/{id}', [AdminBlogController::class,'addEditCategory'])->name('blogcategory.addEditCategory');
    Route::post('blogcategory/store-update', [AdminBlogController::class,'categorystoreUpdate'])->name('blogcategory.categorystoreUpdate');
    Route::get('blogcategory/delete/{id}', [AdminBlogController::class,'categorydelete'])->name('blogcategory.categorydelete');
    
    
    
    //press
     Route::get('press', [AdminPressController::class,'index'])->name('press');
    Route::get('press/add-edit', [AdminPressController::class,'addEdit'])->name('press.addEdit');
    Route::get('press/add-edit/{id}', [AdminPressController::class,'addEdit'])->name('press.addEdit');
    Route::post('press/store-update', [AdminPressController::class,'storeUpdate'])->name('press.storeUpdate');
    Route::get('press/delete/{id}', [AdminPressController::class,'delete'])->name('press.delete');
    
    
    //press category
     Route::get('presscategory', [AdminPressController::class,'presscategory'])->name('presscategory');
    Route::get('presscategory/add-edit', [AdminPressController::class,'addEditCategory'])->name('presscategory.addEditCategory');
    Route::get('presscategory/add-edit/{id}', [AdminPressController::class,'addEditCategory'])->name('presscategory.addEditCategory');
    Route::post('presscategory/store-update', [AdminPressController::class,'categorystoreUpdate'])->name('presscategory.categorystoreUpdate');
    Route::get('presscategory/delete/{id}', [AdminPressController::class,'categorydelete'])->name('presscategory.categorydelete');
    
    
    
    
    
    //for about
     //Route::get('about', [AdminAboutController::class,'index'])->name('about');
   // Route::get('about/add-edit', [AdminAboutController::class,'addEdit'])->name('about.addEdit');
    Route::get('about/add-edit', [AdminAboutController::class,'addEdit'])->name('about.addEdit');
    Route::post('about/store-update', [AdminAboutController::class,'storeUpdate'])->name('about.storeUpdate');
     Route::get('about/delete/', [AdminAboutController::class,'delete'])->name('about.delete');
    
    
    //for avon square
     Route::get('square/add-edit', [AdminSqureController::class,'addEdit'])->name('square.addEdit');
    Route::post('square/store-update', [AdminSqureController::class,'storeUpdate'])->name('square.storeUpdate');
    
    //for term and condition
     Route::get('termcondition/add-edit', [AdminTermsConditionController::class,'addEdit'])->name('termcondition.addEdit');
    Route::post('termcondition/store-update', [AdminTermsConditionController::class,'storeUpdate'])->name('termcondition.storeUpdate');
    
    
    
    //Shipping & Delivery Policy
     Route::get('shipping/add-edit', [AdminShippingDeliveryController::class,'addEdit'])->name('shipping.addEdit');
    Route::post('shipping/store-update', [AdminShippingDeliveryController::class,'storeUpdate'])->name('shipping.storeUpdate');
    
    
    
    //AdminReturnsRefund
     Route::get('return/add-edit', [AdminReturnsRefundController::class,'addEdit'])->name('return.addEdit');
    Route::post('return/store-update', [AdminReturnsRefundController::class,'storeUpdate'])->name('return.storeUpdate');
    
     //AdminProductPricingPolicy
     Route::get('pricing/add-edit', [AdminProductPricingPolicyController::class,'addEdit'])->name('pricing.addEdit');
    Route::post('pricing/store-update', [AdminProductPricingPolicyController::class,'storeUpdate'])->name('pricing.storeUpdate');
    
     //AdminWarranty
     Route::get('warranty/add-edit', [AdminWarrantyController::class,'addEdit'])->name('warranty.addEdit');
    Route::post('warranty/store-update', [AdminWarrantyController::class,'storeUpdate'])->name('warranty.storeUpdate');
    
    
    
    //career 
     Route::get('career', [AdminCareerController::class,'index'])->name('career');
    Route::get('career/add-edit', [AdminCareerController::class,'addEdit'])->name('career.addEdit');
    Route::get('career/add-edit/{id}', [AdminCareerController::class,'addEdit'])->name('career.addEdit');
    Route::post('career/store-update', [AdminCareerController::class,'storeUpdate'])->name('career.storeUpdate');
    Route::get('career/delete/{id}', [AdminCareerController::class,'delete'])->name('career.delete');
    
    
    //career category
     Route::get('careercategory', [AdminCareerController::class,'careercategory'])->name('careercategory');
    Route::get('careercategory/add-edit', [AdminCareerController::class,'addEditCategory'])->name('careercategory.addEditCategory');
    Route::get('careercategory/add-edit/{id}', [AdminCareerController::class,'addEditCategory'])->name('careercategory.addEditCategory');
    Route::post('careercategory/store-update', [AdminCareerController::class,'categorystoreUpdate'])->name('careercategory.categorystoreUpdate');
    Route::get('careercategory/delete/{id}', [AdminCareerController::class,'categorydelete'])->name('careercategory.categorydelete');
    
    
    //csr
     Route::get('csr/add-edit', [AdminAboutController::class,'csraddEdit'])->name('csr.addEdit');
    Route::post('csr/store-update', [AdminAboutController::class,'csrstoreUpdate'])->name('csr.storeUpdate');
     
    
    
    
    
     //asset brand
     Route::get('asset', [AdminAssectBrandController::class,'index'])->name('asset');
    Route::get('asset/add-edit', [AdminAssectBrandController::class,'addEdit'])->name('asset.addEdit');
    Route::get('asset/add-edit/{id}', [AdminAssectBrandController::class,'addEdit'])->name('asset.addEdit');
    Route::post('asset/store-update', [AdminAssectBrandController::class,'storeUpdate'])->name('asset.storeUpdate');
    Route::get('asset/delete/{id}', [AdminAssectBrandController::class,'delete'])->name('asset.delete');
    
    
    
    //asset brand category
     Route::get('assetcategory', [AdminAssectBrandController::class,'assetcategory'])->name('assetcategory');
    Route::get('assetcategory/add-edit', [AdminAssectBrandController::class,'addEditCategory'])->name('assetcategory.addEditCategory');
    Route::get('assetcategory/add-edit/{id}', [AdminAssectBrandController::class,'addEditCategory'])->name('assetcategory.addEditCategory');
    Route::post('assetcategory/store-update', [AdminAssectBrandController::class,'categorystoreUpdate'])->name('assetcategory.categorystoreUpdate');
    Route::get('assetcategory/delete/{id}', [AdminAssectBrandController::class,'categorydelete'])->name('assetcategory.categorydelete');
    
});






 Route::get('about', [AboutController::class,'index'])->name('about.index');
 Route::get('avon_square', [AvonSquareController::class,'index'])->name('avon_square.index');
 Route::get('blog', [BlogController::class,'index'])->name('blog.index');
 Route::get('blog/{url}', [BlogController::class,'blogdetails'])->name('blog.blogdetails');
  Route::get('pride', [AboutController::class,'pride'])->name('pride.pride');
  Route::get('production', [AboutController::class,'production'])->name('production.production');


Route::get('press', [PressController::class,'index'])->name('index.press');

Route::get('termcondition', [StaticPageController::class,'index'])->name('index.termcondition');
Route::get('shiping', [StaticPageController::class,'shiping'])->name('shiping.shiping');
Route::get('warranty', [StaticPageController::class,'warranty'])->name('warranty.warranty');
Route::get('pricing', [StaticPageController::class,'pricing'])->name('pricing.pricing');
Route::get('refund', [StaticPageController::class,'refund'])->name('refund.refund');
Route::get('career', [CareerController::class,'index'])->name('index.career');

Route::get('csr', [AboutController::class,'csr'])->name('csr.csr');
Route::get('brandassets', [BrandController::class,'index'])->name('index.brandassets');



