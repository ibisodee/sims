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
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                
                <div class="row layout-top-spacing" id="cancel-row">
                <h5>Reveiw Uploaded/Approved Information</h5>
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
                            <form action="{{ route('exams.update',$exam->id) }}" method="POST">
                                @csrf
                                    @method('PUT')
                                    <div class="form-group row  mb-3">
                                        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Registration number</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="regno" value="{{ $exam->regno}}" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="regno" value="{{ $exam->session}} of {{ $exam->year}} Academic Year" class="form-control form-control-sm" id="colFormLabelSm">
                                        </div>
                                    </div>
                                                                        
                                    <div class="form-group row mb-4">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Student Grade</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="Grade" value="{{ $exam->Grade}}" class="form-control" id="colFormLabel" placeholder="Student Grade">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Home Teacher's Remark</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="home_remark" value="{{ $exam->home_remark}}" class="form-control" id="colFormLabel" placeholder="Home Teacher's Remark">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-4">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Head Teacher's Remark</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="head_remark"  value="{{ $exam->head_remark}}" class="form-control" id="colFormLabel" placeholder="Head Teacher's Remark">
                                        </div>
                                    </div>  
                                </div>
                                <div>
                                
                                <table class="multi-table table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>MTE</th>
                                            <th>ETE</th>
                                            <th>1st CA</th>
                                            <th>2nd CA</th>
                                            <th>Project</th>
                                            <th>Note</th>
                                            <th>Exam</th>
                                            <th>Total</th>                                            
                                            <th>Position</th>
                                            <th>Remark</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                                <td>{{ $exam->sub1}}</td>
                                                <td>{{ $mte1=$exam->mte1}}</td>
                                                <td>{{ $ete1=$exam->ete1}}</td>
                                                <td>{{ $exam->sub1_ca1}}</td>
                                                <td>{{ $exam->sub1_ca2}}</td>
                                                <td>{{ $exam->project1}}</td>
                                                <td>{{ $exam->note1}}</td>
                                                <td>{{ $exam->sub1_exam}}</td>
                                                <td>{{ $total=$mte1+$ete1}}</td>                                                
                                                <td>{{ $exam->sub1_position}}</td>
                                                <td>{{ $exam->sub1_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub2}}</td>
                                                <td>{{ $mte2=$exam->mte2}}</td>
                                                <td>{{ $ete2=$exam->ete2}}</td>
                                                <td>{{ $exam->sub2_ca1}}</td>
                                                <td>{{ $exam->sub2_ca2}}</td>
                                                <td>{{ $exam->project2}}</td>
                                                <td>{{ $exam->note2}}</td>
                                                <td>{{ $exam->sub2_exam}}</td>
                                                <td>{{ $tota2=$mte2+$ete2}}</td>  
                                                <td>{{ $exam->sub2_position}}</td>
                                                <td>{{ $exam->sub2_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub3}}</td>
                                                <td>{{ $mte3=$exam->mte3}}</td>
                                                <td>{{ $ete3=$exam->ete3}}</td>
                                                <td>{{ $exam->sub3_ca1}}</td>
                                                <td>{{ $exam->sub3_ca2}}</td>
                                                <td>{{ $exam->project3}}</td>
                                                <td>{{ $exam->note3}}</td>
                                                <td>{{ $exam->sub3_exam}}</td>
                                                <td>{{ $tota3=$mte3+$ete3}}</td>
                                                <td>{{ $exam->sub3_position}}</td>
                                                <td>{{ $exam->sub3_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub4}}</td>
                                                <td>{{ $mte4=$exam->mte4}}</td>
                                                <td>{{ $ete4=$exam->ete4}}</td>
                                                <td>{{ $exam->sub4_ca1}}</td>
                                                <td>{{ $exam->sub4_ca2}}</td>
                                                <td>{{ $exam->project4}}</td>
                                               <td>{{ $exam->note4}}</td>
                                                <td>{{ $exam->sub4_exam}}</td>
                                                <td>{{ $tota4=$mte4+$ete4}}</td>
                                                <td>{{ $exam->sub4_position}}</td>
                                                <td>{{ $exam->sub4_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub5}}</td>
                                                <td>{{ $mte5=$exam->mte5}}</td>
                                                <td>{{ $ete5=$exam->ete5}}</td>
                                                <td>{{ $exam->sub5_ca1}}</td>
                                                <td>{{ $exam->sub5_ca2}}</td>
                                                <td>{{ $exam->project5}}</td>
                                               <td>{{ $exam->note5}}</td>
                                                <td>{{ $exam->sub5_exam}}</td>
                                                <td>{{ $tota5=$mte5+$ete5}}</td>
                                                <td>{{ $exam->sub5_position}}</td>
                                                <td>{{ $exam->sub5_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub6}}</td>
                                                <td>{{ $mte6=$exam->mte6}}</td>
                                                <td>{{ $ete6=$exam->ete6}}</td>
                                                <td>{{ $exam->sub6_ca1}}</td>
                                                <td>{{ $exam->sub6_ca2}}</td>
                                                <td>{{ $exam->project6}}</td>
                                               <td>{{ $exam->note6}}</td>
                                                <td>{{ $exam->sub6_exam}}</td>
                                                <td>{{ $tota6=$mte6+$ete6}}</td>
                                                <td>{{ $exam->sub6_position}}</td>
                                                <td>{{ $exam->sub6_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub7}}</td>
                                                <td>{{ $mte7=$exam->mte7}}</td>
                                                <td>{{ $ete7=$exam->ete7}}</td>
                                                <td>{{ $exam->sub7_ca1}}</td>
                                                <td>{{ $exam->sub7_ca2}}</td>
                                                <td>{{ $exam->project7}}</td>
                                               <td>{{ $exam->note7}}</td>
                                                <td>{{ $exam->sub7_exam}}</td>
                                                <td>{{ $tota7=$mte7+$ete7}}</td>
                                                <td>{{ $exam->sub7_position}}</td>
                                                <td>{{ $exam->sub7_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub8}}</td>
                                                <td>{{ $mte8=$exam->mte8}}</td>
                                                <td>{{ $ete8=$exam->ete8}}</td>
                                                <td>{{ $exam->sub8_ca1}}</td>
                                                <td>{{ $exam->sub8_ca2}}</td>
                                                <td>{{ $exam->project8}}</td>
                                                <td>{{ $exam->note8}}</td>
                                                <td>{{ $exam->sub8_exam}}</td>
                                                <td>{{ $tota8=$mte8+$ete8}}</td>
                                                <td>{{ $exam->sub8_position}}</td>
                                                <td>{{ $exam->sub8_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub9}}</td>
                                                <td>{{ $mte9=$exam->mte9}}</td>
                                                <td>{{ $ete9=$exam->ete9}}</td>
                                                <td>{{ $exam->sub9_ca1}}</td>
                                                <td>{{ $exam->sub9_ca2}}</td>
                                                <td>{{ $exam->project9}}</td>
                                                <td>{{ $exam->note9}}</td>
                                                <td>{{ $exam->sub9_exam}}</td>
                                                <td>{{ $tota9=$mte9+$ete9}}</td>
                                                <td>{{ $exam->sub9_position}}</td>
                                                <td>{{ $exam->sub9_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub10}}</td>
                                                <td>{{ $mte10=$exam->mte10}}</td>
                                                <td>{{ $ete10=$exam->ete10}}</td>
                                                <td>{{ $exam->sub10_ca1}}</td>
                                                <td>{{ $exam->sub10_ca2}}</td>
                                                <td>{{ $exam->project10}}</td>
                                                <td>{{ $exam->note10}}</td>
                                                <td>{{ $exam->sub10_exam}}</td>
                                                <td>{{ $tota10=$mte10+$ete10}}</td>
                                                <td>{{ $exam->sub10_position}}</td>
                                                <td>{{ $exam->sub10_remark}}</td>
                                        </tr>

                                        <tr>
                                                <td>{{ $exam->sub11}}</td>
                                                <td>{{ $mte11=$exam->mte11}}</td>
                                                <td>{{ $ete11=$exam->ete11}}</td>
                                                <td>{{ $exam->sub11_ca1}}</td>
                                                <td>{{ $exam->sub11_ca2}}</td>
                                                <td>{{ $exam->project11}}</td>
                                               <td>{{ $exam->note11}}</td>
                                                <td>{{ $exam->sub11_exam}}</td>
                                                <td>{{ $tota11=$mte11+$ete11}}</td>
                                                <td>{{ $exam->sub11_position}}</td>
                                                <td>{{ $exam->sub11_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub12}}</td>
                                                <td>{{ $mte12=$exam->mte12}}</td>
                                                <td>{{ $ete12=$exam->ete12}}</td>
                                                <td>{{ $exam->sub12_ca1}}</td>
                                                <td>{{ $exam->sub12_ca2}}</td>
                                                <td>{{ $exam->project12}}</td>
                                                <td>{{ $exam->note12}}</td>
                                                <td>{{ $exam->sub12_exam}}</td>
                                                <td>{{ $tota12=$mte12+$ete12}}</td>
                                                <td>{{ $exam->sub12_position}}</td>
                                                <td>{{ $exam->sub12_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub13}}</td>
                                                <td>{{ $mte13=$exam->mte13}}</td>
                                                <td>{{ $ete13=$exam->ete13}}</td>
                                                <td>{{ $exam->sub13_ca1}}</td>
                                                <td>{{ $exam->sub13_ca2}}</td>
                                                <td>{{ $exam->project13}}</td>
                                               <td>{{ $exam->note13}}</td>
                                                <td>{{ $exam->sub13_exam}}</td>
                                                <td>{{ $tota13=$mte13+$ete13}}</td>
                                                <td>{{ $exam->sub13_position}}</td>
                                                <td>{{ $exam->sub13_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub14}}</td>
                                                <td>{{ $mte14=$exam->mte14}}</td>
                                                <td>{{ $ete14=$exam->ete14}}</td>
                                                <td>{{ $exam->sub14_ca1}}</td>
                                                <td>{{ $exam->sub14_ca2}}</td>
                                                <td>{{ $exam->project14}}</td>
                                                <td>{{ $exam->note14}}</td>
                                                <td>{{ $exam->sub14_exam}}</td>
                                                <td>{{ $tota14=$mte14+$ete14}}</td>
                                                <td>{{ $exam->sub14_position}}</td>
                                                <td>{{ $exam->sub14_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub15}}</td>
                                                <td>{{ $mte15=$exam->mte15}}</td>
                                                <td>{{ $ete15=$exam->ete15}}</td>
                                                <td>{{ $exam->sub15_ca1}}</td>
                                                <td>{{ $exam->sub15_ca2}}</td>
                                            <td>{{ $exam->project15}}</td>
                                               <td>{{ $exam->note15}}</td>
                                                <td>{{ $exam->sub15_exam}}</td>
                                                <td>{{ $tota15=$mte15+$ete15}}</td>
                                                <td>{{ $exam->sub15_position}}</td>
                                                <td>{{ $exam->sub15_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub16}}</td>
                                                <td>{{ $mte16=$exam->mte16}}</td>
                                                <td>{{ $ete16=$exam->ete16}}</td>
                                                <td>{{ $exam->sub16_ca1}}</td>
                                                <td>{{ $exam->sub16_ca2}}</td>
                                                <td>{{ $exam->project16}}</td>
                                                <td>{{ $exam->note16}}</td>
                                                <td>{{ $exam->sub16_exam}}</td>
                                                <td>{{ $tota16=$mte16+$ete16}}</td>
                                                <td>{{ $exam->sub16_position}}</td>
                                                <td>{{ $exam->sub16_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub17}}</td>
                                                <td>{{ $mte17=$exam->mte17}}</td>
                                                <td>{{ $ete17=$exam->ete17}}</td>
                                                <td>{{ $exam->sub17_ca1}}</td>
                                                <td>{{ $exam->sub17_ca2}}</td>
                                                <td>{{ $exam->project17}}</td>
                                                <td>{{ $exam->note17}}</td>
                                                <td>{{ $exam->sub17_exam}}</td>
                                                <td>{{ $tota17=$mte17+$ete17}}</td>
                                                <td>{{ $exam->sub17_position}}</td>
                                                <td>{{ $exam->sub17_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub18}}</td>
                                                <td>{{ $mte18=$exam->mte18}}</td>
                                                <td>{{ $ete18=$exam->ete18}}</td>
                                                <td>{{ $exam->sub18_ca1}}</td>
                                                <td>{{ $exam->sub18_ca2}}</td>
                                                <td>{{ $exam->project18}}</td>
                                                <td>{{ $exam->note18}}</td>
                                                <td>{{ $exam->sub18_exam}}</td>
                                                <td>{{ $tota18=$mte18+$ete18}}</td>
                                                <td>{{ $exam->sub18_position}}</td>
                                                <td>{{ $exam->sub18_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub19}}</td>
                                                <td>{{ $mte19=$exam->mte19}}</td>
                                                <td>{{ $ete19=$exam->ete19}}</td>
                                                <td>{{ $exam->sub19_ca1}}</td>
                                                <td>{{ $exam->sub19_ca2}}</td>
                                                <td>{{ $exam->project19}}</td>
                                                <td>{{ $exam->note19}}</td>
                                                <td>{{ $exam->sub19_exam}}</td>
                                                <td>{{ $tota19=$mte19+$ete19}}</td>
                                                <td>{{ $exam->sub19_position}}</td>
                                                <td>{{ $exam->sub19_remark}}</td>
                                        </tr>
                                        <tr>
                                                <td>{{ $exam->sub20}}</td>
                                                <td>{{ $mte20=$exam->mte20}}</td>
                                                <td>{{ $ete20=$exam->ete20}}</td>
                                                <td>{{ $exam->sub20_ca1}}</td>
                                                <td>{{ $exam->sub20_ca2}}</td>
                                                <td>{{ $exam->project20}}</td>
                                               <td>{{ $exam->note20}}</td>
                                                <td>{{ $exam->sub20_exam}}</td>
                                                <td>{{ $tota20=$mte20+$ete20}}</td>
                                                <td>{{ $exam->sub20_position}}</td>
                                                <td>{{ $exam->sub20_remark}}</td>
                                        </tr>                                        
                                    </tbody>                                    
                                </table>
                            </div>                               
                        </div>
                        <br>
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">                                                              
                                    <h5>Reveiw Character Progress</h5>
                                   <table class="table ">
                                   <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Ability to Complete Task</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char1rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char1rate }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Appearance/Cleanliness</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char2rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char2rate }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Attitude</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char3rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char3rate }}">
                                            </div>
                                        </div>
                                    </td>
                                    
                                        
                                    <td> 
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Orderliness</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char4rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char4rate }}">
                                            </div>
                                        </div>  
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Psychomotor Ability</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char5rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char5rate }}">
                                            </div>
                                        </div>  
                                    
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Regularity</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char6rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char6rate }}">
                                            </div>
                                        </div>
                                    </td>                                    
                                        
                                    <td>     
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Respect</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char7rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char7rate }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Responsibility</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char8rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char8rate }}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">Independence</label>
                                            <div class="col-sm-3">
                                                <input type="text" name="char9rate" class="form-control" id="colFormLabel" placeholder="{{ $exam->char9rate }}">
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <tr>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">No. of Days Present</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="attendance" class="form-control" id="colFormLabel" placeholder="{{ $exam->attendance }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-6 col-form-label">No. of Days Absent</label>
                                            <div class="col-sm-6">
                                                <input type="text" name="absent" class="form-control" id="colFormLabel" placeholder="{{ $exam->absent }}">
                                            </div>
                                        </div>                                        
                                    </td>                                    

                                   </tr>                                    

                                   </tr>
                                   </table>
                                    <button type="submit" class="mb-4 btn btn-primary">Approve Changes</button>
                                </form>                               
                                
                            </div>
                        </div>                               
                    </div>

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
</body>
</html>