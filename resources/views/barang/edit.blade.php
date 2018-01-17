@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('barang.update',$barang->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Judul</label>
					<input type="text" name="a" class="form-control" value="{{$barang->merk}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Stok</label>
					<input type="text" name="b" class="form-control" value="{{$barang->stok}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Harga</label>
					<input type="text" name="c" class="form-control" value="{{$barang->harga}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Kategori</label>
					<select class="form-control" name="jenis">
					@foreach($jenis as $b)
					<option value="{{$b->id}}">{{$b->jenis_barang}}</option>
					@endforeach
					</select>
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
@endsection