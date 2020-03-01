<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spec;
use App\Fak;

class specController extends Controller
{
    //
    public function index(){
        $specs=Spec::with('fak')->get();
        return view('specs.index',compact('specs'));
    }
}
