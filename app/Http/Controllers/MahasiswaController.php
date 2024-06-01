<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

    use Illuminate\Http\Request;  
    use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => "syfa", 'foto' => 'E020322090.jpeg'];
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa.index', compact ('data', 'mahasiswa')); 
    }

    public function show($id)
    {

    }
}

