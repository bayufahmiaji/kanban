@extends(('kanban.team.teammenu'))
{{-- Page title --}}
@section('title')
    My Team
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
@section('navbar')
    <a class="navbar-brand" href="/team/{{$team->id}}">
        <h4>
            My Team
        </h4>
    </a>
    <a class="navbar-brand" href="/team/{{$team->id}}/member">
        <h4>
            Members
        </h4>
    </a>
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
    <div>
    

   
   <div class="container box">
   <h3 align="center">Add Members</h3><br />
   <form method="POST" action="/postmember">
   <div class="form-group">
    <table>
        <input type="hidden" name="id_team" value="{{$team->id}}">
        <td class="col-9">
            <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Search Email Here" />
        </td>
        <td>
            <button type="Submit" class="btn btn-primary">Add Member</button>
        </td>
    </table>   
    <div id="emailList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>
   </form>
   <div class="outer">
        <div>
            <div class="row">
                <div class="col-12 data_tables">
                    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                    <div class="card m-t-35">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i>Members Of Team
                        </div>
                        <div class="card-body p-t-10">
                            <div class=" m-t-25">
                                
                                <table class="table table-striped table-bordered table-hover " id="sample_6">
                                    <thead>
                                    <tr>
                                        <th>Members Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($member as $member)
                                        @if($member->id_team === $team->id)
                                        <tr>
                                            <td>{{$member->name}}</td>
                                        </tr>
                                        
                                        @endif
                                    @endforeach
                                    </tbody>  
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

    
    
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
    <script>
    $(document).ready(function(){

     $('#email').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"/user/cari",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               $('#emailList').fadeIn();  
                        $('#emailList').html(data);
              }
             });
            }
        });

        $(document).on('click', 'li', function(){  
            $('#email').val($(this).text());  
            $('#emailList').fadeOut();  
        });  

    });
    </script>
    
     <!--end of plugin scripts-->
    
@stop
