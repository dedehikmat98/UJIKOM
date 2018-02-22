@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">	
    <div class="panel-heading">
      Edit Buku

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
			<form action="{{route('buku.update', $buku->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Kategori</label>
					<select class="form-control" name="kategori">
					@foreach($kategori as $b)
					<option value="{{$b->id}}">{{$b->kategori}}</option>
					@endforeach
					</select>
				</div>	
				<div class="form-group">
					<label class="control-lable">Judul</label>
					<input type="text" name="a" value="{{$buku->judul}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Penulis</label>
					<input type="text" name="b" value="{{$buku->penulis}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Cover</label>
					<input type="file" name="cover" value="{{$buku->cover}}" class="form-control" required="">
					
				</div>
				<div class="form-group">
					<label class="control-lable">Stok</label>
					<input type="number" name="c" value="{{$buku->stok}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Harga</label>
					<input type="text" name="d" value="{{$buku->harga}}" class="form-control" required="">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
					<div class="btn-flat btn btn-primary" > <a href="{{URL::previous()}}"><font color="white"> Kembali</font></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection