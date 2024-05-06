<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Press Start 2P', cursive;
            display: flex;
            background-color: #f0f0f0;
        }

        #sidebar {
            width: 200px;
            height: 100vh;
            background-color: #1e1e1e;
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            right: 0;
        }

        #main-content {
            flex: 1;
            padding: 20px;
            margin-right: 240px; /* Добавляем отступ справа, чтобы контент не наезжал на боковую панель */
        }

        /* Стили для ссылок в боковой панели */
        #sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #sidebar ul li {
            margin-bottom: 10px;
        }

        #sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #ff6f00;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        #sidebar ul li a:hover {
            background-color: #ff9000;
        }

        /* Стили для таблицы */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #ff6f00;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        /* Стили для кнопок в таблице */
        table button {
            background-color: #ff6f00;
            color: #fff;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        table button:hover {
            background-color: #ff9000;
        }
    </style>
</head>
<body>
    <div id="sidebar">
        <h2>Игровая Навигация</h2>
        <ul>
            <li class="active"><a href="updown.php">Сайт</a></li>
            <li><a href="user.php">Аккаунты</a></li>
            <li><a href="bron.php">Бронирование</a></li>
            <li><a href="comment.php">Комментарии</a></li>
            <li><a href="holodelnik.php">Заказы</a></li>
        </ul>
    </div>

    <div id="main-content">
        <h1>Админ Панель</h1>
        <table id="accountTable">
            <thead>
                <tr>
                    <th>Логин</th>
                    <th>Пароль</th>
                    <th>Номер телефона</th>
                    <th>Email</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>user123</td>
                    <td>********</td>
                    <td>1234567890</td>
                    <td>user@example.com</td>
                    <td><button onclick="editAccount()">Редактировать</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Функция для отображения формы редактирования данных аккаунта
        function editAccount() {
            // Получаем таблицу и выбираем первую строку
            var table = document.getElementById("accountTable");
            var row = table.rows[1]; // 0-я строка это заголовок

            // Заменяем содержимое ячеек на поля ввода
            var login = row.cells[0].innerText;
            row.cells[0].innerHTML = '<input type="text" value="' + login + '">';
            var password = row.cells[1].innerText;
            row.cells[1].innerHTML = '<input type="text" value="' + password + '">';
            var phoneNumber = row.cells[2].innerText;
            row.cells[2].innerHTML = '<input type="text" value="' + phoneNumber + '">';
            var email = row.cells[3].innerText;
            row.cells[3].innerHTML = '<input type="text" value="' + email + '">';

            // Добавляем кнопку сохранения изменений
            var saveButton = document.createElement("button");
            saveButton.innerText = "Сохранить";
            saveButton.onclick = function() {
                // Здесь можно добавить код для сохранения изменений
                alert("Изменения сохранены!");
            };
            row.cells[4].innerHTML = "";
            row.cells[4].appendChild(saveButton);
        }
    </script>
</body>
</html>
