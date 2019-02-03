<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee;
use App\kkv;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
//use App\flight;

class HelloController extends Controller {
 
    public function cric_form(){
        
        return view('cric_form');
        
        
}
     public function cric_fun(Request $request){
        
        //dd($request);
        $data=$request->except('_token');
        //dd($data);
         Employee::insert([$data]);
        
        
}
   public function display_cric(Request $request){
        
      $query= Employee::all();
     // dd($query);
      return view('cric_display', compact('query'));
        
        
}
public function edit_cric_function($id){
        
      $cric_one=Employee::where('id',$id)->get();
    // dd($qyery);
      return view('cric_index_display', compact('cric_one'));
        
        
} 
public function your(){
        
   
      return view('gyugbuyh');
        
        
} 
    
    
    public function insertform() {
      return view('Registration_details');
   }
   public function form_function() {
      return view('employee_detail');
   }
	
	
   public function insert(Request $request) {
      // dd($request);
    
      // $data = $request->except('_token');
      
       Student::insert([$data]);
       
       //$student = 
//      $name = $request->input('stud_name');
//      DB::insert('insert into student (name) values(?)',[$name]);
//      echo "Record inserted successfully.<br/>";
//      echo '<a href = "/insert">Click Here</a> to go back.';
   }
   public function insert1(Request $request) {
   // $data = $request->except('_token');
    //$temp=implode(',',$request->skills);
    $temp=json_encode($request->skills);
    
    
      // dd($request);
      
       $data = $request->except('_token');
       $data['skills']=$temp;
       
      // dd($data);
     // dd($request->all());
       Employee::insert([$data]);
     echo '<a href = "/laravel/form">Click Here</a> to go back.';
   }
   public function view(){
       
       $query=kkv::all();
       
      // dd($query);
       
       return view('employees',compact('query'));
   }
    public function display_form_function() {
        
        
        $query=employee::all();
      return view('employees',compact('query'));
   }
   
   public function edit_form_function($id){
       
    
       

       $employe=Employee::where('id',$id)->get();
       
       //dd($employe);
       
        return view('kkv',compact('employe'));
   
   }
    public function update_form_function(Request $request) {
        
        $data = $request->except('_token');
     echo   $id=Input::get('id');
    // Employee::update([$data]);
     //dd($request);
     Employee::whereId($id)->update($request->except('_token'));
    

    
   }
   
   
     public function delete_form_function($id){
       $user = Employee::find($id);    
          $user->delete();
   
   }
   
   public function reset() {
      return view('login');
   }
  
   protected function credential(Request $request) {
      //  dd($request);
       $email=$request->email;
       $password=$request->password;
         echo 'kkkk';
         
         if (Auth::attempt(['email' => $email, 'password' => $password]))
              {
    die('5435');
              }
         die('fer');
}
   	
}