@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right"><a href="/admin/barang/create">Tambah Data</a></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Kategori Buku</th>
						<th>Judul</th>
						<th>Stok</th>
						<th>Harga</th>
						
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($barang as $data)
					<tr>
						<td>{{$data->jenis_barang}}</td>
						<td>{{$data->merk}}</td>
						<td>{{$data->stok}}</td>
						<td>{{$data->harga}}</td>
						<td><a class="btn btn-warning" href="/admin/barang/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('barang.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
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