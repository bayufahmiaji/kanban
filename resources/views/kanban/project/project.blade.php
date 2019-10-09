@extends(('kanban/kanbanmenu'))
{{-- Page title --}}
@section('title')
    Kanban Project
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/scroller.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/colReorder.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.dataTables.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dataTables.bootstrap.css')}}" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/tables.css')}}" />
    <!--End of page level styles-->
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-th"></i>
                        Your Project
                    </h4>
                </div>
               
            </div>
        </div>
    </header>

    <div>
        <div class="outer">
                <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#project">
                    <span class="btn-label">
                        <i class="fa fa-plus"></i>
                    </span>
                    New Project
                </button>
        </div>
    </div>

    <div class="outer">
        <div>
            <div class="row">
                <div class="col-12 data_tables">
                    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Personal Project
                        </div>
                        <div class="card-body p-t-10">
                            <div class=" m-t-25">
                                <table class="table table-striped table-bordered table-hover " id="sample_6">
                                <thead>
                                <tr>
                                    <th>Nama Project</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($project as $project)
                                @if($project->id_user === auth()->user()->id)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td>
                                        <a href="/project/{{$project->id}}" class ="btn btn-success btn-sm">Details</a>
                                        <a href="/project/{{$project->id}}/edit" class ="btn btn-warning btn-sm">Edit</a>
                                        <a href="/project/{{$project->id}}/delete" class ="btn btn-danger btn-sm" onclick="return confirm('Delete Project?')">Delete</a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                                </tbody>  </table>
                            </div>
                        </div>
                    </div>
                   <!-- end--> 
                    
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
    <div class="modal fade" id="project" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    <div class="modal-body">
                        <form action="/projects" method="POST" class="form-horizontal" id="otp_validation">
                            {{ csrf_field()}}
                            <table >
                                <tr>
                                    <input type="hidden" value=" {{auth()->user()->id}}" name ="id_user">
                                </tr>
                                <tr>
                                    <td style="padding: 10px"><label for="nama">Masukan Nama Project</label></td>
                                    <td><input style="width: 300px"  class="form-control" type="text" name="name" placeholder="Masukan Nama"></td>
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
    <!--plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/dataTables.tableTools.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.colReorder.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.rowReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/datatable.js')}}"></script>
    <!-- end of global scripts-->
@stop
