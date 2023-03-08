@extends('layouts.app')
@section('content')
<div class="contriner">
	<div class="row text-center">
		<div class="col-12 p-2">
			<img src=" {{asset('storage/img/smknekat-logo.png') }}" alt="" width="70px">
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-8 border p-3">
			@livewire('search-student')
		</div>
	</div>
</div>
@endsection