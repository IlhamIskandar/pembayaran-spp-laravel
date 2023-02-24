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
				<label for="year">Tahun</label>
				<div class="input-group">
					<input class="form-control mb-4" type="text" name="year" id="year" placeholder="20XX/20XX" autofocus>
				</div>
				<label for="nominal">Nominal</label>
				<div class="input-group">
					<span class="input-group-text" id="basic-addon1">Rp.</span>
					<input class="form-control mb-4" type="text" name="nominal" id="nominal" placeholder="jumlah nominal">
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