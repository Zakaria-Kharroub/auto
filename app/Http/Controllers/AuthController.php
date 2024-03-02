<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(){
        return view('auth/login');
    }

    public function register(){
        return view('auth/register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //


        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',

        ]);

        $user = new User();
        $user ->name =$request->input('name');
       $user ->email =$request->input('email');
       $user->password =$request->input('password');
       $user->role_id=$request->input('role_id');
        $user ->save();
        return redirect()->route('login');


    }
    public function loginUser(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->put('id', Auth::user()->id);
            $request->session()->put('name', Auth::user()->name);
            $request->session()->put('role_id', Auth::user()->role_id);

           return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    public function logOut(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
