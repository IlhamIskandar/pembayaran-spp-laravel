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
				<div>
					<label for="year">Tahun</label>
					<input class="form-control mb-4" type="text" name="year" id="year" placeholder="20XX" autofocus value="{{$data->year}}">
				</div>
				<div>
					<label for="nominal">Nominal</label>
					<input class="form-control mb-4" type="text" name="nominal" id="nominal" placeholder="Rp." value="{{$data->nominal}}">
				</div>
				<button class="btn btn-info" type="submit">Simpan</button>
			</form>
		</div>
	</div>
</div>
@endsection