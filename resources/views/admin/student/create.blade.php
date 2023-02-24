@extends('admin.layouts.app')
@section('content')
<div class="container">
	<h4>Siswa</h4>
	<div class="card">
		<div class="card-body">
			<form action="{{route('admin.student.store')}}" method="post">
				@csrf	
				<div class="mb-3">
					<label for="nisn">NISN</label>
					<input class="form-control" type="text" name="nisn" id="nisn" placeholder="masukan nisn" autofocus required>
				</div>
				<div class="mb-3">
					<label for="nis">NIS</label>
					<input class="form-control" type="text" name="nis" id="nis" placeholder="masukan nis" required>
				</div>
				<div class="mb-3">
					<label for="name">Nama Siswa</label>
					<input class="form-control " type="text" name="name" id="name" placeholder="masukan nama siswa" required>
				</div>
				<div class="mb-3">
					<label for="class">Kelas</label>
					<select class="select form-control" id="class" name="class">
						@foreach($classes as $row)
						<option value="{{$row->id_class}}">
							{{$row->class_name.' '.$row->competency}}
						</option>
						@endforeach
					</select>
				</div>
				<div class="mb-3">
				  <label class="" for="address">Alamat</label>
				  <textarea class="form-control" name="address" id="address" rows="4" placeholder="alamat siswa"></textarea>
				</div>
				<div class="mb-3">
					<label for="phone">Telepon</label>
					<input class="form-control" type="text" name="phone" id="phone" placeholder="Nomor Telepon">
				</div>
				<div class="mb-3">
					<label for="spp">Tahun Ajaran (SPP)</label>
					<select class="select form-control" name="spp">
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