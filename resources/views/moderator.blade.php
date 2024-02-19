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

        body {
            padding-top: 60px;
            /* Фиксированное меню вверху страницы */
        }

        .container {
            margin-top: 20px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .ads-container {
            margin-top: 30px;
        }

        .ad-status {
            font-weight: bold;
            margin-top: 10px;
        }

        .ad-actions {
            margin-top: 10px;
        }

        .ad-actions button {
            margin-right: 10px;
        }

        .ad img {
            max-width: 50%;
            /* Сделать изображение адаптивным к ширине контейнера */
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>


<body>
    <x-header></x-header>
    <div class="container cont-mt">
        <div class="d-flex align-items-center justify-content-between">
            <h1 class="text-center">Личный кабинет модератора</h1>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Сортировать
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">По дате</a></li>
                    <li><a class="dropdown-item" href="#">По статусу</a></li>
                </ul>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-3 g-4 ad-container">
            <!-- Пример использования карточек в структуре сетки -->
            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Статус: На модерации</h5>
                        <p class="card-text">Контактный номер: +7 (XXX) XXX-XX-XX</p>
                        <p class="card-text">Email: user@example.com</p>
                        <p class="card-text">Вид животного: Кошка</p>
                        <p class="card-text">Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p class="card-text">Клеймо: отсутствует</p>
                        <p class="card-text">Район: Центральный</p>
                        <p class="card-text">Дата нахождения: 10.02.2024</p>
                        <div class="ad-status">Статус: На модерации</div>
                        <div class="ad-actions">
                            <button class="btn btn-success">Активно</button>
                            <button class="btn btn-warning">Найдено</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Статус: На модерации</h5>
                        <p class="card-text">Контактный номер: +7 (XXX) XXX-XX-XX</p>
                        <p class="card-text">Email: user@example.com</p>
                        <p class="card-text">Вид животного: Кошка</p>
                        <p class="card-text">Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p class="card-text">Клеймо: отсутствует</p>
                        <p class="card-text">Район: Центральный</p>
                        <p class="card-text">Дата нахождения: 10.02.2024</p>
                        <div class="ad-status">Статус: На модерации</div>
                        <div class="ad-actions">
                            <button class="btn btn-success">Активно</button>
                            <button class="btn btn-warning">Найдено</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Статус: На модерации</h5>
                        <p class="card-text">Контактный номер: +7 (XXX) XXX-XX-XX</p>
                        <p class="card-text">Email: user@example.com</p>
                        <p class="card-text">Вид животного: Кошка</p>
                        <p class="card-text">Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p class="card-text">Клеймо: отсутствует</p>
                        <p class="card-text">Район: Центральный</p>
                        <p class="card-text">Дата нахождения: 10.02.2024</p>
                        <div class="ad-status">Статус: На модерации</div>
                        <div class="ad-actions">
                            <button class="btn btn-success">Активно</button>
                            <button class="btn btn-warning">Найдено</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Статус: На модерации</h5>
                        <p class="card-text">Контактный номер: +7 (XXX) XXX-XX-XX</p>
                        <p class="card-text">Email: user@example.com</p>
                        <p class="card-text">Вид животного: Кошка</p>
                        <p class="card-text">Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p class="card-text">Клеймо: отсутствует</p>
                        <p class="card-text">Район: Центральный</p>
                        <p class="card-text">Дата нахождения: 10.02.2024</p>
                        <div class="ad-status">Статус: На модерации</div>
                        <div class="ad-actions">
                            <button class="btn btn-success">Активно</button>
                            <button class="btn btn-warning">Найдено</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Добавьте другие объявления по аналогии -->
        </div>


    </div>
    <x-footer></x-footer>
</body>

</html>
