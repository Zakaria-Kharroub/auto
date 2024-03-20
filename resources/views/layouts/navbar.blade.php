









<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}" style="color: #1F2532;"><span class="nav-brand-two text-primary">You</span>car</a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link ml-5 navigation" href="contact.html" >Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-5 navigation" href="contact.html" >About</a>
                </li>



                <li class="nav-item" style="padding-top: 5px;">
                    <!-- <input class="search-input form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <input class="search-input form-control me-2" type="text"  id="searchInput" oninput="search()" placeholder="Search">
                </li>



                @auth






                <div class="dropdown mt-1 ms-2">
                    <a class="btn btn-outline dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">profile</a></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Log out</a></li>
                    </ul>
                </div>



                @else
                    <li class="nav-item">
                        <a class="nav-link ml-5 navigation" href="{{route('login')}}" >login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ml-5 navigation" href="{{route('register')}}" >register</a>
                    </li>
                @endauth







                <!-- <li class="nav-item">
                    <a class="nav-link ml-5 navigation" href="?uri=/login" >login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-5 navigation" href="?uri=/register" >register</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
