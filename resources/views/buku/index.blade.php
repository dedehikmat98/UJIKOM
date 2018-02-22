@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">
		<div class="btn-flat btn btn-primary" > <a href="/admin/buku/create"><font color="white"> Tambah Data</font></a></div>

    <div class="panel-heading">
     Buku

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
						<th>Kategori</th>
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
						<td>{{$data->kategori}}</td>
						<td>{{$data->judul}}</td>
						<td>{{$data->penulis}}</td>
						<td><img src="{{asset('/img/'.$data->cover)}}" width="90" height="120"></td>
						<td>{{$data->stok}}</td>
						<td>{{$data->harga}}</td>
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