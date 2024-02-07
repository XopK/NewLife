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

</head>


<body>
    <x-header></x-header>
    <div class="container">
        <h1 class="text-center">Найденные животные</h1>
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
    </div>
</body>

</html>
