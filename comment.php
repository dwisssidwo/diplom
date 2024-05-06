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
            margin-right: 240px;
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
            <li><a href="comment.php" onclick="replyComment()">Комментарии</a></li>
            <li><a href="holodelnik.php">Холодельник</a></li>
        </ul>
    </div>

    <div id="main-content">
        <h1>Админ Панель</h1>
        <h2>Таблица комментариев</h2>
        <table id="commentTable">
            <thead>
                <tr>
                    <th>Логин пользователя</th>
                    <th>Комментарий</th>
                    <th>Ответ</th>
                    <th colspan="2">Действия</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>User123</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                    <td></td>
                    <td><button onclick="replyComment(this.parentElement.parentElement)">Ответить</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Функция для отображения формы ответа на комментарий
        function replyComment(row) {
            // Получаем значения текущей строки
            var cells = row.cells;
            var username = cells[0].innerText;
            var comment = cells[1].innerText;

            // Заменяем содержимое ячеек на поля ввода и кнопку
            cells[0].innerHTML = '<input type="text" value="' + username + '" disabled>';
            cells[1].innerHTML = '<textarea placeholder="Комментарий">' + comment + '</textarea>';

            // Добавляем поле ввода для ответа и кнопки сохранения и отмены
            cells[2].innerHTML = '<textarea placeholder="Ответ на комментарий"></textarea>';
            var saveButton = document.createElement("button");
            saveButton.innerText = "Отправить ответ";
            saveButton.onclick = function() {
                // Получаем ответ на комментарий
                var reply = cells[2].querySelector("textarea").value;
                // Добавляем ответ в ячейку
                cells[3].innerText = reply;
                // Очищаем поле ввода и удаляем кнопки
                cells[2].innerHTML = "";
                cells[4].innerHTML = "";
            };
            cells[4].appendChild(saveButton);

            var cancelButton = document.createElement("button");
            cancelButton.innerText = "Отмена";
            cancelButton.onclick = function() {
                // Восстанавливаем оригинальные данные
                cells[0].innerHTML = username;
                cells[1].innerHTML = comment;
                cells[2].innerHTML = ""; // Удаляем поле ввода
                cells[3].innerHTML = ""; // Удаляем ответ
                cells[4].innerHTML = ""; // Удаляем кнопки
            };
            cells[5].appendChild(cancelButton);
        }
    </script>
</body>
</html>
