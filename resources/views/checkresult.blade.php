
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
                                            <input type="hidden" name="1sub_total" value="{{ $regno = $item->regno}}">
                                            <input type="hidden" name="1sub_total" value="{{ $id = Auth::user()->regno }}">                                             
                                           
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
                                                            <a href="/user/viewresult/{{$item->id}}" class="btn btn-primary btn-xs">Click to View </a>
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
                                    
                                    <div id="ct" class="">
                                        
                                        <div class="-">
                                            <div class="content-section  animated animatedFadeInUp fadeInUp">

                                                <div class="row inv--head-section">

                                                    <div class="col-sm-6 col-12">
                                                        <img src="{{ asset('assets/img/logo.png')}}" class="navbar-logo" alt="logo">   
                                                        <h5 class="in-heading"><strong>ITECHQUEEN INTERNATIONAL SCHOOL</strong></h5>
                                                    </div>
													<div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                        <div class="company-info">                                                        
                                                            <img src="{{ Auth::user()->profile_photo_url }}"  class="navbar-logo" alt="logo" style="border-radius:  0 50% 50% 50%; width:160px">   
                                                        </div>
                                                    </div>
													<div class="col-sm-6 align-self-center  text-sm-left order-sm-0 order-1">
                                                        <p class="inv-street-addr">Road 13 First Avenue New Road, Off Ada-George-Location Road, Port Harcourt, Rivers State <br><strong>Tel: 09050717032, 08145272887</strong></p>
                                                    </div>
                                                    
                                                    
                                                </div>

                                                <div class="row inv--detail-section">

                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">Name of Student</p>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name"> Year and Term </p>
														<p class="inv-list-number"><span class="inv-title">Registration Number : </span> <span class="">GBIS1001</span></p>
                                                        <p class="inv-list-number"><span class="inv-title">State of Origin : </span> <span class="">Rivers</span></p>
														<p class="inv-list-number"><span class="inv-title">Sex : </span> <span class=""> Female </span></p>
                                                        
                                                    </div>
													
													<div class="col-sm-5 align-self-center">
                                                        <p class="inv-created-date"><span class="inv-title">Class: </span> <span class="inv-date">Primary 5 </span></p>
                                                        <p class="inv-created-date"><span class="inv-title">Attendance: </span> <span class="inv-date">100 Days </span></p>
                                                        <p class="inv-due-date"><span class="inv-title">Absent : </span> <span class="inv-date"></span>4 </p>
                                                    </div>
                                                   
                                                </div>

                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">S.No</th>
                                                                        <th scope="col">Subject</th>
                                                                        <th class="text-right" scope="col">Mid Term Exam</th>
                                                                        <th class="text-right" scope="col">End Term Exam</th>
                                                                        <th class="text-right" scope="col">Average Score</th>
																		<th class="text-right" scope="col">Subject Position</th>
                                                                        <th class="text-right" scope="col">Subject Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Subject Name</td>
                                                                        <td class="text-right">-</td>
                                                                        <td class="text-right">-</td>
                                                                        <td class="text-right">-</td>
																		<td class="text-right">-</td>
                                                                        <td class="text-right">-</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <div class="row">
                                                                <div class="col-sm-12 col-12">
                                                                    <h6 class=" inv-title">Character Traits Rating</h6>
                                                                </div>
                                                                
                                                                <div class="col-sm-8 col-12">
                                                                    <p class=" inv-subtitle">
																		Ability to complete task
																		<br>Appearance/Cleanness
																		<br>Attitude
																		<br>Orderliness
																		<br>Psychomotor Ability
																		<br>Regularity
																		<br>Respect
																		<br>Responsibility
																		<br>Independence
																	
																	</p>
                                                                </div>
                                                                <div class="col-sm-4 col-4">
                                                                    <p class="inv-subtitle">
																		-- 
																	<br>-- 
																	<br>-- 
																	<br>-- 
																	<br>-- 
																	<br>-- 
																	<br>-- 
																	<br>-- 
																	<br>-- 
																	</p>
                                                                </div>
																
																

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-left">
                                                            <div class="row">
                                                                <div class="col-sm-4 col-7 grand-total-amount">
                                                                    <h4 class="">8344</h4><p class=""><b>Total Average Score </b></p>
                                                                </div>
                                                                <div class="col-sm-4 col-7 grand-total-amount">
                                                                    <h4 class="">6789</h4><p class=""><b>Grand Average Score </b></p>
                                                                </div>																
																<div class="col-sm-4 col-7 grand-total-amount">
                                                                    <h4 class="">Excellent</h4><p class=""><b>Grade </b></p>
                                                                </div>
																<br><br><br><br>
																
                                                                <div class="col-sm-5 col-7 grand-total-title">
                                                                    <h4 class="">Home Teacher Remark</h4>
                                                                </div>
                                                                <div class="col-sm-7 col-5">
                                                                    <p class="">Home Teacher Remark and All coment Goes Here Remark and All coment Goes H</p>
                                                                </div>
                                                                <div class="col-sm-5 col-7 grand-total-title">
                                                                    <h4 class="">Home Teacher Remark</h4>
                                                                </div>
                                                                <div class="col-sm-7 col-5">
                                                                    <p class="">Home Teacher Remark and All coment Goes Here Remark and All coment Goes H</p>
                                                                </div>																
                                                                
																<br><br><br><br>
																<div class="col-sm-4 col-7">
                                                                    <img src="{{ asset('assets/img/key.jpg') }}" width="60%">
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <img src="{{ asset('assets/img/stamp.jpg') }}" width="40%">
                                                                </div>	
																<div class="col-sm-4 col-5">
                                                                    <img src="{{ asset('assets/img/stamp1.jpg') }}" width="70%">
                                                                </div>	
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
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