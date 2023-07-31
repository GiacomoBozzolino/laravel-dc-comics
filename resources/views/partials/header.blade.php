<header class="p-0">
    <div class="container-fluid bg-primary">
        <div class="row p-0">
            <div class="col-12  p-0">
                <div class=" container d-flex justify-content-end align-items-center text-white ">
                    <div class="px-2 px-1">
                        DC POWER VISA
                    </div>
                    <div class="px-2 px-1 ">
                        ADDITIONAL DC SITE
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class=" col-12 d-flex flex-wrap align-items-center justify-content-between "> 
                <div class="pb-4">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="">
                </div>
                <div>
                    <ul class="d-flex flex-wrap">
                        <li >
                            <a href="">CHARACTERS</a>
                        </li>
                        <li >
                             <a  class="{{ Route::currentRouteName()==='homepage' ? 'active': '' }}" href="{{ route ('homepage') }}">COMICS</a>
                          
                        </li>
                        <li >
                            <a href="">MOVIES</a>
                        </li>
                        <li >
                            <a href="">TV</a>
                        </li>
                        <li >
                            <a href="">GAMES</a>
                        </li>
                        <li >
                             <a href="">COLLECTIBLES</a>
                        </li>
                        <li >
                            <a href="">VIDEOS</a>
                        </li>
                        <li >
                            <a href="">FANS</a>
                        </li>
                        <li >
                            <a href="">NEWS</a>
                        </li>
                        <li >
                            <a href="">SHOP</a>
                        </li>
                        <li >
                            
                            <input type="search" name="search" id="search" placeholder="Search ">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            
                        </li>
                    </ul>
                </div>
            </div>
       </div>

    </div>
    </header>