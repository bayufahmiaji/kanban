@extends(('kanban/task/taskmenu'))

{{-- Page title --}}
@section('title')
    Your Task
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
     
     <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/inputlimiter/css/jquery.inputlimiter.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jquery-tagsinput/css/jquery.tagsinput.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datepicker/css/bootstrap-datepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datetimepicker/css/DateTimePicker.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/j_timepicker/css/jquery.timepicker.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/clockpicker/css/jquery-clockpicker.css')}}" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/colorpicker_hack.css')}}" />
    @stop
    @section('subtitle')
    <a class="navbar-brand" href="/projects/{{$project->id}}/{{$tim->id}}">
                    <h4><img src="{{asset('assets/img/btplogo.png')}}" class="admin_img" alt="logo">
                    Task
                    </h4>
                </a>
    @stop
    @section('account')
    Bayu Fahmiaji
    @stop
    
@section('content')
<header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="mt-3">
                        <i class="fa fa-cube"></i>
                       Detail Task
                    </h4>
                </div>
            </div>
        </div>
    </header>
    
    <div class="outer">
    <div class="bg-container">
       
        <form action="/taskteam/{{$TaskTeam->id}}/edit" method="POST">
              {{ csrf_field()}}
          <div class="form-group">
            <label for="exampleFormControlSelect1">List</label>
            <select class="form-control" name="id_list" id="exampleFormControlSelect1" value="{{$TaskTeam->status}}">
              @foreach($lists as $lists)
              <option value="{{$lists->id}}"
                        @if($lists->id === $TaskTeam->id_list)
                        selected
                        @endif
                >{{$lists->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Task Name</label>
            <input type="text" name="nama"class="form-control" id="nama" aria-describedby="emailHelp" value="{{$TaskTeam->nama}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Task Description</label>
            <input type="text" name="deskripsi"class="form-control" id="nama" aria-describedby="emailHelp" value="{{$TaskTeam->deskripsi}}">
          </div>
          <div class="form-group">
            <label for="nama">Task Handle</label>
             <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#projectteam">
                  Show
            </button>
          </div>  
          <div class="form-group">
            <label for="nama">Task Start</label>
            <div class="input-group input-append date input-group-append" id="dp3"
                 data-date-format="yyyy-mm-dd">
                <input class="form-control" type="text" placeholder="yyyy-mm-dd" name="taskstart"value="{{$TaskTeam->taskstart}}" >
                <span class="input-group-text add-on border-left-0 rounded-right">
                        <i class="fa fa-calendar"></i>
                    </span>
            </div>
          </div>
          <div class="form-group">
             <label for="nama">Task End</label>
            <div class="input-group input-append date input-group-append" id="dp2"
                 data-date-format="yyyy-mm-dd">
                <input class="form-control" type="text" placeholder="yyyy-mm-dd" name="taskend" value="{{$TaskTeam->taskend}}">
                <span class="input-group-text add-on border-left-0 rounded-right">
                        <i class="fa fa-calendar"></i>
                    </span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>


    <!-- Modal Untuk Post ProjectTeam -->
    <div class="modal fade" id="projectteam" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                                <table class="table table-striped table-bordered table-hover " id="sample_6">
                                    <thead>
                                    <tr>
                                        <th>Members Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($handle as $handle)
                                        @if($handle->id_task === $TaskTeam->id)
                                        <tr>
                                            <td>{{$handle->nama_user}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>  
                                </table>
                <form action="/posthandle" method="post" class="form" id="myform">
                    {{ csrf_field()}}
                          
                          <input type="hidden" name="id_task" value="{{$TaskTeam->id}}">
                          <input type="hidden" name="id_project" value="{{$project->id}}">
                          <input type="hidden" name="nama_project" value="{{$project->nama}}">
                          <div class="form-group">
                            <select class="form-control" name="id_member" id="exampleFormControlSelect1" value="{{$TaskTeam->status}}">
                              <option>-</option>
                            @foreach($member as $member)
                                <option value="{{$member->id}}">{{$member->name}}</option>
                            @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <button class="button btn-success" type="submit">SAVE</button>
                          </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
            
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
   

   <!-- plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.validVal.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/inputmask/js/jquery.inputmask.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/daterangepicker/js/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/autosize/js/jquery.autosize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jasny-bootstrap/js/inputmask.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datetimepicker/js/DateTimePicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/j_timepicker/js/jquery.timepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/clockpicker/js/jquery-clockpicker.min.js')}}"></script>
    <!--end of plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/form.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/datetime_piker.js')}}"></script>
    <!-- end of global scripts-->
    <!--end of plugin scripts-->
@stop

                        