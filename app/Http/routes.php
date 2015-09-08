<?php

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

	//$product = \App\Models\Product::find(1);
	//return $product;

	//$types = \App\Models\Type::all();
	//return $types;

	//$user =\App\Models\User::all();
	//return $user;

	//$type = \App\Models\Type::find(2);
	//return $type->products;

	//$product = \App\Models\Product::find(1);
	//return $product->type;

	//$user =\App\Models\User::find(2);
	//return $user->orders;

	//$order = \App\Models\Order::find(2);
	//return $order->user;

	//$order = \App\Models\Order::find(1);
	//return $order->products;

	//$type= new \App\Models\Type();
	//$type->name ="Shark";
	//$type->save();

	//return $type;

	//$user = \App\Models\User::create([
        // "username"=>"JoeJai",
         //"firstname"=>"Joe",
        // "lastname"=>"Jai",
        // "email"=>"joe.jai@gmail.com",
        // "password"=>"bla"
		//]);
	//return $user;

    return view('welcome');

    //return view('about');

    //return view('contact');
});

Route::get('about', function () {

	return view('about');
});

Route::get('contact', function () {

	return view('contact');
});

Route::get('types', function () {

    $type = \App\Models\Type::find(2);

	return view('types',['type'=>$type]);
	// can change to ['type'=>$type] to compose(type)

});
