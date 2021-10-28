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
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Complete Result Sheet Awaiting Approval </h4>
                                </div>                 
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                                <table id="html5-extension" class="multi-table table table-hover non-hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>ID</th>
                                            <th>Year</th>
                                            <th>Session</th>
                                            <th>Regno</th>
                                            <th>Class</th>

                                            <th>1.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>2.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>3.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>4.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>5.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>6.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>7.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>8.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>9.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>10.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>11.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>12.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>13.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>14.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>15.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>16.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>17.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            <th>18.Subject.(MTE|ETE|CA1|CA2|Project|Note|Exam)</th>
                                            
                                            <th>Total_Average</th>
                                            <th>Grand_Average</th>
                                            <th>Grade</th>
                                            <th>Home_Teacher's_Remark</th>
                                            <th>School_Head's_Remark</th>   

                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($exams as $exam)
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-dark btn-sm">Update</button>
                                                    <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">

                                                    <form action="{{ route('exam.destroy',$exam->id) }}" method="POST">
                                                        
                                                        <a class="dropdown-item btn btn-info" href="{{ route('exam.show',$exam->id) }}">Preview Result</a>    
                                                        <a class="dropdown-item btn btn-primary" href="{{ route('exam.edit',$exam->id) }}">Click to Approve</a>
                                                        @csrf
                                                    </form>
                                                     
                                                  </div>
                                            </td>
                                            <td>{{ $exam->id}}</td>
                                            <td>{{ $exam->year}}</td>
                                            <td>{{ $exam->session}}</td>
                                            <td>{{ $exam->regno}}</td>
                                            <td>{{ $exam->class}}</td>                                           

                                            <td><table><tr><td>{{ $exam->sub1 }}</td> <td>  {{ $exam->mte1 }} </td> <td>  {{ $exam->ete1 }} </td><td>  {{ $exam->sub1_ca1 }} </td> <td>  {{ $exam->sub1_ca2 }} </td> <td>  {{ $exam->project1 }} </td><td> {{ $exam->note1 }}</td><td> {{ $exam->sub1_exam}}</td>   <td> {{ $exam->sub1_total }} </td> <td> {{ $exam->sub1_position }} </td> <td> {{ $exam->sub1_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub2 }}</td> <td>  {{ $exam->mte2 }} </td> <td>  {{ $exam->ete2 }} </td><td>  {{ $exam->sub2_ca1 }} </td> <td>  {{ $exam->sub2_ca2 }} </td> <td>  {{ $exam->project2 }} </td><td> {{ $exam->note2 }}</td><td> {{ $exam->sub2_exam}}</td>   <td> {{ $exam->sub2_total }} </td> <td> {{ $exam->sub2_position }} </td> <td> {{ $exam->sub2_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub3 }}</td> <td>  {{ $exam->mte3 }} </td> <td>  {{ $exam->ete3 }} </td><td>  {{ $exam->sub3_ca1 }} </td> <td>  {{ $exam->sub3_ca2 }} </td> <td>  {{ $exam->project3 }} </td><td> {{ $exam->note3 }}</td><td> {{ $exam->sub3_exam}}</td>   <td> {{ $exam->sub3_total }} </td> <td> {{ $exam->sub3_position }} </td> <td> {{ $exam->sub3_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub4 }}</td> <td>  {{ $exam->mte4 }} </td> <td>  {{ $exam->ete4 }} </td><td>  {{ $exam->sub4_ca1 }} </td> <td>  {{ $exam->sub4_ca2 }} </td> <td>  {{ $exam->project4 }} </td><td> {{ $exam->note4 }}</td><td> {{ $exam->sub4_exam}}</td>   <td> {{ $exam->sub4_total }} </td> <td> {{ $exam->sub4_position }} </td> <td> {{ $exam->sub4_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub5 }}</td> <td>  {{ $exam->mte5 }} </td> <td>  {{ $exam->ete5 }} </td><td>  {{ $exam->sub5_ca1 }} </td> <td>  {{ $exam->sub5_ca2 }} </td> <td>  {{ $exam->project5 }} </td><td> {{ $exam->note5 }}</td><td> {{ $exam->sub5_exam}}</td>   <td> {{ $exam->sub5_total }} </td> <td> {{ $exam->sub5_position }} </td> <td> {{ $exam->sub5_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub6 }}</td> <td>  {{ $exam->mte6 }} </td> <td>  {{ $exam->ete6 }} </td><td>  {{ $exam->sub6_ca1 }} </td> <td>  {{ $exam->sub6_ca2 }} </td> <td>  {{ $exam->project6 }} </td><td> {{ $exam->note6 }}</td><td> {{ $exam->sub6_exam}}</td>   <td> {{ $exam->sub6_total }} </td> <td> {{ $exam->sub6_position }} </td> <td> {{ $exam->sub6_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub7 }}</td> <td>  {{ $exam->mte7 }} </td> <td>  {{ $exam->ete7 }} </td><td>  {{ $exam->sub7_ca1 }} </td> <td>  {{ $exam->sub7_ca2 }} </td> <td>  {{ $exam->project7 }} </td><td> {{ $exam->note7 }}</td><td> {{ $exam->sub7_exam}}</td>   <td> {{ $exam->sub7_total }} </td> <td> {{ $exam->sub7_position }} </td> <td> {{ $exam->sub7_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub8 }}</td> <td>  {{ $exam->mte8 }} </td> <td>  {{ $exam->ete8 }} </td><td>  {{ $exam->sub8_ca1 }} </td> <td>  {{ $exam->sub8_ca2 }} </td> <td>  {{ $exam->project8 }} </td><td> {{ $exam->note8 }}</td><td> {{ $exam->sub8_exam}}</td>   <td> {{ $exam->sub8_total }} </td> <td> {{ $exam->sub8_position }} </td> <td> {{ $exam->sub8_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub9 }}</td> <td>  {{ $exam->mte9 }} </td> <td>  {{ $exam->ete9 }} </td><td>  {{ $exam->sub9_ca1 }} </td> <td>  {{ $exam->sub9_ca2 }} </td> <td>  {{ $exam->project9 }} </td><td> {{ $exam->note9 }}</td><td> {{ $exam->sub9_exam}}</td>   <td> {{ $exam->sub9_total }} </td> <td> {{ $exam->sub9_position }} </td> <td> {{ $exam->sub9_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub10 }}</td> <td>  {{ $exam->mte10 }} </td> <td>  {{ $exam->ete10 }} </td><td>{{ $exam-> sub10_ca1 }} </td> <td>{{ $exam-> sub10_ca2 }} </td> <td>{{ $exam->project10 }}  </td><td>{{ $exam->note10 }} </td><td>{{ $exam->sub10_exam}} </td><td>{{ $exam->sub10_total }} </td> <td>{{ $exam->sub10_position }} </td> <td>{{ $exam->sub10_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub11 }}</td> <td>  {{ $exam->mte11 }} </td> <td>  {{ $exam->ete11 }} </td><td>{{ $exam-> sub11_ca1 }} </td> <td>{{ $exam-> sub11_ca2 }} </td> <td>{{ $exam->project11 }}  </td><td>{{ $exam->note11 }} </td><td>{{ $exam->sub11_exam}} </td><td>{{ $exam->sub11_total }} </td> <td>{{ $exam->sub11_position }} </td> <td>{{ $exam->sub11_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub12 }}</td> <td>  {{ $exam->mte12 }} </td> <td>  {{ $exam->ete12 }} </td><td>{{ $exam-> sub12_ca1 }} </td> <td>{{ $exam-> sub12_ca2 }} </td> <td>{{ $exam->project12 }}  </td><td>{{ $exam->note12 }} </td><td>{{ $exam->sub12_exam}} </td><td>{{ $exam->sub12_total }} </td> <td>{{ $exam->sub12_position }} </td> <td>{{ $exam->sub12_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub13 }}</td> <td>  {{ $exam->mte13 }} </td> <td>  {{ $exam->ete13 }} </td><td>{{ $exam-> sub13_ca1 }} </td> <td>{{ $exam-> sub13_ca2 }} </td> <td>{{ $exam->project13 }}  </td><td>{{ $exam->note13 }} </td><td>{{ $exam->sub13_exam}} </td><td>{{ $exam->sub13_total }} </td> <td>{{ $exam->sub13_position }} </td> <td>{{ $exam->sub13_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub14 }}</td> <td>  {{ $exam->mte14 }} </td> <td>  {{ $exam->ete14 }} </td><td>{{ $exam-> sub14_ca1 }} </td> <td>{{ $exam-> sub14_ca2 }} </td> <td>{{ $exam->project14 }}  </td><td>{{ $exam->note14 }} </td><td>{{ $exam->sub14_exam}} </td><td>{{ $exam->sub14_total }} </td> <td>{{ $exam->sub14_position }} </td> <td>{{ $exam->sub14_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub15 }}</td><td>{{ $exam-> sub15_ca1 }} </td> <td>{{ $exam-> sub15_ca2 }} </td> <td>{{ $exam->project15 }}  </td><td>{{ $exam->note15 }} </td><td>{{ $exam->sub15_exam}} </td><td>{{ $exam->sub15_total }} </td> <td>{{ $exam->sub15_position }} </td> <td>{{ $exam->sub15_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub16 }}</td><td>{{ $exam-> sub16_ca1 }} </td> <td>{{ $exam-> sub16_ca2 }} </td> <td>{{ $exam->project16 }}  </td><td>{{ $exam->note16 }} </td><td>{{ $exam->sub16_exam}} </td><td>{{ $exam->sub16_total }} </td> <td>{{ $exam->sub16_position }} </td> <td>{{ $exam->sub16_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub17 }}</td><td>{{ $exam-> sub17_ca1 }} </td> <td>{{ $exam-> sub17_ca2 }} </td> <td>{{ $exam->project17 }}  </td><td>{{ $exam->note17 }} </td><td>{{ $exam->sub17_exam}} </td><td>{{ $exam->sub17_total }} </td> <td>{{ $exam->sub17_position }} </td> <td>{{ $exam->sub17_remark }} </td> </tr></table></td>
                                            <td><table><tr><td>{{ $exam->sub18 }}</td><td>{{ $exam-> sub18_ca1 }} </td> <td>{{ $exam-> sub18_ca2 }} </td> <td>{{ $exam->project18 }}  </td><td>{{ $exam->note18 }} </td><td>{{ $exam->sub18_exam}} </td><td>{{ $exam->sub18_total }} </td> <td>{{ $exam->sub18_position }} </td> <td>{{ $exam->sub18_remark }} </td> </tr></table></td>
                                            
                                            <td>{{ $exam->total_avg_score }}</td>
                                            <td>{{ $exam->grand_avg_score }}</td>
                                            <td>{{ $exam->Grade }}</td>
                                            <td>{{ $exam->home_remark}}</td>
                                            <td>{{ $exam->head_remark }}</td>                                            
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>                                
                            </div>
                        </div>                        
                    </div> 

                    <br>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Character Traits/Progress</h4>
                                </div>                 
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                                <table id="html5-extension" class="multi-table table table-hover non-hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Year</th>
                                            <th>Session</th>
                                            <th>Regno</th>

                                            <th>Ability_to_complete_task</th>                                            
                                            <th>Appearance/Cleanness</th>
                                            <th>Attitude</th>
                                            <th>Orderliness</th>
                                            <th>Psychomotor_Ability</th>
                                            <th>Regularity</th>   
                                            <th>Respect</th>
                                            <th>Responsibility</th>
                                            <th>Independence</th> 
                                        </tr>
                                    </thead>

                                    <tbody>
                                     @foreach ($exams as $exam)
                                        <tr>
                                            <td>{{ $exam->id}}</td>
                                            <td>{{ $exam->year}}</td>
                                            <td>{{ $exam->session}}</td>
                                            <td>{{ $exam->regno}}</td>

                                            <td>{{ $exam->char1rate }}</td> 
                                            <td>{{ $exam->char2rate }}</td>
                                            <td>{{ $exam->char3rate }}</td>
                                            <td>{{ $exam->char4rate }}</td> 
                                            <td>{{ $exam->char5rate }}</td>
                                            <td>{{ $exam->char6rate }}</td>
                                            <td>{{ $exam->char7rate }}</td>
                                            <td>{{ $exam->char8rate }}</td>
                                            <td>{{ $exam->char9rate }}</td>
                                        </tr>
                                        @endforeach                                       
                                    </tbody>
                                </table>                                
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Attendance Record</h4>
                                </div>                 
                            </div>
                        </div>
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                                <table id="html5-extension" class="multi-table table table-hover non-hover table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Year</th>
                                            <th>Session</th>
                                            <th>Regno</th>

                                            <th>Days Present</th>                                            
                                            <th>Days Absent</th>
                                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($exams as $exam)
                                        <tr>
                                            <td>{{ $exam->id}}</td>
                                            <td>{{ $exam->year}}</td>
                                            <td>{{ $exam->session}}</td>
                                            <td>{{ $exam->regno}}</td>

                                            <td>{{ $exam->attendance }}</td> 
                                            <td>{{ $exam->absent }}</td>
                                            
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                </table>                                
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