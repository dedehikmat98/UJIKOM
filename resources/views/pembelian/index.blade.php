@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	
	<div class="panel panel-default">
		<div class="btn-flat btn btn-primary" > <a href="/admin/pembelian/create"><font color="white"> Tambah Data</font></a></div>

    <div class="panel-heading">
     Transaksi Pembelian

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
            			<th>Kode Pembelian</th>
						<th>Supplier</th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total Harga</th>
						<th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pembelian as $data)
					<tr>
						<td>{{$data->id}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->judul}}</td>
						<td>{{$data->tanggal}}</td>
						<td>{{$data->harga}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->total_harga}}</td>
						<td><a class="btn btn-warning" href="/admin/pembelian/{{$data->id}}/edit">Edit</a></td>
							<td><form action="{{route('pembelian.destroy',$data->id)}}" method="post">
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



