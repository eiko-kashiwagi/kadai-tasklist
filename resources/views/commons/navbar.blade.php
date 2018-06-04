<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">TaskList</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-th-large"></span>{!!link_to_route('tasks.index', 'HOME') !!}</li></button>
                    <li><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span>{!! link_to_route('tasks.create', 'Add New Tasks') !!}</li></button>
                </ul>
            </div>
        </div>
    </nav>
</header>