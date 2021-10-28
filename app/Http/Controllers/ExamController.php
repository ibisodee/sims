<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    
    public function index()
    {
        $exams = Exam::All()->sortByDesc("created_at")
                ->whereNull("head_remark");
        return view('exams.index',compact('exams'));
    }

    public function uindex()
    {
        $exams = Exam::All()->sortByDesc("created_at")
                ->whereNull("head_remark");;
        return view('exams.index',compact('exams'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'regno' => 'required',
            'session' => 'required',
            'class' => 'required',
            'year' => 'required',            
        ]);
    
        Exam::create($request->all());
     
        return redirect()->route('exams.index')
                        ->with('success','Exam Records created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        return view('exams.show',compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        return view('exams.edit',compact('exam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            
            
        ]);
    
        $exam->update($request->all());
    
        return redirect()->route('exams.index')
                        ->with('success','Exam Records updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
    
        return redirect()->route('exams.index')
                        ->with('success','Exam Record deleted successfully');
    }
}
