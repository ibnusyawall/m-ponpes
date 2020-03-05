@extends('layouts.master')
@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"> Daftar Santri </h4>
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
								Asal
							</th>
							<th>
								Umur
							</th>
							<th class="text-center">
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $index=>$ds)
						<tr>
							<td>
								{{ $index+1 }}
							</td>
							<td>
								{{ $ds->nama }}
							</td>
							<td>
								{{ $ds->asal }}
							</td>
							<td>
								{{ $ds->umur  }}
							</td>
							<td class="text-center">
								{{ $ds->status }}
							</td>
						</tr>
						@endforeach
						
					</tbody>
					<form action="{{ url('santri/hapus') }}" method="post">
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
			<h5 class="title"> Tambah Santri </h5>
		</div>
		<div class="card-body">
			<form action="{{ url('santri/tambah') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-5 pr-1">
						<div class="form-group">
							<label>Nama Santri</label>
							<input name="nama" type="text" class="form-control" placeholder="Nama Santri">
						</div>
					</div>
					<div class="col-md-3 px-1">
						<div class="form-group">
							<label>Umur</label>
							<input name="umur" type="number" class="form-control" placeholder="Umur" value="michael23">
						</div>
					</div>
					<div class="col-md-4 pl-1">
						<div class="form-group">
							<label for="exampleInputEmail1">Status</label>
							<select name="status" class="form-control">
								<option value="aktif">Aktif</option>
								<option value="pasif">Pasif</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Alamat</label>
							<input name="alamat" type="text" class="form-control" placeholder="Alamat Santri">
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