@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">
		<div class="btn-flat btn btn-primary" > <a href="/admin/karyawan/create"><font color="white"> Tambah Data</font></a></div>

    <div class="panel-heading">
     Karyawan

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
						<th>Role</th>
						<th>Username</th>
						<th>Password</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($karyawan as $data)
					<tr>
						<td>{{$data->name}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->password}}</td>
						<td><a class="btn btn-warning" href="{{route('karyawan.edit', $data->id)}}">Edit</a></td>
							<td><form action="{{route('karyawan.destroy',$data->id)}}" method="post">
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