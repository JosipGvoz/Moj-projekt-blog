<div class="container-fluid">
    <div class="row">
        <nav class="col-ms-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">My posts<span class="sr-only">(current)</span></a>
            </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.form') }}">Create new post</a>
                </li>
            </ul>
        </nav>