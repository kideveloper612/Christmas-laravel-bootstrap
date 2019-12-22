<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Christmas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custome style -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
	<!-- Chocolate font -->
	<link rel="stylesheet" type="text/css" href="./css/working-font/stylesheet.css">
    
</head>
<body class="land">
	<header class="container-fluid d-flex row">
		<div class="col-8 offset-2 d-flex">
			<div class="d-flex">
				<div>
					<img src="./images/transparent-library-chris.png">
				</div>
				<div class="d-block p-tag">
					<div>
						<p>Перший в Україні сервіс для створення <br>іменних відеопривітань для дiтей вгд Св. Миколая</p>
					</div>
					<!-- Top menu -->
					<div class="navbar-group d-flex">
	                    <a class="navbar-link" href="#">ЯК_ЗАМОВИТИ</a>
	                    <a class="navbar-link" href="#">НАЙПОШИРЕНІШІ</a>
	                    <a class="navbar-link" href="#">ЗАПИТАННЯ</a>
	                    <a class="navbar-link" href="#">ВІДГУКИ</a>
	                    <a class="navbar-link" href="#">ПРО</a>
					</div>
				</div>
			</div>
			<div class="d-flex">
				<div class="social d-flex">
					<a href="https://www.instagram.com/" target="_blank">
						<img src="./images/vector_smart_object.png" class="social-image1">
					</a>
					<a href="https://www.facebook.com/" target="_blank">
						<img src="./images/vector_smart_object_2.png" class="social-image2">
					</a>
				</div>
				<div class="d-flex">
					<img src="./images/flag.png" class="flag float-right">
				</div>
			</div>
		</div>
	</header>
    @yield('content')
    <footer>
    	<div class="container-fluid row">
    		<div class="col-7 offset-3 d-flex">
    			<div class="d-block">
    				<img src="./images/transparent-library-chris.png" class="footer-image">
    			</div>
    			<div>
    				<div class="row d-block">
    					<div class="footer-text-1st">
    						Діліться з друзями у Facebook
    					</div>
    					<div class="col-6 d-flex footer-social">
    						<a href="https://www.facebook.com/" class="footer-lst-button">
	    						<img src="./images/icon.png">
	    						Подобається
		    				</a>
		    				<a href="https://www.facebook.com/" class="footer-2nd-button">Поділитися</a>
    					</div>
    				</div>
    				<div class="row">
    					<div class="footer-navbar-group d-flex">
	                    <a class="footer-navbar-link" href="#">ЯК_ЗАМОВИТИ</a>
	                    <a class="footer-navbar-link" href="#">НАЙПОШИРЕНІШІ</a>
	                    <a class="footer-navbar-link" href="#">ЗАПИТАННЯ</a>
	                    <a class="footer-navbar-link" href="#">ВІДГУКИ</a>
	                    <a class="footer-navbar-link" href="#">ПРО</a>
					</div>
    				</div>
    				<div class="row">
    					<div class="col-12 footer-text-2nd">
    						Торгова марка «Коли Трапляються Дива» і всі цифрові та інтелектуальні матеріали, в тому числі на веб-сайті, захищені авторським правом. Спільне використання та копіювання без дозволу заборонено. ©2019
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>        
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
						<iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315" allowscriptaccess="always" src="//www.youtube.com/embed/YE7VzlLtp-4?autoplay=1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="./js/custom.js"></script>
</body>
</html>