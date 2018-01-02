@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Penjualan
		<div class="panel-title pull-right"><a href="{{ route('penjualan.create') }}">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Pelanggan</th>
						<th>Judul</th>
						<th>Tanggal Jual</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($penjualan as $data)
					<tr>
						<td>{{$data->pelanggan->nama}}</td>
						<td>{{$data->buku->judul}}</td>
						<td>{{$data->tgl_jual}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('penjualan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('penjualan.destroy', $data->id)}}" method="POST">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" value="Delete" class="btn btn-danger">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
@endsection