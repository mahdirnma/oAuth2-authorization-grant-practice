<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login',function(){
    return view('auth.login');
})->name('login');
Route::post('login',function(Request $request){
    $myData=$request->only('email','password');
    if (Auth::attempt($myData)) {
        $request->session()->regenerate();
        return redirect()->intended();
    }
    return back()->withErrors('an error has occurred');
});
