<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;    
    
    protected $fillable = [
        'regno', 'session', 'class', 'year', 
        'sub1', 'sub1_ca1', 'sub1_ca2', 'project1', 'note1', 'sub1_exam', 'sub1_position', 'sub1_remark', 'mte1', 'ete1', 
        'sub2', 'sub2_ca1', 'sub2_ca2', 'project2', 'note2', 'sub2_exam', 'sub2_position', 'sub2_remark', 'mte2', 'ete2', 
        'sub3', 'sub3_ca1', 'sub3_ca2', 'project3', 'note3', 'sub3_exam', 'sub3_position', 'sub3_remark', 'mte3', 'ete3', 
        'sub4', 'sub4_ca1', 'sub4_ca2', 'project4', 'note4', 'sub4_exam', 'sub4_position', 'sub4_remark', 'mte4', 'ete4', 
        'sub5', 'sub5_ca1', 'sub5_ca2', 'project5', 'note5', 'sub5_exam', 'sub5_position', 'sub5_remark', 'mte5', 'ete5', 
        'sub6', 'sub6_ca1', 'sub6_ca2', 'project6', 'note6', 'sub6_exam', 'sub6_position', 'sub6_remark', 'mte6', 'ete6', 
        'sub7', 'sub7_ca1', 'sub7_ca2', 'project7', 'note7', 'sub7_exam', 'sub7_position', 'sub7_remark', 'mte7', 'ete7', 
        'sub8', 'sub8_ca1', 'sub8_ca2', 'project8', 'note8', 'sub8_exam', 'sub8_position', 'sub8_remark', 'mte8', 'ete8', 
        'sub9', 'sub9_ca1', 'sub9_ca2', 'project9', 'note9', 'sub9_exam', 'sub9_position', 'sub9_remark', 'mte9', 'ete9', 
        'sub10', 'sub10_ca1', 'sub10_ca2', 'project10', 'note10', 'sub10_exam', 'sub10_position', 'sub10_remark', 'mte10', 'ete10',         
        'sub11', 'sub11_ca1', 'sub11_ca2', 'project11', 'note11', 'sub11_exam', 'sub11_position', 'sub11_remark', 'mte11', 'ete11', 
        'sub12', 'sub12_ca1', 'sub12_ca2', 'project12', 'note12', 'sub12_exam', 'sub12_position', 'sub12_remark', 'mte12', 'ete12', 
        'sub13', 'sub13_ca1', 'sub13_ca2', 'project13', 'note13', 'sub13_exam', 'sub13_position', 'sub13_remark', 'mte13', 'ete13', 
        'sub14', 'sub14_ca1', 'sub14_ca2', 'project14', 'note14', 'sub14_exam', 'sub14_position', 'sub14_remark', 'mte14', 'ete14', 
        'sub15', 'sub15_ca1', 'sub15_ca2', 'project15', 'note15', 'sub15_exam', 'sub15_position', 'sub15_remark',        
        'sub16', 'sub16_ca1', 'sub16_ca2', 'project16', 'note16', 'sub16_exam', 'sub16_position', 'sub16_remark',
        'sub17', 'sub17_ca1', 'sub17_ca2', 'project17', 'note17', 'sub17_exam', 'sub17_position', 'sub17_remark',
        'sub18', 'sub18_ca1', 'sub18_ca2', 'project18', 'note18', 'sub18_exam', 'sub18_position', 'sub18_remark',
        'sub19', 'sub19_ca1', 'sub19_ca2', 'project19', 'note19', 'sub19_exam', 'sub19_position', 'sub19_remark',        
        'sub20', 'sub20_ca1', 'sub20_ca2', 'project20', 'note20', 'sub20_exam', 'sub20_position', 'sub20_remark',
        'attendance', 'absent','total_avg_score', 'grand_avg_score', 'Grade', 'home_remark', 'head_remark',
        'char1rate', 'char2rate', 'char3rate', 'char4rate', 'char5rate', 'char6rate', 'char7rate', 'char8rate', 'char9rate', 
    ];
}
