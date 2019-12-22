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
					<form action="{{ 'Form2' }}" method="POST">
						{{ csrf_field() }}
						<input type="text" name="gender" class="d-none" value="female">
						<button type="submit">
							<div class="sub-card d-block">
							<a><img src="./images/Form1/girl-logo.png"/></a>
							<div class="subcard-text">
								Для дівчинки
							</div>
						</div>
						</button>
					</form>
				</div>
				<div class="col-6 male-card">
					<form action="{{ 'Form2' }}" method="POST">
						{{ csrf_field() }}
						<input type="text" name="gender" class="d-none" value="male">
						<button type="submit">
							<div class="sub-card d-block">
								<a href="/Form2"><img src="./images/Form1/boy-logo.png" class="boy-logo" /></a>
								<div class="subcard-text">
									Для хлопчика
								</div>
							</div>
						</button>
					</form>
				</div>
			</div>
		</div>
		<!-- Modal -->
		<div class="modal fade" id="email_modal" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Message Alert</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
				</div>
			</div>
			</div>
		</div>
		<?php if(isset($success)) { ?>
			<script> $('#email_modal').modal('show');</script>
		<?php } ?>
@endsection