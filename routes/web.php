<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ItemCategoriesController;
use App\Http\Controllers\ItemGroupController;
use App\Http\Controllers\ItemMeasuresController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\MeasuresController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\SaleLineController;
use App\Models\Sale_Headers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboards', function () {
    return view('pages.dashboard');
});

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();
    return redirect('/');
})->name('logout');



Route::get('/homePage', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//user
Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/insert', [UserController::class, 'insertform']);
    Route::post('/create', [UserController::class, 'insert']);
    Route::get('/delete_user/{id}', [UserController::class, 'delete_user']);
    Route::post('/update_user/{id}', [UserController::class, 'update_user']);
    Route::get('/edit/{id}', [UserController::class, 'edit']);
});
//userRole
Route::group(['prefix' => 'user_roles'], function () {
    Route::get('/', [UserRoleController::class, 'index']);
    Route::get('/Add', [UserRoleController::class, 'insertForm']);
    Route::post('/add_user', [UserRoleController::class, 'insert']);
    Route::get('/delete_userRole/{code}', [UserRoleController::class, 'delete_userRole']);
    Route::get('/update_userRole/{code}', [UserRoleController::class, 'update_userRole']);
    Route::get('/edit_userRole/{code}', [UserRoleController::class, 'edit_userRole']);
});
//permission
Route::group(['prefix' => 'permissions'], function () {
    Route::get('/', [PermissionsController::class, 'index']);
    Route::get('/Add', [PermissionsController::class, 'insertPermissions']);
    Route::post('/insert', [PermissionsController::class, 'add_permissions']);
    Route::get('/delete/{code}', [PermissionsController::class, 'remove']);
    Route::get('/edit/{code}', [PermissionsController::class, 'edit_permissions']);
    Route::post('/update/{code}', [PermissionsController::class, 'update_permissions']);
});
//customers
Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index']);
    Route::get('/Add', [CustomerController::class, 'createForm']);
    Route::post('/add_customers', [CustomerController::class, 'insert_customers']);
    Route::get('/delete_customers/{no}', [CustomerController::class, 'delete_customers']);
    Route::post('/update_customers/{no}', [CustomerController::class, 'update_customers']);
    Route::get('/edit_customers/{no}', [CustomerController::class, 'edit_customers']);
    Route::get('/back', [CustomerController::class, 'back']);
});

//Items
Route::group(['prefix' => 'items'], function () {
    Route::get('/', [ItemsController::class, 'index']);
    Route::get('/Add', [ItemsController::class, 'create_form']);
    Route::post('/add_items', [ItemsController::class, 'insert_items']);
    Route::get('/edit_items/{no}', [ItemsController::class, 'edit_items']);
    Route::post('/update_items/{no}', [ItemsController::class, 'update_items']);
    Route::get('/showedits/{no}', [ItemsController::class, 'showedits']);
    Route::post('/delete_items/{no}', [ItemsController::class, 'delete_items']);
    Route::get('/GetdataTable', [ItemsController::class, 'test'])->name('GetdataTable');
    Route::get('/search_item', [ItemsController::class, 'search']);
});


//Item_groups
Route::group(['prefix' => 'item_groups'], function () {
    Route::get('/', [ItemGroupController::class, 'index']);
    Route::get('/Add', [ItemGroupController::class, 'create_form']);
    Route::post('/add_items', [ItemGroupController::class, 'insert_form']);
    Route::get('/edit_item_groups/{code}', [ItemGroupController::class, 'edit_item_groups']);
    Route::post('/update_item_groups/{code}', [ItemGroupController::class, 'update_item_groups']);
    Route::get('/delete_item_groups/{code}', [ItemGroupController::class, 'delete_item_G']);
});

//item_cotegary
Route::group(['prefix' => 'item_category'], function () {
    Route::get('/', [ItemCategoriesController::class, 'index']);
    Route::get('/add', [ItemCategoriesController::class, 'insert_form']);
    Route::post('/add_items', [ItemCategoriesController::class, 'input_data']);
    Route::get('/edit_item_c/{code}', [ItemCategoriesController::class, 'edit_item_c']);
    Route::post('/update_item_c/{code}', [ItemCategoriesController::class, 'update_item_c']);
    Route::get('/delete_items/{code}', [ItemCategoriesController::class, 'delete_items']);
});

//uinit of measures
Route::group(['prefix' => 'unit_of_measures'], function () {
    Route::get('/', [MeasuresController::class, 'index']);
    Route::get('/Add', [MeasuresController::class, 'insert_form']);
    Route::post('/insert_measures', [MeasuresController::class, 'insert_measures']);
    Route::get('/edit/{code}', [MeasuresController::class, 'edit_measures']);
    Route::post('/update/{code}', [MeasuresController::class, 'update_measures']);
    Route::get('/delete_M/{code}', [MeasuresController::class, 'remove']);
});

//item uinit of measures
Route::group(['prefix' => 'item_unit_of_measures'], function () {
    Route::get('/', [ItemMeasuresController::class, 'index']);
    Route::get('/Add', [ItemMeasuresController::class, 'insert_form']);
    Route::post('/insert_item_measures', [ItemMeasuresController::class, 'insert_itemsMeasures']);
    Route::get('delete_items/{id}', [ItemMeasuresController::class, 'delete_item_unit']);
    Route::get('/edit_item_measures/{id}', [ItemMeasuresController::class, 'edit_items_measures']);
    Route::post('/update_item_measures/{id}', [ItemMeasuresController::class, 'update_item_measures']);
});

//pos(sale_line) 
Route::group(['prefix' => 'sales_lines'], function () {
    Route::get('/', [SaleLineController::class, 'index']);
    Route::get('/Add', [SaleLineController::class, 'createForm']);
    Route::post('/update', [SaleLineController::class, 'update']);
    //for add customer
    Route::post('/add_customers', [SaleLineController::class, 'insert_customers']);
    //for search rout
    Route::GET('/item_search', [SaleLineController::class, 'search1']);
    //add sele line
    Route::post('/add_salines', [SaleLineController::class, 'add_sales_lines']);
    //add to sale header
    Route::post('/setcustomer/{id}', [SaleLineController::class, 'add_customers']);
    //for invioce
    Route::get('/invoice', function () {
        return view('report.receipt');
    });
});
//for add customer to sal_header

//for barcode
Route::group(['prefix' => 'barcode'], function () {
    Route::get('/', [BarcodeController::class, 'index']);
    Route::get('/create', [BarcodeController::class, 'create']);
    Route::get('/post', [BarcodeController::class, 'store']);
});



//for payment sale_lines
// Route::group(['prifix' => 'payment'], function () {
//     Route::get('', [PaymentController::class, 'index']);
// });

//for ajax item



//for test 
Route::get('/insert_you', function () {
    return view('for_test.insert_you');
});
Route::get('/display_you', function () {
    return view('for_test.display_you');
});
Route::get('/master', function () {
    return view('for_test.master');
});
Route::get('/invoice', function () {
    return view('report.print');
});
