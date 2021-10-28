
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
                <div class="row invoice layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="app-hamburger-container">
                            <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        </div>
                        <div class="doc-container">
                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <div class="search">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        
                                        <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                                            @foreach ($list as $item)
                                            <input type="hidden" name="1sub_total" value="{{ $regno = $item->regno}}" >
                                            <input type="hidden" name="1sub_total" value="{{ $id = Auth::user()->regno }}" >
                                            

                                            @if ( $regno == $id )

                                            <li class="nav-item">
                                                <div class="nav-link" id="invoice-00001" data-invoice-id="{{ $item->id}}">
                                                    <div class="f-m-body">
                                                        <div class="f-head">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>                                                        </div>
                                                        <div class="f-body">
                                                            <p class="invoice-number">[ {{ $item->id}} ] Result Year {{ $item->year}} </p>
                                                            <p class="invoice-customer-name"><span>Result for:</span>  {{ $item->class}}</p>
															<p class="invoice-generated-date">{{ $item->session}} </p>
                                                            <a href="/user/viewresult1/{{$item->id}}" class="btn btn-primary btn-xs">Click to View </a>
                                                        </div>                                                        
                                                    </div>

                                                </div>
                                            </li>

                                            @endif

                                            @endforeach  
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-container">
                                <div class="invoice-inbox">

                                    <div class="inv-not-selected">
                                        <p>Browse to Open a Result Sheet from the list. You would be directed to Result Portal 
                                        <br> If there are no list at the left side, it means no approved result for this section</p>
                                    </div>
                                    

                                    <div class="invoice-header-section">
                                        <h4 class="inv-number"></h4>
                                        <div class="invoice-action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Reply"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="inv--thankYou">
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <p class="">This result is for electronic use only. For reverification, complaint or comment visit the controller of Exams of SIMS..</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                        </div>

                    </div>
                </div>             
            @include('include.userfooter')
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/apps/invoice.js') }}"></script> 

</body>
</html>