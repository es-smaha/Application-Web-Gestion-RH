<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/kohler.jpg">
  <link rel="icon" type="image/png" href="../assets/img/kohler.jpg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- fullcalendar -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
   
  <style>
  body{
  background:#eeeeee;
}

section{
		float: left;
		padding-top: 50px;
		padding-bottom: 100px;
		width: 100%;
		padding-left:0;
		padding-right:0;
}

#icon-wrapper{
	width:100%;
	float:left;
	height:300px;
}

.icons {
	width:25%;
	float:left;
	position:relative;
}
.icons2 {
	width:25%;
	float:left;
	position:relative;
	margin-left:25%;
}
.icons3 {
	width:25%;
	float:left;
	position:relative;
	margin-left:50%;
}
.icons4 {
	width:25%;
	float:left;
	position:relative;
	margin-left:75%;
}

.icon-slide-container{
	height:300px;
	overflow:hidden;
	text-align: left;
	position: absolute;
	float: left;
	width: 300px;
	left: 50%;
	margin-left: -150px;
}

.slide-icon{
  width:300px;
  height:auto;
  position:absolute;
  margin-top:-300px;
  -webkit-transition:.4s ease;
  -moz-transition:.4s ease;
  -ms-transition:.4s ease;
  -o-transition:.4s ease;
  transition:.4 ease;
}
	
.slide-icon:hover{
  position:absolute;
  margin-top:0;
}

@media only screen and (max-width: 1300px) {
  #icon-wrapper{
		width:100%;
		float:left;
		height:170px;
	}
  .icon-slide-container {
		height: 200px;
		overflow: hidden;
		text-align: left;
		position: absolute;
		float: left;
		width: 200px;
		left: 50%;
		margin-left: -100px;
	}
  .slide-icon {
		width: 200px;
		height: auto;
		position: absolute;
		margin-top: -200px;
	}
}

@media only screen and (max-width: 1000px) {
  #home-social-container{
		margin-right: 0;
		margin-left: 0;
		width: 100%;
		padding: 0;
		float: left;
		left: 0;
	}
}

@media only screen and (max-width: 840px) {
  #icon-wrapper{
		width:100%;
		float:left;
		height:650px;
	}
	
	.icon-slide-container {
		height: 300px;
		overflow: hidden;
		text-align: left;
		position: absolute;
		float: left;
		width: 300px;
		left: 50%;
		margin-left: -150px;
	}
	
	.slide-icon {
		width: 300px;
		height: auto;
		position: absolute;
		margin-top: -300px;
	}	
	.icons {
		width: 50%;
		float: left;
		position: relative;
	}
	.icons2 {
		width: 50%;
		float: left;
		position: relative;
		margin-left: 50%;
	}
	.icons3 {
		width: 50%;
		float: left;
		position: relative;
		margin-left: 0%;
		margin-top: 350px;
	}
	.icons4 {
		width: 50%;
		float: left;
		position: relative;
		margin-left: 50%;
	}
}
                        
@media only screen and (max-width: 650px) {
	#icon-wrapper {
		height: 400px;
	}
	#section{
		width: 90%;
		padding-left:5%;
		padding-right:5%;
	}
	.slide-icon {
		width: 200px;
		height: auto;
		position: absolute;
		margin-top: -200px;
	}
	.icon-slide-container {
		height: 200px;
		width: 200px;
		left: 50%;
		margin-left: -100px;
	}
	.icons3 {
		width: 50%;
		position: relative;
		margin-left: 0%;
		margin-top: 230px;
	}
}
                                  
@media only screen and (max-width: 570px) {
	#icon-wrapper {
		height: 300px;
	}
	.slide-icon {
		width: 150px;
		height: auto;
		position: absolute;
		margin-top: -150px;
	}
	.icon-slide-container {
		height: 150px;
		width: 150px;
		left: 50%;
		margin-left: -75px;
	}
	.icons3 {
		width: 50%;
		float: left;
		margin-left: 0%;
		margin-top: 190px;
	}	
}
  
  
  
  
  </style>
  <style>

@import url(https://fonts.googleapis.com/css?family=PT+Sans+Narrow);
body {
  font-family: Open Sans, "Helvetica Neue", "Helvetica", Helvetica, Arial,   sans-serif;
  font-size: 13px;
  color: #666;
  position: relative;
  -webkit-font-smoothing: antialiased;
  margin: 0;
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
  margin: 0;
  padding: 0;
  font-size: 13px;
  direction: ltr;
}

.sectionClass {
  padding: 20px 0px 50px 0px;
  position: relative;
  display: block;
}

.fullWidth {
  width: 100% !important;
  display: table;
  float: none;
  padding: 0;
  min-height: 1px;
  height: 100%;
  position: relative;
}


.sectiontitle {
  background-position: center;
  margin: 30px 0 0px;
  text-align: center;
  min-height: 20px;
}

.sectiontitle h2 {
  font-size: 30px;
  color: #222;
  margin-bottom: 0px;
  padding-right: 10px;
  padding-left: 10px;
}


.headerLine {
  width: 160px;
  height: 2px;
  display: inline-block;
  background: #101F2E;
}


.projectFactsWrap{
    display: flex;
  margin-top: 30px;
  flex-direction: row;
  flex-wrap: wrap;
}


#projectFacts .fullWidth{
  padding: 0;
}

