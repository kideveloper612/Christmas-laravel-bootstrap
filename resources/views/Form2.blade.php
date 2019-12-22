@extends('layouts.Form_Main')

@section('content')
<body class="Form2-background d-block">
	<div class="Form2">
		<div class="card card-Form2">
			<img src="./images/Form1/logo.png" class="logo-image">
			<form action="{{ route('Form3') }}" method="POST" enctype="multipart/form-data" id="Form2">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-6 offset-3 d-flex select-group">
						<div class="label">
							01.
						</div>
						<select name="name" required>
							<optgroup>
								<option value="" disabled selected>Оберіть ім’я дитини</option>
								<option value="vladimir">vladimir</option>
								<option value="Anna">Anna</option>
								<option value="Roman">Roman</option>
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
							<select name="age" required>
								<optgroup>
									<option value="" disabled selected>Оберіть вік дитини</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="15">16</option>
								</optgroup>
							</select>
						</div>
					</div>
				</div>
				<a class="name_question">Немає імені?</a>
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
							<input type="file" multiple name="upload_photo" id="photo1" required>
							<p id="photo1-name">Завантажити фото</p>
						</div>
						<div class="drag-drop">
							<input type="file" multiple name="download_photo" id="photo2" required>
							<p id="photo2-name">Завантажити фото copy</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex select-group">
						<div class="label">
							04.
						</div>
						<select name="comment" required>
							<optgroup>
								<option value="" disabled selected>Оберіть з переліку індивідуальний коментар</option>
								<option value="comment 1">comment 1</option>
								<option value="comment 2">comment 2</option>
								<option value="comment 3">comment 3</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-6 offset-3 d-flex select-group">
						<div class="label">
							05.
						</div>
						<select name="advice" required>
							<optgroup>
								<option value="" disabled selected>Оберіть з переліку індивідуальну настанову</option>
								<option value="please advice 1">please advice 1</option>
								<option value="please advice 2">please advice 2</option>
								<option value="please advice 3">please advice 3</option>
								<option value="please advice 4">please advice 4</option>
						</select>
					</div>
				</div>
				<div class="row">
					<button type="submit" class="Form2-button">Далі</button>
				</div>
			</form>
			
		</div>
@endsection