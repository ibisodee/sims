<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();

            $table->string('regno');
            $table->string('session');
            $table->string('class');
            $table->string('year');

            /*** Subject from 1 - 20 Entry*/
            $table->string('sub1')->nullable();
            $table->float('mte1')->nullable();
            $table->float('ete1')->nullable();
            $table->float('sub1_ca1')->nullable();
            $table->float('sub1_ca2')->nullable();
            $table->float('project1')->nullable();
            $table->float('note1')->nullable();            
            $table->float('sub1_exam')->nullable();
            $table->integer('sub1_total')->nullable();
            $table->string('sub1_position')->nullable();
            $table->text('sub1_remark')->nullable();
            
            $table->string('sub2')->nullable();
            $table->float('mte2')->nullable();
            $table->float('ete2')->nullable();
            $table->float('sub2_ca1')->nullable();
            $table->float('sub2_ca2')->nullable();
            $table->float('project2')->nullable();
            $table->float('note2')->nullable();            
            $table->float('sub2_exam')->nullable();
            $table->integer('sub2_total')->nullable();
            $table->string('sub2_position')->nullable();
            $table->text('sub2_remark')->nullable();            

            $table->string('sub3')->nullable();
            $table->float('mte3')->nullable();
            $table->float('ete3')->nullable();
            $table->float('sub3_ca1')->nullable();
            $table->float('sub3_ca2')->nullable();
            $table->float('project3')->nullable();
            $table->float('note3')->nullable();            
            $table->float('sub3_exam')->nullable();
            $table->integer('sub3_total')->nullable();
            $table->string('sub3_position')->nullable();
            $table->text('sub3_remark')->nullable();            

            $table->string('sub4')->nullable();
            $table->float('mte4')->nullable();
            $table->float('ete4')->nullable();
            $table->float('sub4_ca1')->nullable();
            $table->float('sub4_ca2')->nullable();
            $table->float('project4')->nullable();
            $table->float('note4')->nullable();            
            $table->float('sub4_exam')->nullable();
            $table->integer('sub4_total')->nullable();
            $table->string('sub4_position')->nullable();
            $table->text('sub4_remark')->nullable();            

            $table->string('sub5')->nullable();
            $table->float('mte5')->nullable();
            $table->float('ete5')->nullable();
            $table->float('sub5_ca1')->nullable();
            $table->float('sub5_ca2')->nullable();
            $table->float('project5')->nullable();
            $table->float('note5')->nullable();            
            $table->float('sub5_exam')->nullable();
            $table->integer('sub5_total')->nullable();
            $table->string('sub5_position')->nullable();
            $table->text('sub5_remark')->nullable();            

            $table->string('sub6')->nullable();
            $table->float('mte6')->nullable();
            $table->float('ete6')->nullable();
            $table->float('sub6_ca1')->nullable();
            $table->float('sub6_ca2')->nullable();
            $table->float('project6')->nullable();
            $table->float('note6')->nullable();            
            $table->float('sub6_exam')->nullable();
            $table->integer('sub6_total')->nullable();
            $table->string('sub6_position')->nullable();
            $table->text('sub6_remark')->nullable();            

            $table->string('sub7')->nullable();
            $table->float('mte7')->nullable();
            $table->float('ete7')->nullable();
            $table->float('sub7_ca1')->nullable();
            $table->float('sub7_ca2')->nullable();
            $table->float('project7')->nullable();
            $table->float('note7')->nullable();            
            $table->float('sub7_exam')->nullable();
            $table->integer('sub7_total')->nullable();
            $table->string('sub7_position')->nullable();
            $table->text('sub7_remark')->nullable();            

            $table->string('sub8')->nullable();
            $table->float('mte8')->nullable();
            $table->float('ete8')->nullable();
            $table->float('sub8_ca1')->nullable();
            $table->float('sub8_ca2')->nullable();
            $table->float('project8')->nullable();
            $table->float('note8')->nullable();            
            $table->float('sub8_exam')->nullable();
            $table->integer('sub8_total')->nullable();
            $table->string('sub8_position')->nullable();
            $table->text('sub8_remark')->nullable();            

            $table->string('sub9')->nullable();
            $table->float('mte9')->nullable();
            $table->float('ete9')->nullable();
            $table->float('sub9_ca1')->nullable();
            $table->float('sub9_ca2')->nullable();
            $table->float('project9')->nullable();
            $table->float('note9')->nullable();            
            $table->float('sub9_exam')->nullable();
            $table->float('sub9_total')->nullable();
            $table->string('sub9_position')->nullable();
            $table->text('sub9_remark')->nullable();            

            $table->string('sub10')->nullable();
            $table->float('mte10')->nullable();
            $table->float('ete10')->nullable();
            $table->float('sub10_ca1')->nullable();
            $table->float('sub10_ca2')->nullable();
            $table->float('project10')->nullable();
            $table->float('note10')->nullable();            
            $table->float('sub10_exam')->nullable();
            $table->integer('sub10_total')->nullable();
            $table->string('sub10_position')->nullable();
            $table->text('sub10_remark')->nullable();
            

            $table->string('sub11')->nullable();
            $table->float('mte11')->nullable();
            $table->float('ete11')->nullable();
            $table->float('sub11_ca1')->nullable();
            $table->float('sub11_ca2')->nullable();
            $table->float('project11')->nullable();
            $table->float('note11')->nullable();            
            $table->float('sub11_exam')->nullable();
            $table->integer('sub11_total')->nullable();
            $table->string('sub11_position')->nullable();
            $table->text('sub11_remark')->nullable();

            $table->string('sub12')->nullable();
            $table->float('mte12')->nullable();
            $table->float('ete12')->nullable();
            $table->float('sub12_ca1')->nullable();
            $table->float('sub12_ca2')->nullable();
            $table->float('project12')->nullable();
            $table->float('note12')->nullable();            
            $table->float('sub12_exam')->nullable();
            $table->float('sub12_total')->nullable();
            $table->string('sub12_position')->nullable();
            $table->text('sub12_remark')->nullable();

            $table->string('sub13')->nullable();
            $table->float('mte13')->nullable();
            $table->float('ete13')->nullable();
            $table->float('sub13_ca1')->nullable();
            $table->float('sub13_ca2')->nullable();
            $table->float('project13')->nullable();
            $table->float('note13')->nullable();            
            $table->float('sub13_exam')->nullable();
            $table->integer('sub13_total')->nullable();
            $table->string('sub13_position')->nullable();
            $table->text('sub13_remark')->nullable(); 

            $table->string('sub14')->nullable();
            $table->float('mte14')->nullable();
            $table->float('ete14')->nullable();
            $table->float('sub14_ca1')->nullable();
            $table->float('sub14_ca2')->nullable();
            $table->float('project14')->nullable();
            $table->float('note14')->nullable();            
            $table->float('sub14_exam')->nullable();
            $table->integer('sub14_total')->nullable();
            $table->string('sub14_position')->nullable();
            $table->text('sub14_remark')->nullable(); 

            $table->string('sub15')->nullable();
            $table->float('sub15_ca1')->nullable();
            $table->float('sub15_ca2')->nullable();
            $table->float('project15')->nullable();
            $table->float('note15')->nullable();            
            $table->float('sub15_exam')->nullable();
            $table->integer('sub15_total')->nullable();
            $table->string('sub15_position')->nullable();
            $table->text('sub15_remark')->nullable();

            $table->string('sub16')->nullable();
            $table->float('sub16_ca1')->nullable();
            $table->float('sub16_ca2')->nullable();
            $table->float('project16')->nullable();
            $table->float('note16')->nullable();            
            $table->float('sub16_exam')->nullable();
            $table->integer('sub16_total')->nullable();
            $table->string('sub16_position')->nullable(); 
            $table->string('sub16_remark')->nullable();         
            
            $table->string('sub17')->nullable();
            $table->float('sub17_ca1')->nullable();
            $table->float('sub17_ca2')->nullable();
            $table->float('project17')->nullable();
            $table->float('note17')->nullable();            
            $table->float('sub17_exam')->nullable();
            $table->integer('sub17_total')->nullable();
            $table->string('sub17_position')->nullable();
            $table->text('sub17_remark')->nullable();

            $table->string('sub18')->nullable();
            $table->float('sub18_ca1')->nullable();
            $table->float('sub18_ca2')->nullable();
            $table->float('project18')->nullable();
            $table->float('note18')->nullable();            
            $table->float('sub18_exam')->nullable();
            $table->integer('sub18_total')->nullable();
            $table->string('sub18_position')->nullable();
            $table->text('sub18_remark')->nullable();

            $table->string('sub19')->nullable();
            $table->float('sub19_ca1')->nullable();
            $table->float('sub19_ca2')->nullable();
            $table->float('project19')->nullable();
            $table->float('note19')->nullable();            
            $table->float('sub19_exam')->nullable();
            $table->integer('sub19_total')->nullable();
            $table->string('sub19_position')->nullable();
            $table->text('sub19_remark')->nullable();

            $table->string('sub20')->nullable();
            $table->float('sub20_ca1')->nullable();
            $table->float('sub20_ca2')->nullable();
            $table->float('project20')->nullable();
            $table->float('note20')->nullable();            
            $table->float('sub20_exam')->nullable();
            $table->integer('sub20_total')->nullable();
            $table->string('sub20_position')->nullable();
            $table->text('sub20_remark')->nullable();

            $table->integer('attendance')->nullable();
            $table->integer('absent')->nullable();
            
            $table->decimal('total_avg_score', 10, 2)->nullable();
            $table->decimal('grand_avg_score', 10, 2)->nullable();
            $table->string('Grade')->nullable();

            $table->string('home_remark')->nullable();
            $table->string('head_remark')->nullable();

            /*** Character Traits from 1 - 9 Entry*/
            $table->string('char1rate')->nullable();
            $table->string('char2rate')->nullable();
            $table->string('char3rate')->nullable();
            $table->string('char4rate')->nullable();
            $table->string('char5rate')->nullable();
            $table->string('char6rate')->nullable();
            $table->string('char7rate')->nullable();
            $table->string('char8rate')->nullable();
            $table->string('char9rate')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
