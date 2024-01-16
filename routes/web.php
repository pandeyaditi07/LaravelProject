<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');  
}); 


// form creation in laravel: 
// Route::get('/index' , function (){ 
//     return view('index'); 

// });   

// form return through controller : 

    Route::get('/home' , function(){
        return view('home');   
    }); 

    //   Route::get('/home' , [formController::class , 'home']);   

   Route::get('/form' , [formController::class , 'form']); 
    Route::post('/form2' , [formController::class , 'form2']);  
    Route::get('/home' , [formController::class , 'form3']); 


       



    Route::get('/edituser/{id}' , [formController::class, 'edituser']);   
    Route::post('/updateuser/{id}' , [formController::class, 'updateuser']);  
    Route::get('/showuser/{id}' , [formController::class, 'showuser']); 
    Route::get('/deleteuser/{id}' , [formController::class, 'deleteuser']);    