.projectFactsWrap .item{
  width: 25%;
  height: 100%;
  padding: 50px 0px;
  text-align: center;
}

.projectFactsWrap .item:nth-child(1){
  background: rgb(16, 31, 46);
}

.projectFactsWrap .item:nth-child(2){
  background: rgb(18, 34, 51);
}

.projectFactsWrap .item:nth-child(3){
  background: rgb(21, 38, 56);
}

.projectFactsWrap .item:nth-child(4){
  background: rgb(23, 44, 66);
}

.projectFactsWrap .item p.number{
  font-size: 40px;
  padding: 0;
  font-weight: bold;
}

.projectFactsWrap .item p{
  color: rgba(255, 255, 255, 0.8);
  font-size: 18px;
  margin: 0;
  padding: 10px;
  font-family: 'Open Sans';
}


.projectFactsWrap .item span{
  width: 60px;
  background: rgba(255, 255, 255, 0.8);
  height: 2px;
  display: block;
  margin: 0 auto;
}


.projectFactsWrap .item i{
  vertical-align: middle;
  font-size: 50px;
  color: rgba(255, 255, 255, 0.8);
}


.projectFactsWrap .item:hover i, .projectFactsWrap .item:hover p{
  color: white;
}

.projectFactsWrap .item:hover span{
  background: white;
}

@media (max-width: 786px){
  .projectFactsWrap .item {
     flex: 0 0 50%;
  }
}

/* AUTHOR LINK */


footer{
  z-index: 100;
  padding-top: 50px;
  padding-bottom: 50px;
  width: 100%;
  bottom: 0;
  left: 0;
}

footer p {
color: rgba(255, 255, 255, 0.8);
  font-size: 16px;
  opacity: 0;
  font-family: 'Open Sans';
  width: 100%;
    word-wrap: break-word;
  line-height: 25px;
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
  margin: 0;
  -webkit-transition: all 250ms ease;
  -moz-transition: all 250ms ease;
  transition: all 250ms ease;
}

footer .authorWindow a{
  color: white;
  text-decoration: none;
}

footer p strong {
    color: rgba(255, 255, 255, 0.9);
}

.about-me-img {
  width: 120px;
  height: 120px;
  left: 10px;
  /* bottom: 30px; */
  position: relative;
  border-radius: 100px;
}


.about-me-img img {
}


.authorWindow{
  width: 600px;
  background: #75439a;
  padding: 22px 20px 22px 20px;
  border-radius: 5px;
  overflow: hidden;
}

.authorWindowWrapper{
  display: none;
  left: 110px;
  top: 0;
  padding-left: 25px;
  position: absolute;
}





.trans{
  opacity: 1;
  -webkit-transform: translateX(0px);
  transform: translateX(0px);
  -webkit-transition: all 500ms ease;
  -moz-transition: all 500ms ease;
  transition: all 500ms ease;
}

@media screen and (max-width: 768px) {
    .authorWindow{
         width: 210px;
    }

    .authorWindowWrapper{
             bottom: -170px;
  margin-bottom: 20px;
    }

    footer p{
          font-size: 14px;
    }
}







  </style>
    <style>
/* lll */

