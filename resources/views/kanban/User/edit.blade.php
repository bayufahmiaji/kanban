@extends(('kanban/kanbanmenu'))
{{-- Page title --}}
@section('title')
    Edit User
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <!--end of page level css-->
    <style>
        .br-0{
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
@stop
@section('content')
<header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-pencil"></i>
                        Edit User
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body m-t-25">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" action="/update_user" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row m-t-15">
                                            <div class="col-12 col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Pict</label>
                                            </div>
                                            <div class="col-12 col-lg-6 text-center text-lg-left">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <img src="{{asset('assets/img/admin2.jpg')}}" data-src="img/admin2.jpg" alt="not found"></div>
                                                    <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                    <div class="m-t-20 text-center">
                                                            <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" >
                                                            </span>
                                                        <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Nama *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-text br-0"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                                    <input type="text" value="{{auth()->user()->name}}" name="name" id="u-name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="text" value="{{auth()->user()->email}}" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="pwd" class="col-form-label">Password *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" value="bay123" name="password" id="pwd" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" id="phone" name="phone" class="form-control" value="{{auth()->user()->phone}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="{{auth()->user()->address}}" id="address" name="address" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button class="btn btn-primary" id="submit2" type="submit">
                                                    Save
                                                </button>
                                                <input type="reset" class="btn btn-warning" value='Reset' id="clear" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
    
    <!-- <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-pencil"></i>
                        Edit User
                    </h4>
                </div>
                
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body m-t-25">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" action="{{url('users')}}" method="get">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row m-t-15">
                                        <div class="form-group row m-t-25">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Nama *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-text br-0"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                                    <input type="text" value="{{auth()->user()->name}}" name="firstName" id="u-name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="text" value="{{auth()->user()->email}}" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="pwd" class="col-form-label">Password *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" value="{{auth()->user()->password}}" name="password" id="pwd" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" id="phone" name="cell" class="form-control" value="9999999999">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address *
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="Australia" id="address" name="address1" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="city" class="col-form-label">City *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" value="Nakia" name="city" id="city" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="checkbox1" class="col-form-label">Status *</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="checkbox1" type="checkbox" name="activate" class="custom-control-input" checked>
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Activate your account</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button class="btn btn-primary" id="submit2" type="submit">
                                                    Save
                                                </button>
                                                <input type="reset" class="btn btn-warning" value='Reset' id="clear" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    /.outer -->
@stop
@section('footer_scripts')
    <!-- plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jasny-bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <!-- end of plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/validation.js')}}"></script>
@stop
