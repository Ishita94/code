<!DOCTYPE html>
<html class="no-js" lang=""> 
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Connecting Professionals</title>
  <meta name="description" content="Polmo - One Page HTML5 Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
  <!-- Include Bootstrap Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css" >
  
  <!-- Include Bootstrap Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css')}}" type="text/css" >
  <!-- Include Animate Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}" type="text/css" >
  <!-- Include Fontawesome Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" type="text/css" >
  <!-- Include Magnific PopUp Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}" type="text/css" >
  <!-- bxSlider CSS file -->
  <link href="{{ asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />
  <!-- Include Style Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" >
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="{{ asset('css/responsive.min.css')}}" type="text/css" >
  <!-- Include Modernizer Js -->
  <script src="{{URL::asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

  
  <style type="text/css">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

  </style>

  <script type="text/javascript">
    
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
  </script>
</head>
<body>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang=""> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Connecting Professionals</title>
  <meta name="description" content="Polmo - One Page HTML5 Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
  <!-- Include Bootstrap Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css" >
  
  <!-- Include Bootstrap Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css')}}" type="text/css" >
  <!-- Include Animate Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}" type="text/css" >
  <!-- Include Fontawesome Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" type="text/css" >
  <!-- Include Magnific PopUp Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}" type="text/css" >
  <!-- bxSlider CSS file -->
  <link href="{{ asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />
  <!-- Include Style Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" >
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="{{ asset('css/responsive.min.css')}}" type="text/css" >
  <!-- Include Modernizer Js -->
  <script src="{{URL::asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

  
</head>
<body>

<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="http://localhost/Project/public/index.php/index"<h1 style="color:red;">Connecting Professionals</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">

        <ul class="nav navbar-nav">
          <li class="active">
            <form action="{{url('/info')}}" class="search-form">
                  <input type="text" id="search" name="search" class="search" placeholder="Search for people.." required="">
                  <button type="submit" id="search-submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
          </li>
          <li class="active"><a href="http://localhost/Project/public/index.php/index">Home</a></li>
          <li><a href="http://localhost/Project/public/index.php/services">Services</a></li>

            <!--
          <li><a href="about.html">About Us</a></li>
          <li><a href="protfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact us</a></li>
          

          -->
          
          @if(session()->has('name'))

          <li><a href="http://localhost/Project/public/index.php/profile/Ishita">Profile</a></li>
          <li><a href="http://localhost/Project/public/index.php/network">Network</a></li>
          
          <li><a href="http://localhost/Project/public/index.php/logout">Logout</a></li>
           @else
          <li><a href="http://localhost/Project/public/index.php/ashollogin">Login</a></li>
        
         
          
          
@endif
          
      
        </ul>
      </nav><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </header>
    

                    

                
                    
                    
  <!-- progressbar -->
  
  <form role="form" class="form-inline" action="{{ url('/').'/submitinfo'}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

      <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">Create New Account:</h3>
    <input type="text" name="name" placeholder="Name" required=""/>
    <input type="email" name="email" placeholder="Email" required=""/>
    <input type="password" name="pass" placeholder="Password" required=""/>
     <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Sign Up</button>
  </fieldset>
        </form>

                      
                     
                   
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="{{URL::asset('assets/js/login_index.js')}}"></script>

    
    
    
  </body>
</html>
