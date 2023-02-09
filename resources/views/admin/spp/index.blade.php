@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>SPP</h4>
	<div class="row">
		<div class="col">
			<div class="card">
				{{-- <div class="card-header"> --}}
				{{-- </div> --}}
				<div class="card-body">
					<a href="{{route('admin.spp.create')}}" class="btn btn-success">tambah</a>
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
								<td>{{$row->nominal}}</td>
								<td>
									<form action="{{route('admin.spp.destroy', $row->id_spp)}}" method="post">
										@csrf
										@method('DELETE')
										<a href="{{route('admin.spp.edit', $row->id_spp)}}" class="btn btn-info btn-sm" data-mdb-toggle="tooltip" title="Ubah Data" data-placement="top">Ubah</a>
										<button class="btn btn-danger btn-sm" data-mdb-toggle="tooltip" title="Hapus Data" data-placement="top" onclick="return confirm('Hapus Data SPP?');">Hapus
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