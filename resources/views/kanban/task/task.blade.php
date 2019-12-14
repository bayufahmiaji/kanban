@extends(('kanban/task/taskmenu'))

{{-- Page title --}}
@section('title')
    Board
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/sortable.css')}}" />
   
   
<style>
.task-board {
    background: #2c7cbc;
    display: inline-block;
    padding: 12px;
    border-radius: 3px;
    width: 550px;
    white-space: nowrap;
    overflow-x: scroll;
    min-height: 1000px;
}

.status-card {
    width: 250px;
    margin-right: 8px;
    background: #e2e4e6;
    border-radius: 3px;
    display: inline-block;
    vertical-align: top;
    font-size: 0.9em;
}

.status-card:last-child {
    margin-right: 0px;
}

.card-header {
    width: 100%;
    padding: 10px 10px 0px 10px;
    box-sizing: border-box;
    border-radius: 3px;
    display: block;
    font-weight: bold;
}

.card-header-text {
    display: block;
}

ul.sortable {
    padding-bottom: 10px;
}

ul.sortable li:last-child {
    margin-bottom: 0px;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0px;
}

.text-row {
    padding: 15px 10px;
    margin: 10px;
    background: #fff;
    box-sizing: border-box;
    border-radius: 3px;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
    font-size: 0.8em;
    white-space: normal;
    line-height: 20px;
}

.ui-sortable-placeholder {
    visibility: inherit !important;
    background: transparent;
    border: #666 2px dashed;
}
</style>
@stop
@section('subtitle')
    {{$project->nama}}
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
                        Board
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
    <div class="bg-container">
    

         
            <div>
            <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#list">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                New List
            </button>
            </div>
         
            
        
    
    
    <div class="modal fade" id="list" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-body">
                        <form action="/postlist" method="POST" class="form-horizontal" id="otp_validation">
                            {{ csrf_field()}}
                            <table >
                                <tr>
                                    <input type="hidden" value="{{$project->id}}" name ="id_project">
                                </tr>
                                <tr>
                                    <td style="padding: 10px"><label for="nama">Masukan Nama List</label></td>
                                    <td><input style="width: 300px"  class="form-control" type="text" name="nama" placeholder="Masukan Nama"></td>
                                </tr>
                                <tr>
                                    <td style="padding: 10px"></td>
                                    <td style="text-align: right"><input type="submit" value="Save" class="btn btn-labeled btn-success"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>         
        </div>
    
       
    
        @foreach($list as $list) 
        @if($list->id_project === $project->id)
        <div class="status-card">
            <div class="card-header">
            <span class="card-header-text">{{$list->nama}}</span>
            </div>
            <ul class="sortable ui-sortable"
                id="sort{{$list->id}}"
                data-status-id="{{$list->id}}">
                    @foreach ($result as $taskrow)
                    @if($taskrow->id_list === $list->id) 
                    <li class="text-row ui-sortable-handle"
                        data-task-id="{{$taskrow->id_list}}">{{$taskrow->nama}}</li>
                    @endif
                    @endforeach
                
            </ul>
            <div class="modal fade" id="task" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="modal-body">
                                        <form action="/posttask/{$task_row->id_list}" method="POST" class="form-horizontal" id="otp_validation">
                                            {{ csrf_field()}}
                                            <table >
                                                <tr>
                                                    <input type="hidden" value="{{$list->id}}" name ="id_list">
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"><label for="nama">Masukan Nama Task</label></td>
                                                    <td><input style="width: 300px"  class="form-control" type="text" name="nama" placeholder="Masukan Nama"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"><label for="desksipsi">Masukan Deskripsi Task</label></td>
                                                    <td><input style="width: 300px"  class="form-control" type="text" name="deskripsi" placeholder="Masukan Nama"></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 10px"></td>
                                                    <td style="text-align: right"><input type="submit" value="Save" class="btn btn-labeled btn-success"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>         
                        </div>
            <div>
            <button type="button" data-toggle="modal" data-target="#task">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                Add Task
            </button>
            </div>
        </div>
        @endif
        @endforeach
           
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    
    <!-- <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script> -->
    
   
    <!--end of plugin scripts-->
@stop
