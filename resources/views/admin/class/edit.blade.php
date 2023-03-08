@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Kelas</h4>
	<div class="card">
		<div class="card-body">
			<form action="{{route('admin.class.update', $data->class_id)}}" method="post">
				@csrf
				@method('PUT')
				<div>
					<label for="classname">Nama Kelas</label>
					<input class="form-control mb-4" type="text" name="classname" id="classname" placeholder="20XX" autofocus value="{{$data->class_name}}">
				</div>
				<div>
					<label for="competency">Jurusan</label>
					<input class="form-control mb-4" type="text" name="competency" id="competency" placeholder="Rp." value="{{$data->competency}}">
				</div>
				<button class="btn btn-info" type="submit">Simpan</button>
			</form>
		</div>
	</div>
</div>
@endsection