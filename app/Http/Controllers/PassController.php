<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pass;

class PassController extends Controller
{
    public function index(){
        return view("home");
    }
    public function show(){
        return view("admin.insert.addPass");
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'father_name'=>'required',
            'phone_number'=>'required',
            'email'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'p_image'=>'required',
        ]);
        if($request->hasFile('p_image')){
            $file=$request->file('p_image');
            $p_image=rand().'_'.time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('pass_image/'),$p_image);
        $book = new Pass();
        $book->name=$request->name;
        $book->father_name=$request->father_name;
        $book->phone_number=$request->phone_number;
        $book->email=$request->email;
        $book->address=$request->address;
        $book->gender=$request->gender;
        $book->dob=$request->dob;
        $book->p_image=$p_image;
        $book->save();
        return redirect()->back();
        }
    }
    public function approvePass(){
        $data['passs'] = Pass::where('status',"1")->get();
        $data['title']='Approved Pass';
        return view('admin.manage.managePass',$data);
    }
    public function newPass(){
        $data['passs']= Pass::where('status','0')->get();
        $data['title']='New Pass';
        return view('admin.manage.managePass',$data);
    }
    public function expirePass(){
        $data['passs']=Pass::where('status','-1')->get();
        $data['title']="Expire Pass";
        return view('admin.manage.managePass',$data);
    } 
    public function delete(Request $req, $id){

    }
    public function edit(Request $req, $id){

    }
}
