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

        <form class="mb-3 mt-3" method="POST" action="/search/filter">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="animalType" class="form-label">Вид животного</label>
                    <input type="text" name="animalType" class="form-control" id="animalType"
                        placeholder="Например, кошка">
                </div>
                <div class="col-md-3">
                    <label for="additionalInfo" class="form-label">Доп. информация</label>
                    <input type="text" name="additionalInfo" class="form-control" id="additionalInfo"
                        placeholder="Описание обстоятельств">
                </div>
                <div class="col-md-3">
                    <label for="area" class="form-label">Район</label>
                    <input type="text" name="area" class="form-control" id="area"
                        placeholder="Например, Центральный">
                </div>
                <div class="col-md-3">
                    <label for="date" class="form-label">Дата</label>
                    <input type="date" max="{{ date('Y-m-d') }}" name="date" class="form-control" id="date">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Искать</button>
        </form>


        <div class="row row-cols-1 row-cols-md-3 g-4">

            @forelse ($animals as $animal)
                <div class="col d-flex justify-content-center">
                    <a href="/animal/{{ $animal->id }}" style="text-decoration: none">
                        <div class="card shadow border-0" style="width: 18rem;">
                            @foreach ($animal->photos as $photo)
                                <img src="/storage/animals/{{ $photo->photo }}" class="card-img-top ind-card-img"
                                    alt="{{ $photo->photo }}">
                            @break
                        @endforeach
                        <div class="card-body">
                            <h5 class="card-title">{{ $animal->animalType }}</h5>
                            @if ($animal->id_user !== null)
                                <p class="card-text"><small class="text-body-secondary">Автор:
                                        {{ $animal->user->name }} {{ $animal->user->surname }}</small></p>
                            @else
                                <p class="card-text"><small class="text-body-secondary">Автор: Аноним</small></p>
                            @endif
                            <p class="card-text">Информация {{ $animal->additionalInfo }}</p>
                            <p class="card-text">Район: {{ $animal->district }}</p>
                            <p class="card-text">Дата {{ date('d.m.Y', strtotime($animal->find_date)) }}</p>
                            <p class="card-text">Контактный номер: {{ $animal->contactNumber }}</p>
                        </div>
                        <div class="card-footer">
                            <small
                                class="text-body-secondary">{{ date('d.m.Y', strtotime($animal->find_date)) }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <h1>Ничего не найдено!</h1>
        @endforelse

    </div>
</div>
<x-footer></x-footer>
</body>

</html>
