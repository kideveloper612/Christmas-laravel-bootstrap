@extends('layouts.Form_Main')

@section('content')
<body class="Form4-background d-block">
	<div class="Form4">
		<div class="card card-Form4">
			<img src="./images/Form1/logo.png" class="logo-image">
			<div class="row text-center">
				<div class="col-6 offset-3 Form1-text Form4-text">
					Дані замовника
				</div>
			</div>
			<form action="{{ 'send/email' }}" method="POST">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-6 offset-3 Form4-input">
						<input type="text" name="customer_name" placeholder="П.І.Б." required>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 Form4-input">
						<input type="text" name="customer_email" placeholder="Адреса електронної пошти" required>
					</div>
				</div>
				<div class="row">
					<button class="Form2-button Form4-button" type="submit">Оплатити замовлення</button>
				</div>
			</form>
		</div>
@endsection