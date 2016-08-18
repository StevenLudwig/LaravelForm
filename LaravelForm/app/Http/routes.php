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
use App\Usuario; //Importamos el modelo creado
use App\User; //Importamos el modelo creado
use Illuminate\Http\Request; //importamos el metodo Request
use DB;


Route::get('/', function () {
    return view('index');
});


Route::get('/log', function () {
    return view('log');
});


Route::post('/users', function (Request $request) {

    $validator = Validator::make($request->all(), 
    	[
    		'first_name' => 'required|max:50',
    		'last_name' => 'required|max:50',
    		'title' => 'required|max:50',
    		'company' => 'required|max:50',
    		'email' => 'required|max:50',
    	]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $usuario = new Usuario;
    $usuario->first_name = $request->first_name;
    $usuario->last_name  = $request->last_name;
    $usuario->title      = $request->title;
    $usuario->company    = $request->company;
    $usuario->email      = $request->email;
    $usuario->role       = $request->role;
    $usuario->save();

    return redirect('/');

});


Route::post('/usernew', function (Request $request) {

    $validator = Validator::make($request->all(), 
    	[
    		'name' => 'required|max:50',
    		'email' => 'required|max:50',
    		'pass' => 'required|max:50',
    	]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $usuario = new User;
    $usuario->name      = $request->name;
    $usuario->email     = $request->email;
    $usuario->password  = $request->pass;
    $usuario->save();

    return redirect('/');

});


Route::post('/form', function (Request $request) {

	$validator = Validator::make($request->all(), 
    	[
    		'email' => 'required|max:50',
    		'pass' => 'required|max:50',
    	]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

	$users = DB::select('select * from users where email = ? and password = ?', [$request->email ,$request->pass]);

	if (!empty($users)) { return 'credentials valid!'; } else { return view('index', ['alerta' => '']); }
	
});