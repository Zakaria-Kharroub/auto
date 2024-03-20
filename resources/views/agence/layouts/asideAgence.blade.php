<nav style="margin-right:50px;">
    <div class="logo-name">

        {{-- <span class="logo_name">welcome <b style="color:brown;"> {{auth()->user()->name}}</b></span> --}}
        <span class="logo_name">welcome <b style="color:brown;">zakaria</b></span>

    </div>
    <div class="menu-items" >
        <ul class="nav-links">
            

            {{-- agence --}}
            <li><a href="">
                <i class="fa-solid fa-building-user"></i>
                <span class="link-name">agence</span>
            </a></li>

            <!-- statistiques  -->
             <li><a href="{{route('agence')}}">
                <i class="fa-solid fa-chart-simple"></i>
                <span class="link-name">statistiques</span>
            </a></li>

            <!-- cars -->
            <li><a href="{{route('voiture')}}">
                <i class="fa-solid fa-car"></i>
                <span class="link-name">voitures</span>
            </a></li>


            <!-- reservation -->
            <li><a href="">
                <i class="fa-solid fa-calendar-check"></i>
                <span class="link-name">reservation</span>
            </a></li>

           



        </ul>

        <ul class="logout-mode">
            <li><a href="">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="link-name">Logout</span>
            </a></li>
        </li>

        </ul>

    </div>
</nav>

{{-- {{$evenements->links()}} --}}
