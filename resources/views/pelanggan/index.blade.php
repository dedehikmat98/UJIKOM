@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Pelanggan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Pelanggan
		<div class="panel-title pull-right"><a href="{{ route('pelanggan.create') }}">Tambah Data</a></div>
		</div>

		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>No. Telp</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($pelanggan as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->no_telp}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('pelanggan.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('pelanggan.destroy', $data->id)}}" method="POST">
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