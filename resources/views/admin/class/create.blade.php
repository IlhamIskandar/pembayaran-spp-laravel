@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Kelas</h4>
	<div class="card">
		<div class="card-body">
			<form action="{{route('admin.class.store')}}" method="post">
				@csrf
				<div>
					<label for="classname">Nama Kelas</label>
					<input class="form-control mb-4" type="text" name="classname" id="classname" placeholder="Nama Kelas" autofocus>
				</div>
				<div>
					<label for="competency">Jurusan</label>
					<input class="form-control mb-4" type="text" name="competency" id="competency" placeholder="Jurusan Keahlian">
				</div>
				<button class="btn btn-info" type="submit">Simpan</button>
				<a class="btn btn-secondary" href="{{route('admin.class.index')}}">kembali</a>
			</form>
		</div>
	</div>
</div>
@endsection