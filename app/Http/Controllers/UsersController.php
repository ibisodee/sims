<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function index()
    {
        $data = array(
            'list'=>DB::table('users')->get()
                     ->where('utype', 'USR')
                     
        );
        return view('admin.registered_student', $data);
    }   

    public function index1()
    {
        $data = array(
            'list'=>DB::table('users')->get()
                    ->where('utype', 'ADM')
        );
        return view('admin.registered_admin', $data);
    }  

    public function edit($id){
        $row = DB::table('users')
                ->where('id', $id)
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('/admin/edit_students', $data);
    }    

    public function update(Request $request)
    {
        $request->validate([
                 
        ]);

        $updating = DB::table('users')
                ->where('id', $request->input('cid'))
                ->update([                   
                    
                    'regno'=>$request->input('regno'),
                    'name'=>$request->input('name'),
                    'state'=>$request->input('state'),
                    'dob'=>$request->input('dob'),
                    'sex'=>$request->input('sex'),
                    'admission'=>$request->input('admission'),
                    'class'=>$request->input('class'),
                    'status'=>$request->input('status'),
                    'email'=>$request->input('email'),
                    
                ]);
            return redirect('/admin/registered_student/');        
    }

    public function edit1($id){
        $row = DB::table('users')
                ->where('id', $id)
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('/admin/edit_admins', $data);
    }    
    
    public function update1(Request $request)
    {
        $request->validate([
                 
        ]);

        $updating = DB::table('users')
                ->where('id', $request->input('cid'))
                ->update([                   
                    
                    'utype'=>$request->input('utype'),
                    
                    
                ]);
            return redirect('/admin/registered_admin/');        
    }

    public function update2(Request $request)
    {
        $request->validate([
                 
        ]);

        $updating = DB::table('users')
                ->where('id', $request->input('cid'))
                ->update([                   
                    
                    'class'=>$request->input('class'),
                    
                    
                ]);
            return redirect('/admin/registered_student/');        
    }

    public function delete($id)
    {
       $delete = DB::table('users')
                ->where('id', $id)
                ->delete();
            return redirect('/admin/registered__student/');
    }
}
