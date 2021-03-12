<x-layout>
	{{-- Title --}}
	<x-slot name="title">Login</x-slot>
	
	<x-slot name="style">
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
		<link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
	</x-slot>

	<div class="container">
		<div class="col-md-6 mx-auto mt-5 login-box">
			<div class="card shadow">
				<div class="card-header">
					<h1>Login First</h1>
				</div>
				<div class="card-body pt-4">
					<form action="{{ url('/login') }}" method="POST">

						@if($errors->any())
							<div class="alert alert-danger">
								<strong>Invalid Input</strong>
								<ul>
									@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

						@csrf

						<div class="form-group mt-4">
							<div class="input-group">
								<input type="email" name="email" placeholder="E-mail" class="form-control" aria-describedby="basic-addon-email" required value="{{ old('email') }}">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon-email">
										<span class="fa fa-user"></span>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group mb-5">
							<div class="input-group">
								<input type="password" name="password" placeholder="Password" class="form-control" aria-describedby="basic-addon-email" required>
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon-email">
										<span class="fa fa-lock"></span>
									</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-light submit">Submit</button>
						</div>

						<div class="form-group">
							<div class="">
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

</x-layout>