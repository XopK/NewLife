<footer class="footer mt-3">
    <div class="container">
        <p>Телефон: 8 (800)123-45-67</p>
        <p>Email: <a href="mailto:mail@newlife.ru">mail@newlife.ru</a></p>

        <nav>
            <a href="/">Главная</a>
            @guest
                <a href="/signup">Регистрация</a>
                <a href="/signin">Авторизация</a>
            @endguest
            @auth
                @if (Auth::user()->id_role == 2)
                    <a href="/moderator">Личный кабинет</a>
                @else
                    <a href="/profile">Личный кабинет</a>
                @endif
            @endauth
            <a href="/search">Поиск</a>
        </nav>
    </div>
</footer>
