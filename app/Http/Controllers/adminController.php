<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stud;
use App\Group;
use App\Form;
use App\Spec;
use App\Fak;
use App\Predmet;
use App\Ball;

class adminController extends Controller
{
    public function stud(){
        $groups = Group::get();
        $forms = Form::get();
        return view('admin.stud',compact('groups','forms'));
    }

        public function group(){
        $specs = Spec::get();
        return view('admin.group',compact('specs'));
        }
        public function spec(){
        $faks = Fak::get();
        return view('admin.spec',compact('faks'));
        }
        public function predmet(){
        return view('admin.predmet');
        }
        public function ball(){
        $studs = Stud::get();
        $predmets = Predmet::get();
        return view('admin.ball',compact('studs','predmets'));
        }

    public function studdel(){
        $studs = Stud::get();
        return view('admin.studdel',compact('studs'));
    }
    public function groupdel(){
        $groups = Group::get();
        return view('admin.groupdel',compact('groups'));
    }
    public function specdel(){
        $specs = Spec::get();
        return view('admin.specdel',compact('specs'));
    }
    public function predmetdel(){
        $predmets = Predmet::get();
        return view('admin.predmetdel',compact('predmets'));
    }
    public function studedit(){
        $studs = Stud::get();
        $groups = Group::get();
        $forms = Form::get();
        return view('admin.studedit',compact('studs','groups','forms'));
    }
    public function groupedit(){
        $groups = Group::get();
        $specs = Spec::get();
        return view('admin.groupedit',compact('groups','specs'));
    }
    public function specedit(){
        $specs = Spec::get();
        $faks = Fak::get();
        return view('admin.specedit',compact('faks','specs'));
    }
    public function predmetedit(){
        $predmets = Predmet::get();
        return view('admin.predmetedit',compact('predmets'));
    }








    public function addstud(Request $request){
        $request->validate([
            'f_name'=>'required|max:25',
            'l_name'=>'required|max:25'
        ]);
        $stud = new Stud([
            'f_name'=>$request->get('f_name'),
            'l_name'=>$request->get('l_name'),
            'group_id'=>$request->get('group_id'),
            'form_id'=>$request->get('form_id')
        ]);
        $stud->save();
        return redirect('/admin/stud')->with('success','Студент был добавлен');
    }

    public function addgroup(Request $request){
        $request->validate([
            'grname'=>'required|integer|max:999999|min:100000'
        ]);
        $group = new Group([
            'grname'=>$request->get('grname'),
            'spec_id'=>$request->get('spec_id')
        ]);
        $group->save();
        return redirect('/admin/group')->with('success','Группа была добавлена');
    }
    public function addspec(Request $request){
        $request->validate([
            'specname'=>'required|max:10',
            'specdesc'=>'required|max:60',
            'spectext'=>'required|min:20'
        ]);
        $spec = new Spec([
            'specname'=>$request->get('specname'),
            'specdesc'=>$request->get('specdesc'),
            'fak_id'=>$request->get('fak_id'),
            'spectext'=>$request->get('spectext')
        ]);
        $spec->save();
        return redirect('/admin/spec')->with('success','Специальность была добавлена');
    }
    public function addpredmet(Request $request){
        $request->validate([
            'predname'=>'required|max:20min:1',
            'fname'=>'required|max:255|min:3'
        ]);
        $predmet = new Predmet([
            'predname'=>$request->get('predname'),
            'fname'=>$request->get('fname')
        ]);
        $predmet->save();
        return redirect('/admin/predmet')->with('success','Предмет был добавлен');
    }
    public function addball(Request $request){
        $ball = new Ball([
            'stud_id'=>$request->get('stud_id'),
            'predmet_id'=>$request->get('predmet_id'),
            'semester'=>$request->get('semester'),
            'ball'=>$request->get('ball')
        ]);
        $ball->save();
        return redirect('/admin/ball')->with('success','Оценка была добавлена');
    }

    public function delstud(Request $request){
        $stud = Stud::find($request->id);
        $stud->delete();

        return redirect('/admin/studdel')->with('success','Студент был успешно удален!');
    }
    public function delgroup(Request $request){
    $group = Group::find($request->id);
    $group->delete();

    return redirect('/admin/groupdel')->with('success','Группа была успешно удалена!');
}
public function delspec(Request $request){
    $spec = Spec::find($request->id);
    $spec->delete();

    return redirect('/admin/specdel')->with('success','Специальность была успешно удалена!');
}
public function delpredmet(Request $request){
    $predmet = Predmet::find($request->id);
    $predmet->delete();

    return redirect('/admin/predmetdel')->with('success','Специальность была успешно удалена!');
}
    public function updatestud(Request $request){
        $request->validate([
            'f_name'=>'required|max:25',
            'l_name'=>'required|max:25'
        ]);
        $stud = Stud::find($request->stud_id);
            $stud->f_name = $request->get('f_name');
            $stud->l_name = $request->get('l_name');
            $stud->group_id = $request->get('group_id');
            $stud->form_id = $request->get('form_id');
            $stud->save();
        return redirect('/admin/studedit')->with('success','Студент был изменен');
    }
    public function updategroup(Request $request){
        $request->validate([
            'grname'=>'required|integer|max:999999|min:100000'
        ]);
        $group = Group::find($request->group_id);
            $group->grname = $request->get('grname');
            $group->spec_id = $request->get('spec_id');
        $group->save();
        return redirect('/admin/groupedit')->with('success','Группа была изменена');
    }
    public function updatespec(Request $request){
        $request->validate([
            'specname'=>'required|max:10',
            'specdesc'=>'required|max:60',
            'spectext'=>'required|min:20'
        ]);
        $spec = Spec::find($request->spec_id);
            $spec->specname = $request->get('specname');
            $spec->specdesc = $request->get('specdesc');
            $spec->fak_id = $request->get('fak_id');
            $spec->spectext = $request->get('spectext');
        $spec->save();
        return redirect('/admin/specedit')->with('success','Специальность была изменена');
    }
    public function updatepredmet(Request $request){
        $request->validate([
            'predname'=>'required|max:20min:1',
            'fname'=>'required|max:255|min:3'
        ]);
        $predmet = Predmet::find($request->id);
            $predmet->predname = $request->get('predname');
            $predmet->fname = $request->get('fname');
        $predmet->save();
        return redirect('/admin/predmetedit')->with('success','Предмет был изменен');
    }


}
