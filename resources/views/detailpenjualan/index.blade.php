@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Detail Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Detail Penjualan
		<div class="panel-title pull-right"><a href="{{ route('detailpenjualan.create') }}">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Judul</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total Harga</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($detailpenjualan as $data)
					<tr>
						<td>{{$data->buku->judul}}</td>
						<td>Rp. {{$data->buku->harga}}</td>
						<td>{{$data->jumlah}}</td>
						<td>Rp. {{$data->total_harga}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('detailpenjualan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('detailpenjualan.destroy', $data->id)}}" method="POST">
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