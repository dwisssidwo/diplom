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
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Стили для кнопок */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Стили для формы добавления строки */
        #add-form {
            margin-bottom: 20px;
        }

        #add-form input[type="text"],
        #add-form input[type="number"] {
            padding: 8px;
            margin-right: 10px;
        }

        #add-form button {
            padding: 8px 16px;
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
            <li><a href="holodelnik.php">Холодельник</a></li>
        </ul>
    </div>

    <div id="main-content">
        <h1>Админ Панель</h1>
        <h2>Таблица продуктов</h2>
        <form id="add-form">
            <input type="text" id="product-name" placeholder="Название продукта">
            <input type="number" id="product-price" placeholder="Цена">
            <input type="number" id="product-quantity" placeholder="Количество">
            <button type="button" onclick="addRow()">Добавить</button>
        </form>
        <table id="productTable">
            <thead>
                <tr>
                    <th>Продукт</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <!-- Данные будут добавлены здесь -->
            </tbody>
        </table>
    </div>

    <script>
        // Загрузка данных из локального хранилища при загрузке страницы
        window.onload = function() {
            var storedProducts = localStorage.getItem('products');
            if (storedProducts) {
                document.getElementById('productTable').getElementsByTagName('tbody')[0].innerHTML = storedProducts;
            }
        };

        // Сохранение данных в локальное хранилище при изменении
        function saveTable() {
            var tableHtml = document.getElementById('productTable').getElementsByTagName('tbody')[0].innerHTML;
            localStorage.setItem('products', tableHtml);
        }

        // Добавление строки в таблицу
        function addRow() {
            var name = document.getElementById("product-name").value;
            var price = document.getElementById("product-price").value;
            var quantity = document.getElementById("product-quantity").value;

            var table = document.getElementById("productTable").getElementsByTagName('tbody')[0];
            var newRow = table.insertRow(-1);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);

            cell1.innerHTML = name;
            cell2.innerHTML = price;
            cell3.innerHTML = quantity;
            cell4.innerHTML = '<button onclick="editRow(this)">Редактировать</button><button onclick="deleteRow(this)">Удалить</button>';

            // Сохранение таблицы после добавления строки
            saveTable();
        }

        // Редактирование строки
        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName('td');
            var name = cells[0].innerHTML;
            var price = cells[1].innerHTML;
            var quantity = cells[2].innerHTML;

            var newName = prompt("Введите новое название продукта", name);
            var newPrice = prompt("Введите новую цену продукта", price);
            var newQuantity = prompt("Введите новое количество продукта", quantity);

            if (newName !== null && newPrice !== null && newQuantity !== null) {
                cells[0].innerHTML = newName;
                cells[1].innerHTML = newPrice;
                cells[2].innerHTML = newQuantity;

                // Сохранение таблицы после редактирования строки
                saveTable();
            }
        }

        // Удаление строки
        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);

            // Сохранение таблицы после удаления строки
            saveTable();
        }
    </script>
</body>
</html>
