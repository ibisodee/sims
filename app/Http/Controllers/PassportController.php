<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassportController extends Controller
{
    public function index()
    {
        $data = array(
            'list'=>DB::table('users')->get()
                     ->where('utype', 'USR')
                     
        );
        return view('admin.passport', $data);
    }   

    public function edit($id){
        $row = DB::table('users')
                ->where('id', $id)
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('/admin/edit_passport', $data);
    }    

    public function update(Request $request)
    {
        $request->validate([
                 
        ]);

        $updating = DB::table('users')
                ->where('id', $request->input('cid'))
                ->update([  
                    
                    'regno'=>$request->input('regno'),
                    'profile_photo_path'=>$request->input('profile_photo_path'), 
                ]);
            return redirect('/admin/passport/');        
    }
    
    public function delete($id)
    {
       $delete = DB::table('users')
                ->where('id', $id)
                ->delete();
            return redirect('/admin/passport/');
    }
}
