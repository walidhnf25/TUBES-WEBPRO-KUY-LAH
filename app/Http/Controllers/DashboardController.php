<?php

namespace App\Http\Controllers;

use App\Models\Events;
class DashboardController extends Controller
{
    // Menampilkan list pada table halaman Events
    public function index(){
        $event = Events::get();
        return view('dashboard', ['list' => $event]);
    }
}
