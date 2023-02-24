@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Kelas</h4>
	<div class="row">
		<div class="col">
			<div class="card">
				@if(session('success'))
				<div class="alert alert-success">
				{{ session('success')}}
				</div>
				@endif
				<div class="card-body">
					<a href="{{route('admin.class.create')}}" class="btn btn-success btn-sm"><i class="fas fa-plus fa-fw me-3"></i>tambah</a>
					<table class="table">
						<thead>
							<tr>
								<th>Nama Kelas</th>
								<th>Jurusan</th>	
								<th>Aksi</th>		
							</tr>
						</thead>
						<tbody>
							@foreach($data as $row)
							<tr>
								<td>{{$row->class_name}}</td>
								<td>{{$row->competency}}</td>
								<td>
									<form action="{{route('admin.class.destroy', $row->id_class)}}" method="post">
										@csrf
										@method('DELETE')
										<a href="{{route('admin.class.edit', $row->id_class)}}" class="btn btn-warning btn-sm" data-mdb-toggle="tooltip" title="Ubah Data" data-placement="top"><i class="fas fa-pencil fa-fw"></i></a>
										<button class="btn btn-danger btn-sm" data-mdb-toggle="tooltip" title="Hapus Data" data-placement="top" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-can fa-fw"></i>
                                                </button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection