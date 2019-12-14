@extends(('kanban/kanbanmenu'))
{{-- Page title --}}
@section('title')
    Kanban My Team
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
                <div class="col-6">
                    <h4 class="mt-3">
                        <i class="fa fa-cube"></i>
                        My Team
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
    <div class="bg-container">
    <div>
    
    <button type="button" class="btn btn-labeled btn-success" data-toggle="modal" data-target="#team">
        <span class="btn-label">
            <i class="fa fa-plus"></i>
        </span>
        Create Team
    </button>
    </div>

    <!-- Modal Untuk Post Team -->
    <div class="modal fade" id="team" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="/postteam" method="post" class="form" id="myform">
                    {{ csrf_field()}}
                        <input type="hidden" value="{{auth()->user()->id}}" name="id_user">
                        <input type="hidden" value="{{auth()->user()->name}}" name="name_user">
                        <div class="form-group is-empty label-floating">
                            <label class="control-label" for="list-name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required >
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning" id="modal_close_btn" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" id="save" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

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
                                    <th>Nama Team</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach($team as $team)
                                    @if($team->id_user === auth()->user()->id)
                                    <tr>
                                        <td>{{$team->name}}</td>
                                        <td>
                                        <a href="/team/{{$team->id}}" class ="btn btn-success btn-sm">Details</a>
                                            <a href="/team/{{$team->id}}/edit" class ="btn btn-warning btn-sm">Edit</a>
                                            <a href="/team/{{$team->id}}/delete" class ="btn btn-danger btn-sm" onclick="return confirm('Delete Project?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endif
                                   @foreach($members as $member)
                                        @if($member->id_user === auth()->user()->id)
                                            @if($team->id === $member->id_team)
                                                <tr>
                                                    <td>{{$team->name}}</td>
                                                    <td>
                                                        <a href="/team/{{$team->id}}" class ="btn btn-success btn-sm">Details</a>
                                                        <a href="/team/{{$team->id}}/edit" class ="btn btn-warning btn-sm">Edit</a>
                                                        <a href="/team/{{$team->id}}/delete" class ="btn btn-danger btn-sm" onclick="return confirm('Delete Project?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
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

    
    
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
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
     <!--end of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/datatable.js')}}"></script>
    <!-- end of global scripts-->
@stop
