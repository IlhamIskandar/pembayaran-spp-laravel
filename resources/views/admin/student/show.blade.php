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
					<h5>{{$data->name}}</h5>
				</div>
				<div class="card-body">
					<div>
						nisn : {{$data->nisn}}
					</div>
					<div>
						nis : {{$data->nis}}
					</div>
					<div>
						nama siswa : {{$data->name}}
					</div>
					<div>
						Kelas : {{$data->class_name}}
					</div>
					<div>
						Jurusan: {{$data->competency}}
					</div>
					<div>
						Address : {{$data->address}}
					</div>
					<div>
						Nomor Telepon: {{$data->phone_number}}
					</div>
				</div>
			</div>
		</div>
		<div class="col-5">
			<div class="card">
				<div class="card-header">
					<h5>Akun Siswa<h5>
				</div>
				<div class="card-body">
					<div>
						nisn : {{$data->nisn}}
					</div>
					<div>
						nis : {{$data->nis}}
					</div>
					<div>
						nama siswa : {{$data->name}}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection