@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Staff</h4>
	@if ($errors->any())
	<div class="row">
		<div class="col">
			<div class="alert alert-danger">
				<ul>
	            @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</div>
	</div>
	@endif
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-header">
					<h5>Akun Staff</h5>
				</div>
				<div class="card-body">
					<form action="{{route('admin.staff.store')}}" method="post">
						@csrf
						<label for="name">Nama Staff</label>
						<div class="input-group mb-3">
							<input class="form-control" type="text" name="name" id="name" placeholder="masukan nama staff" autofocus required value="{{old('name')}}">
						</div>
						<hr>
						<label for="email">Email Staff</label>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">@</span>
							<input class="form-control @error('email') is-invalid mb-3 @enderror" type="text" name="email" id="email" placeholder="masukan email staff" required value="{{old('email')}}">
							@error('email')
					            <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					            </span>
					        @enderror
						</div>
						<hr>
						<label for="username">Username Staff</label>
						<div class="input-group mb-3">
							<input class="form-control" type="text" name="username" id="username" placeholder="masukan username akun " autofocus required value="{{old('username')}}">
						</div>
						<hr>
						<label for="password">Password Akun Staff</label>
						<div class="input-group mb-3">
							<input class="form-control @error('password') is-invalid mb-3 @enderror" type="password" name="password" id="password" placeholder="masukan password akun " autofocus required>
							@error('password')
					            <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					            </span>
					        @enderror
						</div>
						<hr>
						<label for="password">Konfirmasi Password Akun Staff</label>
						<div class="input-group mb-3">
							<input class="form-control @error('password') is-invalid @enderror" type="password" name="password-confirm" id="password-confirmation-+-" placeholder="konfirmasi password akun" autofocus required>
						</div>
						<hr>
						<div>
							<button class="btn btn-info" type="submit">Simpan</button>
							<a class="btn btn-secondary" href="{{route('admin.staff.index')}}">kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection