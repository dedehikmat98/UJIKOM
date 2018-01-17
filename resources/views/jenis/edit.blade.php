@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Kategori Buku</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Kategori Buku
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div></div>

		<div class="panel-body">
			<form action="{{route('jenis.update',$jenis->id)}}" method = "post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Kategori Buku</label>
					<input type="text" name="a" class="form-control" value="{{$jenis->kategori}}" required="">
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