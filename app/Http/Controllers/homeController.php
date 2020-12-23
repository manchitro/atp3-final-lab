<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\studentRequest;
use Validator;
use App\User;

class homeController extends Controller
{

    public function index(Request $req){

    /*	$user = ['name'=> 'alamin', 'id'=>12];
    	return view('home.index', $user);*/

    	/*
    	$name = 'alamin';
    	$id = 33;
    	$cgpa = 4;
    	return view('home.index', compact('name', 'id', 'cgpa'));*/

    /*	return view('home.index')
    			->with('name', 'alamin')
    			->with('id', '66');*/

    	/*return view('home.index')
    			->withName('alamin')
    			->withId('66');*/

    	/*$v = view('home.index');
    	$v->withName('alamin');
    	$v->withId('12');
    	return $v;*/

        return view('home.index', ['username'=> $req->session()->get('username')]);
    	
    }

    public function stdlist(){
    	//$students = $this->getStudentlist();

        $students = User::all();
    	return view('home.stdlist')->with('students', $students);
    }

	public function show($id){
    	
        $std = User::find($id);
        return view('home.show', $std);
    }

    public function create(){
    
    	return view('home.create');
    }

    public function store(studentRequest $req){

        $file = $req->file('myimg');
            
            $user = new User();

            $user->name         = $req->name;
            $user->username     = $req->username;
            $user->password     = $req->password;
            $user->type         = "employer";

            if($user->save()){
                return redirect()->route('home.stdlist');
            }

        

    	//return redirect()->route('home.stdlist');
    }

    public function edit($id){
    	
        $std = User::find($id);
    	return view('home.edit', $std);
    }

    public function update($id, Request $req){
    	   
        $user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->type     = $req->type;
        $user->save();

    	return redirect()->route('home.stdlist');
    }

    public function delete($id){

         $std = User::find($id);
        return view('home.delete', $std);
    	
    	//return view('home.stdlist');
    }

    public function destroy($id,Request $req){

        
    	$user = User::find($id);

        $user->username = $req->username;
        $user->password = $req->password;
        $user->type     = $req->type;
        $user->delete();

        return redirect()->route('home.stdlist');
    	//return view('home.stdlist');
    }

    private function getStudentlist(){

    	return [
    		['id'=> 1, 'name'=> 'alamin', 'cgpa'=>1.2, 'email'=> 'alamin@aiub.edu'],
    		['id'=> 2, 'name'=> 'CYZ', 'cgpa'=>2.2, 'email'=> 'CYZ@aiub.edu'],
    		['id'=> 3, 'name'=> 'XYZ', 'cgpa'=>3.2, 'email'=> 'XYZ@aiub.edu'],
    		['id'=> 4, 'name'=> 'ABC', 'cgpa'=>3.4, 'email'=> 'ABC@aiub.edu'],
    		['id'=> 5, 'name'=> 'PQE', 'cgpa'=>3.6, 'email'=> 'PQE@aiub.edu'],
    		['id'=> 6, 'name'=> 'PQR', 'cgpa'=>4, 'email'=> 'PQR@aiub.edu'],
    		['id'=> 7, 'name'=> 'asd', 'cgpa'=>2.5, 'email'=> 'asd@aiub.edu']
    	];
    }
}
