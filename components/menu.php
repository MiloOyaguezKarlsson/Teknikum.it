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
  }

  .navbar-default {
    background-color: #012E4D !important;
    border: none !important;
  }

  .nav-justified {
    width: 80% !important;
    margin: auto;
  }

  #brand-ikon {
    z-index: 100;
    left: 0;
    top: 0;
    position: absolute;
    opacity: 0;
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

  .nav li>a:hover {
    background-color: #001D3D !important;
  }

  .navbar-header {
    float: none !important;
    text-align: center;
    position: relative;
    height: 150px;

  }

  .navbar-brand {
    float: none !important;
    height: 100% !important;
  }

  .navbar-brand>img {
    width: 250px;
    margin: auto;
    position: absolute;
  }

  .navbar-form {
    position: absolute;
    right: 0;
    top: 20px;
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
  }
</style>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse">
        <div class="navbar-header" id="navbar-header">
          <div class="navbar-brand">
            <img alt="Brand" src="bilder/teknikum_it_logga.jpg">
          </div>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Sök">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </form>
        </div>

      <ul class="nav nav-pills nav-justified">
        <li id="brand-ikon"role="presentation"><img src="bilder/teknikum_it_logga_ikon.jpg" alt=""></li>
        <li role="presentation" class="active"><a href="#" class="nav-element">HEM</a></li>
        <li role="presentation"><a href="#" class="nav-element">OM</a></li>
        <li role="presentation"><a href="#" class="nav-element">WOF</a></li>
        <li role="presentation"><a href="#" class="nav-element">FOTO</a></li>
        <li role="presentation"><a href="#" class="nav-element">PRAKTIK</a></li>
      </ul>
    </div>
  </div>
</nav>
