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
        <h1>Личный кабинет пользователя</h1>

        <div class="profile-info">
            <p>Номер телефона: {{ Auth::user()->phone }} 
            <p>Email: {{ Auth::user()->email }}
            <p>Количество добавленных объявлений: {{ $animals->count() }}</p>
            <p>Количество животных, вернувшихся к хозяевам: {{$find->count()}}</p>
            <p>Дата регистрации: {{ date('d.m.Y', strtotime(Auth::user()->created_at)) }} </p>
            <p>Дней с момента регистрации: {{ Auth::user()->created_at->diffForHumans() }}</p>
        </div>

        <div class="ads-container ">
            <h2>Объявления пользователя</h2>
            @forelse ($animals as $item)
                <div class="ad mb-3">
                    @if ($item->status == 0)
                        <p>Статус: На модерации</p>
                    @elseif($item->status == 1)
                        <p>Статус: Принято</p>
                    @else
                        <p>Статус: Найдено</p>
                    @endif

                    <p>Район: {{ $item->district }}</p>
                    <p>Дата поимки: {{ date('d.m.Y', strtotime($item->find_date)) }}</p>
                    <p>Дополнительная информация: {{ $item->additionalInfo }}</p>
                    @foreach ($item->photos as $image)
                        <img src="/storage/animals/{{ $image->photo }}" class="slider-img d-block w-100"
                            alt="{{ $image->photo }}">
                    @break
                @endforeach
                <div class="ad-actions">
                    <button class="btn btn-danger">Удалить</button>
                    <button class="btn btn-primary">Редактировать</button>
                </div>
            </div>
        @empty
            <h1>ПУСТО</h1>
        @endforelse


    </div>
</div>
<x-footer></x-footer>
</body>

</html>
