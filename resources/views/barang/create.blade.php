@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Buku
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('barang.store')}}" method = "post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Kategori Buku</label>
					<select class="form-control" name="jenis">
					@foreach($jenis as $b)
					<option value="{{$b->id}}">{{$b->jenis_barang}}</option>
					@endforeach
					</select>
				</div>	
		
				<div class="form-group">
					<label class="control-lable">Judul</label>
					<input type="text" name="a" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Stok</label>
					<input type="text" name="b" class="form-control" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Harga</label>
					<input type="text" name="c" class="form-control" required="">
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