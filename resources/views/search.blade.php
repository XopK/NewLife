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
        <h1 class="text-center">Результаты поиска животных</h1>

        <!-- Дублирование формы поиска с главной страницы -->
        <form class="mb-3 mt-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="animalType" class="form-label">Вид животного</label>
                    <input type="text" class="form-control" id="animalType" placeholder="Например, кошка">
                </div>
                <div class="col-md-3">
                    <label for="additionalInfo" class="form-label">Доп. информация</label>
                    <input type="text" class="form-control" id="additionalInfo" placeholder="Описание обстоятельств">
                </div>
                <div class="col-md-3">
                    <label for="area" class="form-label">Район</label>
                    <input type="text" class="form-control" id="area" placeholder="Например, Центральный">
                </div>
                <div class="col-md-3">
                    <label for="date" class="form-label">Дата</label>
                    <input type="date" class="form-control" id="date">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Искать</button>
        </form>

        <!-- Пример отображения результатов поиска -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Вид животного: Кошка</h5>
                        <p>Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p>Клеймо: отсутствует</p>
                        <p>Район: Центральный</p>
                        <p>Дата нахождения: 10.02.2024</p>
                        <p>Контактный номер телефона: +7 (XXX) XXX-XX-XX</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Вид животного: Кошка</h5>
                        <p>Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p>Клеймо: отсутствует</p>
                        <p>Район: Центральный</p>
                        <p>Дата нахождения: 10.02.2024</p>
                        <p>Контактный номер телефона: +7 (XXX) XXX-XX-XX</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Вид животного: Кошка</h5>
                        <p>Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p>Клеймо: отсутствует</p>
                        <p>Район: Центральный</p>
                        <p>Дата нахождения: 10.02.2024</p>
                        <p>Контактный номер телефона: +7 (XXX) XXX-XX-XX</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Вид животного: Кошка</h5>
                        <p>Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p>Клеймо: отсутствует</p>
                        <p>Район: Центральный</p>
                        <p>Дата нахождения: 10.02.2024</p>
                        <p>Контактный номер телефона: +7 (XXX) XXX-XX-XX</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="card-img-top"
                        alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Вид животного: Кошка</h5>
                        <p>Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                        <p>Клеймо: отсутствует</p>
                        <p>Район: Центральный</p>
                        <p>Дата нахождения: 10.02.2024</p>
                        <p>Контактный номер телефона: +7 (XXX) XXX-XX-XX</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
