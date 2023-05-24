<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adherent;
use App\Models\Personnel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->idAdherent;
       
        if(Personnel::find($id)){
            return view('homePersonnel');
        }
        else {
            return view('homeAdherent');
        }
    }
}
