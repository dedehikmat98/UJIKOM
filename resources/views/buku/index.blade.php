@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right"><a href="{{ route('buku.create') }}">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Cover</th>
						<th>Stok</th>
						<th>Harga</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($buku as $data)
					<tr>
						<td>{{$data->judul}}</td>
						<td>{{$data->penulis}}</td>
						<td><img src="{{asset('/img/'.$data->cover)}}" width="90" height="120"></td>
						<td>{{$data->stok}}</td>
						<td>Rp. {{$data->harga}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('buku.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('buku.destroy', $data->id)}}" method="POST">
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