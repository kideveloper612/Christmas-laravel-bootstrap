<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cristmas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custome style -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="container d-flex">
		<div class="d-flex">
			<div class="px-3 mt-2">
				<img class="vw-2" src="./images/transparent-library-chris.png">
			</div>
			<div>
				<div class="mt-3">
					<p>Перший в Україні сервіс для створення <br>іменних відеопривітань для дiтей вгд Св. Миколая</p>
				</div>
				<!-- Top menu -->
				<nav class="navbar navbar-light navbar-expand-md">
		            <ul class="navbar-nav ml-auto">
		                <li class="nav-item">
		                    <a class="nav-link scroll-link" href="#">ЯК ЗАМОВИТИ</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link scroll-link" href="#">НАЙПОШИРЕНІШІ</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link scroll-link" href="#">ЗАПИТАННЯ</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link scroll-link" href="#">ВІДГУКИ</a>
		                </li>
		                <li class="nav-item">
		                    <a class="nav-link scroll-link" href="#">ПРО</a>
		                </li>
		            </ul>
				</nav>
			</div>
		</div>
		<div class="social mr-5">
			<a href="" class="">
				<img src="./images/vector_smart_object.png">
			</a>
			<a href="">
				<img src="./images/vector_smart_object_2.png">
			</a>
		</div>
		<div class="d-flex flag">
			<img src="./images/flag.png" class="float-right">
		</div>
	</header>
    @yield('content')
    <footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-2">
    				<img src="./images/transparent-library-chris.png">
    			</div>
    			<div class="col-10 footer-content">
    				<div class="row d-block">
    					<div class="col-4 mb-2">
    						Діліться з друзями у Facebook
    					</div>
    					<div class="col-4">
    						<button class="btn btn-info">
	    						<img src="./images/icon.png">
	    						Подобається
	    					</button>
    						<button class="btn btn-info ml-4">Поділитися</button>
    					</div>
    				</div>
    				<div class="row mt-2 d-flex footer">
    					<nav class="navbar navbar-light navbar-expand-md">
				            <ul class="navbar-nav ml-auto">
				                <li class="nav-item" style="padding-left: 0px;">
				                    <a class="nav-link scroll-link" href="#">ЯК ЗАМОВИТИ</a>
				                </li>
				                <li class="nav-item">
				                    <a class="nav-link scroll-link" href="#">НАЙПОШИРЕНІШІ</a>
				                </li>
				                <li class="nav-item">
				                    <a class="nav-link scroll-link" href="#">ЗАПИТАННЯ</a>
				                </li>
				                <li class="nav-item">
				                    <a class="nav-link scroll-link" href="#">ВІДГУКИ</a>
				                </li>
				                <li class="nav-item">
				                    <a class="nav-link scroll-link" href="#">ПРО</a>
				                </li>
				            </ul>
						</nav>
    				</div>
    				<div class="row last-content">
    					<div class="col-12">
    						Торгова марка «Коли Трапляються Дива» і всі цифрові та інтелектуальні матеріали, в тому числі на веб-сайті, захищені авторським правом. Спільне використання та копіювання без дозволу заборонено. ©2019
    					</div>
    					
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>
</body>
</html>