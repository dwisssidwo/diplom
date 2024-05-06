<!DOCTYPE html>
<html lang="ru">
<head>
<title>UpDown</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Gaming Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="updown.php">UpDown</a></h1>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav">
										<li class="active"><a href="updown.php">Главное</a></li>
										<li><a href="#about" class="scroll">Информация</a></li>
										<li><a href="#gallery" class="scroll">Наши Игры</a></li>
										<li><a href="#team" class="scroll">Персонал</a></li>
										<li><a href="#blog" class="scroll">О Нас</a></li>
										<li><a href="Бронирование.php">Бронирование</a></li>
										<li><a href="login-register.php">Вход</a></li>
				
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>Кибер Клуб</h3>
												<p>№1 г.Петропавловска</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Информация</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about"> 
		<div class="container"> 
			<div class="welcome">
				<div class="agileits-title"> 
					<h2>Добро Пожаловать</h2>
					<p>UpDown - это современный компьютерный клуб, который предлагает широкий спектр услуг для всех возрастов и уровней опыта. Наш клуб идеально подходит как для любителей игр, так и для профессионалов, стремящихся к повышению навыков и продуктивности.</p>
				</div>
			</div>
<br>
<br>
<center>
    <video width="1200" height="600" autoplay>
  <source src="images/video.mp4" type="video/mp4">
</video>
</center>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- markets -->
	<div class="markets" id="markets">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Что есть</h3>
			</div>
		<style>
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5); /* Затемнение фона */
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
<!-- Подключение библиотеки RateYo для рейтинга звезд -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</head>
<body>

<!-- Контейнер с блоками -->
<div class="markets-grids">

    <!-- Оценка клуба -->
    <div class="col-md-4 w3ls-markets-grid">
        <div class="agileits-icon-grid" id="ratingIcon">
            <div class="icon-left">
                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            </div>
            <div class="icon-right">
                <h5>Оценка клуба</h5>
                <p>оцени наш компьютерный клуб</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Игры -->
    <div class="col-md-4 w3ls-markets-grid">
        <div class="agileits-icon-grid">
            <div class="icon-left">
                <i class="fa fa-gamepad" aria-hidden="true"></i>
            </div>
            <div class="icon-right">
                <h5>игры</h5>
                <p>Самые топовые игры</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Турниры -->
    <div class="col-md-4 w3ls-markets-grid">
        <div class="agileits-icon-grid">
            <div class="icon-left">
                <i class="fa fa-trophy" aria-hidden="true"></i>
            </div>
            <div class="icon-right">
                <h5>турниры</h5>
                <p>Турниры по разным играм с призами</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- Холодильник -->
    <div class="col-md-4 w3ls-markets-grid">
        <a href="food.php">
            <div class="agileits-icon-grid">
                <div class="icon-left">
                    <i class="fa fa-coffee" aria-hidden="true"></i>
                </div>
                <div class="icon-right">
                    <h5>Холодильник</h5>
                    <p>Напитки и закуски</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </a>
    </div>

    <!-- Связь с нами -->
    <div class="col-md-4 w3ls-markets-grid">
        <a href="https://api.whatsapp.com/send/?phone=77028540779&text&type=phone_number&app_absent=0">
            <div class="agileits-icon-grid">
                <div class="icon-left">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="icon-right">
                    <h5>Связь с нами</h5>
                    <p>Есть вопросы?</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </a>
    </div>

    <!-- Комментарии -->
    <div class="col-md-4 w3ls-markets-grid">
        <div class="agileits-icon-grid" id="commentIcon">
            <div class="icon-left">
                <i class="fa fa-comments" aria-hidden="true"></i>
            </div>
            <div class="icon-right">
                <h5>Комментарии</h5>
                <p>Можешь оставить комментарии</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>

<!-- Модальное окно для оценки клуба -->
<div id="ratingModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h3>Оцените клуб</h3>
        <div id="rating"></div>
    </div>
</div>

<!-- Модальное окно для комментариев -->
<div id="commentModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeCommentModal">&times;</span>
        <h3>Напишите комментарий</h3>
        <textarea id="commentText" rows="4" cols="50"></textarea>
        <br>
        <button id="submitComment">Отправить</button>
    </div>
