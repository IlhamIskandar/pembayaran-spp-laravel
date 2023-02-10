@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Siswa</h4>
	<div class="row">
		<div class="col">
			<div class="card">
				@if(session('success'))
				<div class="alert alert-success">
				{{ session('success')}}
				</div>
				@endif
				<div class="card-body">
					<a href="{{route('admin.class.create')}}" class="btn btn-success">tambah</a>
					<table class="table">
						<thead>
							<tr>
								<th>NISN</th>
								<th>NIS</th>	
								<th>Aksi</th>		
							</tr>
						</thead>
						<tbody>
							@foreach($data as $row)
							<tr>
								<td>{{$row->nisn}}</td>
								<td>{{$row->nis}}</td>
								<td>{{$row->name}}</td>
								<td>{{$row->phone_number}}</td>
								<td>{{$row->nis}}</td>

								<td>
									<form action="{{route('admin.student.destroy', $row->id_class)}}" method="post">
										@csrf
										@method('DELETE')
										<a href="{{route('admin.student.edit', $row->id_class)}}" class="btn btn-info btn-sm" data-mdb-toggle="tooltip" title="Ubah Data" data-placement="top">Ubah</a>
										<button class="btn btn-danger btn-sm" data-mdb-toggle="tooltip" title="Hapus Data" data-placement="top" onclick="return confirm('Hapus Data?');">Hapus
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