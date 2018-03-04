<?php

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
/* for client*/
<<<<<<< HEAD

Route::get('/',['as'          =>'index','uses'=>'ClientController@index']);
Route::get('/banh-kem',['as'  =>'banhkem','uses'=>'ClientController@banhkem']);
Route::get('/thuc-an',['as'   =>'thucan','uses'=>'ClientController@thucan']);
Route::get('/qua-tang',['as'  =>'quatang','uses'=>'ClientController@quatang']);
Route::get('/trang-tri',['as' =>'trangtri','uses'=>'ClientController@trangtri']);
Route::get('/donhang',['as'   =>'donhang','uses'=>'ClientController@donhang']);

Route::get('/blog',['as'      =>'blog','uses'=>'ClientController@blog']);
Route::get('/lien-he',['as'   =>'lienhe','uses'=>'ClientController@lienhe']);
Route::get('/infosp',['as'    =>'infosp','uses'=>'ClientController@infosp']);
Route::get('/datsp',['as'    =>'datsp','uses'=>'ClientController@datsp']);
Route::get('/infouser',['as'    =>'infouser','uses'=>'ClientController@infouser']);
Route::get('/changeinfouser',['as' =>'changeinfouser','uses'=>'ClientController@changeinfouser']);
   Route::get('/thanhtien',['as' =>'thanhtien','uses'=>'ClientController@thanhtien']);
Route::post('/infosp',['as'   =>'infosp','uses'=>'ClientController@infosp']);
Route::post('/dathang',['as'  =>'dathang','uses'=>'ClientController@dathang']);