</div>

<!-- JavaScript для открытия и закрытия модальных окон -->
<script>
// Функция открытия модального окна с рейтингом
$(document).ready(function() {
    $("#ratingIcon").click(function(event) {
        event.preventDefault(); // Предотвращение перехода по ссылке
        $("#ratingModal").fadeIn();
    });

    $("#closeModal").click(function() {
        $("#ratingModal").fadeOut();
    });

    $("#rating").rateYo({
        rating: 0,
        fullStar: true,
        onChange: function(rating, rateYoInstance) {
            // В этой функции можно добавить логику для отправки оценки на сервер или что-то еще
            console.log("Rating: " + rating);
        }
    });

    // Функция открытия модального окна с комментариями
    $("#commentIcon").click(function(event) {
        event.preventDefault(); // Предотвращение перехода по ссылке
        $("#commentModal").fadeIn();
    });

    $("#closeCommentModal").click(function() {
        $("#commentModal").fadeOut();
    });

    $("#submitComment").click(function() {
        var comment = $("#commentText").val();
        // В этой функции можно добавить логику для отправки комментария на сервер или что-то еще
        console.log("Comment: " + comment);
        $("#commentModal").fadeOut();
    });
});
</script>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Наши Игры</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">Все</li>
				<li class="w3layouts agileits" data-filter="1">Экшен</li>
				<li class="w3layouts agileits" data-filter="2">Локальные игры</li>
				<li class="w3layouts agileits" data-filter="3">Онлайн</li>
				<li class="w3layouts agileits" data-filter="4">Мини Игры</li>
				<li class="w3layouts agileits" data-filter="5">Стратегий и спорт</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1, 5" data-sort="Busy streets">
					<a href="images/fon.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/woft.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 5" data-sort="Luminous night">
					<a href="" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/fifa.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 4" data-sort="City wonders">
					<a href="images/minecraft.webp" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/minecraft.webp" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3" data-sort="In production">
					<a href="images/csgo.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/csgo.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="3, 4" data-sort="Industrial site">
					<a href="images/dota.jpeg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/dota.jpeg" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Peaceful lake">
					<a href="images/val.png" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/val.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="1, 5" data-sort="City lights">
					<a href="images/MK.png" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/MK.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/pubg.png" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/pubg.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2, 4" data-sort="Dreamhouse">
					<a href="images/apex.png" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/apex.png" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3>UpDown</h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">UpDown</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/fon.jpg" alt="" />
						<p>Добро пожаловать в компьютерный клуб UpDown - ваше идеальное место для виртуального приключения и безграничных возможностей! В нашем клубе вы найдете самые мощные игровые системы, которые погрузят вас в захватывающие миры игр с невероятной графикой и увлекательным геймплеем.
Не важно, новичок вы или опытный геймер, UpDown приглашает вас насладиться нашими широкими возможностями:
- Играйте в самые популярные и новейшие игры на высокопроизводительных компьютерах.
- Заводите новых друзей и обменивайтесь опытом с единомышленниками в нашей дружественной атмосфере.
Присоединяйтесь к нам в компьютерном клубе UpDown и окунитесь в удивительный мир игр и технологий, который никогда не перестает удивлять и вдохновлять! У нас всегда рады видеть вас!</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- //testimonial -->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Админы</h3> 
			</div>
			<div class="agileits-team-grids">
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/simpl.png" alt="">
						<div class="team-caption"> 
							<h4>S1mple</h4>
							<p>Снайпер</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/b1t.png" alt="">
						<div class="team-caption"> 
							<h4>B1t</h4>
							<p>Стрелок</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/boom.png" alt="">
						<div class="team-caption"> 
							<h4>Boomi4</h4>
							<p>Капитан</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/perf.png" alt="">
						<div class="team-caption"> 
							<h4>Perfecto</h4>
							<p>Эйсер?</p>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- blog -->
	<div id="blog" class="blog">
		<div class="container"> 
			<div class="agileits-title">
				<h3>Рейтинг Админов
			</div> 
			<div class="wthree-blog-grids">
				<div class="col-md-6 w3-agileits-blog-grid">
					<div class="col-sm-4 col-xs-3 blog-left">
						<h4>24/01</h4>
						<ul>
							<li>Статус : <a href="#">Admin</a></li>
							<li>Лайки : 31<li>
							<li>Комментарии : (4)</li>
						</ul>
					</div>
					<div class="col-sm-8 col-xs-9 blog-right">
						<a href="#" data-toggle="modal" data-target="#myModal">Текст в разработке </a>
						<p>Цитата Админа Текст в разработке</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3-agileits-blog-grid">
					<div class="col-sm-4 col-xs-3 blog-left">
						<h4>09/12</h4>
						<ul>
							<li>Статус : <a href="#">Admin</a></li>
							<li>Лайки : 80<li>
							<li>Комментарии : (8)</li>
						</ul>
					</div>
					<div class="col-sm-8 col-xs-9 blog-right">
						<a href="#" data-toggle="modal" data-target="#myModal">Текст в разработке</a>
						<p>цитата админа текст в разработке</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

		
