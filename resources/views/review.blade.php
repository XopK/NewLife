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
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

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
        <div class="form-container">
            <h1 class="text-center">Добавить отзыв</h1>

            <form action="/review/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="additionalInfo" name="review" rows="6"
                        placeholder="Дополнительная информация"></textarea>
                    <label for="review">Отзыв </label>
                    @error('review')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Фото животного</label>
                    <input class="form-control" name="photo" type="file" id="formFileMultiple">
                    @error('photo')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>


                <button class="btn btn-success" type="submit">Добавить отзыв</button>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</body>


</html>
