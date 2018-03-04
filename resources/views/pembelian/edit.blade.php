@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">	
    <div class="panel-heading">
      Edit Transaksi Pembelian

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
			<form action="{{route('pembelian.update',$pembelian->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Nama Supplier</label>
					<select class="form-control" name="a">
					@foreach($supplier as $a)
					<option value="{{$a->id}}">{{$a->nama}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Judul</label>
					<select class="form-control" name="b">
					@foreach($buku as $b)
					<option value="{{$b->id}}">{{$b->judul}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Tanggal</label>
					<input type="date" name="c" class="form-control" value="{{$pembelian->tanggal}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Harga</label>
					<select class="form-control" name="d">
					@foreach($buku as $b)
					<option value="{{$b->harga}}">{{$b->harga}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="text" name="e" class="form-control" value="{{$pembelian->jumlah}}" required="">
				</div>
	
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
					<div class="btn-flat btn btn-primary" > <a href="{{URL::previous()}}"><font color="white"> Kembali</font></a>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
@endsection