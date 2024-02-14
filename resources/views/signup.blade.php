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
        <h1 class="text-center">Регистрация</h1>
        <form action="">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                    required>
                <label for="email">Почта</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя" required>
                <label for="name">Имя</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Фамилия" required>
                <label for="surname">Фамилия</label>
            </div>

            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Телефон" required>
                <label for="phone">Телефон</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Пароль"
                    required>
                <label for="password">Пароль</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                    placeholder="Повтор пароля" required>
                <label for="confirmPassword">Повтор пароля</label>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                <label class="form-check-label" for="agree">Согласие на обработку персональных данных</label>
            </div>

            <button class="btn btn-success" type="submit">Регистрация</button>
        </form>
    </div>
    <x-footer></x-footer>
</body>

</html>