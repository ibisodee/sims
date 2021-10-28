<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeeController extends Controller
{
    
    public function index()
    {
        $data = array(
            'list'=>DB::table('fees')->get()->sortByDesc("created_at")
        );
        return view('admin.insert_fees', $data);
    }   
    
    function uindex(Request $request)
    {
        $regno = $request->user()->regno;
        $data = array(
            'list'=>DB::table('fees')->get()
                    ->where('regno', $regno)
        );
        return view('fees', $data);
    } 

    public function create(Request $request)
    {
        $request->validate([
            'regno' => 'required',
            'session' => 'required',
            'class' => 'required',
            'year' => 'required',
            'amount_paid' => 'required',
            'date_paid' => 'required',
            'method' => 'required',
            'type' => 'required',
            'amount_payable' => 'required',            
        ]);
        
        $query = DB::table('fees')->insert([
            'regno'=>$request->input('regno'),
            'session'=>$request->input('session'),
            'class'=>$request->input('class'),
            'year'=>$request->input('year'),

            'date_paid'=>$request->input('date_paid'),
            'method'=>$request->input('method'),
            'amount_paid'=>$request->input('amount_paid'),
            'type'=>$request->input('type'),
            'amount_payable'=>$request->input('amount_payable'),
        ]);

        if($query){

            return back()->with('success','Fees Information has been Inserted Successfully');
        }else{
            return back()->with('fail','Oops SOmething went wrong');
        }
    }
    
    public function edit($id){
        $row = DB::table('fees')
                ->where('id', $id)
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('/admin/edit_fees', $data);
    }
    
    public function update(Request $request, Fee $fee)
    {
        $request->validate([
                 
        ]);

        $updating = DB::table('fees')
                ->where('regno', $request->input('cid'))
                ->update([
                    
                    'date_paid'=>$request->input('date_paid'),
                    'method'=>$request->input('method'),
                    'amount_paid'=>$request->input('amount_paid'),
                    'type'=>$request->input('type'),
                    'amount_payable'=>$request->input('amount_payable'),
                ]);
            return redirect('/admin/insert_fees/');        
    }

    public function delete($id)
    {
       $delete = DB::table('fees')
                ->where('id', $id)
                ->delete();
            return redirect('/admin/insert_fees/');
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(Fee $fee)
    {
        //
    }   

    
    public function destroy(Fee $fee)
    {
        //
    }
}
