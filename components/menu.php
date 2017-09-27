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
            <li class="active"><a onclick="$('#hem').animatescroll({padding:50});" data-height="150" href="#hem" class="nav-element">HEM</a></li>
            <li><a onclick="$('#om').animatescroll({padding:49});" data-height="0" href="#om" class="nav-element">OM</a></li>
            <li><a onclick="$('#wof').animatescroll({padding:49});" data-height="0" href="#wof" class="nav-element">WOF</a></li>
            <li><a onclick="$('#om').animatescroll({padding:49});" data-height="0" href="#om" class="nav-element">FOTO</a></li>
            <li><a onclick="$('#praktik').animatescroll({padding:49});" data-height="0" href="#praktik" class="nav-element">PRAKTIK</a></li>
          </ul>
        </div>
  </div>
</nav>
