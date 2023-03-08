@extends('admin.layouts.app')
@section('content')
<div class="container">
<h4>Siswa</h4>
<form action="{{route('admin.student.update', $data->nisn)}}" method="post">
	@if ($errors->any())
	<div class="row">
		<div class="col">
			<div class="alert alert-danger">
				<ul>
	            @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</div>
	</div>
	@endif

	<div class="row">
		<div class="col-6">
			<div class="card mb-3">
				<div class="card-header">
					<h5>Profil Siswa</h5>
				</div>
				<div class="card-body">
					@csrf
					@method('PUT')
					<label for="nisn">NISN</label>
					<div class="input-group mb-3">
						<input class="form-control" type="text" name="nisn" id="nisn" placeholder="masukan nisn" autofocus required value="{{$data->nisn}}">
					</div>
					<hr>
					<label for="nis">NIS</label>
					<div class="input-group mb-3">
						<input class="form-control" type="text" name="nis" id="nis" placeholder="masukan nis" required value="{{$data->nis}}">
					</div>
					<hr>
					<label for="name">Nama Siswa</label>
					<div class="input-group mb-3">
						<input class="form-control " type="text" name="name" id="name" placeholder="masukan nama siswa" required value="{{$data->name}}">
					</div>
					<hr>
					<label for="class">Kelas & Jurusan</label>
					<div class="input-group mb-3">
						<select class="select form-control" id="class" name="class" required >
							<option value="">Pilih Kelas & Jurusan</option>
							@foreach($classes as $row)
							<option value="{{$row->id_class}}" {{$row->id_class = $data->id_class ? 'selected' : ''}}>
								{{$row->class_name.' '.$row->competency}}
							</option>
							@endforeach
						</select>
					</div>
					<hr>
					<label class="" for="address">Alamat</label>
					<div class="input-group mb-3">
					  <textarea class="form-control" name="address" id="address" rows="4" placeholder="masukan alamat siswa">{{$data->address}}</textarea>
					</div>
					<hr>
					<label for="phone">Telepon</label>
					<div class="input-group mb-3">
						<input class="form-control" type="text" name="phone" id="phone" placeholder="masukan nomor telepon siswa" value="{{$data->phone_number}}">
					</div>
					<hr>
					<label for="spp">Tahun Ajaran (SPP)</label>
					<div class="input-group">
						<select class="select form-control" name="spp" required value="{{$data->is_spp}}">
							<option value="">Pilih Tahun SPP</option>
							@foreach($spps as $row)
							<option value="{{$row->id_spp}}" {{$row->id_spp = $data->id_spp ? 'selected' : ''}}>
								{{$row->year}}
							</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6">
			<div class="card mb-4">
				<div class="card-header">
					<h5>Akun Siswa<h5>
				</div>
				<div class="card-body">
					<div class="row">
						<label for="email">Email</label>
						<div class="input-group">
							<span class="input-group-text" id="basic-addon1">@</span>
							<input class="form-control" type="text" name="email" id="email" placeholder="masukan email" required value="{{$data->email}}">
						</div>
		            </div>
					<hr>
					<div class="row">
						<label for="username">Username (NIS)</label>
		              	<div class="input-group">
							<input class="form-control" type="text" name="username" id="username" placeholder="masukan username" required value="{{$data->username}}">
						</div>
		            </div>
		            <hr>
		            <div class="row">
						<label for="password">Kata Sandi (NISN)</label>
		              	<div class="input-group">
							<input class="form-control" type="password" name="password" id="password" placeholder="masukan kata sandi" required value="userpassword" disabled>
							<input class="form-control" type="text" name="id_account" id="id_account" placeholder="" required value="{{$data->user_id}}" hidden>
						</div>
		            </div>
		        	<hr>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<button class="btn btn-info" type="submit">Simpan</button>
					<a href="{{route('admin.student.index')}}" class="btn btn-secondary	" type="submit">kembali</a>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
@endsection