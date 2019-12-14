@extends(('kanban.task.taskmenu'))
{{-- Page title --}}
@section('title')
    Member 
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/sortable.css')}}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- end of page level styles -->
  
@stop
@section('subtitle')
    <a class="navbar-brand" href="/team/{{$teams->id}}/">
                    <h4><img src="{{asset('assets/img/btplogo.png')}}" class="admin_img" alt="logo">
                    Member Details
                    </h4>
                </a>
    @stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-sm-4 col-12">
                    <h4 class="nav_top_align">
                        <i class="fa fa-anchor"></i>
                        Member Details
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="col-lg">
        <div class="card m-t-35">
            <div class="card-header bg-white">
                <b>Details</b>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama    : {{$member->name}}</li>  
                <li class="list-group-item">Email   : {{$member->email}}</li>
                <li class="list-group-item">Phone   : {{$member->phone}}</li>
                <li class="list-group-item">Address : {{$member->address}}</li>
                <li class="list-group-item">Team    : {{$teams->name}}</li>
                @foreach($handle as $handle)
                @if($handle->id_user === $member->id_user)
                <li class="list-group-item">Project : {{$handle->nama_project}}</li>
                @else
                <li class="list-group-item">Project : -</li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>

            
            
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
    <!--Plugin scripts-->
    <!-- <script type="text/javascript" src="{{asset('assets/vendors/sortable/js/Sortable.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/slimscroll/js/jquery.slimscroll.min.js')}}"></script> -->
    <!--End of Plugin scripts-->
    <!--Page level scripts-->
    <!-- <script type="text/javascript" src="{{asset('assets/js/pages/sortable.js')}}"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <!-- end of Page level scripts-->
@stop