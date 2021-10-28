<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgressController extends Controller
{
    function index(Request $request)
    {
        $regno = $request->user()->regno;
        $data = array(
            'list'=>DB::table('exams')->get()
                    ->where('regno', $regno)
        );
        return view('progress', $data);
    }

    function assessmentindex(Request $request)
    {
        $regno = $request->user()->regno;
        $data = array(
            'list'=>DB::table('exams')->get()
                    ->where('regno', $regno)
        );
        return view('view_assessment', $data);
    }

    function resultindex(Request $request)
    {
        $regno = $request->user()->regno;        
        $data = array(
            'list'=>DB::table('exams')                    
                    ->where('regno', $regno)
                    ->whereNotNull("head_remark")                    
                    ->where('class', 'SSS 1 (Onyx)')
                    ->orWhere('class', 'SSS 2 (Opal)')
                    ->orWhere('class', 'SSS 3 (Spinel)')
                    ->get()
                    
        );
        
        return view('checkresult', $data);
    }

    function resultindex2(Request $request)
    {
        $regno = $request->user()->regno;        
        $data = array(
            'list'=>DB::table('exams')                    
                    ->where('regno', $regno)
                    ->whereNotNull("head_remark")
                    ->where('class', 'JSS 1 (Silver)')
                    ->orWhere('class', 'JSS 2 (Beryl)')
                    ->orWhere('class', 'JSS 3 (Topaz)')
                    ->get()
        );
        
        return view('checkresult2', $data);
    }

    function resultindex1(Request $request)
    {
        $regno = $request->user()->regno;
        $data = array(
            'list'=>DB::table('exams')                    
                    ->where('regno', $regno)
                    ->whereNotNull("head_remark")
                    ->where('class', 'Transition (Citrine)')
                    ->orWhere('class', 'Grade 1 (Sapphire)')
                    ->orWhere('class', 'Grade 2 (Emerald)')
                    ->orWhere('class', 'Grade 3 (Crystal)')
                    ->orWhere('class', 'Grade 4 (Diamond')
                    ->orWhere('class', 'Grade 5 (Gold)')
                    ->get()
        );
        
        return view('checkresult1', $data);
    }

    function resultindex0(Request $request)
    {
        $regno = $request->user()->regno;
        $data = array(
            'list'=>DB::table('exams')                    
                    ->where('regno', $regno)
                    ->whereNotNull("head_remark")
                    ->where('class', 'Pre-Nursery (Ruby)')
                    ->orWhere('class', 'Reception 1 (Jasper)')
                    ->orWhere('class', 'Reception 2 (Ivory)')
                    ->get()
        );
        
        return view('checkresult0', $data);
    }

    public function resultedit($id){
        $row = DB::table('exams')
                ->where('id', $id)
                ->whereNotNull("head_remark")                    
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('viewresult', $data);
    }

    public function resultedit2($id){
        $row = DB::table('exams')
                ->where('id', $id)
                ->whereNotNull("head_remark")                    
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('viewresult2', $data);
    }

    public function resultedit1($id){
        $row = DB::table('exams')
                ->where('id', $id)
                ->whereNotNull("head_remark")                    
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('viewresult1', $data);
    }
    public function resultedit0($id){
        $row = DB::table('exams')
                ->where('id', $id)
                ->whereNotNull("head_remark")                    
                ->first();
        $data = [
            'Info'=>$row,
            'Title'=>'Edit'
        ];

        return view('viewresult0', $data);
    }
}
