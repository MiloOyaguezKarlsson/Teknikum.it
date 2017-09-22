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

  .nav li>a:hover {
    background-color: #001D3D !important;
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
    margin: 4px 0 !important;
  }
</style>
</head>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="collapse navbar-collapse">
        <div class="navbar-header" id="navbar-header">
          <div class="navbar-brand hide-this">
            <img alt="Brand" src="bilder/teknikum.it-small.svg">
          </div>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control hide-this" placeholder="Sök">
            </div>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </form>
        </div>

      <ul class="nav nav-pills nav-justified">
        <li role="presentation" class="active"><a href="#" class="nav-element">HEM</a></li>
        <li role="presentation"><a href="#" class="nav-element">OM</a></li>
        <li role="presentation"><a href="#" class="nav-element">WOF</a></li>
        <li role="presentation"><a href="#" class="nav-element">FOTO</a></li>
        <li role="presentation"><a href="#" class="nav-element">PRAKTIK</a></li>
      </ul>
    </div>
  </div>
</nav>
