<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use App\Models\Admin; 
use App\Models\User;  

class formController extends Controller
{
    //function code of form: 

    public function form3()  
    { 

        $Admin = Admin::get();       
    
       
        // print_r($Admin->toArray()); 
        // echo "<pre>"; 
        return view('home' , compact('Admin') );       
               
    }  

   public function form(){ 
    return view('index'); 

   }        

    public function form2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',  
            'confirmPassword' => 'required' 

        ]);

        $Admin = new Admin();  
        $Admin->name = $request['name']; 
        $Admin->email = $request['email']; 
        $Admin->password = $request['password']; 
        $Admin->confirmPassword = $request['confirmPassword']; 


      

        $Admin->save();  

        return redirect('home');   
    } 


    public function edituser($id){     
       

        $Admin = Admin::find($id); 
        return view('edituser' , compact('Admin'));  

        
    }   

   

  

    public function updateuser(Request $request , $id) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
           

        ]); 

        print_r($request->all()); 

        $Admin = Admin::find($id);    
        $Admin->name = $request['name']; 
        $Admin->email = $request['email']; 
        


      

        $Admin->save();  

        return redirect('home'); 
    } 




    public function showuser($id){  

        $Admin = Admin::find($id); 
        return view('showuser' , compact('Admin'));  

    }  


    public function deleteuser($id){ 
        $Admin = Admin::find($id); 

        $Admin->delete();  

      
        $Admin = Admin::get(); 
        return redirect('form');  

    }
}
