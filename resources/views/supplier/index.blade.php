@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">
		<div class="btn-flat btn btn-primary" > <a href="/admin/supplier/create"><font color="white"> Tambah Data</font></a></div>

    <div class="panel-heading">
     Supplier

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
						<th>Nama</th>
						<th>Alamat</th>
						<th>No Telepon</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($supplier as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->no_telp}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('supplier.edit', $data->id)}}">Edit</a>
						</td>
						<td>
							<form action="{{route('supplier.destroy', $data->id)}}" method="POST">
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