@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>SPP</h4>
	<div class="card">
		@if(session('success'))
		<div class="alert alert-success">
		{{ session('success')}}
		</div>
		@endif
		<div class="card-body">
			<form action="{{route('admin.spp.store')}}" method="post">
				@csrf
				<label for="name">Nama Staff</label>
				<div class="input-group">
					<input class="form-control mb-4" type="text" name="name" id="name" placeholder="masukan nama staff" autofocus>
				</div>
				<label for="email">Email Staff</label>
				<div class="input-group border-bottom">
					<span class="input-group-text" id="basic-addon1">@</span>
					<input class="form-control mb-4" type="text" name="email" id="email" placeholder="masukan email staff">
				</div>
				<label for="username">Username Staff</label>
				<div class="input-group">
					<input class="form-control mb-4" type="text" name="username" id="username" placeholder="masukan username akun staff" autofocus>
				</div>
				<label for="password">Password Akun Staff</label>
				<div class="input-group">
					<input class="form-control mb-4" type="password" name="password" id="password" placeholder="masukan password akun staff" autofocus>
				</div>
				<div>
					<button class="btn btn-info" type="submit">Simpan</button>
					<a class="btn btn-secondary" href="{{route('admin.spp.index')}}">kembali</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection