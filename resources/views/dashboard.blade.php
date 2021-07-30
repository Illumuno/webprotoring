<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{asset('js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/etlinefont.css')}}">


   <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]--><style>
body {
  font-family: "Lato", sans-serif;
}


.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #ffffff;
  overflow-x: hidden;
  padding-top: 15px;
  transition: 0.5s;
}

.sidenav a {
  text-decoration: none;
  font-size: 15px;
  color: #b7b7b7;
  display: block;
  padding-bottom: 10px;
  padding-left: 8px;
}

.sidnav .nav-buttons .closebtn{
  position: absolute;
  /* top: 30px; */
  font-size: 36px;
  margin-left: 130px;
}
.sidnav .nav-buttons button{
  float: left;
  background: #e5eef6;
  color: #0052a8;
  margin-top: 10px;
  padding-top: 2px;
  margin-left: 8px;
  font-size: 19px;
  border: none;
  cursor: pointer;
}


.sidenav i {
  padding-bottom: 10px;
  padding-left: 8px;
}

#m1 {
  margin-right: 8px;
}

#m2 {
  margin-right: 11px;
}

#m3 {
  margin-right: 6px;
}

#m4 {
  margin-right: 3px;
}

#m5 {
  margin-right: 11px;
}

#m6 {
  margin-right: 5px;
}

#m7 {
  margin-right: 5px;
}

#m8 {
  margin-right: 11px;
}


.sidenav a:hover {
  color: #0052a8;
}

/* Add a color to the active/current link */
.sidenav a.active {
  background-color: #ffffff;
  color: #0052a8;
}

.main {
  background: #f5f8fc;
  margin-left: 160px; /* Same as the width of the sidenav */
  margin-right: 220px; /* Same as the width of the sidnav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 2px 14px;
  margin-top: 15px;
  transition: margin-right .5s;
}

.main .topper {
  margin-top: 20px;
  margin-bottom: 10px;
  margin-left: 20px;
  font-size: 32px;
}

@media screen and (max-height: 450px) {
  .sidnav {padding-top: 15px;}
  .sidnav a {font-size: 18px;}
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #ffffff;
  overflow: hidden;
  margin-right: 210px; /* Same as the width of the sidnav */

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: green;
}

.topnav .search-container {
  /* float: right; */
}

.sidnav .nav-buttons button{
  float: left;
  background: #e5eef6;
  color: #0052a8;
  margin-top: 10px;
  padding-top: 2px;
  margin-left: 8px;
  font-size: 19px;
  border: none;
  cursor: pointer;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 10px;
  margin-right: 10px;
  font-size: 13px;
  border: none;
  background: #fafafc;
  color: blue !important;
}

.topnav .search-container button {
  float: right;
  margin-top: 10px;
  padding-top: 2px;
  background: #fafafc;
  font-size: 19px;
  cursor: pointer;
  border: none;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}


.sidnav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #ffffff;
  overflow-x: hidden;
  transition: 0.5s;
}

.sidnav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidnav a:hover {
  color: #0000ff;
}

/* Add a color to the active/current link */
.sidnav a.active {
  background-color: #ffffff;
  color: #0000ff;
}

#c0 {
  /* This bit sets up the horizontal layout */
  display:flex;
  flex-direction:row;
  width: 3%;
  height: 40px;
  background: white;
  
  /* This bit draws the box around it */
  border: none;

  /* I've used padding so you can see the edges of the elements. */
  margin:22px;
}


#c1 {
  /* This bit sets up the horizontal layout */
  display:flex;
  flex-direction:row;
  width: 44%;
  background: white;
  
  /* This bit draws the box around it */
  border: none;

  /* I've used padding so you can see the edges of the elements. */
  margin:22px;
}

#c2 {
  /* This bit sets up the horizontal layout */
  display:flex;
  flex-direction:row;
  width: 44%;
  background: white;
  
  /* This bit draws the box around it */
  border: none;

  /* I've used padding so you can see the edges of the elements. */
  margin:22px;
}

