<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-palette menu-icon"></i>
                <span class="menu-title">Posts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('post.create')}}">Create New Post</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('post.index')}}">List of Post</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-view-list-alt menu-icon"></i>
                <span class="menu-title">Categories</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-category">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('category.create')}}">Create new category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('category.index')}}">List of category</a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-about" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-view-list-alt menu-icon"></i>
                <span class="menu-title">About Us</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-about">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('about.create')}}">Create About Page</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('about.index')}}">List of About Content</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-author" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Authors</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-author">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('author.create')}}">Create new author</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('author.index')}}">List of author</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.create')}}">Create New User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('user.index')}}">List of User</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-email menu-icon"></i>
                <span class="menu-title">Messages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-user">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.message.index')}}">Read Messages</a></li>
                </ul>
            </div>
        </li>


    </ul>
</nav>
