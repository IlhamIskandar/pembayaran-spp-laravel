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
			@guest
		    
			@if(session()->has('loginfailed'))
			<div class="alert alert-danger">
				{{message('loginfailed')}}
			</div>
			@endif
			<form class="p-5" action="{{route('login')}}" method="POST">
				@csrf
			    <h4 class="mb-4 text-center">Masuk</h4>

			    <div class="row mb-3">
			    	<div class="col">
				    <label class="text-start" for="email" >Nama Pengguna</label>
				    <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Nama Pengguna" name="email" required id="email" autofocus value="{{old('email')}}">
				    @error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
		            @enderror	
			    		
			    	</div>
			    </div>
			    <div class="row mb-3">
			    	<div class="col">
				    <label class="text-start" for="password">Kata Sandi</label>
				    <input type="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Kata Sandi" name="password" id="password" required>	
			    	</div>
			    	@error('password')
				        <span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
		                </span>
					@enderror
			    </div>
			    <div class="row">
			    	<div class="col">
					    <button class="btn btn-info btn-block" type="submit">Masuk</button>
			    	</div>
			    </div>
			</form>
			@else
			sudah login
			@endguest
		</div>
	</div>
	
</div>
@endsection