#coll {
  width: 93%;
  border: none;
  background: white;
  margin-left: 22px;
}


.services-box {
	text-align: center;
	border: none;
	padding: 29px 10px 20px;
}

.services-box .services-icon {
	width: 80px;
	height: 80px;
	color: #FFF;
	font-size: 38px;
	line-height: 80px;
	border-radius: 50%;
	display: inline-block;
	margin: 0px auto;
	background: #3375b9 none repeat scroll 0% 0%;
}
.cardo {
  height: 43px; 
  width: 69px; 
  border: none;
}

.moto {
  font-size: 13px;
}

.inputo {
  font-size: 10px;
  padding-right: 300px;
}

.butten{
  font-size: 10px;
  border: none;
}

.metropole{
  color: blue!important;
}



</style>
</head>
<body>

<div class="sidenav">
  <img src="{{asset('images/logo.jpg')}}" style="width: 70px; height: 70px; margin-top: -15px; margin-left: 10px;">
  <h6 style="margin:15px;"><b>Main Menu</b></h6>
  <a href="{{ route('dashboard') }}" class="active"><i class="fa fa-th-large" id="m1"></i>Dashboard</a>
  <a href="#services"><i class="fa fa-fw fa-pencil-square-o" id="m2"></i>Exams</a>
  <a href="#clients"><i class="fa fa-users" aria-hidden="true" id="m3"></i>Students</a>
  <a href="#contact"><i class="fa fa-graduation-cap" id="m4"></i>Courses</a>
  <a href="#contact"><i class="fa fa-fw fa-adn" id="m5"></i>Administrator</a>
  <a href="#contact"><i class="fa fa-laptop" id="m6"></i>Web Proctoring</a>
  <a href="#contact"><i class="fa fa-newspaper-o" id="m7"></i>News & Info</a>
  <a href="#contact"><i class="fa fa-fw fa-file-archive-o" id="m8"></i>Result</a>
  <h6 style="margin: 210px 0px 0px 20px;">©<b>Illumino</b></h6>
</div>

<div id="sidenav1" class="sidnav">
<div class="nav-buttons">
    <button><i class="fa fa-bell" aria-hidden="true"></i></button>
    <button><i class="fa fa-cog" aria-hidden="true"></i></button>
    <a href="javasript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
</div>


<div class="card mb-3" style="max-width: 159px; border:none; margin-top: 80px;">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{asset('images/mrsodiq.png')}}" class="img-fluid rounded-start" alt="..." style="height:67px; width:63px !important; float:right;">
    </div>
    <div class="col-md-7">
      <div class="card-body">
        <h6 class="card-title" style="font-size: 13px!important;"><b>Akinjobi Sodiq</b></h6>
        <p class="card-text" style="font-size: 10px!important;"><small class="text-muted">Admin</small></p>
      </div>
    </div>
  </div>
</div>
  <h6><b>Registration Summary</b></h6>
  <div class="row">
  <div class="col-sm-5">
    <div class="card cardo" style="background: #fff2e6; color: #ff9c33;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Accounting</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-5"  style="margin-top: 5px;">
    <div class="card cardo" style="background: #e5eef6; color: blue;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Banking and Finance</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-5"  style="margin-top: 5px;">
    <div class="card cardo" style="background: #e0f7eb; color: #00994d;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Computer Science</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-5">
    <div class="card cardo" style="background: #ffe6e1; color: #cc6600;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Human Anatomy</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-5">
    <div class="card cardo" style="background: #ffffe6; color: #e6e600;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Mathematics</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-5"  style="margin-top: 5px;">
    <div class="card cardo" style="background: #fff2e6; color: #ff9c33;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Mechanical Engineering</h5>
      </div>
    </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-5">
    <div class="card cardo" style="background: #e5eef6; color: blue;">
      <div class="card-body">
        <h5 class="card-title moto"><b>15632</b></h5>
      </div>
    </div>
  </div>
  <div class="col-sm-7" style="padding-left: 0;">
    <div class="card" style="border: none;">
      <div class="card-body">
        <h5 class="card-title moto">Medicine</h5>
      </div>
    </div>
  </div>
  </div>

