
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
                                        <h4>Paid Fees Records and Status </h4>
                                    </div>    
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="individual-col-search" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Term/Year</th>
                                                <th>Class</th>
                                                <th>Paid_For</th>
                                                <th>Amount_Payable</th>
                                                <th>Amount_Paid</th>
                                                <th>Dept</th>
                                                <th>Date_Paid</th>
                                                <th>Paid_Via</th>
                                                <th>Recorded_On</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>                                        
                                        @foreach ($list as $item)
                                        <tr>                                        
                                            <td>{{ $item->regno }}</td>
                                            <td>{{ $item->session }} | {{ $item->year }}</td>
                                            <td>{{ $item->class }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>{{ $item->amount_payable }}</td>
                                            <td>{{ $item->amount_paid }}</td>
                                            <td>{{$balance = $item->amount_payable - $item->amount_paid}}</td>                                            
                                            <td>{{ $item->date_paid }}</td>
                                            <td>{{ $item->method }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                                        </tr>
                                       @endforeach 
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th class="invisible"></th>
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