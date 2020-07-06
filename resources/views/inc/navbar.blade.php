<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SSC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            @if((Auth::user()->name == 'SEU'))
         <li><a href="/students">Students</a></li>
         <li><a href="/">Dashboard</a></li>
         <li><a href="/SendEmail">Send Email</a></li>
          <li><a href="/about">About</a></li>
         <li><a href="/newrequest">New Message</a></li>
         @can('manage-users')
         <li><a href="{{ route('admin.users.index') }}">User Management</a></li>
         @endcan
           @else
            <li><a href="/">Dashboard</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/newrequest">New Message</a></li>
            <li><a href="/SendEmail">Send Email</a></li>
            @can('manage-users')
            <li><a href="{{ route('admin.users.index') }}">User Management</a></li>
            @endcan
            @endif
          </ul>
        </div>
      </div>
    </nav>
