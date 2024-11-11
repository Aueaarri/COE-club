<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login'); 
}); 

Route::get('/home', function () {
    return view('welcome'); 
})->name('welcome');

Route::get('/test', function () {
    return view('test'); 
})->name('test');


// เพิ่ม path
Route::get('/about', function () {
    return view('about');
}) ->name('about');
// เพิ่ม path
Route::get('/blog', function () {
    return view('blog');
}) ->name('blog');

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





/*
Route::get('/', function () {
    return "<a href='".route('login')."'>Login</a>"; //สั้นแล้ว 
}); 

// เพิ่ม path
Route::get('/about', function () {
    return "<h1>เกี่ยวกับเรา</h1>";
}); 
// เพิ่ม path
Route::get('/blog', function () {
    return "<h1>บทความทั้งหมด</h1>";
}); 

// ส่งค่ามาพร้อมกับ path เก็บในพารามิเตอร์ name
Route::get('/blog/{name}', function ($name) {
    return "<h1>บทความ ${name}</h1>";
}); 
//path ยาว
Route::get('admin/users/Aoom/E', function () {
    return "<h1>ยินดีต้อนรับแอดมิน</h1>";
}) ->name('login'); //แก้ให้สั้นๆ ตั้งชื่อ route ว่า login เรียกใช้ บรรทัด 6 

Route::fallback (function() {  //กรณีไม่มี path นี้อยู่
    return "<h1>ไม่พบหน้าเว็บ</h1>";
});
*/