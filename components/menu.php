<head>
<style media="screen">
  html,body {
    height:100%;
  }

  .container {
    height: 100%;
  }

  .navbar {
    min-height: 0 !important;
    background-color: #012E4D !important;
    border: none !important;
  }

  .nav-justified {
    width: 100% !important;
    margin: auto;
  }

  .nav-justified li {
    width: 20% !important;
    float: left !important;
  }

  .nav-pills>li+li {
    margin-left: 0 !important;
  }

  .nav {
    position: relative;
  }

  .nav li a{
    transition: background-color 0.5s ease;
  }

  .nav>li>a {
    color: white;
    border-radius: 0 !important;
  }

  .nav li.active>a {
    background-color: #F4512E !important;
  }

  .nav li.active>a:hover {
    background-color: #F4512E !important;
  }

  .nav li>a:hover {
    background-color: #001D3D !important;
  }

  .nav li>a:active {
    background-color: #F4512E !important;
  }

  .navbar-header {
    float: none !important;
    text-align: center;
    position: relative;
    height: 150px;
  }

  .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    margin-left: 0 !important;
  }

  .hide-this {
    transition: 0.3s ease;
  }

  .navbar-brand {
    float: none !important;
    height: 100% !important;
  }

  .navbar-brand>img {
    height: 100px;
    margin: auto;
  }

  .navbar-form {
    position: absolute;
    right: 0;
    top: 20px;
    transition: 0.3s ease;
  }

  .navbar-form .form-group{
    width: 250px;
  }

  .form-control {
    border-radius: 20px !important;
    width: 100% !important;
  }

  .navbar-form .btn-default{
    background-color: transparent !important;
    color: white;
    border: none !important;
    margin: 8px 0 !important;
    margin-right: -12px !important;
  }

  .navbar-toggle {
    border: none !important;
    transition: 0.3s ease;
  }

  .navbar-toggle:hover {
    background-color: #001D3D !important;
  }

  .navbar-toggle:focus {
    background-color: transparent !important;
  }

  .icon-bar {
    background-color: white !important;
  }

  @media screen and (max-width: 767px) {
    .navbar-collapse {
      width: 100% !important;
      margin: auto;
    }
    .nav-justified li {
      width: 100% !important;
      float: none !important;
    }
  }
</style>
</head>
<nav class="navbar navbar-fixed-top">
  <div class="container">
        <div class="navbar-header" id="navbar-header">
          <div class="navbar-brand hide-this">
            <img alt="Brand" src="bilder/teknikum.it-small.svg">
          </div>
          <form class="navbar-form navbar-right collapse navbar-collapse" role="search">
            <div class="form-group">
              <input type="text" class="form-control hide-this" placeholder="Sök">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </form>
        </div>

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapse-navbar">
          <ul class="nav navbar-nav nav-pills nav-justified">
            <li class="active"><a onclick="$('#hem').animatescroll({padding:50});" href="#hem" class="nav-element">HEM</a></li>
            <li><a onclick="$('#om').animatescroll({padding:50});" href="#om"class="nav-element">OM</a></li>
            <li><a onclick="$('#om').animatescroll({padding:50});" href="#om" class="nav-element">WOF</a></li>
            <li><a onclick="$('#om').animatescroll({padding:50});" href="#om" class="nav-element">FOTO</a></li>
            <li><a onclick="$('#praktik').animatescroll({padding:50});" href="#praktik" class="nav-element">PRAKTIK</a></li>
          </ul>
        </div>
  </div>
</nav>
