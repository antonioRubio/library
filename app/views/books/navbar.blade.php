<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        {{ HTML::linkRoute('books.index', 'Book Alert', array(), array('class' => 'navbar-brand')) }}
    </div>
    <ul class="nav navbar-nav">
        <li>{{ HTML::linkRoute('books.index', 'View all Books') }}</li>
        <li>{{ HTML::linkRoute('books.create', 'Create a Book') }}</li>
    </ul>
</nav>