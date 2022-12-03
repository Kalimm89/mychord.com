
<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
           
           <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>                  
                                    <ul id="navigation">  
                                        <li><a href="{{ route('home') }}"><img class="" width="200" src="/public/assets/img/logo/logo1.png" alt=""></a></li> 
                                        <li><a href="{{ route('home') }}">Главная</a></li>
                                        <li><a href="{{ route('artists.all') }}">Исполнители</a></li>
                                        <li><a href="{{ route('styles.all') }}">Жанры</a></li>
                    
                                        <li><a href="{{ route('login') }}">Авторизация</a></li>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    {{-- <form method="get" action="{{ route('search') }}">
                                        <input type="text" name="s" value="" required>
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form> --}}
                                    <form class="form-inline" method="get" action="{{ route('search') }}">
                                        <input name="s" class="form-control mr-sm-2 " type="text" placeholder="Введите название" required="">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>
