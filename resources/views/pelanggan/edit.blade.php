@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Pelanggan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Pelanggan
		<div class="panel-title pull-right">
		<a href="{{URL::previous() }}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('pelanggan.update', $pelanggan->id)}}" method="POST">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="control-lable">Nama</label>
					<input type="text" name="a" value="{{$pelanggan->nama}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-lable">Email</label>
					<input type="text" name="b" value="{{$pelanggan->email}}" class="form-control" required="">
				</div>
				<div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" rows="10" name="c" required="">{{$pelanggan->alamat}}</textarea>
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