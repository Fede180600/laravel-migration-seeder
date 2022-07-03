<?php

namespace App\Http\Controllers;

use App\train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index() {
        $trains = train::all();
        return view('trains', compact('trains'));
    }
}
