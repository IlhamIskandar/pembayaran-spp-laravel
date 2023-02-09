@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row bg-info text-white align-items-center justify-content-center" style="height:300px;">
		<div class="col-3 text-center">
			<img src="storage/img/smknekat-logo.png" alt="" width="200px">
		</div>
		<div class="col-4 fs-3">
			Permudah pembayaran SPP dan, cek riwayat pembayarannya di website SPP Nekat
		</div>
		
	</div>
	<div class="row">
		<div class="col-5 mx-auto">
			@if(session()->has('loginfailed'))
			<div class="alert alert-danger">
				{{message('loginfailed')}}
			</div>
			@endif
			<form class=" border border-light p-5" action="{{route('auth.login')}}" method="POST">
				@csrf
			    <h4 class="mb-4 text-center">Masuk</h4>

			    <!-- Username -->
			    <label class="text-start" for="username" >Nama Pengguna</label>
			    <input type="text" class="form-control mb-4" placeholder="Nama Pengguna" name="username" required id="username" autofocus value="{{old('username')}}">
			    {{-- <div class="invalid-feedback">
			    	@error('username') 
			    	{{$message}}
			    	@enderror
			    </div> --}}

			    <label class="text-start" for="password">Kata Sandi</label>
			    <input type="password" class="form-control mb-4" placeholder="Kata Sandi" name="password" id="password" required>

			    <button class="btn btn-info btn-block my-4" type="submit">Masuk</button>

			</form>
		</div>
	</div>
	
</div>
@endsection