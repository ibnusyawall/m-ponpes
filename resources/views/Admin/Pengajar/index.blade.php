@extends('layouts.master')
@section('content')
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h4 class="card-title"> Pengajar </h4>
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
								{{ $ds->status }}
							</td>
						</tr>
						@endforeach
						
					</tbody>
					<form action="{{ url('pengajar/hapus') }}" method="post">
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
			<h5 class="title">Tambah Pengajar</h5>
			<p class="category"> Ponpes Khoerul Huda <a href="#">@isywL_</a></p>
		</div>
		<div class="card-body all-icons">
			<form action="{{ url('pengajar/tambah') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-md-6 pr-1">
						<div class="form-group">
							<label>Nama Pengajar</label>
							<input name="nama" type="text" class="form-control" placeholder="Nama pengajar">
						</div>
					</div>

					<div class="col-md-6 pl-1">
						<div class="form-group">
							<label>Status Sebagai</label>
							<select name="status" class="form-control">
								
								<option value="diniyah">dinniyah</option>
								<option value="pengurus">pengurus</option>
								
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