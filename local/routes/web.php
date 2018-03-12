<?php


Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('/dich-vu/thiet-ke-phong-ngu',function(){
    return view('frontend.category.index');
});
Route::get('/dich-vu/thiet-ke-phong-ngu/phong-ngu-vip',function(){
    return view('frontend.d_category.index');
});
