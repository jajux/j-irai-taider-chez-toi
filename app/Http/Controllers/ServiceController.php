<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::get();
        // dd($services);
        return view('pages.services')->with('services', $services);
    }
}