.card5 {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.jumbotron { 
    padding: 1rem 1rem;
    margin-bottom: 2rem;
    background-color: #ffff;
    border-radius: 0.3rem;
}
.cards-listt {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.cardi {
  margin: 30px auto;
  width: 250px;
  height: 250px;
  border-radius: 0px;
  
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.cardi .card_image {
  width: inherit;
  height: inherit;
  text-align:center;
  border-radius: 40px;
}

.cardi .card_image img {
  width: 250px;
  height: 200px;
  border-radius: 0px;
  margin-top: 20px;
  object-fit: cover;
}

.cardi .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -30px;
  height: 20px;
}

.cardi:hover {
   transform: scale(0.9, 0.9); 
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-listt {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


/*
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}
*/

/* ;;; */
      .card .card-header-primary .card-icon, .card .card-header-primary .card-text, .card .card-header-primary:not(.card-header-icon):not(.card-header-text), .card.bg-primary, .card.card-rotate.bg-primary .front, .card.card-rotate.bg-primary .back {
        background: linear-gradient(60deg,#424644, #439c84);
}

      .form-control {
   
        border-style: inset;
    height: 36px;
   
}
.form-control, .is-focused .form-control {
    background-image: linear-gradient(to top, #5eab80 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px);
}
.btn.btn-secondary {
    color: #333333;
    background-color: gray;
  
   
}
.card .card-header-success .card-icon, .card .card-header-success .card-text, .card .card-header-success:not(.card-header-icon):not(.card-header-text), .card.bg-success, .card.card-rotate.bg-success .front, .card.card-rotate.bg-success .back {
    background: linear-gradient(60deg,#424644, #439c84);
}
.btn.btn-success {
    color: #fff;
    background-color: #96b197;
}
.btn.btn-success.btn-link {
    background-color: transparent;
    color: #649e85;
    box-shadow: none;
}
.sidebar[data-color="green"] li.active>a {
    background-color: orange;
    box-shadow: 0 4px 20px 0px rgba(1, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
}

.text-primary {
    color: black!important;
}
.sidebar .nav li a, .sidebar .nav li .dropdown-menu a {
    margin: 10px 15px 0;
    border-radius: 3px;
    color: white;
    padding-left: 10px;
    padding-right: 10px;
    text-transform: capitalize;
    font-size: 25px;
    padding: 10px 15px;
}
    </style>
  
</head>

<body class="sidebar-mini">
  <div class="wrapper">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="../assets/img/sidebar-3.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         Responsable Rh
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <li class="{{'dashboard2'==request()->path()?'active':''}}">
            <a class="nav-link" href="/dashboard2">
            <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{'users'==request()->path()?'active':''}} ">
            <a class="nav-link" href="/users">
              <i class="material-icons">person</i>
              <p>Gestion Collaborateurs</p>
            </a>
          </li>
        <!-- <li class="{{'Myprophil' == request()->path() ? 'active' : ''}}" class="nav-item "> 
            <a class="nav-link" href="/Myprophil">
              <i class="material-icons">account_circle</i>
              <p>Profile </p>
            </a>
          </li>-->
          <li class="{{'administration'==request()->path()?'active':''}}">
            <a class="nav-link" href="/administration">
            <i class="material-icons">build</i>
              <p>configuration</p>
            </a>
          </li>
         
     
          <li class="{{'docum'==request()->path()?'active':''}} ">
            <a class="nav-link" href="/docum">
              <i class="material-icons">library_books</i>
                
              <p> Documents Administratifs</p>
              <!-- 
            
         -->
            </a>
          </li> 
          <li class="nav-item ">
            <a class="nav-link" href="/cal">
              <i class="material-icons">content_paste</i>
              <p>calendrier</p>
            </a>
          </li>
         
          <li class="{{'Reclamationn' == request()->path() ? 'active' : ''}}" class="nav-item ">
            <a class="nav-link" href="/Reclamationn">
              <i class="material-icons">error_outline</i>
              <p>Systeme Reclamations </p>
            </a>
          </li>
         
          <li class="{{'planningrh' == request()->path() ? 'active' : ''}}" class="nav-item ">
            <a class="nav-link" href="/planningrh">
              <i class="material-icons">event</i>
              <p>Planning</p>
            </a>
          </li> 
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
        <img src="../assets/img/kohler2.jpg" alt="kohler"></a>
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
               
                 
                
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">{{Auth::user()->unreadNotifications->count()}}</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                @foreach(Auth::user()->notifications as $notification)
                   @if($notification->notifiable_id==Auth::user()->id &&   $notification->read_at == '' )
                                      @if($notification->type=="App\Notifications\Userdemandedocument")
                                      <span class="notification">1</span>
                    <p>
                    <a class="dropdown-item" href="/docum ">
                   <span style="color:green" class="material-icons">description</span>
                  &nbsp    Nouvelle demande de    &nbsp<b> Document Administrative </b> &nbsp  par &nbsp <span class="badge badge-warning">  {{$notification->data['userId']}} </span> &nbspil y'a     {{$notification->created_at->diffforHumans()}}  </a>
                    </p>
                   {{$notification->markAsRead()}}
                 @endif
                 @endif

                    @endforeach
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }} {{ Auth::user()->prenom}} <span class="caret"></span> <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="/Myprophil">Profile</a>
                  <a class="dropdown-item" href="/dashboard2">Settings</a>
                 
               
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                                </a>

                                   
                             
                         
             
              </li>
            </ul>
          </div>
        </div>
      </nav>
        <br>
        <br>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        @if(count($errors)>0)
@if ($errors->any()) 
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                @endif
                @if(session()->has('fail'))
                   <div class="alert alert-warning" role="alert">
                      {{session()->get('fail')}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                                 </button>
                      </div>
                       @endif

                    @if(session()->has('delete'))
                    <div class="alert alert-danger" role="alert">
                       {{session()->get('delete')}}
                     </div>
                      @endif
                      @if(session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                       {{session()->get('error')}}
                     </div>
                      @endif
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{session()->get('success')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                                 </button>
                                </div>
                               @endif
                               @include('sweet::alert')
        @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
           
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Portail Web<i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Kohler JacobdelaFon</a> 
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <script src="../assets/js/jquery.elevatezoom.js"  type="text/javascript"></script>
  <script src="../assets/js/jquery-1.8.3.min"  type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  

  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
    <script>
     var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
    
    
    
    </script>
 
  @yield('scripts')
 
</body>

</html>