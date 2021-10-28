
@include('include.adminheader')

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
    
    
    @include('include.adminnavbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        
        @include('include.adminsidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            
                
                    <div class="row layout-top-spacing ">
                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Update Admin Informations</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('fail'))
                                        <div class="alert alert-danger">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif
                                    <form class="simple-example" method="post" action="{{route('update')}}" validate>
                                    @csrf

                                        <div class="form-row mb-4">                                             
                                            
                                            <div class="col">
                                                <label for="fullName">Admin No.</label>
                                                <input type="text" class="form-control" name="id" value=" {{ $Info->id }} " readonly >
                                            </div> 
                                            <div class="col">
                                                <label for="fullName">Admin's Full Name</label>
                                                <input type="text" class="form-control" name="name" value=" {{ $Info->name }} " readonly >
                                            </div>                                            
                                            
                                        </div>

                                        <div class="form-row mb-4">                                            
                                            
                                            <div class="col">
                                                <label for="fullName">Sex</label>
                                                <input type="text" class="form-control" name="sex" value=" {{ $Info->sex }} " readonly >
                                            </div> 
                                            
                                            <div class="col">
                                                <label for="fullName">Email</label>
                                                <input type="text" class="form-control" name="email" value=" {{ $Info->email }} " readonly>
                                            </div>                                             
                                        </div>
                                        <div class="form-row">                                           
                                            <div class="col mb-4">
                                                <label for="method">User Type</label>
                                                <select class="custom-select mb-4" name="utype">
                                                    <option value="ADM">Remain Admin</option>
                                                    <option value="USR">Make Non Admin</option>                                                    
                                                </select> 
                                            </div>
                                            <div class="col">
                                                <label for="fullName">Current Status</label>
                                                <input type="text" class="form-control" name="admission" value=" {{ $Info->status }} "  readonly>
                                            </div>
                                            <div class="col">
                                                <label for="fullName">Registered On</label>
                                                <input type="text" class="form-control" name="admission" value=" {{ $Info->created_at }} "  readonly>
                                            </div>  
                                            
                                        </div>
                                        

                                        <input type="hidden" name="cid" value=" {{ $Info->id }} ">
                                        <button class="btn btn-primary submit-fn mt-2" type="submit">Effect Changes</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        
                 
                @include('include.adminfooter')
    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="assets/js/scrollspyNav.js"></script>
    <script src="assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
    <script src="plugins/flatpickr/custom-flatpickr.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <script>        
        $('#default-ordering').DataTable( {
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "order": [[ 3, "desc" ]],
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->

</body>

</html>