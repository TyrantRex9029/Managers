<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    function index(){
        $Data_Manager = DB::table('managers')->paginate(10); 
        return view('manager',compact('Data_Manager'));
    }
    function search(){
        $Search = DB::table('managers_search')->paginate(10); 
        return view('managers_search',compact('Search'));
    }
    function Create_Manager(){
        return view('Register_Manager');
    }
 
    function Form_login(){
        return view('login');
    }
    function insert(Request $request){
        $request->validate([
            'Name'      =>'required',   
            'Lastname'  =>'required',  
            'Tel'       =>'required',       
            'Email'     =>'required',     
            'Address'   =>'required',  
            'City'      =>'required',
            'Dis'       =>'required', 
            'Code'      =>'required',      
            'Password'  =>'required'  
        ]);
        $data=[
            'Name'    =>$request->Name,   
            'Lastname'=>$request->Lastname,
            'Tel'     =>$request->Tel,  
            'Email'   =>$request->Email,  
            'Address' =>$request->Address,
            'City'    =>$request->City,  
            'Dis'     =>$request->Dis,   
            'Code'    =>$request->Code,  
            'Password'=>$request->Password
        ];
        DB::table('managers')->insert($data);
        return redirect('manager');
    }
    

    function city_F(){
        $Insert_City = DB::table('pleaces')->paginate(10); 
            return view('city',compact('Insert_City'));
    }
    function insert_city(Request $request){
        $request->validate([
            'City'      =>'required',
            'Dis'       =>'required',   
        ]);
        $data1=[
            'City'    =>$request->City,  
            'Dis'     =>$request->Dis,     
        ];
        DB::table('pleaces')->insert($data1);
        return redirect('/city');
    }


    function Create_rgt(){
        return view('rgt');
    }
    function insert_register(Request $request){
        $request->validate([
            'Name'      =>'required',   
            'Lastname'  =>'required',  
            'Tel'       =>'required',       
            'Email'     =>'required',     
            'Address'   =>'required',  
            'City'      =>'required',
            'Dis'       =>'required', 
            'Code'      =>'required',      
            'Password'  =>'required'  
        ]);
        $data2=[
            'Name'    =>$request->Name,   
            'Lastname'=>$request->Lastname,
            'Tel'     =>$request->Tel,  
            'Email'   =>$request->Email,  
            'Address' =>$request->Address,
            'City'    =>$request->City,  
            'Dis'     =>$request->Dis,   
            'Code'    =>$request->Code,  
            'Password'=>$request->Password
        ];
        DB::table('managers')->insert($data2);
        return redirect('login');
    }
}
