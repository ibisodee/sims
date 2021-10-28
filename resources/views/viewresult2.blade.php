
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

                                                            <a href="/user/checkresult2" class="btn btn-primary btn-xs">Back to List </a>
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
                                                        <p class="inv-due-date"><span class="inv-title">No. of Time School Opened :  </span> <span class="inv-date"></span>{{ $Info3=$Info1+$Info2 }}</p>

                                                    </div>                                                    
                                                </div>

                                                <div class="row inv--product-table-section">
                                                    <div class="col-12">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="">
                                                                    <tr>
                                                                        <th scope="col">Class Subject</th>
                                                                        <th class="text-right" scope="col">1st CA </th>
                                                                        <th class="text-right" scope="col">2nd CA </th>
                                                                        <th class="text-right" scope="col">Note </th>																		
                                                                        <th class="text-right" scope="col">Project </th>
                                                                        <th class="text-right" scope="col">Exam </th>
                                                                        <th class="text-right" scope="col">Total </th>
																		<th class="text-right" scope="col">Subject Position</th>
                                                                        <th class="text-right" scope="col">Subject Remarks</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                            <td>{{ $Info->sub1}}</td>
                                                                            <td class="text-center">{{ $Info->sub1_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub1_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note1}}</td>
                                                                            <td class="text-center">{{ $Info->project1}}</td>                                                                            
                                                                            <td class="text-center">{{ $Info->sub1_exam}}</td>
                                                                            <td class="text-center">{{ $total1= $Info->sub1_ca1+$Info->sub1_ca2+$Info->project1+$Info->note1+$Info->sub1_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub1_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total1 >= 90 && $total1 <= 100 )
                                                                                    A
                                                                                @elseif ($total1 >= 70 && $total1 <= 89 )
                                                                                    B
                                                                                @elseif ($total1 >= 40 && $total1 <= 69 )
                                                                                    C
                                                                                @elseif ($total1 >= 40 && $total1 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub2}}</td>
                                                                            <td class="text-center">{{ $Info->sub2_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub2_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note2}}</td>
                                                                            <td class="text-center">{{ $Info->project2}}</td>
                                                                            <td class="text-center">{{ $Info->sub2_exam}}</td>
                                                                            <td class="text-center">{{ $total2= $Info->sub2_ca1+$Info->sub2_ca2+$Info->project2+$Info->note2+$Info->sub2_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub2_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total2 >= 90 && $total2 <= 100 )
                                                                                    A
                                                                                @elseif ($total2 >= 70 && $total2 <= 89 )
                                                                                    B
                                                                                @elseif ($total2 >= 40 && $total3 <= 69 )
                                                                                    C
                                                                                @elseif ($total2 >= 40 && $total2 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub3}}</td>
                                                                            <td class="text-center">{{ $Info->sub3_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub3_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note3}}</td>
                                                                            <td class="text-center">{{ $Info->project3}}</td>
                                                                            <td class="text-center">{{ $Info->sub3_exam}}</td>
                                                                            <td class="text-center">{{ $total3= $Info->sub3_ca1+$Info->sub3_ca2+$Info->project3+$Info->note3+$Info->sub3_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub3_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total3 >= 90 && $total3 <= 100 )
                                                                                    A
                                                                                @elseif ($total3 >= 70 && $total3 <= 89 )
                                                                                    B
                                                                                @elseif ($total3 >= 40 && $total3 <= 69 )
                                                                                    C
                                                                                @elseif ($total3 >= 40 && $total3 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub4}}</td>
                                                                            <td class="text-center">{{ $Info->sub4_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub4_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note4}}</td>
                                                                            <td class="text-center">{{ $Info->project4}}</td>
                                                                            <td class="text-center">{{ $Info->sub4_exam}}</td>
                                                                            <td class="text-center">{{ $total4= $Info->sub4_ca1+$Info->sub4_ca2+$Info->project4+$Info->note4+$Info->sub4_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub4_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total4 >= 90 && $total4 <= 100 )
                                                                                    A
                                                                                @elseif ($total4 >= 70 && $total4 <= 89 )
                                                                                    B
                                                                                @elseif ($total4 >= 40 && $total4 <= 69 )
                                                                                    C
                                                                                @elseif ($total4 >= 40 && $total4 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub5}}</td>
                                                                            <td class="text-center">{{ $Info->sub5_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub5_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note5}}</td>
                                                                            <td class="text-center">{{ $Info->project5}}</td>
                                                                            <td class="text-center">{{ $Info->sub5_exam}}</td>
                                                                            <td class="text-center">{{ $total5= $Info->sub5_ca1+$Info->sub5_ca2+$Info->project5+$Info->note5+$Info->sub5_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub5_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total5 >= 90 && $total5 <= 100 )
                                                                                    A
                                                                                @elseif ($total5 >= 70 && $total5 <= 89 )
                                                                                    B
                                                                                @elseif ($total5 >= 40 && $total5 <= 69 )
                                                                                    C
                                                                                @elseif ($total5 >= 40 && $total5 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub6}}</td>
                                                                            <td class="text-center">{{ $Info->sub6_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub6_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note6}}</td>
                                                                            <td class="text-center">{{ $Info->project6}}</td>
                                                                            <td class="text-center">{{ $Info->sub6_exam}}</td>
                                                                            <td class="text-center">{{ $total6= $Info->sub6_ca1+$Info->sub6_ca2+$Info->project6+$Info->note6+$Info->sub6_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub6_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total6 >= 90 && $total6 <= 100 )
                                                                                    A
                                                                                @elseif ($total6 >= 70 && $total6 <= 89 )
                                                                                    B
                                                                                @elseif ($total6 >= 40 && $total6 <= 69 )
                                                                                    C
                                                                                @elseif ($total6 >= 40 && $total6 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub7}}</td>
                                                                            <td class="text-center">{{ $Info->sub7_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub7_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note7}}</td>
                                                                            <td class="text-center">{{ $Info->project7}}</td>
                                                                            <td class="text-center">{{ $Info->sub7_exam}}</td>
                                                                            <td class="text-center">{{ $total7= $Info->sub7_ca1+$Info->sub7_ca2+$Info->project7+$Info->note7+$Info->sub7_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub7_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total7 >= 90 && $total7 <= 100 )
                                                                                    A
                                                                                @elseif ($total7 >= 70 && $total7 <= 89 )
                                                                                    B
                                                                                @elseif ($total7 >= 40 && $total7 <= 69 )
                                                                                    C
                                                                                @elseif ($total7 >= 40 && $total7 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub8}}</td>
                                                                            <td class="text-center">{{ $Info->sub8_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub8_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note8}}</td>
                                                                            <td class="text-center">{{ $Info->project8}}</td>
                                                                            <td class="text-center">{{ $Info->sub8_exam}}</td>
                                                                            <td class="text-center">{{ $total8= $Info->sub8_ca1+$Info->sub8_ca2+$Info->project8+$Info->note8+$Info->sub8_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub8_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total8 >= 90 && $total8 <= 100 )
                                                                                    A
                                                                                @elseif ($total8 >= 70 && $total8 <= 89 )
                                                                                    B
                                                                                @elseif ($total8 >= 40 && $total8 <= 69 )
                                                                                    C
                                                                                @elseif ($total8 >= 40 && $total8 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub9}}</td>
                                                                            <td class="text-center">{{ $Info->sub9_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub9_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note9}}</td>
                                                                            <td class="text-center">{{ $Info->project9}}</td>
                                                                            <td class="text-center">{{ $Info->sub9_exam}}</td>
                                                                            <td class="text-center">{{ $total9= $Info->sub9_ca1+$Info->sub9_ca2+$Info->project9+$Info->note9+$Info->sub9_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub9_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total9 >= 90 && $total9 <= 100 )
                                                                                    A
                                                                                @elseif ($total9 >= 70 && $total9 <= 89 )
                                                                                    B
                                                                                @elseif ($total9 >= 40 && $total9 <= 69 )
                                                                                    C
                                                                                @elseif ($total9 >= 40 && $total9 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub10}}</td>
                                                                            <td class="text-center">{{ $Info->sub10_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub10_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note10}}</td>
                                                                            <td class="text-center">{{ $Info->project10}}</td>
                                                                            <td class="text-center">{{ $Info->sub10_exam}}</td>
                                                                            <td class="text-center">{{ $total10= $Info->sub10_ca1+$Info->sub10_ca2+$Info->project10+$Info->note10+$Info->sub10_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub10_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total10 >= 90 && $total10 <= 100 )
                                                                                    A
                                                                                @elseif ($total10 >= 70 && $total10 <= 89 )
                                                                                    B
                                                                                @elseif ($total10 >= 40 && $total10 <= 69 )
                                                                                    C
                                                                                @elseif ($total10 >= 40 && $total10 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>

                                                                    <tr>
                                                                            <td>{{ $Info->sub11}}</td>
                                                                            <td class="text-center">{{ $Info->sub11_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub11_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note11}}</td>
                                                                            <td class="text-center">{{ $Info->project11}}</td>
                                                                            <td class="text-center">{{ $Info->sub11_exam}}</td>
                                                                            <td class="text-center">{{ $total11= $Info->sub11_ca1+$Info->sub11_ca2+$Info->project11+$Info->note11+$Info->sub11_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub11_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total11 >= 90 && $total11 <= 100 )
                                                                                    A
                                                                                @elseif ($total11 >= 70 && $total11 <= 89 )
                                                                                    B
                                                                                @elseif ($total11 >= 40 && $total11 <= 69 )
                                                                                    C
                                                                                @elseif ($total11 >= 40 && $total11 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub12}}</td>
                                                                            <td class="text-center">{{ $Info->sub12_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub12_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note12}}</td>
                                                                            <td class="text-center">{{ $Info->project12}}</td>
                                                                            <td class="text-center">{{ $Info->sub12_exam}}</td>
                                                                            <td class="text-center">{{ $total12= $Info->sub12_ca1+$Info->sub12_ca2+$Info->project12+$Info->note12+$Info->sub12_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub12_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total12 >= 90 && $total12 <= 100 )
                                                                                    A
                                                                                @elseif ($total12 >= 70 && $total12 <= 89 )
                                                                                    B
                                                                                @elseif ($total12 >= 40 && $total12 <= 69 )
                                                                                    C
                                                                                @elseif ($total12 >= 40 && $total12 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub13}}</td>
                                                                            <td class="text-center">{{ $Info->sub13_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub13_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note13}}</td>
                                                                            <td class="text-center">{{ $Info->project13}}</td>
                                                                            <td class="text-center">{{ $Info->sub13_exam}}</td>
                                                                            <td class="text-center">{{ $total13= $Info->sub13_ca1+$Info->sub13_ca2+$Info->project13+$Info->note13+$Info->sub13_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub13_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total13 >= 90 && $total13 <= 100 )
                                                                                    A
                                                                                @elseif ($total13 >= 70 && $total13 <= 89 )
                                                                                    B
                                                                                @elseif ($total13 >= 40 && $total13 <= 69 )
                                                                                    C
                                                                                @elseif ($total13 >= 40 && $total13 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub14}}</td>
                                                                            <td class="text-center">{{ $Info->sub14_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub14_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note14}}</td>
                                                                            <td class="text-center">{{ $Info->project14}}</td>
                                                                            <td class="text-center">{{ $Info->sub14_exam}}</td>
                                                                            <td class="text-center">{{ $total14= $Info->sub14_ca1+$Info->sub14_ca2+$Info->project14+$Info->note14+$Info->sub14_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub14_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total14 >= 90 && $total14 <= 100 )
                                                                                    A
                                                                                @elseif ($total14 >= 70 && $total14 <= 89 )
                                                                                    B
                                                                                @elseif ($total14 >= 40 && $total14 <= 69 )
                                                                                    C
                                                                                @elseif ($total14 >= 40 && $total14 <= 49 )
                                                                                    D
                                                                                @else
                                                                                    E
                                                                                @endif
                                                                            </td>
                                                                    </tr>
                                                                    <tr>
                                                                            <td>{{ $Info->sub15}}</td>
                                                                            <td class="text-center">{{ $Info->sub15_ca1}}</td>
                                                                            <td class="text-center">{{ $Info->sub15_ca2}}</td>
                                                                            <td class="text-center">{{ $Info->note15}}</td>
                                                                            <td class="text-center">{{ $Info->project15}}</td>
                                                                            <td class="text-center">{{ $Info->sub15_exam}}</td>
                                                                            <td class="text-center">{{ $total15= $Info->sub15_ca1+$Info->sub15_ca2+$Info->project15+$Info->note15+$Info->sub15_exam}}</td>
                                                                            <td class="text-center">{{ $Info->sub15_position}}</td>
                                                                            <td class="text-center">
                                                                                @if ($total15 >= 90 && $total15 <= 100 )
                                                                                    A
                                                                                @elseif ($total15 >= 70 && $total15 <= 89 )
                                                                                    B
                                                                                @elseif ($total15 >= 40 && $total15 <= 69 )
                                                                                    C
                                                                                @elseif ($total15 >= 40 && $total15 <= 49 )
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
																		<br>Appearance/Cleanliness
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