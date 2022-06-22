<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/hello',function(){
    return response('<h1>This is hello world</h1>',200);

});
Route::get('/posts/{id}',function($id){
    // dd($id); // this is for debugging (die and dump)
    // ddd($id); // this is also for debugging and gives data in detail (die dump and debug)

    return response('Post'.$id);

})->where('id','[0-9]+'); // this line is to add any regular expression to the id or parameter value passed

Route::get('/search/{id}',function(Request $request){
    // dd($request);
    echo $request->name;
    echo $request->id;
});
Route::get('/posts/{id}', function (Request $request) { // getting id by request
    $id=$request->id; // this will also give id;
    dd($id); // this is dump die used for debugging
    echo $request->name;
    return "hello this is post and id is $id";
});
Route::get('/post/{id}', function ($id) {
    return $id; // this will return id
})->where('id','[0-9]+'); // this is adding restrication to the id comming by adding the regular expression

// above code for reading and learning purpose

Route::get('/listings',function(Request $request){
    return view('listings',[
        'heading'=>'latest listings',
        'listings'=>[
            [
                'id'=>1,
                'title'=>'listing 1',
                'description'=>'lorem ipusum'
            ],
            [
                'id'=>2,
                'title'=>'listing 2',
                'description'=>'lorem ipusum'
            ],
        ]
    ]);
});