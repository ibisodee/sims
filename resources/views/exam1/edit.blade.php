@include('include.adminheader')

<body class="sidebar-noneoverflow">
    
    <!--  BEGIN NAVBAR  -->
    @include('include.adminnavbar')
    <!--  END NAVBAR  -->

  
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('include.adminsidebar')
        <!--  END SIDEBAR  -->

       
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h5>Insert Remarks</h5>
                            <form action="{{ route('exam1.update',$exam->id) }}" method="POST">
                                @csrf
                                    @method('PUT')
                                    <div class="form-group row  mb-4">
                                    

                                    <input type="hidden" name="1sub_total" value="{{ $mid1 = App\Models\Exam::all()->whereNotNull('ete1')->where('id',$exam->id)->sum('mte1')+App\Models\Exam::all()->whereNotNull('ete1')->where('id',$exam->id)->sum('ete1')+App\Models\Exam::all()->whereNotNull('sub1_exam')->where('id',$exam->id)->sum('sub1_ca1')+App\Models\Exam::all()->whereNotNull('sub1_exam')->where('id',$exam->id)->sum('sub1_ca2')+App\Models\Exam::all()->whereNotNull('sub1_exam')->where('id',$exam->id)->sum('project1')+App\Models\Exam::all()->whereNotNull('sub1_exam')->where('id',$exam->id)->sum('note1')+App\Models\Exam::all()->whereNotNull('sub1_exam')->where('id',$exam->id)->sum('sub1_exam') }} -- {{ $tavg1 = $mid1/2 }}" >
                                    <input type="hidden" name="2sub_total" value="{{ $mid2 = App\Models\Exam::all()->whereNotNull('ete2')->where('id',$exam->id)->sum('mte2')+App\Models\Exam::all()->whereNotNull('ete2')->where('id',$exam->id)->sum('ete2')+App\Models\Exam::all()->whereNotNull('sub2_exam')->where('id',$exam->id)->sum('sub2_ca1')+App\Models\Exam::all()->whereNotNull('sub2_exam')->where('id',$exam->id)->sum('sub2_ca2')+App\Models\Exam::all()->whereNotNull('sub2_exam')->where('id',$exam->id)->sum('project2')+App\Models\Exam::all()->whereNotNull('sub2_exam')->where('id',$exam->id)->sum('note2')+App\Models\Exam::all()->whereNotNull('sub2_exam')->where('id',$exam->id)->sum('sub2_exam') }} -- {{ $tavg2 = $mid2/2 }}" >
                                    <input type="hidden" name="3sub_total" value="{{ $mid3 = App\Models\Exam::all()->whereNotNull('ete3')->where('id',$exam->id)->sum('mte3')+App\Models\Exam::all()->whereNotNull('ete3')->where('id',$exam->id)->sum('ete3')+App\Models\Exam::all()->whereNotNull('sub3_exam')->where('id',$exam->id)->sum('sub3_ca1')+App\Models\Exam::all()->whereNotNull('sub3_exam')->where('id',$exam->id)->sum('sub3_ca2')+App\Models\Exam::all()->whereNotNull('sub3_exam')->where('id',$exam->id)->sum('project3')+App\Models\Exam::all()->whereNotNull('sub3_exam')->where('id',$exam->id)->sum('note3')+App\Models\Exam::all()->whereNotNull('sub3_exam')->where('id',$exam->id)->sum('sub3_exam') }} -- {{ $tavg3 = $mid3/2 }}" >
                                    <input type="hidden" name="4sub_total" value="{{ $mid4 = App\Models\Exam::all()->whereNotNull('ete4')->where('id',$exam->id)->sum('mte4')+App\Models\Exam::all()->whereNotNull('ete4')->where('id',$exam->id)->sum('ete4')+App\Models\Exam::all()->whereNotNull('sub4_exam')->where('id',$exam->id)->sum('sub4_ca1')+App\Models\Exam::all()->whereNotNull('sub4_exam')->where('id',$exam->id)->sum('sub4_ca2')+App\Models\Exam::all()->whereNotNull('sub4_exam')->where('id',$exam->id)->sum('project4')+App\Models\Exam::all()->whereNotNull('sub4_exam')->where('id',$exam->id)->sum('note4')+App\Models\Exam::all()->whereNotNull('sub4_exam')->where('id',$exam->id)->sum('sub4_exam') }} -- {{ $tavg4 = $mid4/2 }}" >
                                    <input type="hidden" name="5sub_total" value="{{ $mid5 = App\Models\Exam::all()->whereNotNull('ete5')->where('id',$exam->id)->sum('mte5')+App\Models\Exam::all()->whereNotNull('ete5')->where('id',$exam->id)->sum('ete5')+App\Models\Exam::all()->whereNotNull('sub5_exam')->where('id',$exam->id)->sum('sub5_ca1')+App\Models\Exam::all()->whereNotNull('sub5_exam')->where('id',$exam->id)->sum('sub5_ca2')+App\Models\Exam::all()->whereNotNull('sub5_exam')->where('id',$exam->id)->sum('project5')+App\Models\Exam::all()->whereNotNull('sub5_exam')->where('id',$exam->id)->sum('note5')+App\Models\Exam::all()->whereNotNull('sub5_exam')->where('id',$exam->id)->sum('sub5_exam') }} -- {{ $tavg5 = $mid5/2 }}" >
                                    <input type="hidden" name="6sub_total" value="{{ $mid6 = App\Models\Exam::all()->whereNotNull('ete6')->where('id',$exam->id)->sum('mte6')+App\Models\Exam::all()->whereNotNull('ete6')->where('id',$exam->id)->sum('ete6')+App\Models\Exam::all()->whereNotNull('sub6_exam')->where('id',$exam->id)->sum('sub6_ca1')+App\Models\Exam::all()->whereNotNull('sub6_exam')->where('id',$exam->id)->sum('sub6_ca2')+App\Models\Exam::all()->whereNotNull('sub6_exam')->where('id',$exam->id)->sum('project6')+App\Models\Exam::all()->whereNotNull('sub6_exam')->where('id',$exam->id)->sum('note6')+App\Models\Exam::all()->whereNotNull('sub6_exam')->where('id',$exam->id)->sum('sub6_exam') }} -- {{ $tavg6 = $mid6/2 }}" >
                                    <input type="hidden" name="7sub_total" value="{{ $mid7 = App\Models\Exam::all()->whereNotNull('ete7')->where('id',$exam->id)->sum('mte7')+App\Models\Exam::all()->whereNotNull('ete7')->where('id',$exam->id)->sum('ete7')+App\Models\Exam::all()->whereNotNull('sub7_exam')->where('id',$exam->id)->sum('sub7_ca1')+App\Models\Exam::all()->whereNotNull('sub7_exam')->where('id',$exam->id)->sum('sub7_ca2')+App\Models\Exam::all()->whereNotNull('sub7_exam')->where('id',$exam->id)->sum('project7')+App\Models\Exam::all()->whereNotNull('sub7_exam')->where('id',$exam->id)->sum('note7')+App\Models\Exam::all()->whereNotNull('sub7_exam')->where('id',$exam->id)->sum('sub7_exam') }} -- {{ $tavg7 = $mid7/2 }}" >
                                    <input type="hidden" name="8sub_total" value="{{ $mid8 = App\Models\Exam::all()->whereNotNull('ete8')->where('id',$exam->id)->sum('mte8')+App\Models\Exam::all()->whereNotNull('ete8')->where('id',$exam->id)->sum('ete8')+App\Models\Exam::all()->whereNotNull('sub8_exam')->where('id',$exam->id)->sum('sub8_ca1')+App\Models\Exam::all()->whereNotNull('sub8_exam')->where('id',$exam->id)->sum('sub8_ca2')+App\Models\Exam::all()->whereNotNull('sub8_exam')->where('id',$exam->id)->sum('project8')+App\Models\Exam::all()->whereNotNull('sub8_exam')->where('id',$exam->id)->sum('note8')+App\Models\Exam::all()->whereNotNull('sub8_exam')->where('id',$exam->id)->sum('sub8_exam') }} -- {{ $tavg8 = $mid8/2 }}" >
                                    <input type="hidden" name="9sub_total" value="{{ $mid9 = App\Models\Exam::all()->whereNotNull('ete9')->where('id',$exam->id)->sum('mte9')+App\Models\Exam::all()->whereNotNull('ete9')->where('id',$exam->id)->sum('ete9')+App\Models\Exam::all()->whereNotNull('sub9_exam')->where('id',$exam->id)->sum('sub9_ca1')+App\Models\Exam::all()->whereNotNull('sub9_exam')->where('id',$exam->id)->sum('sub9_ca2')+App\Models\Exam::all()->whereNotNull('sub9_exam')->where('id',$exam->id)->sum('project9')+App\Models\Exam::all()->whereNotNull('sub9_exam')->where('id',$exam->id)->sum('note9')+App\Models\Exam::all()->whereNotNull('sub9_exam')->where('id',$exam->id)->sum('sub9_exam') }} -- {{ $tavg9 = $mid9/2 }}" >
                                    <input type="hidden" name="10sub_total" value="{{ $mid10 = App\Models\Exam::all()->whereNotNull('ete10')->where('id',$exam->id)->sum('mte10')+App\Models\Exam::all()->whereNotNull('ete10')->where('id',$exam->id)->sum('ete10')+App\Models\Exam::all()->whereNotNull('sub10_exam')->where('id',$exam->id)->sum('sub10_ca1')+App\Models\Exam::all()->whereNotNull('sub10_exam')->where('id',$exam->id)->sum('sub10_ca2')+App\Models\Exam::all()->whereNotNull('sub10_exam')->where('id',$exam->id)->sum('project10')+App\Models\Exam::all()->whereNotNull('sub10_exam')->where('id',$exam->id)->sum('note10')+App\Models\Exam::all()->whereNotNull('sub10_exam')->where('id',$exam->id)->sum('sub10_exam') }} -- {{ $tavg10 = $mid10/2 }}" >
                                    <input type="hidden" name="11sub_total" value="{{ $mid11 = App\Models\Exam::all()->whereNotNull('ete11')->where('id',$exam->id)->sum('mte11')+App\Models\Exam::all()->whereNotNull('ete11')->where('id',$exam->id)->sum('ete11')+App\Models\Exam::all()->whereNotNull('sub11_exam')->where('id',$exam->id)->sum('sub11_ca1')+App\Models\Exam::all()->whereNotNull('sub11_exam')->where('id',$exam->id)->sum('sub11_ca2')+App\Models\Exam::all()->whereNotNull('sub11_exam')->where('id',$exam->id)->sum('project11')+App\Models\Exam::all()->whereNotNull('sub11_exam')->where('id',$exam->id)->sum('note11')+App\Models\Exam::all()->whereNotNull('sub11_exam')->where('id',$exam->id)->sum('sub11_exam') }} -- {{ $tavg11 = $mid11/2 }}" >
                                    <input type="hidden" name="12sub_total" value="{{ $mid12 = App\Models\Exam::all()->whereNotNull('ete12')->where('id',$exam->id)->sum('mte12')+App\Models\Exam::all()->whereNotNull('ete12')->where('id',$exam->id)->sum('ete12')+App\Models\Exam::all()->whereNotNull('sub12_exam')->where('id',$exam->id)->sum('sub12_ca1')+App\Models\Exam::all()->whereNotNull('sub12_exam')->where('id',$exam->id)->sum('sub12_ca2')+App\Models\Exam::all()->whereNotNull('sub12_exam')->where('id',$exam->id)->sum('project12')+App\Models\Exam::all()->whereNotNull('sub12_exam')->where('id',$exam->id)->sum('note12')+App\Models\Exam::all()->whereNotNull('sub12_exam')->where('id',$exam->id)->sum('sub12_exam') }} -- {{ $tavg12 = $mid12/2 }}" >
                                    <input type="hidden" name="13sub_total" value="{{ $mid13 = App\Models\Exam::all()->whereNotNull('ete13')->where('id',$exam->id)->sum('mte13')+App\Models\Exam::all()->whereNotNull('ete13')->where('id',$exam->id)->sum('ete13')+App\Models\Exam::all()->whereNotNull('sub13_exam')->where('id',$exam->id)->sum('sub13_ca1')+App\Models\Exam::all()->whereNotNull('sub13_exam')->where('id',$exam->id)->sum('sub13_ca2')+App\Models\Exam::all()->whereNotNull('sub13_exam')->where('id',$exam->id)->sum('project13')+App\Models\Exam::all()->whereNotNull('sub13_exam')->where('id',$exam->id)->sum('note13')+App\Models\Exam::all()->whereNotNull('sub13_exam')->where('id',$exam->id)->sum('sub13_exam') }} -- {{ $tavg13 = $mid13/2 }}" >
                                    <input type="hidden" name="14sub_total" value="{{ $mid14 = App\Models\Exam::all()->whereNotNull('ete14')->where('id',$exam->id)->sum('mte14')+App\Models\Exam::all()->whereNotNull('ete14')->where('id',$exam->id)->sum('ete14')+App\Models\Exam::all()->whereNotNull('sub14_exam')->where('id',$exam->id)->sum('sub14_ca1')+App\Models\Exam::all()->whereNotNull('sub14_exam')->where('id',$exam->id)->sum('sub14_ca2')+App\Models\Exam::all()->whereNotNull('sub14_exam')->where('id',$exam->id)->sum('project14')+App\Models\Exam::all()->whereNotNull('sub14_exam')->where('id',$exam->id)->sum('note14')+App\Models\Exam::all()->whereNotNull('sub14_exam')->where('id',$exam->id)->sum('sub14_exam') }} -- {{ $tavg14 = $mid14/2 }}" >
                                    <input type="hidden" name="15sub_total" value="{{ $mid15 = App\Models\Exam::all()->whereNotNull('sub15_exam')->where('id',$exam->id)->sum('sub15_ca1')+App\Models\Exam::all()->whereNotNull('sub15_exam')->where('id',$exam->id)->sum('sub15_ca2')+App\Models\Exam::all()->whereNotNull('sub15_exam')->where('id',$exam->id)->sum('project15')+App\Models\Exam::all()->whereNotNull('sub15_exam')->where('id',$exam->id)->sum('note15')+App\Models\Exam::all()->whereNotNull('sub15_exam')->where('id',$exam->id)->sum('sub15_exam') }} -- {{ $tavg15 = $mid15/2 }}" >
                                    <input type="hidden" name="16sub_total" value="{{ $mid16 = App\Models\Exam::all()->whereNotNull('sub16_exam')->where('id',$exam->id)->sum('sub16_ca1')+App\Models\Exam::all()->whereNotNull('sub16_exam')->where('id',$exam->id)->sum('sub16_ca2')+App\Models\Exam::all()->whereNotNull('sub16_exam')->where('id',$exam->id)->sum('project16')+App\Models\Exam::all()->whereNotNull('sub16_exam')->where('id',$exam->id)->sum('note16')+App\Models\Exam::all()->whereNotNull('sub16_exam')->where('id',$exam->id)->sum('sub16_exam') }} -- {{ $tavg16 = $mid16/2 }}" >
                                    <input type="hidden" name="17sub_total" value="{{ $mid17 = App\Models\Exam::all()->whereNotNull('sub17_exam')->where('id',$exam->id)->sum('sub17_ca1')+App\Models\Exam::all()->whereNotNull('sub17_exam')->where('id',$exam->id)->sum('sub17_ca2')+App\Models\Exam::all()->whereNotNull('sub17_exam')->where('id',$exam->id)->sum('project17')+App\Models\Exam::all()->whereNotNull('sub17_exam')->where('id',$exam->id)->sum('note17')+App\Models\Exam::all()->whereNotNull('sub17_exam')->where('id',$exam->id)->sum('sub17_exam') }} -- {{ $tavg17 = $mid17/2 }}" >
                                    <input type="hidden" name="18sub_total" value="{{ $mid18 = App\Models\Exam::all()->whereNotNull('sub18_exam')->where('id',$exam->id)->sum('sub18_ca1')+App\Models\Exam::all()->whereNotNull('sub18_exam')->where('id',$exam->id)->sum('sub18_ca2')+App\Models\Exam::all()->whereNotNull('sub18_exam')->where('id',$exam->id)->sum('project18')+App\Models\Exam::all()->whereNotNull('sub18_exam')->where('id',$exam->id)->sum('note18')+App\Models\Exam::all()->whereNotNull('sub18_exam')->where('id',$exam->id)->sum('sub18_exam') }} -- {{ $tavg18 = $mid18/2 }}" >
                                    <input type="hidden" name="19sub_total" value="{{ $mid19 = App\Models\Exam::all()->whereNotNull('sub19_exam')->where('id',$exam->id)->sum('sub19_ca1')+App\Models\Exam::all()->whereNotNull('sub19_exam')->where('id',$exam->id)->sum('sub19_ca2')+App\Models\Exam::all()->whereNotNull('sub19_exam')->where('id',$exam->id)->sum('project19')+App\Models\Exam::all()->whereNotNull('sub19_exam')->where('id',$exam->id)->sum('note19')+App\Models\Exam::all()->whereNotNull('sub19_exam')->where('id',$exam->id)->sum('sub19_exam') }} -- {{ $tavg19 = $mid19/2 }}" >
                                    <input type="hidden" name="20sub_total" value="{{ $mid20 = App\Models\Exam::all()->whereNotNull('sub20_exam')->where('id',$exam->id)->sum('sub20_ca1')+App\Models\Exam::all()->whereNotNull('sub20_exam')->where('id',$exam->id)->sum('sub20_ca2')+App\Models\Exam::all()->whereNotNull('sub20_exam')->where('id',$exam->id)->sum('project20')+App\Models\Exam::all()->whereNotNull('sub20_exam')->where('id',$exam->id)->sum('note20')+App\Models\Exam::all()->whereNotNull('sub20_exam')->where('id',$exam->id)->sum('sub20_exam') }} -- {{ $tavg20 = $mid20/2 }}" >
                                         
                                       
                                        <div class="col-sm-2">
                                            <small id="emailHelp1" class="form-text text-muted">Registration No.</small>
                                            <input type="text" name="regno" value="{{ $exam->regno}}" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                        <div class="col-sm-3">
                                            <small id="emailHelp1" class="form-text text-muted">Term / Academic Year</small>
                                            <input type="text" value="{{ $exam->session}} of {{ $exam->year}} Academic Year" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                        <div class="col-sm-2">
                                            <small id="emailHelp1" class="form-text text-muted">Total_Subject</small>
                                            <input type="text" name="subno" value="{{ $subno = App\Models\Exam::all()->whereNotNull('sub1')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub2')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub3')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub4')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub5')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub6')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub7')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub8')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub9')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub10')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub11')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub12')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub13')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub14')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub15')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub16')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub17')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub18')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub19')->where('id',$exam->id)->count()+App\Models\Exam::all()->whereNotNull('sub20')->where('id',$exam->id)->count() }}" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                        <div class="col-sm-2">
                                            <small id="emailHelp1" class="form-text text-muted">Total_Average_Score</small>
                                            <input type="text" name="total_avg_score" value="{{ $totalavg = $tavg1 + $tavg2 + $tavg3 + $tavg4 + $tavg5 + $tavg6 + $tavg7 + $tavg8 + $tavg9 + $tavg10 + $tavg11 + $tavg12 + $tavg13 + $tavg14 + $tavg15 + $tavg16 + $tavg17 + $tavg18 + $tavg19 + $tavg20 }}" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                       
                                        <input type="hidden" name="grand_avg_score" value="{{ $grandtotal = $totalavg/$subno  }}" class="form-control form-control-sm" id="colFormLabelSm">
                                       
                                        <div class="col-sm-3">
                                            <small id="emailHelp1" class="form-text text-muted">Grand Average Score</small>
                                            <input type="text" name="grand_avg_score" value="{{ $floatgrandtotal = number_format((float)$grandtotal , 3, '.', '') }}" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-4">
                                        <label for="colFormL.abel" class="col-sm-3 col-form-label">Student Grade</label>
                                        <div class="col-sm-9">
                                            <select class="custom-select mb-4" name="Grade" placeholder="Remark">
                                                    <option value="A - Excellent">'A' - Excellent </option>
                                                    <option value="B - Very Good">'B' - Very Good</option>
                                                    <option value="C - Good">'C' - Good</option>
                                                    <option value="D - Pass">'D' - Pass</option>
                                                    <option value="E - Weak">'E' - Weak</option>                                                   
                                                </select>
                                            </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Home Teacher's Remark</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="home_remark" class="form-control" id="colFormLabel" placeholder="Home Teacher's Remark">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-4">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Head Teacher's Remark</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="head_remark" class="form-control" id="colFormLabel" placeholder="Head Teacher's Remark">
                                        </div>
                                    </div>
                                   
                                    <button type="submit" class="mb-4 btn btn-primary">Approve Result</button>
                                </form>                               
                                
                            </div>
                        </div>

                        <br>

                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('exams.update',$exam->id) }}" method="POST">
                                @csrf
                                    @method('PUT')                                    
                                    <h5>Insert Character Progress</h5>
                                   <table class="table ">
                                   <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Ability to Complete Task</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char1rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Appearance / Cleanliness</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char2rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Attitude</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char3rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>
                                        
                                    </td>                                    
                                        
                                    <td> 
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Orderliness</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char4rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Psychomotor Ability</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char5rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Regularity</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char6rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>

                                    </td>

                                    <td>    
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Respect</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char7rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Responsibility</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char8rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Independence</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char9rate" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>
                                        
                                    </td>                                    

                                   </tr>
                                   </table>
                                   <table class="table ">
                                   <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">No. of Days Present</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="attendance" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">No. of Days Absent</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="absent" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>                                        
                                    </td>                                    

                                   </tr>
                                   </table>
                                    <button type="submit" class="mb-4 btn btn-primary">Update Character</button>
                                </form>                               
                                
                            </div>
                        </div>

                        
                        <br>
                    <!--
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('exams.update',$exam->id) }}" method="POST">
                                @csrf
                                    @method('PUT')                                    
                                    <h5>Attendance Records</h5>
                                   <table class="table ">
                                   <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">No. of Days Present</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="attendance" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">No. of Days Absent</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="absent" class="form-control" id="colFormLabel" placeholder="">
                                            </div>
                                        </div>                                        
                                    </td>                                    

                                   </tr>
                                   </table>
                                    <button type="submit" class="mb-4 btn btn-primary">Update Attendance</button>
                                </form>                               
                                
                            </div>
                        </div>
                    </div>
                -->

                </div>

                </div>
                @include('include.adminfooter')
    
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>