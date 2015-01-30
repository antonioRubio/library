<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li>{{ HTML::linkRoute('books.index', 'View all Books') }}</li>
        <li>{{ HTML::linkRoute('books.create', 'Create a Book') }}</li>
    </ul>
    <div class="nav navbar-nav navbar-right">
        <p class="navbar-text" style="padding-right: 2em;">Welcome {{ Auth::user()->username }}</p>
    </div>
</nav>