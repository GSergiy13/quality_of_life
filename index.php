<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Как всего за 3 месяца улучшить качество своей жизни в 2 раза</title>
	<meta name="description" content="">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="libs/animate/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="libs/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/OwlCarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="libs/OwlCarousel/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
	<!-- <script src="js/timer.js"></script> -->
	<!-- <script src="js/testtimer.js"></script> -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript">
		var myDate = new Date();

		function returnEndDate(d,h,m){
			myDate.setDate(myDate.getDate()+d);
			myDate.setHours(myDate.getHours()+h);
			myDate.setMinutes(myDate.getMinutes()+m);
			return myDate;
		}

		if($.cookie("timer")){
			var dateEnd = $.cookie("timer");
		}else{
			var dateEnd = returnEndDate(2,23,59);
			$.cookie("timer", dateEnd, {expires: 7});
		}
	</script>
</head>
<body>

	<header>
		<div class="top_menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2 ">
						<div class="logo">
							<img src="img/logo.png" alt="logo">
						</div>
					</div>
					<div class="col-md-5 ">
						
						<nav id="menu">
							<button class="main_menu_btt">
								<i class="fa fa-bars"></i>
							</button>
							<ul class="menu_right">
								<a href="#id1"><li>Для кого курс?</li></a>
								<a href="#id2"><li>Кто мы такие?</li></a>
								<a href="#id3"><li>Отзывы</li></a>
								<a href="#id4"><li>Стоимость</li></a>
							</ul>
						</nav>
					</div>
					<div class="col-md-5  ">
						<div class="smblok">
							<div class="collme">
								Позвоните нам:<br>
								<span>+7(499) 322 78 11</span>
							</div>
							<a href="#id4"><button class="bttNonbg">Принять участие</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="header_h1">
						<h1>~ <br>
							Как всего за <span class="redspan">3 месяца </span><br> <span>улучшить качество</span> своей жизни <span class="redspan">в 2 раза</span>
						</h1>
						<p>
							Получи комплексное решение твоих самых наболевших вопросов и начни жить свободно!
						</p>
						<p style="    color: #000; font-weight: 600;">
							При покупке программы на 3 месяца - <br>
							<b>книга Юлии «Мечты сбываются» в подарок!</b></p>
							<p>При покупке 6 месяцев программы - бонус 2 часа личной работы с психологом <br> <b>школы, а если годовая - целых 30 минут личной работы с Юлией Новиковой</b>
							</p>
							<p style="margin-bottom: -10px;"><img src="img/Group.png" alt="time"> До окончания акции осталось:</p>
							<div class="timers" id="timer_wrap">
								<div id="clock">
									<div id='day'>
										<p id='day0'></p>
										<p id='day1'></p>
									</div>
									<div id="razd">
										дня |
									</div>
									<div id='hour'>
										<p id='hour0'></p>
										<p id='hour1'></p>
									</div>
									<div id="razd">
										часов |
									</div>
									<div id='min'>
										<p id='min0'></p>
										<p id='min1'></p>
									</div>
									<div id="razd">
										минут |
									</div>
									<div id='sec'>
										<p id='sec0'></p>
										<p id='sec1'></p>
									</div>
									<div id="razd">
										сек
									</div>
								</div>		
							</div>

						</div>
						<a href="#id4"><button class="allbutton">
							Получить бонус
						</button></a>
					</div>
					<div class="col-md-4">
						<div class="yl_blok">
							<img src="img/Yli_header.png" alt="yli_header">
						</div>
					</div>
				</div>
			</div>
		</header>



		<section class="sec_1" id="id1">
			<div class="container">
				<div class="row">
					<h1>Курс для тебя, если</h1>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (2).svg" alt="iconN">
							<p><b>Ты в тупике,</b><br>
							не знаешь что делать, чтобы улучшить жизнь</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (3).svg" alt="iconN">
							<p><b>Твои отношения</b><br>
							находятся на грани разрыва</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (4).svg" alt="iconN">
							<p><b>Чувствуешь постоянно</b><br>
							себя уставшей, обессиленной</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (1).svg" alt="iconN">
							<p><b>Боишься перемен</b><br>
							не ждешь от будущего ничего хорошего</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (5).svg" alt="iconN">
							<p><b>Отношения с семьей</b><br>
							оставляют желать лучшего</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (6).svg" alt="iconN">
							<p><b>Забыла о себе</b><br>
							все делаешь для мужа и детей</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (7).svg" alt="iconN">
							<p><b>Нелюбимая работа</b><br>
							выжимает все соки, но ты боишься поменять</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="item">
							<img src="img/icon/Icon (8).svg" alt="iconN">
							<p><b>Остаешься наедине</b><br>
							со своими проблемами и переживаниями</p>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="slider_2">
			<div class="container">
				<div class="row" >
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="slider_items">
								<div class="col-md-6 bg_bloes">
									<h2>ПРЯМАЯ СВЯЗЬ С КОУЧЕМ</h2>
									<img src="img/ylia_slider.png" class="slideiimg" alt="Ylia">
								</div>
								<div class="col-md-6 bgwiter">
									<div class="items">
										<div class="item_blok">
											<img src="img/i1.png" alt="iconN">
											<p><b>«Живые» онлайн-эфиры</b> каждую неделю с Юлией Новиковой</p>
										</div>
										<div class="item_blok">
											<img src="img/i2.png" alt="iconN">
											<p><b>Сессии «Вопрос-Ответ» </b> — индивидуальный разбор ситуаций участников</p>
										</div>
										<div class="item_blok">
											<img src="img/i3.png" alt="iconN">
											<p><b>Доступ к консультациям эксперта</b> по психологии и дипломированного врача</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="slider_items">
								<div class="col-md-6 bg_bloes">
									<h2>ПОДДЕРЖКА И СОПРОВОЖДЕНИЕ</h2>
									<img src="img/ylia_slider.png" class="slideiimg" alt="Ylia">
								</div>
								<div class="col-md-6 bgwiter">
									<div class="items">
										<div class="item_blok">
											<img src="img/i1.png" alt="iconN">
											<p>Помощь личного куратора и <b>«Службы Заботы» </b><br> в решении вопросов</p>
										</div>
										<div class="item_blok">
											<img src="img/i2.png" alt="iconN">
											<p><b>Закрытый скайп-чат</b> для вопросов и обмена опытом</p>
										</div>
										<div class="item_blok">
											<img src="img/i3.png" alt="iconN">
											<p>Среда единомышленников, которая способствует росту и поиску верных решений.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="slider_items">
								<div class="col-md-6 bg_bloes">
									<h2>ВЕКТОР РАЗВИТИЯ С УЧЕТОМ ТВОЕЙ ПСИХОФИЗИОЛОГИИ</h2>
									<img src="img/ylia_slider.png" style="width: 51%;" class="slideiimg" alt="Ylia">
								</div>
								<div class="col-md-6 bgwiter">
									<div class="items">
										<div class="item_blok">
											<img src="img/i1.png" alt="iconN">
											<p><b>Принцип активной</b> жизненной позиции</p>
										</div>
										<div class="item_blok">
											<img src="img/i2.png" alt="iconN">
											<p><b>Полноценное раскрытие</b> потенциала, <br> скрытых ресурсов</p>
										</div>
										<div class="item_blok">
											<img src="img/i3.png" alt="iconN">
											<p><b>Развитие продуктивного</b> мышления, расширение <br> границ сознания.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section  id="id2" class="sec_2">
			<div class="container">
				<div class="row">
					<h1>Кто мы такие?</h1>
					<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="sec_txt">
								<p><span>Школа Юлии Новиковой</span> — это место, где каждый человек, независимо от его жизненной ситуации здесь и сейчас, может получить знания, необходимые для создания его новой гармоничной, наполненной и счастливой жизни.</p>
							</div>
						</div>
						<div class="col-md-1"></div>	
					</div>
					<div class="col-md-12">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="sec_txt">
								<p><b>Но ее не было бы без Юлии Новиковой</b> — эксперта по вопросам психологии и саморазвития, дипломированного врача, которая:</p>
							</div>
						</div>
						<div class="col-md-2"></div>	
					</div>
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="item_sec2">
								<img src="img/icon/howme(1).svg" alt="icons">
								<p><b> Более 12 лет изучала </b> <br>
									медицину, психологию, личностный рост, восточные практики
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec2">
								<img src="img/icon/howme(2).svg" alt="icons">
								<p><b> Создала более 20 онлайн-курсов </b> <br>
									и программ по проработке главных сфер жизни, личностному развитию и психологии
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec2">
								<img src="img/icon/howme(3).svg" alt="icons">
								<p><b> Провела более 100 авторских </b> <br>
									тренингов, мастер-классов по отношениям и успеху
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec2">
								<img src="img/icon/howme(4).svg" alt="icons">
								<p><b> Добилась высот </b> <br>
									о которых можно было только мечтать,благодаря своему мышлению
								</p>
							</div>
						</div>
					</div>
					<h3 class="h3_sec_2">Это уникальная в своем роде онлайн-школа, <br> которой нет аналогов в Рунете</h3>
				</div>
			</div>
		</section>
		<section class="video_sho">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="video_txt">
							<h1>
								~ <br>
								Комплексная программа, меняющая жизнь!
							</h1>
							<p>
								Всего за <b>ОДИН ГОД</b> ты пройдешь путь, который самостоятельно могла бы пройти минимум за 5-7 лет!
							</p>
							<a href="#id4"><button class="bttNonbgWrith">Принять участие</button></a>
						</div>
					</div>
					<div class="col-md-7">
						<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/zaQaawCdieU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<section class="sec_3">
			<div class="container">
				<div class="row">
					<h1>
						Если ты готова избавиться <br> от мышления «рыбки в аквариуме»
					</h1>
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (1).svg" alt="icons">
								<p><b> Смотреть на проблемы с разных точек зрения </b>
									и видеть в несколько раз больше вариантов их решения
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (2).svg" alt="icons">
								<p><b> Привлекать достойных мужчин </b>
									и строить с ними длительные, серьезные отношения
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (3).svg" alt="icons">
								<p><b> Принимать и любить себя </b>
									, со всеми недостатками и достоинствами
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (4).svg" alt="icons">
								<p><b> Адекватно оценивать себя, </b>
									свои возможности и способности
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (5).svg" alt="icons">
								<p><b> Освобождаться от стресса </b>
									и психоэмоционального напряжения
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (6).svg" alt="icons">
								<p><b> Понимать и владеть законами материального мира </b>
									,улучшить свое финансовое положение
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (7).svg" alt="icons">
								<p><b> Быть хрупкой, слабой женщиной в руках сильного </b>
									, уверенного мужчины
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (8).svg" alt="icons">
								<p><b> Управлять своими эмоциями </b>
									, направляя их в созидательное русло
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (9).svg" alt="icons">
								<p><b> Раскрывать свою внутреннюю </b>
									и внешнюю красоту
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (10).svg" alt="icons">
								<p><b> Строить доверительные и близкие </b>
									отношения в семье
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (11).svg" alt="icons">
								<p><b> Понимать,что действительно важно </b>
									,а что навязано извне
								</p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="item_sec3">
								<img src="img/icon_group/Group (12).svg" alt="icons">
								<p><b> Транслировать свою уверенность миру </b>
									, получать внимание мужчин
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sec_forms">
			<div class="container" id="id4">
				<div class="row">
					<div class="col-md-6">
						<div class="form_txt">
							<p>При покупке годовой программы бонус:</p>
							<h2>30 минут личной работы с Юлией</h2>
							<p>при покупке курса на 6 месяцев <b>бонусом 2 часа личной работы с психологом школы</b></p>
							<p>
								при покупке программы на 3 месяца - <b> книга Юлии «Мечты сбываются» в подарок!</b>
							</p>
							<p><img src="img/Group.png" alt="time"> До окончания акции осталось:</p>
							<div >
								<div class="timers" id="timer_wrap">
									<div id="clock">
										<div id='day12'>
											<p id='day01'></p>
											<p id='day11'></p>
										</div>
										<div id="razd">
											дня |
										</div>
										<div id='hour12'>
											<p id='hour01'></p>
											<p id='hour11'></p>
										</div>
										<div id="razd">
											часов |
										</div>
										<div id='min12'>
											<p id='min01'></p>
											<p id='min11'></p>
										</div>
										<div id="razd">
											минут |
										</div>
										<div id='sec12'>
											<p id='sec01'></p>
											<p id='sec11'></p>
										</div>
										<div id="razd">
											сек
										</div>
									</div>		
								</div>
							</div>
						</div>
						<h1>~ <br>
							Уже через месяц обучения начнутся первые изменения в твоей жизни
						</h1>
						<p style="text-align: center;">И если ты не будешь пропускать занятия, слушать и применять новые знания и навыки, то уже через год ты себя не узнаешь</p>

					</div>
					<div class="col-md-6">
						<h1 style="margin-top: 0;" class="h1_fomr">
							Научим жить полнокровной жизнью, а не выживать <br> на «окраине мира»
						</h1>
						<form  action="https://yulianovikova.e-autopay.com/buy/save_order_data.php" method="post" name="order_form" target="_blank" onsubmit="return EAcheckForm(this);" >
							<div class="elementor-form-fields-wrapper elementor-labels-">
								<p>Как тебя зовут?</p>
								<input size="1" type="text" type="text" name="name" value="<?= $_GET["name"] ?>" required
								placeholder="Введите имя" id="form-field-name" class="elementor-field elementor-size-md  elementor-field-textual">	
								<p> Email-адрес:</p>	
								<input size="1" type="text" placeholder="mail@mail.ru" name="email" value="<?= $_GET["email"] ?>"
								required id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" >	
								<p>Номер телефона:</p>			
								<input size="1" type="text" placeholder="Номер телефона" id="phone1" name="phone"
								value="<?= $_GET["phone"] ?>" required class="elementor-field elementor-size-md  elementor-field-textual" >	

								<script type="text/javascript">
									$(function ($) {
										$("#phone1").mask("+99(999)999999?9");
									});
								</script>

								<!-- hidden поля отправки -->
								<input type="hidden" name="form_charset" id="form_charset" value="">
								<input type="hidden" name="additional_field1"  value="<?php  echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING']; ?>" />
								<input type="hidden" name="tovar_id" value="424695"><input type="hidden" name="form_id"
								value="40524">
								<input type="hidden" name="order_page_referer" id="order_page_referer" value="<?php  echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING']; ?>">
								<!-- hidden поля отправки -->
								<div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100">
									<center><button  type="submit" class="elementor-button elementor-size-md allbutton">
										<span >
											<span class="elementor-button-text">Принять участие
											</span>
										</span>
									</button></center>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="sec_4">
			<div class="container">
				<div class="row">
					<h1>
						Преимущества школы отношений Юлии Новиковой
					</h1>
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="item_s4">
								<img src="img/icon/iconSec (2).svg" alt="icons">
								<p><b> 48+ уроков в год </b> <br>
									онлайн-программа в прямом эфире. Компьютер и Интернет — все, что нужно для учебы. К каждому уроку прилагается «конспект» — видеозапись эфира с таймингом по темам
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item_s4">
								<img src="img/icon/iconSec (3).svg" alt="icons">
								<p><b> Два варианта обучения </b> <br>
									Интенсивный — только для тех, кто готов и хочет получать быстрый результат. Щадящий — для тех, кто предпочитает слушать и получать ответы на свои вопросы
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item_s4">
								<img src="img/icon/iconSec (4).svg" alt="icons">
								<p><b> Индивидуальность </b> <br>
									Здесь каждый найдет для себя ту программу обучения, которая поможет в решении важных для него вопросов в сфере саморазвития, личностного роста, отношений, финансов
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<div class="item_s4">
								<img src="img/icon/iconSec (5).svg" alt="icons">
								<p><b> Комплексное обучение </b> <br>
									В обучающей онлайн-программе совмещена женская, мужская, семейная психология от древних ведических до современных женских практик, накопленных Юлией Новиковой за 20 лет интенсивного обучения и более 10 лет практической работы с учениками и пациентами
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="item_s4">
								<img src="img/icon/iconSec (1).svg" alt="icons">
								<p><b> Системность </b> <br>
									Система образования выстроена таким образом, что начать обучение может каждый желающий, в любой момент, независимо от жизненной ситуации. Онлайн-уроки дополняются заданиями для самостоятельной работы, дополнительной литературой
								</p>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<h1>Результаты студентов, которые были готовы действовать!</h1>
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="items_sec5">
								<h1><span>≀</span> 96%</h1>
								<p><b>
									решили проблемы в личной жизни,
								</b>
								научились строить здоровые, доверительные отношения
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="items_sec5">
							<h1><span>≀</span> 87%</h1>
							<p><b>
								улучшили свое финансовое положение,
							</b>
							начали заниматься любимым(!) делом
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="items_sec5">
						<h1><span>≀</span> 92%</h1>
						<p><b>
							обрели уверенность в своих силах
						</b>
						, раскрыли свой потенциал, нашли свое место в жизни
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section  id="id3" class="slider_1">
	<div class="container">
		<div class="row">
			<h1>
				Отзывы
			</h1>
			<div class="col-md-12">
				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="slider_items">
							<p>
								На мой взгляд, всегда больше возьмёшь у того, кто тобой изначально уважаем, принят, и у кого есть те результаты, которые ты хочешь иметь
								И, слушая Юлю,  с каждым уроком я все больше понимаю, принимаю (признаюсь сама себе), и, внедряя на практике, убеждаюсь, что все именно так, что все работает
							</p>
							<h3>
								<b>Александра, 28 лет</b>
							</h3>
							<p>
								Финансист
							</p>
						</div>
					</div>
					<div class="item">
						<div class="slider_items">
							<p>
								Юлечка, спасибо огромное
								как стало всё понятно! Поняла, зачем мне эта боль, я ее очень долго просто не признавала. "
								переслушиваю сейчас урок, прямо надо все конспектировать!!! Очень структурировано и понятно разложен алгоритм отбора и ценностей и шагов и критериев !!! Благодарю, Юля! Как я рада, что ты встретилась мне в жизни! Я тебя обожаю!
							</p>
							<h3>
								<b>Светлана, 35 лет</b>
							</h3>
							<p>
								Косметолог
							</p>
						</div>
					</div>
					<div class="item">
						<div class="slider_items">
							<p>
								Да, встретив Вас, Юля, я поняла, что пока мы живы все возможно! Вы мой Учитель и мой пример! Я Вам очень благодарна!
								После обучения у Юли и овладения знаниями все заметно изменилось в лучшую сторону. И слышу добрые искренние слова в свой адрес регулярно!) Благодарю, Юля!)
							</p>
							<h3>
								<b>Алена, 39 лет</b>
							</h3>
							<p>
								Любящая жена и мама
							</p>
						</div>
					</div>
					<div class="item">
						<div class="slider_items">
							<p>
								Девочки, прямо не терпится поделится с вами. Сейчас пробовала почувствовать зачем я выбрала себе именно такую маму. И даже с ходу не смогла вспомнить какие у меня к ней претензии. Хотя буквально не давно меня зашкаливало на этой теме.
								Потом вспомнила, и почувствовала, что основная моя обида снизилась до 5 из 10 балов. Вторая - до 1 из 10. И меня уже не ""колбасит"". Прям очень крутое ощущение. Благодарю Юличка! Я все ближе к своей ""мармышке"")))"
								Я в этом году поменяла место жиьельства, совсем недавно работу. Всё к лучшему и жду ещё больше приятных ситуаций(неумею точно выраить свою мысль) Благадарю вселенную и всех. Мне много всяково надо праработать, но уже чюству что по чючють меняюсь, меняютса моё мышление. Большая благодарность вашей школе Юля
							</p>
							<h3>
								<b>Ольга, 32 лет</b>
							</h3>
							<p>
								Дизайнер
							</p>
						</div>
					</div>
					<div class="item">
						<div class="slider_items">
							<p>
								Юлечка, благодарю за супер урок!!! Потрясающие, очень наглядные метафоры. Восхищаюсь тобой и твоим умением доступно, наглядно и с юмором излагать информацию!.
							</p>
							<h3>
								<b>Анна, 24 лет</b>
							</h3>
							<p>
								Секретарь,Фрилансер
							</p>
						</div>
					</div>
					<div class="item">
						<div class="slider_items">
							<p>
								Сейчас еще раз переслушала, и наконец то разобралась с одним своим убеждением или ограничением. Прям ответ сам в голову пришел. Такое крутое чувство
								. Как оказывается все просто.
								Юлечка, моей Благодарности просто нет предела
								Аж бабочки в животе зашевелились
								Наконец то мой мозг начал что то осознавать
							</p>
							<h3>
								<b>Виктория, 28 лет</b>
							</h3>
							<p>
								Менеджер
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>
<section class="sec_5">
	<div class="container">
		<div class="row">
			<h1>
				Записаться на обучение
			</h1>
			<div class="col-md-4">
				<div class="product">
					<h1><img src="img/product.svg" alt="icon"> 12 месяцев </h1>
					<a href="#id4"><button class="allbutton">Принять участие</button></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product">
					<h1><img src="img/product.svg" alt="icon"> 6 месяца </h1>
					<a href="#id4"><button class="allbutton">Принять участие</button></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product">
					<h1><img src="img/product.svg" alt="icon"> 3 месяца </h1>
					<a href="#id4"><button class="allbutton">Принять участие</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer_top">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p>
					При покупке годовой программы
				</p>
				<h2>Бонус - 30 минут работы с Юлией</h2>
			</div>
			<div class="col-md-4">
				
				<p>
				При покупке курса на 6 месяцев </p>
				<h2>Бонусом 2 часа личной работы с психологом школы</h2>
			</div>
			<div class="col-md-4">
				<p>При покупке курса на 3 месяца</p>
				<h2>Книга Юлии «Мечты сбываются»</h2>
				<p>в подарок</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<p style="text-align: center;"><img src="img/Group.png" alt="time"> До окончания акции осталось:</p>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div >
					<div class="timers" id="timer_wrap">
						<div id="clock">
							<div id='day123'>
								<p id='day013'></p>
								<p id='day113'></p>
							</div>
							<div id="razd">
								дня |
							</div>
							<div id='hour123'>
								<p id='hour013'></p>
								<p id='hour113'></p>
							</div>
							<div id="razd">
								часов |
							</div>
							<div id='min123'>
								<p id='min013'></p>
								<p id='min113'></p>
							</div>
							<div id="razd">
								минут |
							</div>
							<div id='sec123'>
								<p id='sec013'></p>
								<p id='sec113'></p>
							</div>
							<div id="razd">
								сек
							</div>
						</div>		
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="img/logo.png" class="logoimgfoot" alt="logo">
			</div>
			<div class="col-md-6">
				<ul class="contacts-f">
					<li><a href="https://www.instagram.com/yulianovikova_com/" target="_blank">
						<img src="img/instagram.png" alt="fotericons">
					</a></li>
					<li><a href="https://www.youtube.com/channel/UCGRZUkC1_3oS6zCDDEtS3Dg" target="_blank">
						<img src="img/youtube.png" alt="fotericons">
					</a></li>
					<li><a href="https://www.facebook.com/yulianovikovaschool " target="_blank">
						<img src="img/facebook.png" alt="fotericons">
					</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="collme">
					Позвоните нам:<br>
					<span>+7(499) 322 78 11</span> <br>
					<span>+38 (089) 420 14 89</span> <br>
					<span>38 (067) 599 67 27</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="hidden">
</div>

<div class="loader">
	<div class="loader_inner"></div>
</div>

	<!--[if lt IE 9]>
		<script src="libs/html5shiv/es5-shim.min.js"></script>
		<script src="libs/html5shiv/html5shiv.min.js"></script>
		<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
		<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="libs/waypoints/waypoints.min.js"></script>
	<script src="libs/animate/animate-css.js"></script>
	<script src="libs/OwlCarousel/owl.carousel.min.js"></script>
	<script src="js/common.js"></script>

</body>
</html>
