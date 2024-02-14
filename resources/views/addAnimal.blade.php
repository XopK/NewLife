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
        <div class="form-container">
            <h1 class="text-center">Добавить объявление</h1>

            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="tel" class="form-control" id="contactNumber" name="contactNumber"
                        placeholder="123456789" required>
                    <label for="contactNumber">Контактный номер телефона</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="name@example.com" required>
                    <label for="email">Email человека, нашедшего животное</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="animalType" name="animalType"
                        placeholder="Кошка, собака, и т.д." required>
                    <label for="animalType">Вид животного</label>
                </div>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Фото животного</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" id="additionalInfo" name="additionalInfo" rows="4"
                        placeholder="Дополнительная информация"></textarea>
                    <label for="additionalInfo">Дополнительная информация</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="claim" name="claim"
                        placeholder="Клеймо (если есть)">
                    <label for="claim">Клеймо (если есть)</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="district" name="district" placeholder="Район"
                        required>
                    <label for="district">Район</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="foundDate" name="foundDate" required>
                    <label for="foundDate">Дата, когда было найдено животное</label>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="consent" required>
                    <label class="form-check-label" for="consent">Согласие на обработку персональных данных</label>
                </div>

                <button class="btn btn-success" type="submit">Добавить информацию</button>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>