</div>

<div class="topnav">
<span onclick="openNav()" style="float:right; font-size: 30px; cursor:pointer;">&#9776;</span>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search" name="search" style="">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>

</div>

<div id="main" class="main">
  <div class= "topper"><b>Dashboard</b></div>
  <div class="card mb-3" style= "background: #f9f4fc; border:none;">
  <div class="row g-0">
  <div  id="c1">
    <div class="col-md-3">
      <div class="services-box">
        <div class="services-icon"> <i class="fa fa-users" aria-hidden="true"></i> </div> 
      </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h6 class="card-title">Total Registered Students</h6>
        <p class="card-text" style="color: #0052a8;">999,999</p>
        <div class="card-footer"><h6 class="card-text" style="font-size: 12px!important;"><small class="text-muted">9999 registered in the last 7 days</small></h6></div>
      </div>
    </div>
  </div>
  <div  id="c2">
    <div class="col-md-3">
      <div class="services-box">
        <div class="services-icon"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> </div> 
      </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h6 class="card-title">Total Courses Registered</h6>
        <p class="card-text" style="color: blue;">999</p>
        <div class="card-footer"><h6 class="card-text" style="font-size: 12px!important;"><small class="text-muted">9 registered in the last 7 days</small></h6></div>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="card" id= "coll">
  <h5 class="card-header" style="background: white; color:#0052a8;"><b>Activity Feed</b></h5>
  <div class="card-body" style="margin-left: 50px;">
    <h6 class="card-title"><b>Lagbaja Chinedu</b></h6>
    <h6 class="card-text" style="font-size: 15px!important;"><small class="text-muted">added a new question to Post UTME 2021.</small></h6>
    <form action="" style="margin-top:-15px;">
      <button class="butten" type="submit"><i class="fa fa-comment metropole"></i></button>
      <input class="inputo" type="text" placeholder="Add a new comment" name="comment">
    </form>
    <div class="card" id= "coll">
    <div class="card-body" style="margin-left: 5px !important;">
        <h6 class="card-title"><b>Lagbaja Chinedu</b></h6>
        <h6 class="card-text" style="font-size: 15px!important;"><small class="text-muted">Nice work.</small></h6>
      </div>
    </div>
  </div>
  <div class="card-body" style="margin-left: 50px;">
    <h6 class="card-title"><b>Lagbaja Chinedu</b></h6>
    <h6 class="card-text" style="font-size: 15px!important;"><small class="text-muted">added a new question to Post UTME 2021.</small></h6>
    <form action="" style="margin-top:-15px;">
      <button class="butten" type="submit"><i class="fa fa-comment metropole"></i></button>
      <input class="inputo" type="text" placeholder="Add a new comment" name="comment">
    </form>
    <div class="card" id= "coll">
      <div class="card-body" style="margin-left: 5px !important;">
        <h6 class="card-title"><b>Lagbaja Chinedu</b></h6>
        <h6 class="card-text" style="font-size: 15px!important;"><small class="text-muted">Nice work.</small></h6>
      </div>
    </div>

  </div>

</div>
<div class="card" id= "coll">
  <h5 class="card-header" style="background: white; color:#0052a8;"><b>Latest Results</b></h5>
</div>

<script>
  function openNav() {
    document.getElementById("sidenav1").style.width = "200px";
    document.getElementById("main").style.marginRight = "200px";

  }

  function closeNav() {
    document.getElementById("sidenav1").style.width = "0";
    document.getElementById("main").style.marginRight = "0";

  }
</script>
   
</body>
</html>