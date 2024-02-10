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
        .review {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 8px;
        }

        .review img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>
    <x-header></x-header>
    <div class="container">
        <h1 class="text-center">Новая жизнь</h1>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/2894c6e765f0c46dd633c2649ec56b2e.jpeg" class="slider-img d-block w-100"
                        alt="2894c6e765f0c46dd633c2649ec56b2e.jpeg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Котик "Олег"</h5>
                        <p>Сидел в коробке возле магазина</p>
                        <button class="btn btn-primary">Подробнее</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/359313-sepik.jpg" class="slider-img d-block w-100" alt="359313-sepik.jpg">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Пёс</h5>
                        <p>Бегал по улице</p>
                        <button class="btn btn-primary">Подробнее</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="slider-img d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Кот</h5>
                        <p>Эт мой</p>
                        <button class="btn btn-primary">Подробнее</button>
                    </div>
                </div>
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
            <h1>Найденные животные</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 g-3 mt-3">
                <div class="col d-flex justify-content-center">
                    <a href="#" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top ind-card-img"
                                alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Кошка</h5>
                                <p class="card-text"><small class="text-body-secondary">danya22</small></p>
                                <p class="card-text">Район: Кировский р-н</p>
                                <p class="card-text">Контактный номер: +78969640327</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Добавлено 10 минут назад</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top ind-card-img"
                                alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Кошка</h5>
                                <p class="card-text"><small class="text-body-secondary">danya22</small></p>
                                <p class="card-text">Район: Кировский р-н</p>
                                <p class="card-text">Контактный номер: +78969640327</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Добавлено 10 минут назад</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top ind-card-img"
                                alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Кошка</h5>
                                <p class="card-text"><small class="text-body-secondary">danya22</small></p>
                                <p class="card-text">Район: Кировский р-н</p>
                                <p class="card-text">Контактный номер: +78969640327</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Добавлено 10 минут назад</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top ind-card-img"
                                alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Кошка</h5>
                                <p class="card-text"><small class="text-body-secondary">danya22</small></p>
                                <p class="card-text">Район: Кировский р-н</p>
                                <p class="card-text">Контактный номер: +78969640327</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Добавлено 10 минут назад</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top ind-card-img"
                                alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Кошка</h5>
                                <p class="card-text"><small class="text-body-secondary">danya22</small></p>
                                <p class="card-text">Район: Кировский р-н</p>
                                <p class="card-text">Контактный номер: +78969640327</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Добавлено 10 минут назад</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top ind-card-img"
                                alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                            <div class="card-body">
                                <h5 class="card-title">Кошка</h5>
                                <p class="card-text"><small class="text-body-secondary">danya22</small></p>
                                <p class="card-text">Район: Кировский р-н</p>
                                <p class="card-text">Контактный номер: +78969640327</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">Добавлено 10 минут назад</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="search-animals mt-4">
            <h1 class="mb-4">Форма поиска питомца</h1>

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
            <div class="review">
                <h3>Danya22</h3>
                <p>Замечательное место для поиска потерянных питомцев! Благодаря этому сервису мы быстро нашли
                    нашу собаку. Огромное спасибо!</p>
                <p class="text-muted m-0">Дата отзыва: 10 февраля 2024</p>
            </div>
            <hr>
            <div class="review">
                <h3>Danya22</h3>
                <p>Замечательное место для поиска потерянных питомцев! Благодаря этому сервису мы быстро нашли
                    нашу собаку. Огромное спасибо!</p>
                <p class="text-muted m-0">Дата отзыва: 10 февраля 2024</p>
            </div>
            <hr>
            <div class="review">
                <h3>Danya22</h3>
                <p>Замечательное место для поиска потерянных питомцев! Благодаря этому сервису мы быстро нашли
                    нашу собаку. Огромное спасибо!</p>
                <p class="text-muted m-0">Дата отзыва: 10 февраля 2024</p>
            </div>
            <hr>
            <div class="review">
                <h3>Danya22</h3>
                <p>Замечательное место для поиска потерянных питомцев! Благодаря этому сервису мы быстро нашли
                    нашу собаку. Огромное спасибо!</p>
                <p class="text-muted m-0">Дата отзыва: 10 февраля 2024</p>
            </div>
            <hr>
            <div class="review">
                <h3>Danya22</h3>
                <p>Замечательное место для поиска потерянных питомцев! Благодаря этому сервису мы быстро нашли
                    нашу собаку. Огромное спасибо!</p>
                <p class="text-muted m-0">Дата отзыва: 10 февраля 2024</p>
            </div>
            <hr>
            <div class="review">
                <h3>Danya22</h3>
                <p>Замечательное место для поиска потерянных питомцев! Благодаря этому сервису мы быстро нашли
                    нашу собаку. Огромное спасибо!</p>
                <p class="text-muted m-0">Дата отзыва: 10 февраля 2024</p>
            </div>
            <hr>
        </div>
    </div>
</body>

</html>
