
@include('include.adminheader')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

<div class="overlay"></div>
<div class="search-overlay"></div>


@include('include.adminnavbar')

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

<div class="overlay"></div>
<div class="search-overlay"></div>

@include('include.adminsidebar')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget-one widget">
                            <div class="widget-content">
                                <div class="w-numeric-value">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    </div>
                                    <div class="w-content">
                                        <span class="w-value">{{$counter = App\Models\Exam::all()->whereNotNull('head_remark')->count() }}</span>
                                        <span class="w-numeric-title">Total Released Results</span>
                                    </div>
                                    <div class="w-content">
                                        <span class="w-value">{{$counter = App\Models\Exam::all()->whereNull('head_remark')->count() }}</span>
                                        <span class="w-numeric-title">Total Pending Results</span>
                                    </div>
                                </div>
                                <div class="w-chart">
                                    <div id="total-orders"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        
                        <div class="widget widget-account-invoice-one">

                            <div class="widget-heading">
                                <h5 class="">Account Info</h5>
                            </div>

                            <div class="widget-content">
                                <div class="invoice-box">
                                    
                                    <div class="acc-total-info">
                                        <h5>Pending Fees</h5>
                                        <p class="acc-amount">{{ $pending = App\Models\Fee::all()->sum('amount_payable')-App\Models\Fee::all()->sum('amount_paid')}}</p>
                                    </div>

                                    <div class="inv-detail">                                        
                                        <div class="info-detail-1">
                                            <p>Fees Paid</p>
                                            <p>{{$feepaid = App\Models\Fee::all()->sum('amount_paid')}}</p>
                                        </div>
                                        <div class="info-detail-2">
                                            <p>Fees Payable</p>
                                            <p>{{$feepayable = App\Models\Fee::all()->sum('amount_payable')}}</p>
                                        </div>                                        
                                    </div>

                                    <div class="inv-action">                                        
                                        <a href="/admin/insert_fees" class="btn btn-danger">Record New Payment</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-one">
                            <div class="widget-heading">
                                <h5 class="">Counts</h5>
                            </div>

                            <div class="widget-content">
                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                <span class="avatar-title rounded-circle">NUR</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Children in Nursery Session</h4>
                                                <p class="meta-date">--</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>{{$nursery = App\Models\User::all()->where('class', 'Pre-Nursery (Ruby)')->count()+App\Models\User::all()->where('class', 'Reception 1 (Jasper)')->count()+App\Models\User::all()->where('class', 'Reception 2 (Ivory)')->count()+App\Models\User::all()->where('class', 'Transition (Citrine)')->count()}}</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title rounded-circle">PRI</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Pupils in Primary Session</h4>
                                                <p class="meta-date">--</p>
                                            </div>
                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>{{$nursery = App\Models\User::all()->where('class', 'Grade 1 (Sapphire)')->count()+App\Models\User::all()->where('class', 'Grade 2 (Emerald)')->count()+App\Models\User::all()->where('class', 'Grade 3 (Crystal)')->count()+App\Models\User::all()->where('class', 'Grade 4 (Diamond)')->count()+App\Models\User::all()->where('class', 'Grade 5 (Gold)')->count()}} </span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="avatar avatar-xl">
                                                    <span class="avatar-title rounded-circle">JSS</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Student  in Junior Secondary</h4>
                                                <p class="meta-date">--</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-inc">
                                            <p><span>{{$nursery = App\Models\User::all()->where('class', 'JSS 1 (Silver)')->count()+App\Models\User::all()->where('class', 'JSS 2 (Beryl)')->count()+App\Models\User::all()->where('class', 'JSS 3 (Topaz)')->count()}}</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="transactions-list">
                                    <div class="t-item">
                                        <div class="t-company-name">
                                            <div class="t-icon">
                                                <div class="icon">
                                                <span class="avatar-title rounded-circle">SSS</span>
                                                </div>
                                            </div>
                                            <div class="t-name">
                                                <h4>Student in Senior Secondary</h4>
                                                <p class="meta-date">--</p>
                                            </div>

                                        </div>
                                        <div class="t-rate rate-dec">
                                            <p><span>{{$nursery = App\Models\User::all()->where('class', 'SSS 1 (Onyx)')->count()+App\Models\User::all()->where('class', 'SSS 2 (Opal)')->count()+App\Models\User::all()->where('class', 'SSS 3 (Spinel)')->count()}}</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  

                </div>

            
            @include('include.adminfooter')
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dash_1.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>
</html>