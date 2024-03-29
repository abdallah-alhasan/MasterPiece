<header class="header">
    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <button class="header__menu" type="button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <a href="/" class="header__logo">
                            GoGame
                        </a>

                        <ul class="header__nav">
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="/"  id="dropdownMenu0">Home </a>

                                {{-- <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu0">
                                    <li><a href="index.html">Home style 1</a></li>
                                    <li><a href="index2.html">Home style 2</a></li>
                                </ul> --}}
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="/trades">Trades </a>

                                {{-- <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="catalog.html">Catalog (sidebar left)</a></li>
                                    <li><a href="catalog2.html">Catalog (sidebar right)</a></li>
                                    <li><a href="category.html">Category page</a></li>
                                    <li><a href="details.html">Details style 1</a></li>
                                    <li><a href="details2.html">Details style 2</a></li>
                                </ul> --}}
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="/trade/create">Add a trades </a>

                                {{-- <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="catalog.html">Catalog (sidebar left)</a></li>
                                    <li><a href="catalog2.html">Catalog (sidebar right)</a></li>
                                    <li><a href="category.html">Category page</a></li>
                                    <li><a href="details.html">Details style 1</a></li>
                                    <li><a href="details2.html">Details style 2</a></li>
                                </ul> --}}
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="#" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='48' d='M112 184l144 144 144-144'/></svg></a>

                                <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu2">
                                    <li><a href="news.html">News (small grid)</a></li>
                                    <li><a href="news2.html">News (big grid)</a></li>

                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="#" role="button" id="dropdownMenuSub" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Single page</a>

                                        <ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenuSub">
                                            <li><a href="article.html">Article</a></li>
                                            <li><a href="interview.html">Interview</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="faq.html">Help Center</a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><circle cx='256' cy='256' r='32' style='fill:none; stroke-miterlimit:10;stroke-width:32px'/><circle cx='416' cy='256' r='32' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><circle cx='96' cy='256' r='32' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/></svg>
                                </a>

                                <ul class="dropdown-menu header__nav-menu header__nav-menu--scroll" aria-labelledby="dropdownMenu3">
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="favorites.html">Favorites</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="signin.html">Sign in</a></li>
                                    <li><a href="signup.html">Sign up</a></li>
                                    <li><a href="forgot.html">Forgot password</a></li>
                                    <li><a href="privacy.html">Privacy policy</a></li>
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="header__actions">
                            <div class="header__lang">
                                <a class="header__lang-btn" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="/img/flags/uk.svg" alt="">
                                    <span>EN</span>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M98,190.06,237.78,353.18a24,24,0,0,0,36.44,0L414,190.06c13.34-15.57,2.28-39.62-18.22-39.62H116.18C95.68,150.44,84.62,174.49,98,190.06Z'/></svg>
                                </a>

                                <ul class="dropdown-menu header__lang-menu" aria-labelledby="dropdownMenuLang">
                                    <li><a href="#"><img src="/img/flags/spain.svg" alt=""><span>SP</span></a></li>
                                    <li><a href="#"><img src="/img/flags/russia.svg" alt=""><span>RU</span></a></li>
                                    <li><a href="#"><img src="/img/flags/china.svg" alt=""><span>CH</span></a></li>
                                </ul>
                            </div>

                            <a href="/user/profile" class="header__login">
                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z' fill='none' stroke-linecap='round' stroke-linejoin='round' stroke-width='32'/><path d='M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z' fill='none' stroke-miterlimit='10' stroke-width='32'/></svg>
                                @if (Auth::check())
                                    <span>{{auth()->user()->name}}</span>
                                @else
                                    <span>LOGIN</span>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__content">
                        <form action="#" class="header__form">
                            <input type="text" class="header__input" placeholder="I'm searching for...">
                            <select class="header__select">
                                <option value="0">All Categories</option>
                                <option value="1">Action</option>
                                <option value="3">Adventure</option>
                                <option value="4">Fighting</option>
                                <option value="5">Flight simulation</option>
                                <option value="6">Platform</option>
                                <option value="7">Racing</option>
                                <option value="8">RPG</option>
                                <option value="9">Sports</option>
                                <option value="10">Strategy</option>
                                <option value="11">Survival horror</option>
                            </select>
                            <button class="header__btn" type="button">
                                <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M221.09,64A157.09,157.09,0,1,0,378.18,221.09,157.1,157.1,0,0,0,221.09,64Z' style='fill:none;stroke-miterlimit:10;stroke-width:32px'/><line x1='338.29' y1='338.29' x2='448' y2='448' style='fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg>
                            </button>
                        </form>

                        <div class="header__actions header__actions--2">
                            <a href="favorites.html" class="header__link">
                                <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><path d='M352.92,80C288,80,256,144,256,144s-32-64-96.92-64C106.32,80,64.54,124.14,64,176.81c-1.1,109.33,86.73,187.08,183,252.42a16,16,0,0,0,18,0c96.26-65.34,184.09-143.09,183-252.42C447.46,124.14,405.68,80,352.92,80Z' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
                                <span>Favorites</span>
                            </a>

                            <a href="checkout.html" class="header__link">
                                <svg xmlns='http://www.w3.org/2000/svg' width='512' height='512' viewBox='0 0 512 512'><circle cx='176' cy='416' r='16' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><circle cx='400' cy='416' r='16' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><polyline points='48 80 112 80 160 352 416 352' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><path d='M160,288H409.44a8,8,0,0,0,7.85-6.43l28.8-144a8,8,0,0,0-7.85-9.57H128' style='fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/></svg>
                                <span>$00.00</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->