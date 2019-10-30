<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Customer Creator</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
            <li class="{{Request::is('customers/create') ? 'active' : ''}}"><a href="/customers/create">Create</a></li>
            <li class="{{Request::is('customers') ? 'active' : ''}}"><a href="/customers">View</a></li>
            <li class="{{Request::is('search') ? 'active' : ''}}"><a href="/search">Search</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