<style>
    .contact {
        display: flex;
        justify-content: flex-end; /* Выравнивание контейнера справа */
        align-items: center;
        flex-wrap: wrap; /* Перенос на новую строку при нехватке места */
    }
    .contact .contact-row {
        display: flex;
        justify-content: flex-start; /* Выравнивание контактов справа */
        width: 100%; /* Ширина контактов на всю доступную ширину */
        margin-bottom: 20px; /* Расстояние между контактами */
    }
    .contact .contact-row img {
        flex: 0 0 200px; /* Ширина изображения */
        margin-left: 20px; /* Расстояние между изображением и текстом */
    }
    .col-xs-2.address-left,
    .col-xs-10.address-right {
        text-align: left; /* Выравнивание текста внутри address-left и address-right справа */
    }
</style>

</head>
<body>

<div id="contact" class="contact">
    <div class="contact-row agileits-w3layouts">  
        <a href="https://maps.app.goo.gl/KELZKhXRF984jc6e8">
            <img src="../images/map.png" alt="Девушка в жакете">
        </a>
        <div class="col-md-7 contact-w3lsright">
            <h6>Контакты</h6>
            <div class="col-xs-6 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                </div>

                <div class="col-xs-10 address-right">
                    <h5>Местоположение</h5>
                    <p>г.Петропавловск  <br> Нурсултана Назарбаева 252б</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-xs-6 address-row w3-agileits">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Mail </h5>
                    <p><a href="mailto:info@example.com"> cyberclubupdown@mail.ru</a></p>
                    <p><a href="mailto:info@example.com"> zhan.must@mail.ru</a></p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-xs-6 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>Контакты</h5>
                    <p>+7 702 854 0779<br></p>
                </div>
                <div class="clearfix"> </div>
            </div> 
            <div class="col-xs-6 address-row">
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 address-right">
                    <h5>График раб</h5>
                    <p>Пн - Пт : 10:00  - 7:00 <br>
                    Сб - Вс : 10:00 - 7:00 </p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>   
        </div>
        <div class="clearfix"> </div>
    </div>  
</div>
	<!-- //contact -->  
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed"> 
					<div class="footer-title">
						<h3>О нас</h3>
					</div> 
					<p>Наш опытный персонал всегда готов помочь вам с выбором компьютера, настройкой игровых программ или ответить на любые вопросы, которые у вас могут возникнуть.
Кроме того, вы можете отдохнуть и насладиться напитками, а также регулярные мероприятия и турниры для наших участников.</p>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
					<div class="footer-title">
						<h3>Instagram</h3>
					</div> 
					<p><a href="https://www.instagram.com/updown.cyberclub/">instagram.updown</a> 
					
				</div>
				<div class="col-md-4 amet-sed ">
					<div class="footer-title">
						<h3>Связь с нами</h3>
					</div> 
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="https://www.instagram.com/updown.cyberclub/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="wa.me/77028540779"><i class="fa fa-whatsapp"></i></a></li>
							<p>📞 8 702 854 07 79 </p>
						</ul>
					</div>
					
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">Разработчики | Оразкенов Олжас | Дейнеко Радмир  2024</p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<!-- <script src="js/SmoothScroll.min.js"></script> -->
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>