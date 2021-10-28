
@include('include.userheader')

<body class="alt-menu sidebar-noneoverflow">  

@include('include.usernavbar')

 <!--  BEGIN MAIN CONTAINER  -->
 <div class="main-container sidebar-closed sbar-open" id="container">

<div class="overlay"></div>
<div class="cs-overlay"></div>
<div class="search-overlay"></div>

@include('include.usersidebar')
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing"> 
                
                <div class="row layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Assessment Results </h4>
                                    </div>    
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="individual-col-search" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Class|Session|Year </th>
                                                
                                                 <th>1 Subject(CA1&CA2|Project)</th>
                                                 <th>2 Subject(CA1&CA2|Project)</th>
                                                 <th>3 Subject(CA1&CA2|Project)</th>
                                                 <th>4 Subject(CA1&CA2|Project)</th>
                                                 <th>5 Subject(CA1&CA2|Project)</th>
                                                 <th>6 Subject(CA1&CA2|Project)</th>
                                                 <th>7 Subject(CA1&CA2|Project)</th>
                                                 <th>8 Subject(CA1&CA2|Project)</th>
                                                 <th>9 Subject(CA1&CA2|Project)</th>
                                                <th>10 Subject(CA1&CA2|Project)</th>
                                                <th>11 Subject(CA1&CA2|Project)</th>
                                                <th>12 Subject(CA1&CA2|Project)</th>
                                                <th>13 Subject(CA1&CA2|Project)</th>
                                                <th>14 Subject(CA1&CA2|Project)</th>
                                                <th>15 Subject(CA1&CA2|Project)</th>
                                                <th>16 Subject(CA1&CA2|Project)</th>
                                                <th>17 Subject(CA1&CA2|Project)</th>
                                                <th>18 Subject(CA1&CA2|Project)</th>
                                                <th>19 Subject(CA1&CA2|Project)</th>
                                                <th>20 Subject(CA1&CA2|Project)</th>
                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $exam)
                                            <tr>
                                                <td>{{ $exam->class}} | {{ $exam->session}} | {{ $exam->year}}</td>
                                                
                                                <td><table><tr><td>{{ $exam->sub1 }}</td><td>  {{ $exam->sub1_ca1 }} </td> <td>  {{ $exam->sub1_ca2 }} </td> <td>  {{ $exam->project1 }} </td><td> {{ $exam->note1 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub2 }}</td><td>  {{ $exam->sub2_ca1 }} </td> <td>  {{ $exam->sub2_ca2 }} </td> <td>  {{ $exam->project2 }} </td><td> {{ $exam->note2 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub3 }}</td><td>  {{ $exam->sub3_ca1 }} </td> <td>  {{ $exam->sub3_ca2 }} </td> <td>  {{ $exam->project3 }} </td><td> {{ $exam->note3 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub4 }}</td><td>  {{ $exam->sub4_ca1 }} </td> <td>  {{ $exam->sub4_ca2 }} </td> <td>  {{ $exam->project4 }} </td><td> {{ $exam->note4 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub5 }}</td><td>  {{ $exam->sub5_ca1 }} </td> <td>  {{ $exam->sub5_ca2 }} </td> <td>  {{ $exam->project5 }} </td><td> {{ $exam->note5 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub6 }}</td><td>  {{ $exam->sub6_ca1 }} </td> <td>  {{ $exam->sub6_ca2 }} </td> <td>  {{ $exam->project6 }} </td><td> {{ $exam->note6 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub7 }}</td><td>  {{ $exam->sub7_ca1 }} </td> <td>  {{ $exam->sub7_ca2 }} </td> <td>  {{ $exam->project7 }} </td><td> {{ $exam->note7 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub8 }}</td><td>  {{ $exam->sub8_ca1 }} </td> <td>  {{ $exam->sub8_ca2 }} </td> <td>  {{ $exam->project8 }} </td><td> {{ $exam->note8 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub9 }}</td><td>  {{ $exam->sub9_ca1 }} </td> <td>  {{ $exam->sub9_ca2 }} </td> <td>  {{ $exam->project9 }} </td><td> {{ $exam->note9 }}</td>  </tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub10 }}</td><td>{{ $exam-> sub10_ca1 }} </td> <td>{{ $exam-> sub10_ca2 }} </td> <td>{{ $exam->project10 }}  </td><td>{{ $exam->note10 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub11 }}</td><td>{{ $exam-> sub11_ca1 }} </td> <td>{{ $exam-> sub11_ca2 }} </td> <td>{{ $exam->project11 }}  </td><td>{{ $exam->note11 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub12 }}</td><td>{{ $exam-> sub12_ca1 }} </td> <td>{{ $exam-> sub12_ca2 }} </td> <td>{{ $exam->project12 }}  </td><td>{{ $exam->note12 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub13 }}</td><td>{{ $exam-> sub13_ca1 }} </td> <td>{{ $exam-> sub13_ca2 }} </td> <td>{{ $exam->project13 }}  </td><td>{{ $exam->note13 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub14 }}</td><td>{{ $exam-> sub14_ca1 }} </td> <td>{{ $exam-> sub14_ca2 }} </td> <td>{{ $exam->project14 }}  </td><td>{{ $exam->note14 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub15 }}</td><td>{{ $exam-> sub15_ca1 }} </td> <td>{{ $exam-> sub15_ca2 }} </td> <td>{{ $exam->project15 }}  </td><td>{{ $exam->note15 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub16 }}</td><td>{{ $exam-> sub16_ca1 }} </td> <td>{{ $exam-> sub16_ca2 }} </td> <td>{{ $exam->project16 }}  </td><td>{{ $exam->note16 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub17 }}</td><td>{{ $exam-> sub17_ca1 }} </td> <td>{{ $exam-> sub17_ca2 }} </td> <td>{{ $exam->project17 }}  </td><td>{{ $exam->note17 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub18 }}</td><td>{{ $exam-> sub18_ca1 }} </td> <td>{{ $exam-> sub18_ca2 }} </td> <td>{{ $exam->project18 }}  </td><td>{{ $exam->note18 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub19 }}</td><td>{{ $exam-> sub19_ca1 }} </td> <td>{{ $exam-> sub19_ca2 }} </td> <td>{{ $exam->project19 }}  </td><td>{{ $exam->note19 }} </td></tr></table></td>
                                                <td><table><tr><td>{{ $exam->sub20 }}</td><td>{{ $exam-> sub20_ca1 }} </td> <td>{{ $exam-> sub20_ca2 }} </td> <td>{{ $exam->project20 }}  </td><td>{{ $exam->note20 }} </td></tr></table></td>
                                                                                            
                                                
                                            </tr>
                                            @endforeach                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>1 Subject(CA1&CA2|Project)</th>
                                                <th>2 Subject(CA1&CA2|Project)</th>
                                                <th>3 Subject(CA1&CA2|Project)</th>
                                                <th>4 Subject(CA1&CA2|Project)</th>
                                                <th>5 Subject(CA1&CA2|Project)</th>
                                                <th>6 Subject(CA1&CA2|Project)</th>
                                                <th>7 Subject(CA1&CA2|Project)</th>
                                                <th>8 Subject(CA1&CA2|Project)</th>
                                                <th>9 Subject(CA1&CA2|Project)</th>
                                                <th>10 Subject(CA1&CA2|Project)</th>
                                                <th>11 Subject(CA1&CA2|Project)</th>
                                                <th>12 Subject(CA1&CA2|Project)</th>
                                                <th>13 Subject(CA1&CA2|Project)</th>
                                                <th>14 Subject(CA1&CA2|Project)</th>
                                                <th>15 Subject(CA1&CA2|Project)</th>
                                                <th>16 Subject(CA1&CA2|Project)</th>
                                                <th>17 Subject(CA1&CA2|Project)</th>
                                                <th>18 Subject(CA1&CA2|Project)</th>
                                                <th>19 Subject(CA1&CA2|Project)</th>
                                                <th>20 Subject(CA1&CA2|Project)</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            @include('include.userfooter')
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/custom_miscellaneous.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->    

</body>
</html>