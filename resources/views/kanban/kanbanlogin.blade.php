<!DOCTYPE html>
<html>
<head>
    <title>Login Kanban</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('assets/img/btplogo.png')}}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/login3.css')}}"/>
</head>
<body class="login_backimg">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}"  style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 mx-auto login_section">
            <div class="row">
                <div class=" col-lg-4 col-md-8 col-sm-12  mx-auto login2_border login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-black">
                            <img src="{{asset('assets/img/btplogo.png')}}" alt="logo" class="admire_logo"><br />
                            <span class="m-t-15">LOG IN</span>
                        </h3>
                    </div>
                    <div class="m-t-15">
                        <form action="/postlogin" id="login_validator" method="POST">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label for="email" class="col-form-label text-black"> E-mail</label>
                                <div class="input-group">
                                    <input type="text" class="form-control b_r_20" id="email" name="email" placeholder="E-mail">
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-envelope text-black"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-black">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password">
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-key text-black"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-t-10">
                                    <a href="/kanbanregister" class="forgottxt_clr text-black"><i class="fa fa-external-link"></i> Register Now</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">LOG IN</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('assets/js/pages/login3.js')}}"></script>
</body>

</html>
