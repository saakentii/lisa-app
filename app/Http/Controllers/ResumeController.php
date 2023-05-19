<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Cuisine;
use App\Models\Resume;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $p=Resume::limit(3)->get();
        return view('resume.index',['r'=>$p]);
    }


    public function create()
    {
        return view('resume.create',['categories'=>Category::all(),'cusines'=>Cuisine::all()]);

    }


    public function store(Request $request)
    {

        $validated=$request->validate([
            'name'=>'required|max:255',
            'surname'=>'required|max:255',
            'fname'=>'required|max:255',
            'phone'=>'required',
            'email'=>'required|email',
            'salary'=>'required|numeric',
            'category_id'=>'required|numeric|exists:categories,id',
            'cuisine_id'=>'required|numeric|exists:cuisines,id',
            'image'=>'required'
        ]);

        $resume=new Resume();
        $resume->name=$request->input('name');
        $resume->surname=$request->input('surname');
        $resume->fname=$request->input('fname');
        $resume->phone=$request->input('phone');
        $resume->email=$request->input('email');
        $resume->job=$request->input('job');
        $resume->salary=$request->input('salary');
        $resume->keste=$request->input('keste');
        $resume->category_id=$request->input('category_id');
        $resume->cuisine_id=$request->input('cuisine_id');
        $resume->birthdate=$request->input('birthdate');
        $resume->gender=$request->input('gender');
        $resume->edu=$request->input('edu');
        $resume->know=$request->input('know');
        $resume->prof=$request->input('prof');
        $resume->year=$request->input('year');
        $resume->know1=$request->input('know1');
        $resume->prof1=$request->input('prof1');
        $resume->year1=$request->input('year1');
        $resume->org=$request->input('org');
        $resume->p=$request->input('p');
        $resume->yearj=$request->input('yearj');
        $resume->aboutj=$request->input('aboutj');
        $resume->org1=$request->input('org1');
        $resume->p1=$request->input('p1');
        $resume->yearj1=$request->input('yearj1');
        $resume->aboutj1=$request->input('aboutj1');
        $resume->lang=$request->input('lang');
        $resume->skill=$request->input('skill');
        $resume->aboutm=$request->input('aboutm');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/',$filename);
            $resume->image=$filename;
        }
        $resume->save($validated);
        return redirect()->route('resumes.index')->with('message','Резюме сәтті сақталды!!!');
    }


    public function show(Resume $resume)
    {
        return view('resume.show',['res'=>$resume]);
    }


    public function edit(Resume $resume)
    {
        return view('resume.edit',['resume'=>$resume,'categories'=>Category::all(),'cuisine'=>Cuisine::all()]);
    }


    public function update(Request $request, Resume $resume)
    {
        $validated=$request->validate([
            'name'=>'required|max:255',
            'surname'=>'required|max:255',
            'fname'=>'required|max:255',
            'phone'=>'required',
            'email'=>'required|email',
            'salary'=>'required|numeric',
            'category_id'=>'required|numeric|exists:categories,id',
            'cuisine_id'=>'required|numeric|exists:cuisines,id',
            'image'=>'required'
        ]);

        $resume->name=$request->input('name');
        $resume->surname=$request->input('surname');
        $resume->fname=$request->input('fname');
        $resume->phone=$request->input('phone');
        $resume->email=$request->input('email');
        $resume->job=$request->input('job');
        $resume->salary=$request->input('salary');
        $resume->keste=$request->input('keste');
        $resume->category_id=$request->input('category_id');
        $resume->cuisine_id=$request->input('cuisine_id');
        $resume->birthdate=$request->input('birthdate');
        $resume->gender=$request->input('gender');
        $resume->edu=$request->input('edu');
        $resume->know=$request->input('know');
        $resume->prof=$request->input('prof');
        $resume->year=$request->input('year');
        $resume->know1=$request->input('know1');
        $resume->prof1=$request->input('prof1');
        $resume->year1=$request->input('year1');
        $resume->org=$request->input('org');
        $resume->p=$request->input('p');
        $resume->yearj=$request->input('yearj');
        $resume->aboutj=$request->input('aboutj');
        $resume->org1=$request->input('org1');
        $resume->p1=$request->input('p1');
        $resume->yearj1=$request->input('yearj1');
        $resume->aboutj1=$request->input('aboutj1');
        $resume->lang=$request->input('lang');
        $resume->skill=$request->input('skill');
        $resume->aboutm=$request->input('aboutm');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extenstion=$file->getClientOriginalExtension();
            $filename=time().'.'.$extenstion;
            $file->move('uploads/',$filename);
            $resume->image=$filename;
        }
        $resume->update($validated);
        return redirect()->route('resumes.index')->with('message','Резюме сәтті жаңартылды!!!');
    }


    public function destroy(Resume $resume)
    {
        $resume->delete();
        return back()->with('message','Резюме сәтті өшірілді');
    }

    public function list(){
        return view('resume.list',['resumes'=>Resume::all()]);
    }

    public function resList(){
        return view('admin.resumes',['users'=>User::all(),'roles'=>Role::all(),'resumes'=>Resume::where('status','0')->get()]);
    }

    public function resUpdate(Resume $resume){
        $resume->update([
            'status'=>'1',
        ]);
        return back()->with('message','Рұқсат берілді!');
    }
}
