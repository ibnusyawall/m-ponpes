@extends('layouts.master')
@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"> Iuran Terbayar </h4>
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
								Nominal
							</th>
							<th>
								Bulan
							</th>
							<th>
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($dataI as $index=>$ds)
						<tr>
							<td>
								{{ $index+1 }}
							</td>
							<td>
								{{ $ds->nama }}
							</td>
							<td>
								Rp 25.000
							</td>
							<td>
								{{ date('d M Y', strtotime($ds->created_at)) }}
							</td>
							<td>
								{{ $ds->status }}
							</td>
						</tr>
						@endforeach
					</tbody>
					<form action="{{ url('iuran/hapus') }}" method="post">
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
		<div class="card-header" id="tambah">
			<h5 class="title"> Input Iuran Syariah </h5>
		</div>
		<div class="card-body">
			<form action="{{ url('iuran/_') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-5 pr-1">
						<div class="form-group">
							<label>Nama Santri</label>
							<select name="nama" class="form-control">
								@foreach($dataS as $ds)
								<option value="{{ $ds->nama }}">{{ $ds->nama }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-3 px-1">
						<div class="form-group">
							<label>Jumlah</label>
							<input name="jumlah" type="number" class="form-control" placeholder="jumlah iuran" value="250000" disabled="">
						</div>
					</div>
					<div class="col-md-4 pl-1">
						<div class="form-group">
							<label for="exampleInputEmail1">Status</label>
							<select name="status" class="form-control">
								<option value="lunas">Lunas</option>
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