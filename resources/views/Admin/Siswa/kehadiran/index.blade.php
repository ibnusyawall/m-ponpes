@extends('layouts.master')
@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"> Ketidak-hadiran Santri </h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table">
					<thead class=" text-primary">
						<tr>
							<th>
								No
							</th>
							<th>
								Nama
							</th>
							<th>
								Keterangan
							</th>
							<th class="text-center">
								Tanggal
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($dataTgl as $index=>$ds)
						<tr>
							<td>
								{{ $index+1 }}
							</td>
							<td>
								{{ $ds->nama }}
							</td>
							<td>
								{{ $ds->keterangan }}
							</td>
							<td class="text-center">
								{{ date('d M Y ', strtotime($ds->created_at)) }}
							</td>
						</tr>
						@endforeach
						
					</tbody>
					<form action="{{ url('santri/kehadiran/hapus') }}" method="post">
						{{ csrf_field() }}
						{{ method_field('delete') }}
						<input type='submit' class="btn btn-outline-info" value="Reset">
					</form>
					<input type='submit' class="btn btn-outline-warning" value="Kembali" href="santri">
				</table>
			</div>
		</div>
	</div>
</div>            




<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h5 class="title">Ketidak-hadiran</h5>
			<p class="category"> Ponpes Khoerul Huda <a href="#">@isywL_</a></p>
		</div>
		<div class="card-body all-icons">
			<form action="{{ url('santri/kehadiran/_') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6 pr-1">
						<div class="form-group">
							<label>Nama</label>
							<select name="nama" class="form-control">
								@foreach($dataS as $d)
								<option value="{{$d->nama}}">{{ $d->nama }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="col-md-6 pl-1">
						<div class="form-group">
							<label>Keterangan</label>
							<select name="keterangan" class="form-control">
								<option value="alfa">Alfa</option>
								<option value="izin">Izin</option>
								<option value="sakit">Sakit</option>
							</select>
						</div>
					</div>

				</div>
				<input type='submit' class="btn btn-outline-info" value="Tambah">
				<input type='submit' class="btn btn-outline-warning" value="Kembali" href="santri">
			</form>
		</div>
	</div>
</div>

@endsection