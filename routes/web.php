<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\Markcontroller;
use App\Models\TradeModel;
use App\Models\traineeModel;
use App\Models\Marks;
use App\Http\Middleware\CheckUserSession;

// Public routes
Route::get('/', function () {
    return view('User');
})->name('home');

Route::get('/Account', function () {
    return view('Account'); 
})->name('account');

Route::post('/register',[UserController::class,'register'])->name('register');

Route::get('/Login', function () {
    return view('Login');
});

Route::post('/login',[UserController::class,'login'])->name('login');

// Protected routes - require authentication
Route::middleware(['web', CheckUserSession::class])->group(function () {
    // Dashboard
    Route::match(['get', 'post'], '/Dashboard', function () {
        return view('Dashboard');
    })->name('dashboard');

    // Trade routes
    Route::get('/Trade', function () {
        return view('Trade');
    });
    Route::post('/trade',[TradeController::class,'trade'])->name('trade');
    Route::get('/Viewtrade', function () {
        $select = TradeModel::all();
        return view('Viewtrade',compact('select'));
    });
    Route::get('/updatetrade', function () {
        return view('updatetrade');
    });
    Route::get('/edit/{id}',[TradeController::class,'edit'])->name('edit');
    Route::put('/updatetrade/{id}',[TradeController::class,'updatetrade'])->name('updatetrade');
    Route::delete('/delete/{id}',[TradeController::class,'delete'])->name('delete');

    // Trainee routes
    Route::get('/Trainees', function () {
        return view('Trainees');
    });
    Route::get('/Viewtrainees', function () {
        $view = traineeModel::all();
        return view('Viewtrainees',compact('view'));
    });
    Route::post('/Trainee',[TraineeController::class,'Trainee'])->name('Trainee');
    Route::get('/update2/{id}',[TraineeController::class,'update2'])->name('update2');
    Route::put('/updatetrainee/{id}',[TraineeController::class,'updatetrainee'])->name('updatetrainee');
    Route::delete('/delete2/{id}',[TraineeController::class,'delete2'])->name('delete2');

    // Marks and Report routes
    Route::get('/Marks', function () {
        $view = traineeModel::all();
        $select = TradeModel::all();
        return view('Marks',compact('view', 'select'));
    });
    Route::post('/marks',[Markcontroller::class,'marks'])->name('marks');
    Route::match(['get', 'post'], '/Viewreport', function () {
        $select = Marks::with(['trainee', 'trade'])->get();
        return view('Viewreport',compact('select'));
    })->name('viewreport');
    Route::get('/Updatereport', function () {
        return view('Updatereport');
    });
    Route::match(['get', 'post'], '/modify/{id}', [Markcontroller::class, 'modify'])->name('modify');
    Route::match(['get', 'post'], '/updatereport/{id}',[Markcontroller::class,'updatereport'])->name('updatereport');
    Route::delete('/delete3/{id}',[MarkController::class,'delete3'])->name('delete3');
Route::PUT('/updatereport/{id}',[Markcontroller::class,'updatereport'])->name('updatereport');
    // Logout route
    Route::match(['get', 'post'], '/logout', [UserController::class, 'logout'])->name('logout');
});


