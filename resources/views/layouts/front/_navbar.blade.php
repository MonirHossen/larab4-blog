<nav class="navbar navbar-expand-md  navbar-light bg-light">
    <div class="container">


        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown05">
                        @foreach($categories as $category)
                         <a class="dropdown-item" href="{{ route('category',$category->id) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_us') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}">Contact</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
