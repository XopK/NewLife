<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New-Life</title>
    <link rel="stylesheet" href="/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            flex: 1;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>


<body>
    <x-header></x-header>
    <div class="container cont-mt">
        <h1 class="text-center">Новая жизнь</h1>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($animals as $key => $slider)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        @foreach ($slider->photos as $item)
                            <img src="/storage/animals/{{ $item->photo }}" class="slider-img d-block w-100"
                                alt="{{ $item->photo }}">
                        @break
                    @endforeach
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $slider->animalType }}</h5>
                        <p>{{ $slider->additionalInfo }}</p>
                        <a href="/animal/{{$slider->id}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="search-block mt-5">
        <h1 class="text-center">Поисковик</h1>
        <form class="d-flex">
            <input class="form-control me-2 border-success focus-ring focus-ring-success" type="search"
                aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
        </form>
    </div>
    <div class="about-us">
        <div class="px-4 pt-5 my-5 text-center">
            <h3 class="display-4 fw-bold text-body-emphasis">Помогли найти более 500 животных.</h3>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Более трех лет способствуем возвращению питомцев к хозяевам.
                    Все услуги оказываются бесплатно.
                </p>
            </div>
            <img src="/images/2698519573.jpg" class="img-fluid rounded-3 shadow-lg mb-4" alt="2698519573.jpg"
                width="700" height="500" loading="lazy">
        </div>
    </div>
    <div class="animals-block">
        <h1 class="text-center">Найденные животные</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 g-3 mt-3">
            @forelse ($animals as $animal)
                <div class="col d-flex justify-content-center">
                    <a href="/animal/{{$animal->id}}" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            @foreach ($animal->photos as $photo)
                                <img src="/storage/animals/{{ $photo->photo }}" class="card-img-top ind-card-img"
                                    alt="{{ $photo->photo }}">
                            @break
                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title">{{ $animal->animalType }}</h5>
                            @if ($animal->id_user !== null)
                                <p class="card-text"><small class="text-body-secondary">Автор: {{$animal->user->name}} {{$animal->user->surname}}</small></p>
                            @else
                                <p class="card-text"><small class="text-body-secondary">Автор: Аноним</small></p>
                            @endif
                            <p class="card-text">Район: {{ $animal->district }}</p>
                            <p class="card-text">Контактный номер: {{ $animal->contactNumber }}</p>
                        </div>
                        <div class="card-footer">
                            <small
                                class="text-body-secondary">{{ date('d.m.Y', strtotime($animal->created_at)) }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @empty
        @endforelse

    </div>
</div>
<div class="search-animals mt-4">
    <h1 class="mb-4 text-center">Форма поиска питомца</h1>

    <form id="petSearchForm">
        <div class="mb-3">
            <label for="district" class="form-label">Район:</label>
            <input type="text" class="form-control" id="district" name="district" required>
        </div>

        <div class="mb-3">
            <label for="animalType" class="form-label">Вид животного:</label>
            <select class="form-select" id="animalType" name="animalType" required>
                <option value="cat">Кошка</option>
                <option value="dog">Собака</option>
                <option value="squirrel">Суслик</option>
                <option value="hamster">Хорек</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="searchText" class="form-label">Поиск по виду животного:</label>
            <input type="text" class="form-control" id="searchText" name="searchText">
        </div>

        <button type="button" class="btn btn-primary">Искать питомца</button>
    </form>
</div>
<div class="review-block mt-4">
    <h1 class="mb-4 text-center">Отзывы</h1>
    <hr>
    <div class="review d-flex justify-content-center">
        <div>
            <h3 class="text-center">Danya22</h3>
            <img src="/images/359313-sepik.jpg" alt="359313-sepik.jpg" width="600px"
                class="mx-auto d-block">
            <p class="w-75 mx-auto text-center">Замечательное место для поиска потерянных питомцев! Благодаря
                этому
                сервису мы
                быстро нашли
                нашу собаку. Огромное спасибо!</p>
            <p class="text-muted m-0 text-center">10 февраля 2024</p>
        </div>
    </div>
    <hr>
    <div class="review d-flex justify-content-center">
        <div>
            <h3 class="text-center">Danya22</h3>
            <img src="/images/359313-sepik.jpg" alt="359313-sepik.jpg" width="600px"
                class="mx-auto d-block">
            <p class="w-75 mx-auto text-center">Замечательное место для поиска потерянных питомцев! Благодаря
                этому
                сервису мы
                быстро нашли
                нашу собаку. Огромное спасибо!</p>
            <p class="text-muted m-0 text-center">10 февраля 2024</p>
        </div>
    </div>
    <hr>
    <div class="review d-flex justify-content-center">
        <div>
            <h3 class="text-center">Danya22</h3>
            <img src="/images/359313-sepik.jpg" alt="359313-sepik.jpg" width="600px"
                class="mx-auto d-block">
            <p class="w-75 mx-auto text-center">Замечательное место для поиска потерянных питомцев! Благодаря
                этому
                сервису мы
                быстро нашли
                нашу собаку. Огромное спасибо!</p>
            <p class="text-muted m-0 text-center">10 февраля 2024</p>
        </div>
    </div>
    <hr>
</div>
<div class="container mt-5">
    <h1 class="mb-4 text-center">Подписка на новости сервиса</h1>

    <form id="subscriptionForm">
        <div class="mb-3">
            <label for="email" class="form-label">Почта</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="agreement" required>
            <label class="form-check-label" for="agreement">Согласие на обработку персональных данных</label>
        </div>

        <button type="submit" class="btn btn-primary">Подписаться</button>
    </form>
</div>
</div>
<x-footer></x-footer>
</body>

</html>
