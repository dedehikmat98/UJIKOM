@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Detail Penjualan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Detail Penjualan
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('detailpenjualan.update', $detailpenjualan->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<select class="form-control" name="id_buku">
						@foreach($buku as $data)
						<option value="{{$data->id}}">{{$data->judul}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-lable">Jumlah</label>
					<input type="number" name="c" value="{{$detailpenjualan->jumlah}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
@endsection