<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio Hub</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     {!! Html::style("Dash/bootstrap/css/bootstrap.min.css") !!}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {!! Html::style("Dash/dist/css/AdminLTE.min.css") !!}
    
    {!! Html::style("Dash/dist/css/skins/_all-skins.min.css") !!}
    
    {!! Html::style("Dash/css/amaderstyle.css") !!}

    {!! Html::style("Dash/css/default.css") !!}
    
    {!! Html::style("Dash/css/component.css") !!}

    {!! Html::script("Dash/js/modernizr.custom.js") !!}

  </head>
  <body class="hold-transition skin-blue sidebar-mini" >

    

    <div class="wrapper" style="background-color: white" >
      <header class="main-header" >
        <!-- Logo -->
        <div style="height: 40px;">
        <!-- </div> -->
        
        <!-- Header Navbar: style can be found in header.less -->
          <nav class="navbar navbar-static-down" role="navigation" style=" background-color: #DD4B39" >
           

            <a href="{{ url('/profile_page/index') }}"><span id="navbarName">Portfolio <strong>HUB</strong></span></a>

            <div class="navbar-custom-menu">
              <div class="container-1">
                <form><span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="Search" />
                </form>
              </div>
            
              <ul class="nav navbar-nav" style="padding-right: 10px">
                  <li class="dropdown user user-menu">
                    <a href="{{ url('/profile_page/index') }}" class="dropdown-toggle" data-toggle="dropdown">
                        <img src=" {{ asset('Dash/img/munna.png')  }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                      
                  </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                      <a href="{{ url('/auth/logout') }}"><span><strong>Logout</strong></span></a>
                  </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper"  >
        <div class="container">
        <!-- This is body i deleted 1:18 AM _ 24_10_2015 -->
         
        
        <ul class="grid effect-3" id="grid">
        <li class="details" >
            <h3 style="color: #C3A5A5">Project</h3>
            <h2 style="float: left; color: Black"><strong>Portfolio Hub</strong><h2/>
            
            <h4 style="float: right; color: green"><strong>Authenticated by</br>Dr. Syed Akhter Hossain</strong></h4>
            <i class="fa fa-odnoklassniki fa-3x" style="float: right; margin-right: 8px"></i>
            <p></br></br></br></br>This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.</br></p>
            <h4 style="float: left; color: #006DC0">Monjurul Huda Munna</br>Daffodil International University</h4>
            <h4 style="float: right; color: #006DC0">Istiyak Ahmed</br>Daffodil International University</h4>
            <h4 style="float: right; margin-right: 200px; color: #006DC0">Abdur Razzak</br>Daffodil International University</h4>
        </li>
        <li class="details" >
            <h3 style="color: #C3A5A5">Thesis</h3>
            <h2 style="float: left; color: Black"><strong>Thesis on Parallel Programming</strong><h2/>
            
            <h4 style="float: right; color: green"><strong>Authenticated by</br>Dr. Syed Akhter Hossain</strong></h4>
            <i class="fa fa-odnoklassniki fa-3x" style="float: right; margin-right: 8px"></i>
            <p></br></br></br></br>This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.</br></p>
            <h4 style="float: left; color: #006DC0">Monjurul Huda Munna</br>Daffodil International University</h4>
            <h4 style="float: right; color: #006DC0">Istiyak Ahmed</br>Daffodil International University</h4>
            <h4 style="float: right; margin-right: 200px; color: #006DC0">Abdur Razzak</br>Daffodil International University</h4>
        </li>
        <li class="details" >
            <h3 style="color: #C3A5A5">Project</h3>
            <h2 style="float: left; color: Black"><strong>Halka Patla System</strong><h2/>
            
            <h4 style="float: right; color: green"><strong>Authenticated by</br>halka Media</strong></h4>
            <i class="fa fa-odnoklassniki fa-3x" style="float: right; margin-right: 8px"></i>
            <p></br></br></br></br>This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.</br></p>
            <h4 style="float: left; color: #006DC0">Monjurul Huda Munna</br>Daffodil International University</h4>
            <h4 style="float: right; color: #006DC0">Istiyak Ahmed</br>Daffodil International University</h4>
            <h4 style="float: right; margin-right: 200px; color: #006DC0">Abdur Razzak</br>Daffodil International University</h4>
        </li>
        <li class="details" >
            <h3 style="color: #C3A5A5">Thesis</h3>
            <h2 style="float: left; color: Black"><strong>Thesis on how to change your style</strong><h2/>
            
            <h4 style="float: right; color: green"><strong>Authenticated by</br>Design master Razzak</strong></h4>
            <i class="fa fa-odnoklassniki fa-3x" style="float: right; margin-right: 8px"></i>
            <p></br></br></br></br>This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.</br></p>
            <h4 style="float: left; color: #006DC0">Monjurul Huda Munna</br>Daffodil International University</h4>
            <h4 style="float: right; color: #006DC0">Istiyak Ahmed</br>Daffodil International University</h4>
            <h4 style="float: right; margin-right: 200px; color: #006DC0">Abdur Razzak</br>Daffodil International University</h4>
        </li>
        <li class="details" >
            <h3 style="color: #C3A5A5">Project</h3>
            <h2 style="float: left; color: Black"><strong>Portfolio Hub</strong><h2/>
            
            <h4 style="float: right; color: green"><strong>Authenticated by</br>Syed Akhter Hossain</strong></h4>
            <i class="fa fa-odnoklassniki fa-3x" style="float: right; margin-right: 8px"></i>
            <p></br></br></br></br>This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.</br></p>
            <h4 style="float: left; color: #006DC0">Monjurul Huda Munna</br>Daffodil International University</h4>
            <h4 style="float: right; color: #006DC0">Istiyak Ahmed</br>Daffodil International University</h4>
            <h4 style="float: right; margin-right: 200px; color: #006DC0">Abdur Razzak</br>Daffodil International University</h4>
        </li>
        <li class="details" >
            <h3 style="color: #C3A5A5">Thesis</h3>
            <h2 style="float: left; color: Black"><strong>Thesis on Parallel Programming</strong><h2/>
            
            <h4 style="float: right; color: green"><strong>Authenticated by</br>Syed Akhter Hossain</strong></h4>
            <i class="fa fa-odnoklassniki fa-3x" style="float: right; margin-right: 8px"></i>
            <p></br></br></br></br>This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.This tutorial is all about learning how to embellish the search boxes. In this first example I’ll explain what is going on in greater detail; I want to make sure you know exactly what is going on. In the remaining three examples, I will simply show you how to achieve the various transitions.</br></p>
            <h4 style="float: left; color: #006DC0">Monjurul Huda Munna</br>Daffodil International University</h4>
            <h4 style="float: right; color: #006DC0">Istiyak Ahmed</br>Daffodil International University</h4>
            <h4 style="float: right; margin-right: 200px; color: #006DC0">Abdur Razzak</br>Daffodil International University</h4>
        </li>
      </ul>
      </div>

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href="http://almsaeedstudio.com">Daffodil Inernational University</a>.</strong> All rights reserved.
      </footer>

           
    </div> --><!-- ./wrapper -->

    {!! Html::script("Dash/js/masonry.pkgd.min.js") !!}
    
    {!! Html::script("Dash/js/imagesloaded.js") !!}
    
    {!! Html::script("Dash/js/classie.js") !!}
    
    {!! Html::script("Dash/js/AnimOnScroll.js") !!}
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>

  </body>
</html>
