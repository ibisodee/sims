
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
                                            <li class="nav-item">
                                                <div class="nav-link list-actions" id="invoice-00001" data-invoice-id="00001">
                                                    <div class="f-m-body">
                                                        
                                                        <div class="f-body">
                                                            <p class="invoice-number">[ {{ $Info->id }} ] Result Year {{ $Info->year }} </p>
                                                            <p class="invoice-customer-name"><span>Result for:</span>  {{ $Info->class}}</p>
															<p class="invoice-generated-date">{{ $Info->session}} </p>
                                                            
                                                            <p class="btn-danger text-center">Click to Expand </p>

                                                            <a href="/user/checkresult1" class="btn btn-primary btn-xs">Back to List </a>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="invoice-container">
                                <div class="invoice-inbox">

                                    <div class="inv-not-selected">
                                    <p>Click the Printer Button to Print.</p>
                                    </div>

                                    <div class="invoice-header-section">
                                        <h4 class="inv-number"></h4>
                                        <div class="invoice-action">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Print Result"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                        </div>
                                    </div>
                                    
                                    <div id="ct" class="">
                                        
                                        <div class="invoice-00001">
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
                                                        <p class="inv-street-addr">Road 13 First Avenue New Road, Off Ada-George-Location Road, Port Harcourt, Rivers State <br><strong>Tel: 09036267513</strong></p>
                                                    </div>
                                                    
                                                    
                                                </div>

                                                <div class="row inv--detail-section">

                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-to">{{ Auth::user()->name }}</p>
                                                    </div>  
                                                    
                                                    <div class="col-sm-7 align-self-center">
                                                        <p class="inv-customer-name">Year {{ $Info->year }} {{ $Info->session }} </p>
														<p class="inv-list-number"><span class="inv-title">Registration Number : </span> <span class="">{{ Auth::user()->regno }}</span></p>
                                                        <p class="inv-list-number"><span class="inv-title">State of Origin : </span> <span class="">{{ Auth::user()->state }}</span></p>
														<p class="inv-list-number"><span class="inv-title">Sex : </span> <span class=""> {{ Auth::user()->sex }} </span></p>
                                                        
                                                    </div>
													
													<div class="col-sm-5 align-self-center">
                                                        <p class="inv-created-date"><span class="inv-title">Class: </span> <span class="inv-date">{{ $Info->class }} </span></p>
                                                        <p class="inv-created-date"><span class="inv-title">No. of Time Present : </span> <span class="inv-date">{{ $Info1=$Info->attendance }} </span></p>
                                                        <p class="inv-due-date"><span class="inv-title">No. of Time Absent : </span> <span class="inv-date"></span>{{ $Info2=$Info->absent }}</p>
                                                        <p class="inv-due-date"><span class="inv-title">No. of Time School Opened : </span> <span class="inv-date"></span>{{ $Info3=$Info1+$Info2 }}</p>

                                                    </div>                                                    
                                                </div>

                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">Class Subject</th>
                                                                        <th class="text-center">Mid Term Exam </th>
                                                                        <th class="text-right" scope="col">End Term Exam </th>                                                                        
                                                                        <th class="text-right" scope="col">Average Score </th>
																		<th class="text-right" scope="col">Subject Position</th>
                                                                        <th class="text-right" scope="col">Subject Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                            <td>{{ $Info->sub1}}</td>
                                                                            <td class="text-center">{{ $Info->mte1}}</td>
                                                                            <td class="text-center">{{ $Info->ete1}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total1= $Info->mte1+$Info->ete1}}"> {{ $avg1= $total1/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub1_position}}</td>
                                                                            <td class="text-center">
                                                                                @if($avg1 >= 90 && $avg1 <= 100)
                                                                                    A
                                                                                @elseif($avg1 >= 70 && $avg1 <= 89 )
                                                                                    B
                                                                                @elseif($avg1 >= 50 && $avg1 <= 69 )
                                                                                    C
                                                                                @elseif($avg1 >= 40 && $avg1 <= 49 )
                                                                                    D
                                                                                @else($avg1 >= 39 && $avg1 <= 0 )
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub2}}</td>
                                                                            <td class="text-center">{{ $Info->mte2}}</td>
                                                                            <td class="text-center">{{ $Info->ete2}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total2= $Info->mte2+$Info->ete2}}"> {{ $avg2= $total2/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub2_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg2 >= 90 && $avg2 <= 100 )
                                                                                    A
                                                                                @elseif ($avg2 >= 70 && $avg2 <= 89 )
                                                                                    B
                                                                                @elseif ($avg2 >= 50 && $avg2 <= 69 )
                                                                                    C
                                                                                @elseif ($avg2 >= 40 && $avg2 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub3}}</td>
                                                                            <td class="text-center">{{ $Info->mte3}}</td>
                                                                            <td class="text-center">{{ $Info->ete3}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total3= $Info->mte3+$Info->ete3}}"> {{ $avg3= $total3/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub3_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg3 >= 90 && $avg3 <= 100 )
                                                                                    A
                                                                                @elseif ($avg3 >= 70 && $avg3 <= 89 )
                                                                                    B
                                                                                @elseif ($avg3 >= 50 && $avg3 <= 69 )
                                                                                    C
                                                                                @elseif ($avg3 >= 40 && $avg3 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub4}}</td>
                                                                            <td class="text-center">{{ $Info->mte4}}</td>
                                                                            <td class="text-center">{{ $Info->ete4}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total4= $Info->mte4+$Info->ete4}}"> {{ $avg4= $total4/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub4_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg4 >= 90 && $avg4 <= 100 )
                                                                                    A
                                                                                @elseif ($avg4 >= 70 && $avg4 <= 89 )
                                                                                    B
                                                                                @elseif ($avg4 >= 50 && $avg4 <= 69 )
                                                                                    C
                                                                                @elseif ($avg4 >= 40 && $avg4 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub5}}</td>
                                                                            <td class="text-center">{{ $Info->mte5}}</td>
                                                                            <td class="text-center">{{ $Info->ete5}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total5= $Info->mte5+$Info->ete5}}"> {{ $avg5= $total5/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub5_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg5 >= 90 && $avg5 <= 100 )
                                                                                    A
                                                                                @elseif ($avg5 >= 70 && $avg5 <= 89 )
                                                                                    B
                                                                                @elseif ($avg5 >= 50 && $avg5 <= 69 )
                                                                                    C
                                                                                @elseif ($avg5 >= 40 && $avg5 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub6}}</td>
                                                                            <td class="text-center">{{ $Info->mte6}}</td>
                                                                            <td class="text-center">{{ $Info->ete6}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total6= $Info->mte6+$Info->ete6}}"> {{ $avg6= $total6/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub6_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg6 >= 90 && $avg6 <= 100 )
                                                                                    A
                                                                                @elseif ($avg6 >= 70 && $avg6 <= 89 )
                                                                                    B
                                                                                @elseif ($avg6 >= 50 && $avg6 <= 69 )
                                                                                    C
                                                                                @elseif ($avg6 >= 40 && $avg6 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub7}}</td>
                                                                            <td class="text-center">{{ $Info->mte7}}</td>
                                                                            <td class="text-center">{{ $Info->ete7}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total7= $Info->mte7+$Info->ete7}}"> {{ $avg7= $total7/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub7_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg7 >= 90 && $avg7 <= 100 )
                                                                                    A
                                                                                @elseif ($avg7 >= 70 && $avg7 <= 89 )
                                                                                    B
                                                                                @elseif ($avg7 >= 50 && $avg7 <= 69 )
                                                                                    C
                                                                                @elseif ($avg7 >= 40 && $avg7 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub8}}</td>
                                                                            <td class="text-center">{{ $Info->mte8}}</td>
                                                                            <td class="text-center">{{ $Info->ete8}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total8= $Info->mte8+$Info->ete8}}"> {{ $avg8= $total8/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub8_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg8 >= 90 && $avg8 <= 100 )
                                                                                    A
                                                                                @elseif ($avg8 >= 70 && $avg8 <= 89 )
                                                                                    B
                                                                                @elseif ($avg8 >= 50 && $avg8 <= 69 )
                                                                                    C
                                                                                @elseif ($avg8 >= 40 && $avg8 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub9}}</td>
                                                                            <td class="text-center">{{ $Info->mte9}}</td>
                                                                            <td class="text-center">{{ $Info->ete9}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total9= $Info->mte9+$Info->ete9}}"> {{ $avg9= $total9/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub9_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg9 >= 90 && $avg9 <= 100 )
                                                                                    A
                                                                                @elseif ($avg9 >= 70 && $avg9 <= 89 )
                                                                                    B
                                                                                @elseif ($avg9 >= 50 && $avg9 <= 69 )
                                                                                    C
                                                                                @elseif ($avg9 >= 40 && $avg9 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub10}}</td>
                                                                            <td class="text-center">{{ $Info->mte10}}</td>
                                                                            <td class="text-center">{{ $Info->ete10}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total10= $Info->mte10+$Info->ete10}}"> {{ $avg10= $total10/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub10_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg10 >= 90 && $avg10 <= 100 )
                                                                                    A
                                                                                @elseif ($avg10 >= 70 && $avg10 <= 89 )
                                                                                    B
                                                                                @elseif ($avg10 >= 50 && $avg10 <= 69 )
                                                                                    C
                                                                                @elseif ($avg10 >= 40 && $avg10 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>

                                                                    <tr>
                                                                            <td>{{ $Info->sub11}}</td>
                                                                            <td class="text-center">{{ $Info->mte11}}</td>
                                                                            <td class="text-center">{{ $Info->ete11}}</td>
                                                                            <td class="text-center"><input type="hidden" value="{{ $total11= $Info->mte11+$Info->ete11}}"> {{ $avg11= $total11/2}}</td>
                                                                            <td class="text-center">{{ $Info->sub11_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($avg11 >= 90 && $avg11 <= 100 )
                                                                                    A
                                                                                @elseif ($avg11 >= 70 && $avg11 <= 89 )
                                                                                    B
                                                                                @elseif ($avg11 >= 50 && $avg11 <= 69 )
                                                                                    C
                                                                                @elseif ($avg11 >= 40 && $avg11 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
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
																		{{ $Info->char1rate}} 
																	<br>{{ $Info->char2rate}} 
																	<br>{{ $Info->char3rate}} 
																	<br>{{ $Info->char4rate}} 
																	<br>{{ $Info->char5rate}} 
																	<br>{{ $Info->char6rate}} 
																	<br>{{ $Info->char7rate}} 
																	<br>{{ $Info->char8rate}} 
																	<br>{{ $Info->char9rate}} 
																	</p>
                                                                </div>
																
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="inv--total-amounts text-sm-left">
                                                        <div class="row">
                                                                <div class="col-sm-4 col-7 grand-total-amount">
                                                                    <h4 class="">{{ $Info->total_avg_score }}</h4><p class=""><b>Total Average Score </b></p>
                                                                </div>
                                                                <div class="col-sm-4 col-7 grand-total-amount">
                                                                    <h4 class="">{{$Info->grand_avg_score}}</h4><p class=""><b>Grand Average Score </b></p>
                                                                </div>																
																<div class="col-sm-4 col-7 grand-total-amount">
                                                                    <h4 class="">{{$Info->Grade}}</h4><p class=""><b>Grade </b></p>
                                                                </div>
																<br><br><br><br>
																
                                                                <div class="col-sm-5 col-7 grand-total-title">
                                                                    <h4 class="">Home Teacher's Remark</h4>
                                                                </div>
                                                                <div class="col-sm-7 col-5">
                                                                    <p class="">{{ $Info->home_remark}}</p>
                                                                </div>
                                                                <div class="col-sm-5 col-7 grand-total-title">
                                                                    <h4 class="">School Head's Remark</h4>
                                                                </div>
                                                                <div class="col-sm-7 col-5">
                                                                    <p class="">{{ $Info->head_remark}}</p>
                                                                </div>																
                                                                
																<br><br><br><br>
																<div class="col-sm-4 col-7">
                                                                    <img src="{{ asset('assets/img/key.jpg') }}" width="60%">
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <img src="{{ asset('assets/img/stamp.jpg') }}" width="40%">
                                                                </div>	
																<div class="col-sm-4 col-7">                                                                
                                                                    <img src="{{ asset('assets/img/stamp1.jpg') }}" width="70%">
                                                                    <p class="small invoice-number">{{ $Info->created_at }} </p>
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