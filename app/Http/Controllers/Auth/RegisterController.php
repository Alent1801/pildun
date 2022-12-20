<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:4',
            ],
            [
                'name.required' => 'nama tidak boleh kosong', // custom message
                'email.required' => 'email tidak boleh kosong', // custom message
                'password.required' => ':attribute tidak boleh kosong', // custom message

            ]
        );;

        // $request->merge(['password' => bcrypt($request->get('password'))]);

        $simpanData = new User();
        $simpanData->email = $request->email;
        $simpanData->name = $request->name;
        $simpanData->password = bcrypt($request->get('password'));

        $simpanData->save();

        return redirect('/login')->with('info', 'Sukses Menyimpan Data');
    }
}