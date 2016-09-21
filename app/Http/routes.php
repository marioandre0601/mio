<?php
use Yajra\Datatables\Facades\Datatables;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['web']],function(){
    
    Route::get('dashboards',['as'=>'dashboards','uses'=>'Product\ProductController@index']);
    Route::get('product',['as'=>'product','uses'=>'Product\ProductController@index']);
    Route::get('marcas',['as'=>'marcas','uses'=>'Mark\MarkController@index']);
    Route::get('product/edit/{id}',['as'=>'product-edit','uses'=>'Product\ProductController@edit']);
    Route::get('product/show/{id}',['as'=>'product-show','uses'=>'Product\ProductController@show']);
    Route::get('product/create',['as'=>'product-create','uses'=>'Product\ProductController@create']);
    Route::post('product/store',['as'=>'product-store','uses'=>'Product\ProductController@store']);
    Route::post('product/update/{id}',['as'=>'product-update','uses'=>'Product\ProductController@update']);
    Route::post('product/destroy/{id}',['as'=>'product-destroy','uses'=>'Product\ProductController@destroy']);
    //Route::resource('product','Product\ProductController');
});
Route::group(['middleware'=>['web']],function(){
    
    Route::get('usuario',function(){
       return 'Hola mundo'; 
    });
    
    Route::get('usuario/{codigo}',function($codigo){
        return 'Hola usuario '.$codigo;
    })->where('codigo','[0-9]+');
    
    Route::get('usuario/{nombre}',function($nombre){
        return 'Hola usuario '.$nombre;
    })->where('nombre','[A-Za-z]+');
    
    //Route::get('escritorio',['as'=>'escritorio','uses'=>'DesktopController@index']);
    //Route::resource('marca',['as'=>'marca','uses'=>'Product\MarcaController']);
    //Route::resource('marca','Product\MarcaController');
    
   
    //Route::get('panel',['as'=>'panel','uses'=>'Desktop\AdministratorController@panel']);
    //Route::get('access',['as'=>'access','uses'=>'Desktop\AdministratorController@access']);
    //Route::get('reports',['as'=>'reports','uses'=>'Desktop\AdministratorController@reports']);
    //Route::get('dashboards',['as'=>'dashboards','uses'=>'Desktop\DashboardsController@index']);
  //  Route::get('master',['as'=>'master','uses'=>'Desktop\DashboardsController@master']);
    //Route::get('product',['as'=>'product-index','uses'=>'Product\ProductController@index']);
    //Route::get('product',['as'=>'product-list','uses'=>'Product\ProductController@lista']);
    //Route::get('product/list',function(){
      // return Datatables::eloquent(App\Model\Product\Product::query())->make(true);
    //});
    
    });
