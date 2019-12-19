@extends('layouts.Form_Main')

@section('content')
<body class="Form1-background d-block">
	<div class="Form1">
		<div class="card card-Form1">
			<img src="./images/Form1/logo.png" class="logo-image">
			<div class="row text-center">
				<div class="col-6 offset-3 Form1-text">
					Для кого Ви замовляєте відеопривітання?
				</div>
			</div>
			<div class="row card-row">
				<div class="col-6">
					<div class="sub-card d-block">
						<a href="/Form2"><img src="./images/Form1/girl-logo.png"/></a>
						<div class="subcard-text">
							Для дівчинки
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="sub-card d-block">
						<a href="/Form2"><img src="./images/Form1/boy-logo.png" class="boy-logo" /></a>
						<div class="subcard-text">
							Для хлопчика
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection