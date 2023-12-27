<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class RegistrasiController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Registrasi',
            'active' => 'registrasi'
        ]);
    }
    public function store(Request $request){
        //$validateData = $request->validate([
            $validateData = new Users;
            $validateData->nama = $request->nama;
            $validateData->email = $request->email;
            $validateData->tanggalLahir = $request->tanggalLahir;
            $validateData->noHP = $request->noHP;
            $validateData->password = $request->password;
            $validateData->save();
            return redirect('Login')->with('succces', 'Registrasi Berhasil! Please Login');
            // 'nama' => 'required | max:50',
            // 'email' => 'required | email:dns',
            // 'tanggalLahir' => 'required',
            // 'noHP' => 'required',
            // 'password' => 'required | min:6 | max:30'
        //]);

        //$validateData['password'] = bcrypt($validateData['password']);

        //Users::create($validateData);
        //dd('registrasi berhasil');

        //$request->session()->flash('success', 'Registrasi Berhasil! Please Login');

        //return redirect('Login');
    }
}
