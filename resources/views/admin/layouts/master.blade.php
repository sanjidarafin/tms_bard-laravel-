<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Master</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') !!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('dist/css/AdminLTE.min.css') !!}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{!! asset('dist/css/skins/_all-skins.min.css') !!}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{!! asset('plugins/iCheck/flat/blue.css') !!}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{!! asset('plugins/morris/morris.css') !!}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{!! asset('plugins/datepicker/datepicker3.css') !!}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{!! asset('plugins/daterangepicker/daterangepicker-bs3.css') !!}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{!! asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- for admin  --->
    <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
    <script src="{!! asset('js/jquery-1.11.3.min.js') !!}"></script>
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="{!! asset('/css/roboto.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/material.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('/css/ripples.min.css') !!}" rel="stylesheet">

    @yield('script')
    <![endif]-->
    <link rel="stylesheet" href="{!! asset('assets/course-style/style.css') !!}">
    <style>
        @yield('style')
    </style>
</head>
<body class="hold-transition skin-purple sidebar-mini">
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<div class="wrapper">

    <header class="main-header" >
        <!-- Logo -->
        <a href="{!! URL::to('/') !!}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>BARD</b></span>
            <!-- logo for regular state and mobile devices -->
            <img src="dist/img/logo.jpg" class="img-circle" alt="User Image"align = "left">
            <span class="logo-lg"><b>BARD</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#">Logout <span class="caret"></span></a>
                </li>
            </ul>
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
        </nav>

    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="background: #3F51B5;">
            <!-- Sidebar user panel -->

            <!-- search form -

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"><font color="white">MAIN NAVIGATION</font></li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span><font color="white">HealthInfo</font></span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="/adminHealthInfos"><i class="fa fa-circle-o"></i> All Health Info</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-calendar"></i><font color="white"> <span>Calendar</span></font> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/calendar/create') }}"><i class="fa fa-circle-o"></i> Create Calendar</a></li>
                        <li class=""><a href="{{ URL::to('/calendar') }}"><i class="fa fa-circle-o"></i> All Calendar</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link"></i> <font color="white"><span>Training Trainee Assign</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/user_traininginfo/create') }}"><i class="fa fa-circle-o"></i> Training Trainee Assign</a></li>
                        <li class=""><a href="{{ URL::to('/user_traininginfo') }}"><i class="fa fa-circle-o"></i> All Training Trainee</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link"></i><font color="white"> <span>Trainer Course Assign</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/trainer_course/create') }}"><i class="fa fa-circle-o"></i> Trainer Course Assign</a></li>
                        <li class=""><a href="{{ URL::to('/trainer_course') }}"><i class="fa fa-circle-o"></i> All Trainer Course</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link"></i><font color="white"> <span>Trainee Course Assign</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/selectTraining') }}"><i class="fa fa-circle-o"></i> Trainee Course Assign</a></li>
                        <li class=""><a href="{{ URL::to('/traineeCourse') }}"><i class="fa fa-circle-o"></i> All Trainee Course</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link"></i><font color="white"> <span>Marksheet</span></font> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/marksheet') }}"><i class="fa fa-circle-o"></i> Marksheet</a></li>
{{--                        <li class=""><a href="{{ URL::to('/listOfstudentsAndMarks') }}"><i class="fa fa-circle-o"></i> All Trainee Course</a></li>--}}

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link"></i><font color="white"> <span>Exam</span></font> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/exam/create') }}"><i class="fa fa-circle-o"></i> Create Exam</a></li>
                        <li class=""><a href="{{ URL::to('/exam') }}"><i class="fa fa-circle-o"></i> All Exam</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-link"></i> <font color="white"><span>Trainee Registration</span></font> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/registration/create') }}"><i class="fa fa-circle-o"></i> Registration</a></li>
                        <li class=""><a href="{{ URL::to('/registration') }}"><i class="fa fa-circle-o"></i> All registration</a></li>

                    </ul>
                </li>
                {{--Following created by localhost--}}
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i><font color="white"> <span>Clients</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('admin/clients') }}"><i class="fa fa-circle-o"></i>All Clients</a></li>
                        <li class=""><a href="{{ URL::to('/clients/create') }}"><i class="fa fa-circle-o"></i>Create a Clients</a></li>
                        <li class=""><a href="{{ URL::to('/clients/create_newsletter') }}"><i class="fa fa-circle-o"></i>Send Newsletter</a></li>

                    </ul>
                </li>
                <li class=" treeview">
                    <a href="#">
                        <i class="fa fa-user"></i> <font color="white"><span>Users</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/user/all') }}"><i class="fa fa-circle-o"></i>All Users</a></li>
                        <li class=""><a href="{{ URL::to('/user/registration') }}"><i class="fa fa-circle-o"></i>Create User</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <font color="white"><span>Course</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/courses') }}"><i class="fa fa-circle-o"></i>All Coures</a></li>
                        <li class=""><a href="{{ URL::to('/create_course') }}"><i class="fa fa-circle-o"></i>Create Course</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-book"></i> <font color="white"><span>BardTrainers</span></font> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{!! URL::to('bardtrainers') !!}"><i class="fa fa-circle-o"></i> BardTrainers</a></li>
                                <li class=""><a href="{{ URL::to('/bardtrainer_create') }}"><i class="fa fa-circle-o"></i>Create BardTrainer</a></li>
                        
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-picture-o"></i><font color="white"> <span>Slider Management</span></font> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/slider/all') }}"><i class="fa fa-circle-o"></i>All slider</a></li>
                        <li class=""><a href="{{ URL::to('/slider/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i><font color="white"> <span>Report</span> </font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/select_training') }}"><i class="fa fa-circle-o"></i>All report</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i><font color="white"><span>Trainings</span></font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li class=""><a href="{{ URL::to('/training_info') }}"><i class="fa fa-circle-o"></i>Create Training</a></li>
                        <li class=""><a href="{{ URL::to('/trainings') }}"><i class="fa fa-circle-o"></i> Training List</a></li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i><span>Trainers</span><span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{!! URL::to('adminTrainers') !!}"><i class="fa fa-circle-o"></i>Trainer List</a></li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Testimonial</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                <li class=""><a href="{{ URL::to('/create_testimonial') }}"><i class="fa fa-circle-o"></i>Create Testimonial</a></li>
                                <li><a href="{{ URL::to('/testimonials') }}"><i class="fa fa-circle-o"></i> Testimonial List</a></li>
                            </ul>
                        </li>
                        <li class=" treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>FAQs</span>
                                <span class="label label-primary pull-right">4</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ URL::to('/create_frequently_asked_question') }}"><i class="fa fa-circle-o"></i> Create FAQs</a></li>
                                <li><a href="{{ URL::to('/frequently_asked_questions') }}"><i class="fa fa-circle-o"></i> FAQs List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i><font color="white"><span>Training</span></font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Trainers</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Trainees</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Feedback</a></li>

                    </ul>
                </li>
                

                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i><font color="white"><span>Announcement</span></font><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::to('/announcement_create') }}"><i class="fa fa-circle-o"></i>Create Announcement</a></li>
                        <li><a href="{{ URL::to('/announcements') }}"><i class="fa fa-circle-o"></i> Announcement List</a></li>
                    </ul>
                </li>
                 <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i><font color="white"><span>Feedbacks</span></font><span class="label label-primary pull-right"></span><i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ URL::to('/feedbackView') }}"><i class="fa fa-circle-o"></i>All Feedbacks</a></li>
                       
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section><!-- /.content -->




    </div><!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <footer class = "main-footer">
        <div class="col-md-12">
             <strong>Copyright &copy;  <a href="http://bard.com.bd">BARD</a>.</strong> All rights reserved.
        </div>
    </footer>

</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="{!! asset('plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
<!-- Morris.js charts -->
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') !!}"></script>
<script src="{!! asset('plugins/morris/morris.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('plugins/sparkline/jquery.sparkline.min.js') !!}"></script>
<!-- jvectormap -->
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! asset('plugins/knob/jquery.knob.js') !!}"></script>
<!-- daterangepicker -->
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js') !!}"></script>
<script src="{!! asset('plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- datepicker -->
<script src="{!! asset('plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! asset('plugins/slimScroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('plugins/fastclick/fastclick.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('dist/js/app.min.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('dist/js/pages/dashboard.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('dist/js/demo.js') !!}"></script>
</body>
</html>
