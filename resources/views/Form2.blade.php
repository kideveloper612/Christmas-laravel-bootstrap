@extends('layouts.Form_Main')

@section('content')
<body class="Form2-background d-block">
	<div class="Form2">
		<div class="card card-Form2">
			<img src="./images/Form1/logo.png" class="logo-image">
			<div class="row">
				<div class="col-6 offset-3 d-flex select-group">
					<div class="label">
						01.
					</div>
					<select>
						<optgroup>
							<option>Оберіть ім’я дитини</option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 d-flex select-group">
					<div class="label">
						02.
					</div>
					<div class="row">
						<select>
							<optgroup>
								<option>Оберіть вік дитини</option>
							</optgroup>
						</select>
					</div>
				</div>
			</div>
			<a href="" class="name_question">Немає імені?</a>
			<div class="row">
				<div class="col-6 offset-3 d-flex Form2-third-title">
					<div class="label">
						03.
					</div>
					<div class="title">
						Завантажте дві вертикальні фотографії
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 d-flex Form2-filegroup">
					<div class="drag-drop">
						<input type="file" multiple>
						<a href="">Завантажити фото</a>
					</div>
					<div class="drag-drop">
						<input type="file" multiple>
						<a href="">Завантажити фото copy</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 d-flex select-group">
					<div class="label">
						04.
					</div>
					<select>
						<optgroup>
							<option>Оберіть з переліку індивідуальний коментар</option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-6 offset-3 d-flex select-group">
					<div class="label">
						05.
					</div>
					<select>
						<optgroup>
							<option>Оберіть з переліку індивідуальну настанову</option>
						</optgroup>
					</select>
				</div>
			</div>
			<div class="row">
				<a href="/Form3" class="Form2-Next"><button class="Form2-button">Далі</button></a>
			</div>
		</div>
@endsection