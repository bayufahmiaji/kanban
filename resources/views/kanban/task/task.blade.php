@extends(('kanban/task/taskmenu'))
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
    

    <table>
         <td>
         <div>
            <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#project">
                <span class="btn-label">
                    <i class="fa fa-plus"></i>
                </span>
                New List
            </button>
            </div>
         </td>
    </table>
    
    
    <div class="modal fade" id="project" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
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
    <!--end of plugin scripts-->

    <script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
