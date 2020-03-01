<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Nicolaslopezj\Searchable\SearchableTrait;

use App\Stud;
use App\Ball;
use App\Group;
use App\Spec;
use App\Fak;



use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){


        $studs = DB::table('studs')
            ->join('groups','studs.group_id','=','groups.id')
            ->join('specs','groups.spec_id','=','specs.id')
            ->join('faks','specs.fak_id','=','faks.id');

        $balli = DB::table('balls')->selectRaw('stud_id, round(AVG(`ball`),1) as rate1')->groupBy('stud_id');


        $balgroup = $studs->JoinSub($balli,'balli',function($join){
            $join->on('studs.id','=','balli.stud_id');
        })->selectRaw('groups.grname,round(AVG(balli.rate1),1) as rate')
            ->groupBy('groups.grname')
            ->orderBy('rate','desc')
            ->first();


//           $balgroup = $balli->selectRaw('groups.grname,round(AVG(`rate1`),1) as rate')
//            ->groupBy('groups.grname')
//            ->orderBy('rate','desc')
//            ->first();
        $balspec = $studs->JoinSub($balli,'balli1',function($join){
            $join->on('studs.id','=','balli1.stud_id');
        })->selectRaw('specs.specname,round(AVG(balli1.rate1),1) as rate')
            ->groupBy('specs.specname')
            ->orderBy('rate','desc')
            ->first();
        $balfak = $studs->JoinSub($balli,'balli2',function($join){
            $join->on('studs.id','=','balli2.stud_id');
        })->selectRaw('faks.nfak,round(AVG(balli2.rate1),1) as rate')
            ->groupBy('faks.nfak')
            ->orderBy('rate','desc')
            ->first();
        $balstud = Ball::selectRaw('stud_id, round(AVG(`ball`),1) as rate')->groupBy('stud_id');
            $studs = Stud::leftJoinSub($balstud,'balls', function ($join) {
                $join
                    ->on('studs.id', '=', 'balls.stud_id');})
                ->orderBy('rate', 'desc')->limit(3)->with('group')->get();

//            $balgroup = Ball::with('stud')->with('group')->selectRaw('groups.grname,round(AVG(`ball`)) as rate')->groupBy('groups.grname')->get();

        return view('index.index',compact('studs','balgroup','balspec','balfak'));
    }

    public function search(Request $request){
        $studs = Stud::search($request->search)->with('group')->paginate(12);
        return view('search',compact('studs'));
    }
}
