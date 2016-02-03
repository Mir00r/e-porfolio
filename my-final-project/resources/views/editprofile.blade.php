<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio HUB</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->
    {!! Html::style("profile/bootstrap/css/bootstrap.min.css") !!}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {!! Html::style("profile/dist/css/AdminLTE.min.css") !!}
    
    {!! Html::style("profile/dist/css/skins/_all-skins.min.css") !!}

    {!! Html::style("profile/amrakorchi/amaderstyle.css") !!}   
  </head>

  <body class="hold-transition skin-blue sidebar-mini" >

    <div class="wrapper" style="background-color: white" >

      <header class="main-header" >
        <!-- Logo -->
        <div style="height: 40px;">
        <!-- </div> -->
        
        <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-down" role="navigation" style=" background-color: #DD4B39" >
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
              <span class="sr-only" >Toggle navigation</span>
            </a>

            <a href="{{ url('/profile_page/index') }}"><span id="navbarName">Portfolio <strong>HUB</strong></span></a>

            <button class="navbar-toggle" role="button" data-toggle="collapse" data-target=".navbar-collapse">                
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="navbar-custom-menu">

              <nav class = "collapse navbar-collapse" role = "navigation">
                              
                <div class="container-1">
                <form method="post" action="{{url('/Dashboard/dashboard')}}">
                <input type="hidden" name="_token" value="{{ csrf_token()}}">      
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="search" id="search" placeholder="Search" />
                
                </form>
                </div>              

                <ul class="nav navbar-nav" style="padding-right: 10px">

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="{{ url('/profile_page/index') }}" class="dropdown-toggle" data-toggle="dropdown">
                            <img src=" {{ asset('profile/dist/img/munna.png')  }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="{{ url('/auth/logout') }}"><span><strong>Logout</strong></span></a>
                    </li>
                </ul>
              </nav>
            </div>

          </nav>
        </div>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar" id="sideBarDesign" style="margin-top:35px">  <!-- style="margin-top: -50px" -->
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar"  >
          <!-- Sidebar user panel -->

          <div class="user-panel" style="background-color: #DCDEE3">
            <div class="pull-left image"  >
              <img src="{{ asset('profile/dist/img/munna.png')  }}" class="img-rounded" alt="User Image">
            </div>
            <div class="pull-left info" id="sidebarName">
              <p style="color: black; margin-top: 10px;">{{ Auth::user()->name }}</p>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" >
            <li class="header" style="background-color: #DD4B39"></li>
            <li class="header" style="background-color: #DD4B39"></li>
            
            
            <li class="header" style="background-color: #DCDEE3"></li>
            <li class="header" style="background-color: #DCDEE3"></li>
            <li  >
              <a href="" style="color: black " >
                <i class="fa fa-calendar"></i> <span class="sections"><strong>About me</strong></span>
                <small class="label pull-right bg-green">Edit</small>
              </a>
            </li>
            
            <li class="header" style="background-color: #DCDEE3"></li>
            <li class="header" style="background-color: #DCDEE3"><strong>Sections</strong></li>
            
            <li class="treeview">
              <a href=" {{ url('project-test') }} " class="">
                <i class="fa fa-file-archive-o"></i>
                <span class="sections">Project</span>
                
              </a>   
            </li>

            <li>
              <a href="{{ url('publication') }}" class="">
                <i class="fa fa-file-text"></i> <span class="sections">Thesis / Publications</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="{{ url('awards') }}" class="">
                <i class="fa fa-certificate"></i>
                <span class="sections">Achievements / Awards</span>
                <!-- <i class="fa fa-angle-left pull-right"></i> -->
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{ url('certification') }}", class="">
                <i class="fa fa-graduation-cap"></i>
                <span class="sections">Certifications</span>
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{ url('/form/add-coding') }}" class="">
                <i class="fa fa-code"></i> <span class="sections">Competitive Coding</span>
              </a>
              
            </li>
            <li class="treeview">
              <a href="{{ url('scores') }}" class="">
                <i class="fa fa-laptop"></i> <span class="sections">Test Scores</span>
              </a>
              
            </li>
            <li>
              <a href=" {{ url('/Blog/article') }}" target="_blank">
                <i class="fa fa-edit"></i> <span class="sections">Article / Blog</span>
                
              </a>
            </li>
            <li>
              <a href="{{ url('experience') }}" class="">
                <i class="fa fa-briefcase"></i> <span class="sections">Experience</span>
                
              </a>
            </li>
            <li class="treeview">
              <a href="{{ url('courses') }}" class="">
                <i class="fa fa-book"></i> <span class="sections">Courses</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ url('volunteering') }}" class="">
                <i class="fa fa-hand-paper-o"></i> <span class="sections">volunteering experience</span>
              </a>
             
            </li>
            <li class="header" style="background-color: #DCDEE3"></li>
            <li class="header" style="background-color: #DCDEE3"><strong>Social Link</strong></li>
            
            <ul>
              <li><a href="#"><i id="sociel-icon" class="fa fa-facebook-square fa-3x fb"></i></a></li>
              <li><a href="#"><i id="sociel-icon" class="fa fa-linkedin-square fa-3x link"></i></a></li>
              <li><a href="#"><i id="sociel-icon" class="fa fa-google-plus-square fa-3x goog"></i></a></li>
              <li><a href="#"><i id="sociel-icon" class="fa fa-twitter-square fa-3x twit"></i></li>
              
            </ul>
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
    

     <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"  >


     <section class="content">
         <!--  <div id="form_feed"></div> -->
         <div id ="my-name">
           <div class="content">
             <div class="row">
              
               <div id="form_feed">

                <!-- start edit profile -->
                <div class="container">
            <div class="row ">
              <div class="col-sm-6  ">
                <form action="" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token()}}">
                  <div class="form group bg-success ">
                  
                  <input type="hidden" name="user_id" value="{{$user_id}}">
                  
                  <label for="university" class="control-label"> University *</label>
                  <input type="text" name="university" class="form-control" required>

                  <label for="lives" class="control-label">Lives In  *</label>
                  <input type="text" name="lives" class="form-control" required>

                  
                  <label for="interested" class="control-label">Interested *</label>
                  <input type="text" name="interested" class="form-control" required>

                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </form>
              </div>
              </div> 
           </div>



                <!--edit profile end-->
             
             



               </div>
             </div>
           </div>
         </div>
        </section>
</div><!-- /.content-wrapper -->
      
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="">Alpha Studio</a>.</strong> All rights reserved.
      </footer>

           
    </div> <!-- ./wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    
    {!! Html::script("profile/bootstrap/js/bootstrap.min.js") !!} 
    {!! Html::script("profile/dist/js/app.min.js") !!}
    {!! Html::script("profile/js/script.js") !!}

  </body>
</html>   