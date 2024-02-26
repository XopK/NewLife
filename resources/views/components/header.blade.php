<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <div class="d-flex align-items-center">
                <img class="mx-1" src="/images/logo.png" width="45px" alt="logo.png">
                Новая жизнь
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h4 class="offcanvas-title" id="offcanvasNavbarLabel">Меню навигации</h4>
                <button type="button" class="btn-close focus-ring focus-ring-dark" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    @auth
                        <li class="nav-item">
                            <h5>Здраствуй, {{Auth::user()->name}}</h5>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="/search">Поиск</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/profile">Личный кабинет</a>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="/addAnimal">Добавить</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Отзывы</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link text-success" href="/signup">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" href="/signin">Авторизация</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="/logout">Выход</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
