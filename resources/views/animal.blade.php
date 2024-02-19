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
    </style>
</head>


<body>
    <x-header></x-header>
    <div class="container cont-mt">
        <div class="animal-card">

            <div id="carouselExample" class="carousel slide" style="max-width: 70%">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="d-block w-100" alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="d-block w-100" alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/aHR0cDovL3d3dy5saXZlc2N.jpg" class="d-block w-100" alt="aHR0cDovL3d3dy5saXZlc2N.jpg">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="card-body mt-3">
                <h5 class="card-title">Вид животного: Кошка</h5>
                <p>Имя нашедшего: Иван Иванов</p>
                <p>Контактный номер телефона: +7 (XXX) XXX-XX-XX</p>
                <p>Email нашедшего: ivan@example.com</p>
                <p>Дополнительная информация: Порода: сиамская кошка, без клейма</p>
                <p>Клеймо: отсутствует</p>
                <p>Район: Центральный</p>
                <p>Дата нахождения: 10.02.2024</p>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
