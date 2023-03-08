@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Staff</h4>
	<div class="row">
		<div class="col-6">
	<div class="card">
		<div class="card-header">
			<h5>Ubah Akun Staff</h5>
		</div>
		<div class="card-body">
			<form action="{{route('admin.staff.update', $data->user_id)}}" method="post">
				@csrf
				@method('PUT')
				<label for="name">Nama Staff</label>
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="name" id="name" placeholder="masukan nama staff" autofocus required value="{{$data->name}}">
				</div>
				<hr>
				<label for="email">Email Staff</label>
				<div class="input-group mb-3">
					<span class="input-group-text" id="basic-addon1">@</span>
					<input class="form-control" type="text" name="email" id="email" placeholder="masukan email staff" required value="{{$data->email}}">
				</div>
				<hr>
				<label for="username">Username Staff</label>
				<div class="input-group mb-3">
					<input class="form-control" type="text" name="username" id="username" placeholder="masukan username akun" autofocus required value="{{$data->username}}">
				</div>
				<hr>
				<label for="password">Password Akun Staff</label>
				<div class="input-group mb-3">
					<input class="form-control" type="password" name="password" id="password" placeholder="masukan password akun" autofocus required value="accountpassword" disabled>
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