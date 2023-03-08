@extends('admin.layouts.app')
@section('content')
<div class="container">
<h4>Siswa</h4>
<form action="{{route('admin.student.store')}}" method="post">
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
					<label for="nisn">NISN</label>
					<div class="input-group mb-3">
						<input class="form-control" type="text" name="nisn" id="nisn" placeholder="masukan nisn" autofocus required value="{{old('nisn')}}">
					</div>
					<hr>
					<label for="nis">NIS</label>
					<div class="input-group mb-3">
						<input class="form-control" type="text" name="nis" id="nis" placeholder="masukan nis" required value="{{old('nis')}}">
					</div>
					<hr>
					<label for="name">Nama Siswa</label>
					<div class="input-group mb-3">
						<input class="form-control " type="text" name="name" id="name" placeholder="masukan nama siswa" required value="{{old('name')}}">
					</div>
					<hr>
					<label for="class">Kelas & Jurusan</label>
					<div class="input-group mb-3">
						<select class="select form-control" id="class" name="class" required value="{{old('class')}}">
							<option value="">Pilih Kelas & Jurusan</option>
							@foreach($classes as $row)
							<option value="{{$row->class_id}}" {{$row->class_id = old('class') ? 'selected' : ''}}>
								{{$row->class_name.' '.$row->competency}}
							</option>
							@endforeach
						</select>
					</div>
					<hr>
					 <label class="" for="address">Alamat</label>
					<div class="input-group mb-3">
					  <textarea class="form-control" name="address" id="address" rows="4" placeholder="masukan alamat siswa">{{old('address')}}</textarea>
					</div>
					<hr>
					<label for="phone">Telepon</label>
					<div class="input-group mb-3">
						<input class="form-control" type="text" name="phone" id="phone" placeholder="masukan nomor telepon siswa" value="{{old('phone')}}">
					</div>
					<hr>
					<div class="">
						<label for="spp">Tahun Ajaran (SPP)</label>
						<select class="select form-control" name="spp" required value="{{old('spp')}}">
							<option value="">Pilih Tahun SPP</option>
							@foreach($spps as $row)
							<option value="{{$row->id_spp}}" {{$row->id_spp = old('spp') ? 'selected' : ''}}>
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
							<input class="form-control @error('email') is-invalid mb-3 @enderror" type="text" name="email" id="email" placeholder="masukan email" required value="{{old('email')}}">
							@error('email')
					            <span class="invalid-feedback" role="alert">
					                <strong>{{ $message }}</strong>
					            </span>
					        @enderror
						</div>
		            </div>
		            <hr>
					<div class="row">
						<label for="username">Username (NIS)</label>
		              	<div class="input-group">
							<input class="form-control" type="text" name="username" id="username" placeholder="masukan username" required value="{{old('username')}}">
						</div>
		            </div>
		            <hr>
		            <div class="row">
						<label for="password">Kata Sandi (NISN)</label>
		              	<div class="input-group">
							<input class="form-control @error('password') is-invalid mb-3 @enderror" type="password" name="password" id="password" placeholder="masukan kata sandi" required>
						@error('password')
				            <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				            </span>
				        @enderror
						</div>
		            </div>
		        	<hr>
		        	<div class="row">
						<label for="password">Konfirmasi Kata Sandi</label>
		              	<div class="input-group">
							<input class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" id="password_confirmation" placeholder="konfirmasi kata sandi" required>
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