<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Cart;


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
  $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $productose = $cart->items;

    return view('welcome', ['productose' => $productose]);
});
Route::get('/destilados',
  ['uses' => 'ProductosController@destilados', 'as' => 'productos.destilados']);
Route::get('/atipicos',
  ['uses' => 'ProductosController@atipicos', 'as' => 'productos.atipicos']);
//Cart
Route::post('/add-to-cart', [
    'uses' => 'ProductosController@getAddToCart',
    'as' => 'producto.AddToCart'
    ]);
Route::get('/shopping-cart', [
    'uses' => 'ProductosController@getCart',
    'as' => 'producto.shoppingCart'
    ]);
Route::get('/checkout', [
    'uses' => 'ProductosController@checkout',
    'as' => 'producto.checkout'
    ]);
Route::get('/shipping', [
    'uses' => 'ProductosController@shipping',
    'as' => 'producto.shipping'
    ]);
Route::get('/pagos', [
    'uses' => 'ProductosController@pagos',
    'as' => 'producto.pagos'
    ]);
Route::get('/remove/{id}', [
    'uses' => 'ProductosController@getRemoveItem',
    'as' => 'producto.remove'
    ]);
Route::get('/filtros', [
    'uses' => 'ProductosController@filtros',
    'as' => 'producto.filtros'
    ]);

Route::get('/vinos',
  ['uses' => 'ProductosController@vinos', 'as' => 'productos.vinos']);
Route::get('/cerveza',
  ['uses' => 'ProductosController@cerveza', 'as' => 'productos.cerveza']);

Route::get('/single/{id}',
  ['uses' => 'ProductosController@single', 'as' => 'productos.single']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Perfil
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::put('/UpdateProfile',['uses' => 'PerfilController@update', 'as' => 'perfil.update']);
Route::get('/productos', 'ProductosController@dash_list')->name('dash_product_list');
Route::get('/productos_admin', 'ProductosController@admin_list')->name('admin_product_list');
Route::get('/producto/autorizar/{id}', 'ProductosController@autorizar_prod')->name('autorizar_prod');

Route::get('/productos_new', 'ProductosController@dash_new_product')->name('dash_product_new');

Route::get('/productos_new/{id}', 'ProductosController@dash_new_product_cate')->name('dash_product_new_cate');
Route::post('/store_prod',['uses' => 'ProductosController@store', 'as' => 'productos.store']);
Route::post('/store_img',['uses' => 'ProductosController@imgstore', 'as' => 'productos.imagenstore']);
Route::get('/store_3',['uses' => 'ProductosController@storestep3', 'as' => 'productos.step3']);
Route::put('/store_step4/{id}',['uses' => 'ProductosController@storestep4', 'as' => 'productos.storestep4']);
Route::put('/caracteristicas/{id}',['uses' => 'ProductosController@caracteristicas', 'as' => 'productos.caracteristicas']);

Route::get('/marcas', 'MarcasController@list')->name('marcas_list');
Route::get('/marcas_new', 'MarcasController@new')->name('marcas_new');
Route::post('/store_marca',['uses' => 'MarcasController@store', 'as' => 'marcas.store']);

Route::get('/packs', 'PacksController@index')->name('packs');
Route::get('/new_packs', 'PacksController@new')->name('new_pack');
Route::get('/addproduct/{id}', 'PacksController@new_product')->name('new_pack_product');
Route::get('/ver_productos_pack/{id}', 'PacksController@single')->name('ver_productos_pack');
Route::get('pack/{id}/destroy',
  ['uses' => 'PacksController@destroy', 'as' => 'pack.destroy']);
Route::get('productpack/{id}/destroy',
  ['uses' => 'PacksController@destroyproduct', 'as' => 'productpack.destroy']);
Route::post('/pack_product_store',['uses' => 'PacksController@store_product', 'as' => 'packproduct.store']);
Route::post('/pack_store',['uses' => 'PacksController@store', 'as' => 'pack.store']);

Route::group(['middleware' => 'auth', 'prefix' => '/'], function () {
    Route::get('{first}/{second}/{third}', 'RoutingController@thirdLevel')->name('third');
    Route::get('{first}/{second}', 'RoutingController@secondLevel')->name('second');
    Route::get('{any}', 'RoutingController@root')->name('any');
});

