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
                    @foreach ($animal->photos as $key => $item)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <img src="/storage/animals/{{ $item->photo }}" class="d-block w-100"
                                alt="{{ $item->photo }}">
                        </div>
                    @endforeach
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
                <h5 class="card-title mb-2">Вид животного: {{ $animal->animalType }}</h5>
                @if ($animal->id_user !== null)
                    <p>Имя нашедшего: Иван Иванов</p>
                @endif
                <p>Контактный номер телефона: {{ $animal->contactNumber }}</p>
                <p>Email нашедшего: {{ $animal->email }}</p>
                <p>Дополнительная информация: {{ $animal->additionalInfo }}</p>
                @if ($animal->claim !== null)
                    <p>Клеймо: {{ $animal->claim }}</p>
                @else
                    <p>Клеймо: Отсутсвует</p>
                @endif
                <p>Район: {{ $animal->district }}</p>
                <p>Дата нахождения: {{ date('d.m.Y', strtotime($animal->find_date)) }}</p>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