// for admin
   Route::group(['prefix'=>'admin'],function(){
    Route::get('/',['as'=>'admin.index','uses'=>'AdminController@index'])->middleware('Checkrule');
    //login admin
=======
Route::get('/userregister',['as'=>'userregister','uses'=>'LoginController@register']);
Route::post('/userregister',['as'=>'userregister','uses'=>'LoginController@create']);
Route::get('/userlogin',['as'=>'userlogin','uses'=>'LoginController@index']);
Route::post('/userlogin',['as'=>'userlogin','uses'=>'LoginController@login']);
Route::post('/userlogout',['as'=>'userlogout','uses'=>'LoginController@logout']);

Route::get('/',['as'=>'index','uses'=>'ClientController@index']);
Route::get('/banh-kem',['as'=>'banhkem','uses'=>'ClientController@banhkem']);
Route::get('/thuc-an',['as'=>'thucan','uses'=>'ClientController@thucan']);
Route::get('/qua-tang',['as'=>'quatang','uses'=>'ClientController@quatang']);
Route::get('/trang-tri',['as'=>'trangtri','uses'=>'ClientController@trangtri']);
Route::get('/blog',['as'=>'blog','uses'=>'ClientController@blog']);
Route::get('/lien-he',['as'=>'lienhe','uses'=>'ClientController@lienhe']);


// for admin

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',['as'=>'admin.index','uses'=>'AdminController@index']);
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    Route::get('/register',['as'=>'register','uses'=>'LoginController@register']);
    Route::post('/register',['as'=>'register','uses'=>'LoginController@create']);
    Route::get('/login',['as'=>'login','uses'=>'LoginController@index']);
    Route::post('/login',['as'=>'login','uses'=>'LoginController@login']);
    Route::post('/logout',['as'=>'logout','uses'=>'LoginController@logout']);
    // group loai san pham
    Route::group(['prefix'=>'loaisanpham'],function(){
    	Route::get('/',['as'=>'admin.loaisanpham.index', 'uses'=>'LoaiSanPhamController@index'])->middleware('Checkrule');
    	Route::get('/create', ['as'=>'admin.loaisanpham.create', 'uses'=>'LoaiSanPhamController@create'])->middleware('Checkrule');
    	Route::post('/create', ['as'=>'admin.loaisanpham.store', 'uses'=>'LoaiSanPhamController@store'])->middleware('Checkrule');
    	Route::get('/edit/{id}', ['as'=>'admin.loaisanpham.edit', 'uses'=>'LoaiSanPhamController@edit'])->middleware('Checkrule');
    	Route::post('/edit/{id}', ['as'=>'admin.loaisanpham.update', 'uses'=>'LoaiSanPhamController@update'])->middleware('Checkrule');
    	Route::get('/del/{id}', ['as'=>'admin.loaisanpham.del', 'uses'=>'LoaiSanPhamController@destroy'])->middleware('Checkrule');
    });
    //group thong k4
        Route::group(['prefix'=>'thongke'],function(){
        Route::get('/',['as'=>'admin.thongke.index', 'uses'=>'ThongKeController@index'])->middleware('Checkrule');
        Route::get('/quanliuser',['as'=>'admin.quanliuser.index', 'uses'=>'ThongKeController@quanliuser'])->middleware('Checkrule');
        Route::get('/themnguoidung',['as'=>'themnguoidung', 'uses'=>'ThongKeController@themnguoidung'])->middleware('Checkrule');
         Route::post('/themnguoidung',['as'=>'themnguoidung', 'uses'=>'ThongKeController@themnuser'])->middleware('Checkrule');

    });
    // group san pham
    Route::group(['prefix'=>'sanpham'],function(){
<<<<<<< HEAD
     	Route::get('/',['as'=>'admin.sanpham.index', 'uses'=>'SanPhamController@index'])->middleware('Checkrule');
     	Route::get('/create',['as'=>'admin.sanpham.create', 'uses'=>'SanPhamController@create'])->middleware('Checkrule');
     	Route::post('/create', ['as'=>'admin.sanpham.store', 'uses'=>'SanPhamController@store'])->middleware('Checkrule');
        Route::get('/update/{id}', ['as'=>'admin.sanpham.update', 'uses'=>'SanPhamController@update'])->middleware('Checkrule');
        Route::post('/update/{id}', ['as'=>'admin.sanpham.updatedata', 'uses'=>'SanPhamController@updatedata'])->middleware('Checkrule');
        Route::get('/del/{id}', ['as'=>'admin.sanpham.del', 'uses'=>'SanPhamController@destroy'])->middleware('Checkrule');
        // Route::get('/duyet/{id}', ['as'=>'duyet', 'uses'=>'SanPhamController@duyet'])->middleware('Checkrule');



=======
     	Route::get('/',['as'=>'admin.sanpham.index', 'uses'=>'SanPhamController@index']);
     	Route::get('/create',['as'=>'admin.sanpham.create', 'uses'=>'SanPhamController@create']);
     	Route::post('/create', ['as'=>'admin.sanpham.store', 'uses'=>'SanPhamController@store']);
        Route::get('/update/{id}', ['as'=>'admin.sanpham.update', 'uses'=>'SanPhamController@update']);
        Route::post('/update/{id}', ['as'=>'admin.sanpham.updatedata', 'uses'=>'SanPhamController@updatedata']);
        Route::get('/del/{id}', ['as'=>'admin.sanpham.del', 'uses'=>'SanPhamController@destroy']);
        
>>>>>>> b8117ba552f41a6c1076d86b897a851b516bcac0
    });
       //group blog
     Route::group(['prefix'=>'blog'],function(){
        Route::get('/',['as'=>'admin.blog.index', 'uses'=>'BlogController@index'])->middleware('Checkrule');
        Route::get('/update/{id}', ['as'=>'admin.blog.update', 'uses'=>'BlogController@update'])->middleware('Checkrule');
        Route::post('/update/{id}', ['as'=>'admin.blog.updatedata', 'uses'=>'BlogController@updatedata'])->middleware('Checkrule');
        Route::get('/del/{id}', ['as'=>'admin.blog.del', 'uses'=>'BlogController@destroy'])->middleware('Checkrule');
        Route::get('/create',['as'=>'admin.blog.create', 'uses'=>'BlogController@create'])->middleware('Checkrule');
        Route::post('/create', ['as'=>'admin.blog.store', 'uses'=>'BlogController@store'])->middleware('Checkrule');



    });
    //group  admin
      Route::group(['prefix'=>'infoadmin'],function(){
        Route::get('/',['as'=>'admin.infoadmin.index', 'uses'=>'InfoadminController@index'])->middleware('Checkrule');
         Route::post('/change', ['as'=>'admin.infoadmin.change', 'uses'=>'InfoadminController@change'])->middleware('Checkrule');
      
    });
      //group  nha cung cấp
      Route::group(['prefix'=>'nhacc'],function(){
        Route::get('/',['as'=>'admin.nhacc.index', 'uses'=>'NhaCCController@index'])->middleware('Checkrule');
        Route::get('/update/{id}', ['as'=>'admin.nhacc.update', 'uses'=>'NhaCCController@edit'])->middleware('Checkrule');
        Route::post('/update/{id}', ['as'=>'admin.nhacc.updatedata', 'uses'=>'NhaCCController@update'])->middleware('Checkrule');
        Route::get('/del/{id}', ['as'=>'admin.nhacc.del', 'uses'=>'NhaCCController@destroy'])->middleware('Checkrule');
          Route::get('/themncc',['as'=>'themncc', 'uses'=>'NhaCCController@themncc'])->middleware('Checkrule');
         Route::post('/themncc',['as'=>'themncc', 'uses'=>'NhaCCController@themnccc'])->middleware('Checkrule');


      
    });
});