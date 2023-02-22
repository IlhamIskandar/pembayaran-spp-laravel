@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Siswa</h4>
	<div class="card">
		<div class="card-body">
			<form action="{{route('admin.student.store')}}" method="post">
				@csrf	
				<div>
					<label for="nisn">NISN</label>
					<input class="form-control mb-3" type="text" name="nisn" id="nisn" placeholder="masukan nisn" autofocus required>
				</div>
				<div>
					<label for="nis">NIS</label>
					<input class="form-control mb-3" type="text" name="nis" id="nis" placeholder="nis" required>
				</div>
				<div>
					<label for="studentname">Nama Siswa</label>
					<input class="form-control mb-3" type="text" name="studentname" id="studentname" placeholder="nama siswa" required>
				</div>
				<div>
					<label for="password">Kata Sandi</label>
					<input class="form-control mb-3" type="text" name="password" id="password" placeholder="Kata Sandi" required>
				</div>
				<div>
					<label for="classname">Kelas</label>
					<select class="select form-control mb-3" id="classname" name="classname">
						@foreach($classes as $row)
						<option value="{{$row->id_class}}">
							{{$row->class_name}}
						</option>
						@endforeach
					</select>
				</div>
				<div>
					<label for="phone">Telepon</label>
					<input class="form-control mb-3" type="text" name="phone" id="phone" placeholder="Nomor Telepon">
				</div>
				<div>
					<label for="spp">Tahun Ajaran (SPP)</label>
					<select class="select form-control mb-3">
						@foreach($spps as $row)
						<option value="{{$row->id_spp}}">
							{{$row->year}}
						</option>
						@endforeach
					</select>
				</div>
				<button class="btn btn-info" type="submit">Simpan</button>
				<a href="{{route('admin.student.index')}}" class="btn btn-secondary	" type="submit">kembali</a>
			</form>
		</div>
	</div>
</div>
@endsection