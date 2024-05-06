<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpDown Food</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="foodtwo.css"> 
    <link rel="stylesheet" href="food.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <style>
        /* Скрытый блок корзины */
        .cart-popup {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
    </style>
</head>
<body>
    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
        <nav>
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="updown.php">Главное</a></h1>
            </ul>
        </nav>
    </div>
    <main class="main">
        <div class="container">
            <section class="promo">
                <h1 class="promo-title">UpDown<br>доставки еды к твоему компьютерному столику</h1>
                <p class="promo-text">
                    В нашем компьютерном клубе можешь заказать еду не вставая с компьютерного стола 
                </p>    
            </section>

            <section class="restaurantas">
                <div class="section-heading">
                    <h2 class="section-title">Наш Холодильник</h2>
                </div>
                <div class="cards">
                    <!-- Добавленные карточки продуктов -->
                    <a href="#" class="card" onclick="addToCart('Сэндвич', '450 тг')">
                        <img src="images/сэндвич.jpeg" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Сэндвич</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">450 тг</div>
                                <div class="category">Закуски</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Хот-Дог', '450 тг')">
                        <img src="images/хот-дог.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Хот-Дог</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">450 тг</div>
                                <div class="category">Закуски</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Max Чай', '400 тг')">
                        <img src="images/макси.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Max Чай</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">400 тг</div>
                                <div class="category">Напитки</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Gorilla', '500 тг')">
                        <img src="images/горилла.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Gorilla</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">500 тг</div>
                                <div class="category">Напитки</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Cola', '400 тг')">
                        <img src="images/кола.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Cola</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">400 тг</div>
                                <div class="category">Напитки</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Flash', '450 тг')">
                        <img src="images/флеш.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Flash</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">450 тг</div>
                                <div class="category">Напитки</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Fanta', '400 тг')">
                        <img src="images/фанта.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Fanta</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">400 тг</div>
                                <div class="category">Напитки</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Snekers', '350 тг')">
                        <img src="images/сникерс.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Snekers</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">350 тг</div>
                                <div class="category">Батончики</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Baunti', '350 тг')">
                        <img src="images/баунти.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Baunti</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">350 тг</div>
                                <div class="category">Батончики</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('MilkiWay', '350 тг')">
                        <img src="images/милки.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">MilkiWay</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">350 тг</div>
                                <div class="category">Батончики</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Alpen Gold', '500 тг')">
                        <img src="images/алпен.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Alpen Gold</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">500 тг</div>
                                <div class="category">Батончики</div>
                            </div>    
                        </div>
                    </a>
                     <a href="#" class="card" onclick="addToCart('Twix', '350 тг')">
                        <img src="images/твикс.png" class="card-img">
                        <div class="card-text">
                            <div class="card-heading">
                                <h3 class="card-title">Twix</h3>
                                <span class="card-tag tag">2 мин</span>
                            </div>
                            <div class="card-info">
                                <div class="raiting">
                                    <img src="star.svg" alt="raiting" class="raiting-star">
                                    4.5
                                </div>
                                <div class="price">350 тг</div>
                                <div class="category">Батончики</div>
                            </div>    
                        </div>
                    </a>
                    <!-- Остальные карточки продуктов -->
                </div>    
            </section>
        </div>
    </main>

    <!-- Скрытый блок корзины -->
   <div id="cartPopup" class="cart-popup">
    <p id="cartText">Ваши заказы:</p>
    <button onclick="placeOrder()">Заказать</button>
</div>
<script>
    // Функция для размещения заказа
    function placeOrder() {
        // Ваш код для обработки заказа здесь
        // Например, отправка данных на сервер или очистка корзины

        // Отображение уведомления с подтверждением заказа
        var confirmation = window.confirm("Подтверидить заказ?");
        if (confirmation) {
            // Если пользователь подтвердил заказ, выполните необходимые действия
            alert("Ваш заказ будет доставлен в течении двуз минут!");
            cartItems = []; // Очистить содержимое корзины после размещения заказа
            updateCartPopup(); // Обновить всплывающий блок корзины
        }
    }
</script>


    <footer class="footer">
        <div class="container">
            <div class="footer-block">
                <img src="img/logo.svg" alt="logo" class="logo footer-logo">
                <nav class="footer-nav">
                    <a href="#" class="footer-link">Контакты</a>
                </nav>
            </div>
        </div>
    </footer>

    <script>
        // Массив для хранения заказов
        var cartItems = [];

        // Функция для добавления товара в корзину
        function addToCart(productName, productPrice) {
            cartItems.push({ name: productName, price: productPrice });
            updateCartPopup();
        }

        // Функция для обновления содержимого корзины
        function updateCartPopup() {
            var cartPopup = document.getElementById("cartPopup");
            var cartText = document.getElementById("cartText");
            cartText.innerHTML = "Ваши заказы:<br>";
            cartItems.forEach(function(item) {
                cartText.innerHTML += item.name + " - " + item.price + "<br>";
            });
            cartPopup.style.display = "block";
        }
    </script>
</body>
</html>
