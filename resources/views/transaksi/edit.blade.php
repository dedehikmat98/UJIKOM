@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Transaksi
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('transaksi.update',$transaksi->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Kode Transaksi</label>
					<input type="text" name="a" class="form-control" value="{{$transaksi->kode_transaksi}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Judul</label>
					<select class="form-control" name="merk">
					@foreach($barang as $b)
					<option value="{{$b->id}}">{{$b->merk}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Tanggal</label>
					<input type="date" name="b" class="form-control" value="{{$transaksi->tanggal}}" required="">
				</div>

				<div class="form-group">
					<label class="control-lable">Harga</label>
					<select class="form-control" name="c">
					@foreach($barang as $b)
					<option value="{{$b->harga}}">{{$b->harga}}</option>
					@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="text" name="d" class="form-control" value="{{$transaksi->jumlah}}" required="">
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