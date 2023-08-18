<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/nav',function(){


//      return View('nav');

// });


// Route::get('/contact',function(){

//        return   view('contact');

// });


// Route::get('/footer',function(){


//    return view('footer');

// });


// Route::get('/visa',function(){


//   return     view('visa');

// });

// Route::get('/login',function(){



//     return   view('login');

//   });



//   Route::get('/booking',function(){
    


//     return  view('booking');
//   });




// =============================



Route::get('/',function(){


   return  view('index');

});




Route::get('/index3',function(){


  return    view('index3');

      
});



  Route::get('/index4', function(){


      return    view('index4');

  });
  
Route::get('/webcheck',function(){


   return  view('webcheck');

});


Route::get('/index5',function(){


  return  view('index5');

});
Route::get('/index2',function(){


     return   view('index2');

});

Route::get('/index6',function(){



  return   view('index6');
});

Route::get('/register',[RegistrationController::class,'index']);




Route::get('/booking',[RegistrationController::class,'booking']);


Route::get('/visa',[CustomerController::class,'visa']);



Route::get('/contact',[CustomerController::class,'contact']);

Route::get('/login',[RegistrationController::class,'login']);


// Route::get('customer/contact',[CustomerController::class,'']);
