<?php

namespace App\Http\Controllers;

use App\Models\Membresias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class infoMembresiasController extends Controller
{
    public function index()
    {
        $membresiasData = Membresias::all();
        return view('dashboard', compact('membresiasData'));
    }

}