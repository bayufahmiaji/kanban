@extends(('kanban/kanbanmenu'))
{{-- Page title --}}
@section('title')
    Kanban Dashboard
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/fullcalendar/css/fullcalendar.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/calendar_custom.css')}}"/>
    
@stop


    
@section('content')
<header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-home"></i>
                        Kanban Applicaton
                    </h4>
                </div>
                
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">

            <!--top section widgets-->
            <div class="row widget_countup">

                <div class="col-12 col-sm-6 col-xl-3">
                <div id="top_widget2">
                        <div class="front">
                            <div class="bg-primary p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="user_font">Team Projects</div>
                                <div id="widget_countup12">{{$countTP}}</div>
                                
                            </div>
                        </div>
                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5">
                                        <i class="fa fa-book text-primary"></i>
                                    </div>
                                    <div id="widget_countup12">{{$countTP}}</div>
                                    <div>Team Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div id="top_widget1">
                        <div class="front">
                            <div class="bg-primary p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="user_font">Personal Projects</div>
                                <div id="widget_countup12">{{$countp}}</div>
                                
                            </div>
                        </div>
                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5">
                                        <i class="fa fa-book text-primary"></i>
                                    </div>
                                    <div id="widget_countup12">{{$countp}}</div>
                                    <div>Personal Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-6 col-xl-3 media_max_1199" >
                    <div id="top_widget3">
                        <div class="front bg-container">
                            <div class="bg-warning p-d-15 b_r_5">
                                <div class="float-right m-t-5">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="user_font">Teams</div>
                                <div id="widget_countup12">{{$countT}}</div>
                                
                            </div>
                        </div>

                        <div class="back">
                            <div class="bg-white b_r_5 section_border">
                                <div class="p-t-l-r-15">
                                    <div class="float-right m-t-5 text-success">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div id="widget_countup22">{{$countT}}</div>
                                    <div>Teams</div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
              </br>
            </br>
    </div>       


          
        </br>   
            <div class="card-body">      
             
                <center><img src="{{asset('assets/img/kanban.jpg')}}" class="img-center " style="align:center; height:300px; width:600px;" alt="Photo of sunset"></center>
            </div>

            <div>
                <h4>
                    <p>
                    Istilah Kanban berasal dari sistem produksi "just-in-time" Toyota, 
                    yang berarti melakukan "hanya apa yang dibutuhkan, ketika dibutuhkan, 
                    dan dalam jumlah yang diperlukan." Tujuan Kanban adalah untuk:
                    </p>
                        <ul>
                            <li> Hilangkan pekerjaan yang boros, inkonsistensi, dan persyaratan yang tidak masuk akal</li>
                            <li> Jadikan proses lebih efisien, dan tim lebih produktif</li>
                        </ul>
                    <p>
                    Dengan menerapkan pendekatan Kanban ke manajemen proyek, 
                    alur kerja menjadi sepenuhnya transparan dan visual. 
                    Setiap anggota tim dapat melihat siapa yang mengerjakan tugas tertentu, 
                    apa yang sedang dikerjakan, dan sebagainya. Akibatnya, 
                    tim Anda dapat fokus pada tugas yang tepat, dan Anda tidak akan melebihi kapasitasnya.
                    </p>
                </h4>
            </div>
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/calendarcustom.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/calendar.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <!--end of plugin scripts-->

    <script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
