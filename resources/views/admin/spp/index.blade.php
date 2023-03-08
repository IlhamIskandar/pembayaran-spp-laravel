@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>SPP</h4>
	<div class="row">
		<div class="col">
			<div class="card">
				@if(session('success'))
				<div class="alert alert-success">
				{{ session('success')}}
				</div>
				@endif
				@if(session('fail'))
				<div class="alert alert-danger">
				{{ session('fail')}}
				</div>
				@endif
				<div class="card-body">
					<a href="{{route('admin.spp.create')}}" class="btn btn-success btn-sm"><i class="fas fa-plus fa-fw me-3"></i>tambah</a>
					<table class="table">
						<thead>
							<tr>
								<th>Tahun</th>
								<th>Nominal</th>	
								<th>Aksi</th>		
							</tr>
						</thead>
						<tbody>
							@foreach($spp as $row)
							<tr>
								<td>{{$row->year}}</td>
								<td>Rp. {{$row->nominal}}</td>
								<td>
									<form action="{{route('admin.spp.destroy', $row->spp_id)}}" method="post">
										@csrf
										@method('DELETE')
										<a href="{{route('admin.spp.edit', $row->spp_id)}}" class="btn btn-warning btn-sm" data-mdb-toggle="tooltip" title="Ubah Data" data-placement="top"><i class="fas fa-pencil fa-fw"></i></a>
										<button class="btn btn-danger btn-sm" data-mdb-toggle="tooltip" title="Hapus Data" data-placement="top" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-can fa-fw"></i></button>
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