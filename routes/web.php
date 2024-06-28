<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TrangController;
// get. post, put, patch, delete (method http)
// base url:http://127.0.0.1:8000
// url:http://127.0.0.1:8000/test
// đặt tên: danh-sach-san-pham
Route::get('test', function () {
    echo '123';
});
// base url:http://127.0.0.1:8000/
Route::get('/', function () {
    echo 'Trang chủ';
});
Route::get('list-products', [ProductController::class, 'showProduct']);
// truyền dữ liệu từ Route => Controller
// slug
// base url:http://127.0.0.1:8000/get-product/3/iphone11
Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);
// params
// base url:http://127.0.0.1:8000/update-product?id=3&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);
Route::get('thong-tin-sv', [TrangController::class, 'showSinhvien']);
