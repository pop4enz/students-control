<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Stud;
use App\Ball;
use App\Group;
use App\Spec;
use App\Predmet;

use Illuminate\Http\Request;

class StudController extends Controller
{
    public function index(){

        $studs=Stud::with('group');

        if (request()->sort == 'name-asc') {
            $studs = $studs->orderBy('f_name', 'asc')->paginate(12);
        }
        elseif (request()->sort == 'name-desc') {
            $studs = $studs->orderBy('f_name', 'desc')->paginate(12);
        }
        elseif (request()->sort == 'lname-asc') {
            $studs = $studs->orderBy('l_name', 'asc')->paginate(12);
        }
        elseif (request()->sort == 'lname-desc') {
            $studs = $studs->orderBy('l_name', 'desc')->paginate(12);
        }
        else {
            $studs = $studs->paginate(12);
        }


        return view('Stud.index',compact('studs'));
    }
    public function show($id){
        $balstud = Ball::selectRaw('stud_id, round(AVG(`ball`),1) as rate')->groupBy('stud_id')->where('stud_id',$id)->first();
        $stud=Stud::with('group')->where('id',$id)->first();
        $balli1 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','1'],])->get();
        $balli2 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','2'],])->get();
        $balli3 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','3'],])->get();
        $balli4 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','4'],])->get();
        $balli5 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','5'],])->get();
        $balli6 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','6'],])->get();
        $balli7 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','7'],])->get();
        $balli8 = Ball::with('predmet')->where([['balls.stud_id','=',$id],['balls.semester','=','8'],])->get();
        return view('Stud.show', compact('stud','balstud','balli1', 'balli2','balli3','balli4','balli5','balli6','balli7','balli8'));
    }
}
