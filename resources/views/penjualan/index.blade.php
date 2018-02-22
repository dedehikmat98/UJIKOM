@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">
		<div class="btn-flat btn btn-primary" > <a href="/admin/penjualan/create"><font color="white"> Tambah Data</font></a></div>

    <div class="panel-heading">
     Transaksi Penjualan

    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
					<tr>
						<th>Kode Penjualan</th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total Harga</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($penjualan as $data)
					<tr>
						<td>{{$data->kode_transaksi}}</td>
						<td>{{$data->judul}}</td>
						<td>{{$data->tanggal}}</td>
						<td>{{$data->harga}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->total_harga}}</td>
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