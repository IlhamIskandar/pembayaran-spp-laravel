@extends('admin.layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<h4>Siswa</h4>
	</div>
	<div class="row">
		<div class="col-7">
			<div class="card">
				<div class="card-header">
					<h5>Profil Siswa</h5>
				</div>
				<div class="card-body">
					<div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Nama Lengkap</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->name}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">NISN</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->nisn}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">NIS</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->nis}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Kelas</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->class_name}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Jurusan</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->competency}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Alamat</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->address}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Telepon</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->phone_number}}</p>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">SPP</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->year." (Rp.".$data->nominal.")"}}</p>
		              </div>
		            </div>
		            <hr>
				</div>
			</div>
		</div>
		<div class="col-5">	
			<div class="card mb-4">
				<div class="card-header">
					<h5>Akun Siswa<h5>
				</div>
				<div class="card-body">
					<div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Email</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->email}}</p>
		              </div>
		            </div>
		            <hr>
					<div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Username</p>
		              </div>
		              <div class="col-sm-9">
		                <p class="text-muted mb-0">{{$data->username}}</p>
		              </div>
		            </div>
		            <hr>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<h5>Aksi</h5>
				</div>
				<div class="card-body d-flex flex-column">
					<div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Kembali</p>
		              </div>
		              <div class="col-sm-9">
		                <a href="{{route('admin.student.index')}}" class="btn btn-secondary btn-sm" data-mdb-toggle="tooltip" title="Kembali" data-placement="top"><i class="fas fa-file fa-fw"></i></a>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		              <div class="col-sm-3">
		                <p class="mb-0">Ubah</p>
		              </div>
		              <div class="col-sm-9">
		                <a href="{{route('admin.student.edit', $data->nisn)}}" class="btn btn-warning btn-sm" data-mdb-toggle="tooltip" title="Ubah Data" data-placement="top"><i class="fas fa-pencil fa-fw"></i></a>
		              </div>
		            </div>
		            <hr>
		            <div class="row">
		            	<div class="col-sm-3">
		            		<p class="mb-0">Hapus</p>
		            	</div>
		            	<div class="col-sm-9">
			                <form action="{{route('admin.student.destroy', $data->nisn)}}" method="post">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger btn-sm" data-mdb-toggle="tooltip" title="Hapus Data" data-placement="top" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash-can fa-fw"></i>
							</button>
							</form>
						</div>
		            </div>
		            <hr>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection