
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
        <div id="content" class="main-content " >
            <div class="">
                <br>
                <center>                
                    <a href="#nursery" class="btn btn-primary btn-sm">Nursery Section</a>
                    <a href="#primary" class="btn btn-secondary btn-sm">Primary Section</a>
                    <a href="#junior" class="btn btn-success btn-sm">Junior Secondary Section</a>
                    <a href="#senior" class="btn btn-danger btn-sm">Senior Secondary Section</a>
                </center>
                <div class="" >
                    <div id="nursery" class="row layout-top-spacing">
                        <div  class="col-xl-12 layout-spacing">
                            <div class="statbox widget box box-shadow " >
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Insert Nursery Exam Records</h4>
                                        </div>                 
                                    </div>
                                </div>
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
                                <div class="widget-content widget-content-area ">
                                    <form action="{{ route('exams.store') }}" method="POST">
                                    @csrf
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input type="text" class="form-control" name="regno" placeholder="Reg No">
                                            </div> 
                                            <div class="col">                                           
                                                <select class="custom-select mb-4" name="session">
                                                    <option selected>Term</option>
                                                    <option value="1st Term">1st Term</option>
                                                    <option value="2nd Term">2nd Term</option>
                                                    <option value="3rd Term">3rd Term</option>
                                                </select> 
                                            </div>
                                            <div class="col">                                             
                                                <select class="custom-select mb-4" name="class">
                                                    <option selected>Class</option>
                                                    <option value="Pre-Nursery (Ruby)" selected="selected">Pre Nursery (Ruby)</option>
                                                    <option value="Reception 1 (Jasper)">Reception 1 (Jasper)</option>
                                                    <option value="Reception 2 (Ivory)">Reception 2 (Ivory)</option>
                                                                                             
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="year" placeholder="Year">
                                            </div>
                                        </div>

                                        <!-- Subject 1 -->
                                       
                                        <div class="form-row mb-4">1
                                            <div class="col-3">
                                                <select class="custom-select" name="sub1">
                                                    <option value="Language Arts">Language Arts</option>                                                                                                       
                                                </select>
                                            </div>

                                            <div class="col"><input type="text" class="form-control" name="mte1" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete1" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub1_position" placeholder="Position"></div> 
                                        </div>

                                        <!-- Subject 2 -->
                                        <div class="form-row mb-4">2
                                            <div class="col-3">
                                                <select class="custom-select" name="sub2">                                                                                                       
                                                    <option value="Phonics">Phonics</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte2" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete2" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub2_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 3 -->
                                        <div class="form-row mb-4">3
                                        <div class="col-3">
                                                <select class="custom-select" name="sub3">
                                                    <option value="C.R.K">C.R.K</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte3" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete3" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub3_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 4 -->
                                        <div class="form-row mb-4">4
                                            <div class="col-3">
                                                <select class="custom-select" name="sub4">
                                                   <option value="Health Habit">Health Habit</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte4" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete4" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub4_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 5 -->
                                        <div class="form-row mb-4">5
                                            <div class="col-3">
                                                <select class="custom-select" name="sub5">                                                    
                                                    <option value="Social Habit">Social Habit</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte5" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete5" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub5_position" placeholder="Position"></div>
                                         </div>
                                        <!-- Subject 6 -->
                                        <div class="form-row mb-4">6
                                            <div class="col-3">
                                                <select class="custom-select" name="sub6">                                                    
                                                    <option value="Nature Studies">Nature Studies</option>                                                   
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte6" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete6" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub6_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 7 -->
                                        <div class="form-row mb-4">7
                                            <div class="col-3">
                                                <select class="custom-select" name="sub7">                                                    
                                                    <option value="Number Work">Number Work</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte7" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete7" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub7_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 8 -->
                                        <div class="form-row mb-4">8
                                            <div class="col-3">
                                                <select class="custom-select" name="sub8">
                                                    <option value="Language Development">Language Development</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte8" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete8" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub8_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 9 -->
                                        <div class="form-row mb-4">9
                                            <div class="col-3">
                                                <select class="custom-select" name="sub9">                                                    
                                                    <option value="Reasoning Skills">Reasoning Skills</option>                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte9" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete9" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub9_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 10 -->
                                        <div class="form-row mb-4">10
                                            <div class="col-3">
                                                <select class="custom-select" name="sub10">
                                                    
                                                    <option value="Rhyme">Rhyme</option>
                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte10" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete10" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub10_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 11 -->
                                        <div class="form-row mb-4">11
                                            <div class="col-3">
                                                <select class="custom-select" name="sub11">
                                                    
                                                    <option value="Story Telling">Story Telling</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte11" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete11" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub11_position" placeholder="Position"></div>
                                        </div>
                                        
                                        <!-- Subject 12 -->
                                        <div class="form-row mb-4">12
                                            <div class="col-3">
                                                <select class="custom-select" name="sub12">
                                                    
                                                    <option value="Fine Arts">Fine Arts</option>
                                                   
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte12" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete12" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub12_position" placeholder="Position"></div>
                                        </div>
                                        
                                        <!-- Subject 13 -->
                                        <div class="form-row mb-4">13
                                            <div class="col-3">
                                                <select class="custom-select" name="sub13">
                                                    
                                                    <option value="Finemotor Skills">Finemotor Skills</option>
                                                    
                                                </select>
                                            </div>
                                            
                                            <div class="col"><input type="text" class="form-control" name="mte13" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete13" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub13_position" placeholder="Position"></div>
                                        </div>
                                        <input type="submit" name="time" class="mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="primary"  class="row layout-top-spacing">

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Insert Primary Exam Records</h4>
                                        </div>                 
                                    </div>
                                </div>
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
                                <div class="widget-content widget-content-area">
                                    <form action="{{ route('exams.store') }}" method="POST">
                                    @csrf
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input type="text" class="form-control" name="regno" placeholder="Reg No">
                                            </div> 
                                            <div class="col">                                           
                                                <select class="custom-select mb-4" name="session">
                                                    <option selected>Term</option>
                                                    <option value="1st Term">1st Term</option>
                                                    <option value="2nd Term">2nd Term</option>
                                                    <option value="3rd Term">3rd Term</option>
                                                </select> 
                                            </div>
                                            <div class="col">                                             
                                                <select class="custom-select mb-4" name="class">
                                                    <option selected value="Transition (Citrine)">Transition (Citrine)</option>
                                                    <option value="Grade 1 (Sapphire)">Grade 1 (Sapphire)</option>
                                                    <option value="Grade 2 (Emerald)">Grade 2 (Emerald)</option>
                                                    <option value="Grade 3 (Crystal)">Grade 3 (Crystal)</option>
                                                    <option value="Grade 4 (Diamond)">Grade 4 (Diamond)</option>
                                                    <option value="Grade 5 (Gold)">Grade 5 (Gold)</option>                                                                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="year" placeholder="Year">
                                            </div>
                                        </div>

                                        <!-- Subject 1 -->
                                       
                                        <div class="form-row mb-4">1
                                         <div class="col-3">
                                                <select class="custom-select" name="sub1">
                                                    
                                                    <option value="Non-verbal reasoning">Non-verbal reasoning</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte1" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete1" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub1_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 2 -->
                                        <div class="form-row mb-4">2
                                            <div class="col-3">
                                                <select class="custom-select" name="sub2">
                                                    
                                                    <option value="Basic science & Tech.">Basic science & Tech.</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte2" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete2" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub2_position" placeholder="Position"></div>
                                        </div>
                                        <!-- Subject 3 -->
                                        <div class="form-row mb-4">3
                                            <div class="col-3">
                                                <select class="custom-select" name="sub3">
                                                    
                                                    <option value="Religion & Value Edu.">Religion & Value Edu.</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte3" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete3" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub3_position" placeholder="Position"></div>
                                                                             
                                        </div>
                                        <!-- Subject 4 -->
                                        <div class="form-row mb-4">4
                                            <div class="col-3">
                                                <select class="custom-select" name="sub4">
                                                    
                                                    <option value="Prevocational Studies">Prevocational Studies</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte4" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete4" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub4_position" placeholder="Position"></div>
                                                                                
                                        </div>
                                        <!-- Subject 5 -->
                                        <div class="form-row mb-4">5
                                            <div class="col-3">
                                                <select class="custom-select" name="sub5">
                                                    
                                                    <option value="Critical Reasoning">Critical Reasoning</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte5" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete5" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub5_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 6 -->
                                        <div class="form-row mb-4">6
                                            <div class="col-3">
                                                <select class="custom-select" name="sub6">
                                                    
                                                    <option value="English Studies">English Studies</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte6" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete6" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub6_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 7 -->
                                        <div class="form-row mb-4">7
                                            <div class="col-3">
                                                <select class="custom-select" name="sub7">
                                                    
                                                    <option value="Cultural & Creative Arts">Cultural & Creative Arts</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte7" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete7" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub7_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 8 -->
                                        <div class="form-row mb-4">8
                                            <div class="col-3">
                                                <select class="custom-select" name="sub8">
                                                    
                                                    <option value="French Language">French Language</option>
                                                   
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte8" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete8" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub8_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 9 -->
                                        <div class="form-row mb-4">9
                                            <div class="col-3">
                                                <select class="custom-select" name="sub9">
                                                    
                                                    <option value="Verbal Reasoning">Verbal Reasoning</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte9" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete9" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub9_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 10 -->
                                        <div class="form-row mb-4">10
                                            <div class="col-3">
                                                <select class="custom-select" name="sub10">
                                                    
                                                    <option value="Quantitative Reasoning">Quantitative Reasoning</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte10" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete10" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub10_position" placeholder="Position"></div>
                                            
                                        </div>
                                        <!-- Subject 11 -->
                                        <div class="form-row mb-4">11
                                            <div class="col-3">
                                                <select class="custom-select" name="sub11">
                                                    
                                                    <option value="Mathematics">Mathematics</option>

                                                </select>
                                            </div>
                                            <div class="col"><input type="text" class="form-control" name="mte11" placeholder="MTE"></div>
                                            <div class="col"><input type="text" class="form-control" name="ete11" placeholder="ETE"></div>
                                            <div class="col"><input type="text" class="form-control" name="sub11_position" placeholder="Position"></div>
                                            
                                        </div>
                                        
                                        <input type="submit" name="time" class="mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div  id="junior" class="row layout-top-spacing">

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Insert Junior Exam Records</h4>
                                        </div>                 
                                    </div>
                                </div>
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
                                <div class="widget-content widget-content-area">
                                    <form action="{{ route('exams.store') }}" method="POST">
                                    @csrf
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input type="text" class="form-control" name="regno" placeholder="Reg No">
                                            </div> 
                                            <div class="col">                                           
                                                <select class="custom-select mb-4" name="session">
                                                    <option selected>Term</option>
                                                    <option value="1st Term">1st Term</option>
                                                    <option value="2nd Term">2nd Term</option>
                                                    <option value="3rd Term">3rd Term</option>
                                                </select> 
                                            </div>
                                            <div class="col">                                             
                                                <select class="custom-select mb-4" name="class">
                                                    <option selected value="JSS 1 (Silver)">JSS 1 (Silver)</option>
                                                    <option value="JSS 2 (Beryl)">JSS 2 (Beryl)</option>
                                                    <option value="JSS 3 (Topaz)">JSS 3 (Topaz)</option>                                                   
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="year" placeholder="Year">
                                            </div>
                                        </div>

                                        <!-- Subject 1 -->
                                       
                                        <div class="form-row mb-4">1
                                         <div class="col-3">
                                                <select class="custom-select" name="sub1">
                                                    <option value="Mathematics">Mathematics</option>                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project1" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note1" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 2 -->
                                        <div class="form-row mb-4">2
                                            <div class="col-3">
                                                <select class="custom-select" name="sub2">
                                                    
                                                    <option value="Basic Science">Basic Science</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project2" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note2" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 3 -->
                                        <div class="form-row mb-4">3
                                        <div class="col-3">
                                                <select class="custom-select" name="sub3">
                                                    
                                                    <option value="Basic Tech.">Basic Tech.</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project3" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note3" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 4 -->
                                        <div class="form-row mb-4">4
                                        <div class="col-3">
                                                <select class="custom-select" name="sub4">

                                                    <option value="Basic Civic Education">Basic Civic Education</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project4" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note4" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 5 -->
                                        <div class="form-row mb-4">5
                                        <div class="col-3">
                                                <select class="custom-select" name="sub5">
                                                    
                                                    <option value="French Language ">French Language </option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project5" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note5" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 6 -->
                                        <div class="form-row mb-4">6
                                        <div class="col-3">
                                                <select class="custom-select" name="sub6">
                                                   
                                                   <option value="C.C.A (Fine Art)">C.C.A (Fine Art)</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project6" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note6" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 7 -->
                                        <div class="form-row mb-4">7
                                        <div class="col-3">
                                                <select class="custom-select" name="sub7">
                                                    
                                                    <option value="Business Studies">Business Studies</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project7" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note7" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 8 -->
                                        <div class="form-row mb-4">8
                                        <div class="col-3">
                                                <select class="custom-select" name="sub8">
                                                    
                                                    <option value="C.R.S.">C.R.S.</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project8" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note8" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 9 -->
                                        <div class="form-row mb-4">9
                                        <div class="col-3">
                                                <select class="custom-select" name="sub9">
                                                    
                                                    <option value="Home Economics ">Home Economics </option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project9" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note9" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 10 -->
                                        <div class="form-row mb-4">10
                                        <div class="col-3">
                                                <select class="custom-select" name="sub10">
                                                    
                                                    <option value="I.C.T">I.C.T</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project10" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note10" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 11 -->
                                        <div class="form-row mb-4">11
                                            <div class="col-3">
                                                <select class="custom-select" name="sub11">
                                                    
                                                    <option value="English Studies ">English Studies </option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project11" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note11" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 12 -->
                                        <div class="form-row mb-4">12
                                            <div class="col-3">
                                                <select class="custom-select" name="sub12">
                                                    
                                                    <option value="Cultural & Creative Arts -Music">Cultural & Creative Arts -Music</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project12" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note12" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 13 -->
                                        <div class="form-row mb-4">13
                                            <div class="col-3">
                                                <select class="custom-select" name="sub13">
                                                    
                                                    <option value="Agricultural science">Agricultural science</option>  

                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project13" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note13" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_position" placeholder="Position">
                                            </div>
                                            
                                        </div> 

                                        <!-- Subject 14 -->
                                        <div class="form-row mb-4">14
                                            <div class="col-3">
                                                <select class="custom-select" name="sub14">
                                                    
                                                    <option value="Social Studies">Social Studies</option>  

                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project14" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note14" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_position" placeholder="Position">
                                            </div>
                                            
                                        </div> 

                                        <!-- Subject 15 -->
                                        <div class="form-row mb-4">15
                                            <div class="col-3">
                                                <select class="custom-select" name="sub15">
                                                    
                                                    <option value="P.H.E">P.H.E</option>  

                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project15" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note15" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_position" placeholder="Position">
                                            </div>
                                            
                                        </div> 
                                                                                
                                        <input type="submit" name="time" class="mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="senior" class="row layout-top-spacing">

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Insert Secondary Exam Records</h4>
                                        </div>                 
                                    </div>
                                </div>
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
                                <div class="widget-content widget-content-area">
                                    <form action="{{ route('exams.store') }}" method="POST">
                                    @csrf
                                        <div class="form-row mb-4">
                                            <div class="col">
                                                <input type="text" class="form-control" name="regno" placeholder="Reg No">
                                            </div> 
                                            <div class="col">                                           
                                                <select class="custom-select mb-4" name="session">
                                                    <option selected>Term</option>
                                                    <option value="1st Term">1st Term</option>
                                                    <option value="2nd Term">2nd Term</option>
                                                    <option value="3rd Term">3rd Term</option>
                                                </select> 
                                            </div>
                                            <div class="col">                                             
                                                <select class="custom-select mb-4" name="class">
                                                    <option selected value="SSS 1 (Onyx)">SSS 1 (Onyx)</option>
                                                    <option value="SSS 2 (Opal)">SSS 2 (Opal)</option>
                                                    <option value="SSS 3 (Spinel)">SSS 3 (Spinel)</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="year" placeholder="Year">
                                            </div>
                                        </div>

                                        <!-- Subject 1 -->
                                       
                                        <div class="form-row mb-4">1
                                         <div class="col-3">
                                                <select class="custom-select" name="sub1">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project1" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note1" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub1_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 2 -->
                                        <div class="form-row mb-4">2
                                            <div class="col-3">
                                                <select class="custom-select" name="sub2">                                                    
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>                                                   
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project2" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note2" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub2_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 3 -->
                                        <div class="form-row mb-4">3
                                            <div class="col-3">
                                                <select class="custom-select" name="sub3">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project3" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note3" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub3_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 4 -->
                                        <div class="form-row mb-4">4
                                            <div class="col-3">
                                                <select class="custom-select" name="sub4">
                                                    
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>                                                    
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project4" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note4" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub4_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 5 -->
                                        <div class="form-row mb-4">5
                                            <div class="col-3">
                                                <select class="custom-select" name="sub5">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project5" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note5" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub5_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 6 -->
                                        <div class="form-row mb-4">6
                                            <div class="col-3">
                                                <select class="custom-select" name="sub6">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project6" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note6" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub6_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 7 -->
                                        <div class="form-row mb-4">7
                                            <div class="col-3">
                                                <select class="custom-select" name="sub7">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project7" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note7" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub7_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 8 -->
                                        <div class="form-row mb-4">8
                                            <div class="col-3">
                                                <select class="custom-select" name="sub8">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project8" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note8" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub8_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 9 -->
                                        <div class="form-row mb-4">9
                                            <div class="col-3">
                                                <select class="custom-select" name="sub9">
                                                   <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project9" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note9" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub9_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 10 -->
                                        <div class="form-row mb-4">10
                                            <div class="col-3">
                                                <select class="custom-select" name="sub10">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project10" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note10" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub10_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 11 -->
                                        <div class="form-row mb-4">11
                                                <div class="col-3">
                                                <select class="custom-select" name="sub11">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project11" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note11" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub11_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 12 -->
                                        <div class="form-row mb-4">12
                                                <div class="col-3">
                                                <select class="custom-select" name="sub12">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project12" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note12" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub12_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 13 -->
                                        <div class="form-row mb-4">13
                                            <div class="col-3">
                                                <select class="custom-select" name="sub13">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project13" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note13" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub13_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 14 -->
                                        <div class="form-row mb-4">14
                                            <div class="col-3">
                                                <select class="custom-select" name="sub14">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project14" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note14" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub14_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 15 -->
                                        <div class="form-row mb-4">15
                                            <div class="col-3">
                                                <select class="custom-select" name="sub15">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project15" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note15" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub15_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 16 -->
                                        <div class="form-row mb-4">16
                                            <div class="col-3">
                                                <select class="custom-select" name="sub16">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub16_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub16_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project16" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note16" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub16_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub16_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 17 -->
                                        <div class="form-row mb-4">17
                                            <div class="col-3">
                                                <select class="custom-select" name="sub17">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub17_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub17_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project17" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note17" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub17_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub17_position" placeholder="Position">
                                            </div>
                                            
                                        </div>
                                        <!-- Subject 18 -->
                                        <div class="form-row mb-4">18
                                                <div class="col-3">
                                                <select class="custom-select" name="sub18">
                                                    <option value=" ">Select Subject</option>
                                                    <option value="Mathematics">Mathematics</option>
                                                    <option value="English Studies">English Studies</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Civic Education">Civic Education</option>
                                                    <option value="French Language">French Language</option>
                                                    <option value="Physics">Physics</option>
                                                    <option value="Financial Accounting">Financial Accounting</option>
                                                    <option value="C.R.S">C.R.S</option>
                                                    <option value="Food and Nutrition">Food and Nutrition</option>
                                                    <option value="Agricultural Science">Agricultural Science</option>
                                                    <option value="History">History</option>
                                                    <option value="Geography">Geography</option>
                                                    <option value="Literature in English">Literature in English</option>                                                    
                                                    <option value="Further Maths">Further Maths</option>
                                                    <option value="Data Processing">Data Processing</option>
                                                    <option value="Economics">Economics</option>
                                                    <option value="Chemistry">Chemistry</option>
                                                    <option value="Government">Government</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub18_ca1" placeholder="1st CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub18_ca2" placeholder="2nd CA">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="project18" placeholder="Project">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="note18" placeholder="Note">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub18_exam" placeholder="Exam">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="sub18_position" placeholder="Position">
                                            </div>
                                            
                                        </div>                                        
                                        <input type="submit" name="time" class="mb-4 btn btn-primary">
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
    <!--  END CUSTOM SCRIPTS FILE  -->

</body>

</html>