@extends('layouts.Form_Main')

@section('content')
<body class="Form3-background d-block">
	<div class="Form3">
		<div class="card card-Form3">
			<img src="./images/Form1/logo.png" class="logo-image">
			<form action="{{ route('Form4') }}" method="POST" enctype="multipart/form-data" id="Form3">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-6 offset-3 d-flex Form3-title">
						<div class="label">
							06.
						</div>
						<div class="title">
							Завантажте горизонтальну фотографію дитячої кімнати малюка, або будь-яку іншу у Вашому домі, в якій дитина проводить багато часу
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex Form3-filegroup">
						<div class="drag-drop drag-drop-Form3">
							<input type="file" multiple name="Family_Photo" id="Family_Photo" required>
							<p id="Family_Photo_Name">Завантажити фото</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex Form3-title">
						<div class="label">
							07.
						</div>
						<div class="title">
							Завантажте горизонтальну фотографію дитячого листа для Св. Миколая
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex Form3-filegroup">
						<div class="drag-drop drag-drop-Form3">
							<input type="file" multiple name="Room_Photo" id="Room_Photo" required>
							<p id="Room_Photo_Name">Завантажити фото</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex Form3-title">
						<div class="label">
							08.
						</div>
						<div class="title">
							Завантажте горизонтальну фотографію близьких / сім’ї малюка
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex Form3-filegroup">
						<div class="drag-drop drag-drop-Form3">
							<input type="file" multiple name="Letter_Photo" id="Letter_Photo" required>
							<p id="Letter_Photo_Name">Завантажити фото</p>
						</div>
					</div>
				</div>
				<div class="row">
					<a href="/Form4" class="Form3-Next"><button class="Form2-button">Далі</button></a>
				</div>
			</form>
			
		</div>
@endsection



