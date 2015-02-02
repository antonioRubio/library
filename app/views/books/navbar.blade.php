<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li>{{ HTML::linkRoute('books.index', 'View all Books') }}</li>
        <li>{{ HTML::linkRoute('books.create', 'Create a Book') }}</li>
    </ul>
    <ul class="nav navbar-nav navbar-right" style="padding-right: 2em;">
        <li class="navbar-text">Welcome <b>{{ Auth::user()->username }}</b></li>
        <li><button class="btn btn-danger navbar-btn"><a href="{{ URL::route('logout') }}" style="color: whitesmoke;"><span class="glyphicon glyphicon-off"></span></a></button></li>
    </ul>
</nav>