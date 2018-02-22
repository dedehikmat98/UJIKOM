@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">	
    <div class="panel-heading">
      Tambah Buku

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

		<div class="panel-body">
			<form action="{{route('buku.store')}}" method="POST" files="true" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Kategori</label>
					<select class="form-control" name="kategori">
						@foreach($kategori as $data)
						<option value="{{$data->id}}">{{$data->kategori}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Judul</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Penulis</label>
					<input type="text" name="b" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="file" name="cover"  required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Stok</label>
					<input type="text" name="c" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Harga</label>
					<input type="text" name="d" class="form-control" required="">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
					<div class="btn-flat btn btn-primary" > <a href="{{URL::previous()}}"><font color="white"> Kembali</font></a></div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
</div>
@endsection